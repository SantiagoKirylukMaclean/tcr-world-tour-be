<?php
namespace App\infrastructure\controller;


use App\domain\Driver;
use App\infrastructure\controller\dto\DriverDTO;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\SerializerInterface;

class DriverController
{
    //#[Route('/driver', name: 'create_driver')]
//    public function createDriver(EntityManagerInterface $entityManager): Response
//    {
//        $driver = new Driver();
//        $driver->setLastName('Visor1');
//        $driver->setFirstName('3434');
//        $driver->setIsDnf(false);
//
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($driver);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();
//
//        return new Response('Saved new product with id '.$driver->getId());
//    }
    public function getDrivers(SerializerInterface $serializer, EntityManagerInterface $entityManager): JsonResponse
    {
        $drivers = $entityManager->getRepository(Driver::class)->findAll();
        $driverDTOs = [];

        foreach ($drivers as $driver) {
            $driverDTOs[] = new DriverDTO(
                $driver->getId(),
                $driver->getFirstName(),
                $driver->getLastName(),
                $driver->getIsDnf()
            );
        }

        $data = $serializer->serialize($driverDTOs, 'json');

        return new JsonResponse($data, 200, [], true);
    }
}