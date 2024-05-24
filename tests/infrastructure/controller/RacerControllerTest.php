<?php

namespace App\Tests\infrastructure\controller;

use Hautelook\AliceBundle\PhpUnit\RecreateDatabaseTrait;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RacerControllerTest extends WebTestCase
{
    use RecreateDatabaseTrait;
    private static ?KernelBrowser $baseClient = null;

    public function setUp(): void
    {
        parent::setUp();

        if (null === self::$baseClient) {
            self::$baseClient = static::createClient([], [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/json',
            ]);
        }
    }

    public function testSomething(): void
    {
        self::$baseClient->request('POST', '/v1/circuit');

        self::$baseClient->request('GET', '/v1/circuit');
        $response = self::$baseClient->getResponse();
        self::assertNotNull($response);
        self::assertEquals(200, $response->getStatusCode());
    }
}
