<?php
namespace App\Controller;

use Doctrine\DBAL\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\JsonResponse;

class RacerController
{
    public function test()
    {
        return new Response(
            '<html><body>Hello world! Soy el primer usuario de Docker!</body></html>'
        );
    }

    /**
     * @throws Exception
     */
    public function getRacers(Connection $connection)
    {
        $racers = [
            [
                "name" => "Néstor Girolami",
                "qualify" => 0,
                "race" => 8,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "1d1e39f1-3173-469d-8d51-b9b0c8553998"
            ],
            [
                "name" => "Santiago Urrutia",
                "qualify" => 0,
                "race" => 14,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "6182b28b-4b50-4d12-b800-1415de59a920"
            ],
            [
                "name" => "John Filippi",
                "qualify" => 0,
                "race" => 10,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e"
            ],
            [
                "name" => "Ma Qing Hua",
                "qualify" => 0,
                "race" => 12,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "e3c8966a-1a34-4ed3-8541-0672d5f2d06f"
            ],
            [
                "name" => "Marco Butti",
                "qualify" => 2,
                "race" => 18,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "2f646a1c-f9b1-4e57-9442-b7e2878e2de7"
            ],
            [
                "name" => "Thed Björk",
                "qualify" => 4,
                "race" => 16,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "ac18077f-3288-4d2b-a4b1-09ec6bf5d59a"
            ],
            [
                "name" => "Mikel Azcona",
                "qualify" => 6,
                "race" => 20,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "349c3e43-1b03-4705-bf57-23b4bc82594a"
            ],
            [
                "name" => "Esteban Guerrieri",
                "qualify" => 8,
                "race" => 22,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "2d61b02d-15d8-4467-9932-3463e23b180f"
            ],
            [
                "name" => "Yann Ehrlacher",
                "qualify" => 10,
                "race" => 25,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "8539155b-f3b9-49bb-88f4-123a9ff6d6a0"
            ],
            [
                "name" => "Norbert Michelisz",
                "qualify" => 15,
                "race" => 30,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59"
            ],
            [
                "name" => "Jacopo Cimenes",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "70069eb8-9381-4711-8fc9-5f9fc8605b39"
            ],
            [
                "name" => "Sami Taoufik",
                "qualify" => 0,
                "race" => 5,
                "isWorldTour" => true,
                "isDnf" => false,
                "id" => "1591292f-1db8-4e51-9a48-d81d3c206120"
            ],
            [
                "name" => "Victor Fernández",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "70099b92-2d0d-4f15-888f-24edf290e207"
            ],
            [
                "name" => "Sandro Pelatti",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "ff1c8433-fa09-4052-9246-798924b3f834"
            ],
            [
                "name" => "Filippo Barberi",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "95d11a2b-78cb-4a15-8559-4cd36753505e"
            ],
            [
                "name" => "Demir Eröge",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "2b73c688-f26f-4b41-8ba5-8194e348e0c8"
            ],
            [
                "name" => "Philipp Mattersdorfer",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "f5b1b0db-2922-4d3b-b47e-60506f28f6aa"
            ],
            [
                "name" => "Tony Verhulst",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "8f868150-5b2f-48df-b61b-705e424a585f"
            ],
            [
                "name" => "Giulio Valentini",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "d3351b38-b13f-4d13-bd0f-14dc1d78158b"
            ],
            [
                "name" => "Ramazan Kaya",
                "qualify" => 0,
                "race" => 9,
                "isWorldTour" => false,
                "isDnf" => false,
                "id" => "0f1e9b8e-19fb-48d7-ae85-f129ad1727ed"
            ]
        ];

        return new JsonResponse($racers);
    }

    public function createUser(Request $request, Connection $connection)
    {
        $name = $request->query->get('nombre');
        $lastname = $request->query->get('apellido');
        $email = $request->query->get('email');

        $count = $connection->executeUpdate("
            INSERT INTO `db`.`users` (`name`, `lastname`, `email`)
            VALUES ('".$name."', '".$lastname."', '".$email."');
        ");

        return new Response($count == 1 ? 'Usuario guardado' : 'No se ha podido guardar el usuario');
    }
}