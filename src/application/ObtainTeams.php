<?php

namespace App\application;

use App\domain\TeamRepository;
use App\infrastructure\controller\dto\TeamDTO;

class ObtainTeams
{

    private TeamRepository $teamRepository;
    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function obtainTeams(): array
    {
        $teams = $this->teamRepository->obtainTeams();

        $teamsDTOs = [];

        foreach ($teams as $team) {
            $teamsDTOs[] = new teamDTO(
                $team->getIdTeam(),
                $team->getName(),
                $team->getLogo(),
                $team->getColors()
            );
        }
        return $teamsDTOs;

    }
}

