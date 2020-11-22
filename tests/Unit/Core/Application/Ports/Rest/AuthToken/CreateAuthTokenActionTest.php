<?php

namespace App\Tests\Unit\Core\Application\Ports\Rest\AuthToken;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CreateAuthTokenTest extends WebTestCase
{

    //Test loginCheck with invalid user informations
    public function testLoginCheckWithInvalidUserInformations()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/login_check',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"username":"bamboo", "password":"otherpassword"}'
        );

        $this->assertEquals(401, $client->getResponse()->getStatusCode());
    }

    //Test loginCheck with invalid route
    public function testLoginCheckWithInvalidRoute()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/login_checkss',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"username":"bamboo", "password":"otherpassword"}'
        );

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
    
    //Test loginCheck with valid user informations
    public function testLoginCheckWithValidInformations()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/login_check',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"username":"panda", "password":"password"}'
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

}