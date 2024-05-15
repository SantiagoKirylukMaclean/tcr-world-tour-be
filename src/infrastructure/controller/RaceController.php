<?php
namespace App\infrastructure\controller;


use App\application\CreateRace;
use App\application\ObtainRaces;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class RaceController
{
    private CreateRace $createRace;
    private ObtainRaces $obtainRaces;

    public function __construct(CreateRace $createRace, ObtainRaces $obtainRaces)
    {
        $this->createRace = $createRace;
        $this->obtainRaces = $obtainRaces;
    }

    #[Route('v1/race/create', name: 'create_product', methods: ['GET'])]
    public function createRace(): JsonResponse
    {
        //$this->createRace->createRace();
        return new JsonResponse;
    }
    #[Route('v1/race', name: 'create_product', methods: ['GET'])]
    public function getRace(SerializerInterface $serializer): JsonResponse
    {
        $raceDTOs = $this->obtainRaces->obtainRaces();
        $data = $serializer->serialize($raceDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}