<?php
namespace App\Controller;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\application\Race;

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