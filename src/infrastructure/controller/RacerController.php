<?php
namespace App\infrastructure\controller;

use App\application\ObtainRacers;
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

        return new JsonResponse(ObtainRacers::getRacers($connection));
    }
}