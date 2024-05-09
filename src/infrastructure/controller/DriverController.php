<?php
namespace App\infrastructure\controller;


use App\domain\Driver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DriverController
{
    //#[Route('/driver', name: 'create_driver')]
    public function createDriver(EntityManagerInterface $entityManager): Response
    {
        $driver = new Driver();
        $driver->setLastName('Visor1');
        $driver->setFirstName('3434');
        $driver->setIsDnf(false);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($driver);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$driver->getId());
    }
    public function getDrivers(EntityManagerInterface $entityManager): Response
    {
        $drivers = $entityManager->getRepository(Driver::class)->findAll();

        $allDrivers = [];
        foreach ($drivers as $p) {
            $allDrivers[] = $p->getLastName();
        }


        return new Response('Check out this greoooat product: '.implode(', ', $allDrivers));
    }
}