FROM php:8.3-fpm

ARG UID
EXPOSE $UID

RUN adduser -u ${UID} --disabled-password --gecos "" appuser
RUN mkdir /home/appuser/.ssh
RUN chown -R appuser:appuser /home/appuser/
RUN echo "StrictHostKeyChecking no" >> /home/appuser/.ssh/config
RUN echo "export COLUMNS=300" >> /home/appuser/.bashrc
RUN echo "alias sf=/appdata/www/bin/console" >> /home/appuser/.bashrc

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get install -y git acl openssl openssh-client wget zip vim libssh-dev \
    && apt-get install -y libpng-dev zlib1g-dev libzip-dev libxml2-dev libicu-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap bcmath sockets \
    && pecl install xdebug \
    && docker-php-ext-enable --ini-name 05-opcache.ini opcache xdebug

RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN composer self-update

RUN wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fixer
RUN chmod a+x php-cs-fixer
RUN mv php-cs-fixer /usr/local/bin/php-cs-fixer

# Instalación de los paquetes de Symfony ORM y Maker Bundle
RUN composer require symfony/orm-pack
RUN composer require --dev symfony/maker-bundle
RUN composer require nelmio/cors-bundle
RUN composer require ramsey/uuid
RUN composer require symfony/serializer
RUN composer require predis/predis
# istall phpunit
RUN composer require --dev symfony/phpunit-bridge symfony/css-selector hautelook/alice-bundle
#install messager
RUN composer require symfony/amqp-messenger symfony/serializer symfony/property-access
#install validator
RUN composer require symfony/validator
#install loger
RUN composer require symfony/monolog


RUN mkdir -p /app

WORKDIR /app