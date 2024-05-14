<?php
namespace App\infrastructure\controller;



use App\application\ObtainCircuit;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CircuitController
{
    private ObtainCircuit $obtainCircuit;

    public function __construct(ObtainCircuit $obtainCircuit)
    {
        $this->obtainCircuit = $obtainCircuit;
    }
    #[Route('v1/circuit', name: 'obtain_circuit', methods: ['GET'])]
    public function getTeams(SerializerInterface $serializer): JsonResponse
    {
        $circuitDTOs = $this->obtainCircuit->obtainCircuit();
        $data = $serializer->serialize($circuitDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}