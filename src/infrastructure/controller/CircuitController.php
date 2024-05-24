<?php
namespace App\infrastructure\controller;



use App\application\CreateCircuit;
use App\application\ObtainCircuit;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CircuitController
{
    private ObtainCircuit $obtainCircuit;
    private CreateCircuit $createCircuit;

    public function __construct(ObtainCircuit $obtainCircuit, CreateCircuit $createCircuit)
    {
        $this->obtainCircuit = $obtainCircuit;
        $this->createCircuit = $createCircuit;
    }
    #[Route('v1/circuit', name: 'obtain_circuit', methods: ['GET'])]
    public function getTeams(SerializerInterface $serializer): JsonResponse
    {
        $circuitDTOs = $this->obtainCircuit->obtainCircuit();
        $data = $serializer->serialize($circuitDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }

    #[Route('v1/circuit', name: 'create_circuit', methods: ['POST'])]
    public function createCircuit(SerializerInterface $serializer): JsonResponse
    {
        $this->createCircuit->createCircuit();
        return new JsonResponse(null, 201, []);
    }
}