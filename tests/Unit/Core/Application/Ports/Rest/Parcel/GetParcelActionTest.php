<?php

namespace App\Tests\Unit\Core\Application\Ports\Rest\Parcel;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetParcelActionTest extends WebTestCase
{

    //Create client with an valid authorization header (Bearer) for testing endpoints.
    public function createAuthenticatedClient()
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

        $data = json_decode($client->getResponse()->getContent(), true);

        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));

        return $client;
    }

    //Test ShowParcelsById with valid informations
    public function testShowParcelsByIdWithValidInformations()
    {

        $client = $this->createAuthenticatedClient();
        $client->request('GET', '/api/parcels/18292e08-953f-470f-beba-06daa24c0cc3');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    //Test ShowParcelsById with invalid token
    public function testShowParcelsByIdWithInvalidToken()
    {
        $client = static::createClient();
        $client->request('GET', 
        '/api/parcels/18292e08-953f-470f-beba-06daa24c0cc3',
        [],
        [],
        [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_Authorization' => 'Bearer dbrhjbehjbfvhv'
        ]);

        $this->assertEquals(401, $client->getResponse()->getStatusCode());
    }
    
    //Test ShowParcelsById with invalid route 
    public function testShowParcelsByIdWithInvalidRoute()
    {
        
        $client = $this->createAuthenticatedClient();
        $client->request('GET', '/api/parcels/invalidrouteDGHJBDQ563');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
    
    

}