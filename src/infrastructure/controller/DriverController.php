<?php
namespace App\infrastructure\controller;


use App\application\ObtainDrivers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class DriverController
{
    private ObtainDrivers $obtainDrivers;

    public function __construct(ObtainDrivers $obtainDrivers)
    {
        $this->obtainDrivers = $obtainDrivers;
    }
    public function getDrivers(SerializerInterface $serializer): JsonResponse
    {
        $driverDTOs[] = $this->obtainDrivers->obtainDrivers();
        $data = $serializer->serialize($driverDTOs, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}