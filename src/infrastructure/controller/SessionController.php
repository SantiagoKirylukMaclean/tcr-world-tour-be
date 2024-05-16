<?php
namespace App\infrastructure\controller;


use App\application\CreateRace;
use App\application\CreateSession;
use App\application\ObtainRaces;
use App\infrastructure\controller\dto\CreateSessionDTO;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SessionController
{
    private CreateSession $createSession;


    public function __construct(CreateSession $createSession)
    {
        $this->createSession = $createSession;
    }

    #[Route('v1/session', name: 'create_session', methods: ['POST'])]
    public function createSession(Request $createSessionRequest): JsonResponse
    {
        $data = json_decode($createSessionRequest->getContent(), true);
        $createSessionDTO = new CreateSessionDTO($data['race_id']);
        $this->createSession->createSession($createSessionDTO);
        return new JsonResponse(status: 201);
    }

    #[Route('v1/session', name: 'obtain_session', methods: ['GET'])]
    public function getSession(SerializerInterface $serializer): JsonResponse
    {
        $sessionDTOs = $this->obtainSessions->obtainSessions();
        $data = $serializer->serialize($sessionDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}