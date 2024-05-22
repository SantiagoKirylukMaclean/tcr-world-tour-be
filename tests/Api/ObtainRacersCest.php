<?php


namespace App\Tests\Api;

use App\Tests\Support\ApiTester;

class ObtainRacersCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToObtainRacersTest(ApiTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->sendAjaxGetRequest('http://localhost:8000/v1/racer/json');
        $I->seeResponseCodeIs(200);
    }
}
