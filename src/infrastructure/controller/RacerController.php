<?php
namespace App\infrastructure\controller;

use App\application\ObtainRacers;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Attribute\Route;

class RacerController
{

    private ObtainRacers $obtainRacers;

    public function __construct(ObtainRacers $obtainRacers)
    {
        $this->obtainRacers = $obtainRacers;
    }
    public function getRacers(Connection $connection): JsonResponse
    {

        return new JsonResponse(ObtainRacers::getRacers($connection));
    }

    #[Route('v1/racer/json', name: 'get_racers_json', methods: ['GET'])]
    public function getRacer(SerializerInterface $serializer): JsonResponse
    {
        $result = $this->obtainRacers->getRacersJson();
        return new JsonResponse($result, 200, [], true);
    }
}