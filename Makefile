#!/bin/bash

DOCKER_BE = tcr-world-tour-php
DOCKER_DB = tcr-world-tour-mysql
RABBITMQ = codenip-ms-rabbitmq-service

UID = $(shell id -u)

help: ## Show this help message
	@echo 'usage: make [target]'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

run: ## Start the containers
	## docker network create docker-symfony-network || true
	U_ID=${UID} docker-compose up -d

stop: ## Stop the containers
	U_ID=${UID} docker-compose stop

build: ## Rebuilds all the containers
	U_ID=${UID} docker-compose build --no-cache

restart: ## Restart the containers
	$(MAKE) stop && $(MAKE) run && $(MAKE) cache-clear

prepare: ## Runs backend commands
	$(MAKE) composer-install

# Backend commands
composer-install: ## Installs composer dependencies
	U_ID=${UID} docker exec --user ${UID} -it ${DOCKER_BE} composer install --no-scripts --no-interaction --optimize-autoloader

be-logs: ## Tails the Symfony dev log
	U_ID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} tail -f var/log/dev.log
# End backend commands

ssh-be: ## ssh's into the be container
	U_ID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} bash

ssh-db: ## ssh's into the be container
	U_ID=${UID} docker exec -it --user ${UID} ${DOCKER_DB} bash

ssh-rabbit: ## bash into the container
	U_ID=${UID} docker exec -it --user ${UID} ${RABBITMQ} bash

code-style: ## Runs php-cs to fix code styling following Symfony rules
	U_ID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} php-cs-fixer fix src --rules=@Symfony

cache-clear: ## Clear php cache
	U_ID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} php bin/console cache:clear

