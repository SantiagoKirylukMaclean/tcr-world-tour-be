<?php
namespace App\infrastructure\controller;



use App\application\ObtainTeams;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class TeamController
{
    private ObtainTeams $obtainTeams;

    public function __construct(ObtainTeams $obtainTeams)
    {
        $this->obtainTeams = $obtainTeams;
    }

    public function getTeams(SerializerInterface $serializer): JsonResponse
    {
        $teamDTOs = $this->obtainTeams->obtainTeams();
        $data = $serializer->serialize($teamDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}