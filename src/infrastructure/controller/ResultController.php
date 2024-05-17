<?php
namespace App\infrastructure\controller;


use App\application\CreateRace;
use App\application\CreateResult;
use App\application\CreateSession;
use App\application\ObtainRaces;
use App\application\ObtainSessions;
use App\infrastructure\controller\dto\CreateSessionDTO;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ResultController
{
    private CreateResult $createResult;

    public function __construct(CreateResult $createResult)
    {
        $this->createResult = $createResult;
    }


    #[Route('v1/result', name: 'create_result', methods: ['POST'])]
    public function createResult(): JsonResponse
    {
        $this->createResult->createResult();
        return new JsonResponse(status: 201);
    }

//    #[Route('v1/result', name: 'obtain_result', methods: ['GET'])]
//    public function getResult(SerializerInterface $serializer): JsonResponse
//    {
//        $resultDTOs = $this->obtainResults->obtainResults();
//        $data = $serializer->serialize($resultDTOs, 'json');
//        return new JsonResponse($data, 200, [], true);
//    }


}