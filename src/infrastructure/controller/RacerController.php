<?php
namespace App\infrastructure\controller;

use App\application\Race;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

class RacerController
{

    /**
     * @throws Exception
     */
    public function getRacers(Connection $connection): JsonResponse
    {

        return new JsonResponse(Race::getRacers($connection));
    }
}