<?php
namespace App\infrastructure\controller;


use App\application\CreateRace;
use App\application\CreateResult;
use App\application\ObtainRaces;

use App\infrastructure\controller\dto\CreateRaceDTO;
use App\infrastructure\controller\dto\CreateSessionDTO;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

class ResultController
{
    private CreateResult $createResult;
    private SerializerInterface $serializer;

    public function __construct(CreateResult $createResult, SerializerInterface $serializer)
    {
        $this->createResult = $createResult;
        $this->serializer = $serializer;
    }


    #[Route('v1/result', name: 'create_result', methods: ['POST'])]
    public function createResult(Request $request): JsonResponse
    {
        $data = $request->getContent();

        try {
            //TODO: Validate data
            $races = $this->serializer->deserialize($data, CreateRaceDTO::class . '[]', 'json');
            $this->createResult->createResult($races);

            return new JsonResponse(null, JsonResponse::HTTP_CREATED);
        } catch (NotEncodableValueException $e) {

            return new JsonResponse(['error' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    }



}

