<?php
namespace App\application;

use Psr\Cache\InvalidArgumentException;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;



class ObtainRacers
{
    private ObtainRaces $obtainRaces;
    private $cache;

    public function __construct(ObtainRaces $obtainRaces, CacheInterface $cache)
    {
        $this->obtainRaces = $obtainRaces;
        $this->cache = $cache;
    }

    public static function getRacers(): array
    {
        return [
            [
                "firstName" => "Néstor",
                "lastName" => "Girolami",
                "team" => "Hyundai",
                "championshipStandings" => 38,
                "qualify" => 0,
                "race" => 8,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "1d1e39f1-3173-469d-8d51-b9b0c8553998"
            ],
            [
                "firstName" => "Santiago",
                "lastName" => "Urrutia",
                "team" => "Cyan",
                "championshipStandings" => 39,
                "qualify" => 0,
                "race" => 14,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "6182b28b-4b50-4d12-b800-1415de59a920"
            ],
            [
                "firstName" => "John",
                "lastName" => "Filippi",
                "team" => "Volcano",
                "championshipStandings" => 24,
                "qualify" => 0,
                "race" => 10,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e"
            ],
            [
                "firstName" => "Ma Qing",
                "lastName" => "Hua",
                "team" => "Cyan",
                "championshipStandings" => 22,
                "qualify" => 0,
                "race" => 12,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "e3c8966a-1a34-4ed3-8541-0672d5f2d06f"
            ],
            [
                "firstName" => "Marco",
                "lastName" => "Butti",
                "team" => "GOAT",
                "championshipStandings" => 42,
                "qualify" => 2,
                "race" => 18,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "2f646a1c-f9b1-4e57-9442-b7e2878e2de7"
            ],
            [
                "firstName" => "Thed",
                "lastName" => "Björk",
                "team" => "Cyan",
                "championshipStandings" => 38,
                "qualify" => 4,
                "race" => 16,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "ac18077f-3288-4d2b-a4b1-09ec6bf5d59a"
            ],
            [
                "firstName" => "Mikel",
                "lastName" => "Azcona",
                "team" => "Hyundai",
                "championshipStandings" => 46,
                "qualify" => 6,
                "race" => 20,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "349c3e43-1b03-4705-bf57-23b4bc82594a"
            ],
            [
                "firstName" => "Esteban",
                "lastName" => "Guerrieri",
                "team" => "GOAT",
                "championshipStandings" => 42,
                "qualify" => 8,
                "race" => 22,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "2d61b02d-15d8-4467-9932-3463e23b180f"
            ],
            [
                "firstName" => "Yann",
                "lastName" => "Ehrlacher",
                "team" => "Cyan",
                "championshipStandings" => 37,
                "qualify" => 10,
                "race" => 25,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "8539155b-f3b9-49bb-88f4-123a9ff6d6a0"
            ],
            [
                "firstName" => "Norbert",
                "lastName" => "Michelisz",
                "team" => "Hyundai",
                "championshipStandings" => 61,
                "qualify" => 15,
                "race" => 30,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59"
            ],
            [
                "firstName" => "Jacopo",
                "lastName" => "Cimenes",
                "team" => "Cimenes",
                "championshipStandings" => 3,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "70069eb8-9381-4711-8fc9-5f9fc8605b39"
            ],
            [
                "firstName" => "Sami",
                "lastName" => "Taoufik",
                "team" => "Volcano",
                "championshipStandings" => 0,
                "qualify" => 0,
                "race" => 5,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "1591292f-1db8-4e51-9a48-d81d3c206120"
            ],
            [
                "firstName" => "Victor",
                "lastName" => "Fernández",
                "team" => "ClubRc",
                "championshipStandings" => 0,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "70099b92-2d0d-4f15-888f-24edf290e207"
            ],
            [
                "firstName" => "Sandro",
                "lastName" => "Pelatti",
                "team" => "PMA",
                "championshipStandings" => 12,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "ff1c8433-fa09-4052-9246-798924b3f834"
            ],
            [
                "firstName" => "Filippo",
                "lastName" => "Barberi",
                "team" => "Aikoa",
                "championshipStandings" => 6,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "95d11a2b-78cb-4a15-8559-4cd36753505e"
            ],
            [
                "firstName" => "Demir",
                "lastName" => "Eröge",
                "team" => "Aikoa",
                "championshipStandings" => 6,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "2b73c688-f26f-4b41-8ba5-8194e348e0c8"
            ],
            [
                "firstName" => "Philipp",
                "lastName" => "Mattersdorfer",
                "team" => "Philipp",
                "championshipStandings" => 6,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "f5b1b0db-2922-4d3b-b47e-60506f28f6aa"
            ],
            [
                "firstName" => "Tony",
                "lastName" => "Verhulst",
                "team" => "AutoStal",
                "championshipStandings" => 1,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "8f868150-5b2f-48df-b61b-705e424a585f"
            ],
            [
                "firstName" => "Giulio",
                "lastName" => "Valentini",
                "team" => "Valentini",
                "championshipStandings" => 1,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "d3351b38-b13f-4d13-bd0f-14dc1d78158b"
            ],
            [
                "firstName" => "Ramazan",
                "lastName" => "Kaya",
                "team" => "Bf",
                "championshipStandings" => 3,
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "0f1e9b8e-19fb-48d7-ae85-f129ad1727ed"
            ],
            // Otros elementos...
        ];
    }

    /**
     * @throws InvalidArgumentException
     */
    public function getRacersJson(): string
    {

        return $this->cache->get('racers_data', function (ItemInterface $item)
        {

            $item->expiresAfter(3600); // 1 hora
            $allRaces = $this->obtainRaces->obtainRaces();
            return $this->convertJson($allRaces);
        }
        );
    }
    function convertJson($inputJson): string{
        $drivers = [];

        foreach ($inputJson as $event) {
            foreach ($event->getResults() as $result) {
                $driverId = $result->getDriver()->getId();

                if (!isset($drivers[$driverId])) {
                    $drivers[$driverId] = [
                        'firstName' => $result->getDriver()->getFirstName(),
                        'lastName' => $result->getDriver()->getLastName(),
                        'team' => $this->getTeam($driverId),
                        'championshipStandings' => 0,
                        'qualify' => 0,
                        'race' => 0,
                        'isWorldTour' => true,
                        'isDnf' => $result->getDriver()->getIsDnf(),
                        'id' => $driverId
                    ];
                }
                $drivers[$driverId]['championshipStandings'] += (int)$result->getPoints();
            }
        }
        $outputArray = array_values($drivers);

        return json_encode($outputArray, JSON_PRETTY_PRINT);
    }

    function getTeam($driverId) {

        $teams = [
            '1d1e39f1-3173-469d-8d51-b9b0c8553998' => 'Hyundai',
            '6182b28b-4b50-4d12-b800-1415de59a920' => 'Cyan',
            'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e' => 'Volcano',
            'e3c8966a-1a34-4ed3-8541-0672d5f2d06f' => 'Cyan',
            '2f646a1c-f9b1-4e57-9442-b7e2878e2de7' => 'GOAT',
            ];

        return $teams[$driverId] ?? 'Unknown';
    }
}