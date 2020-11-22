<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Behat\Tester\Exception\PendingException;
use Symfony\Component\HttpClient\CurlHttpClient;



/**
 * Defines application features from the specific context.
 */
class UserContext implements Context
{
    private $client;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new CurlHttpClient();
    }


    /**
     * @Then the response code is :arg1
     */
    public function theResponseCodeIs($arg1)
    {
        $response = $this->client->request('POST','http://localhost:8080/api/login_check', [
            'json' => ['username' => 'panda', 'password' => 'password'],
        ]);

        if ($response->getStatusCode() != 200) {       
            throw new \Exception("Not able to access");
        }

        return $response->getStatusCode(); 
    }

    /**
     * @Then the response body is a JSON
     */
    public function theResponseBodyIsAJson()
    {
        $response = $this->client->request('POST','http://localhost:8080/api/login_check', [
            'json' => ['username' => 'panda', 'password' => 'password'],
        ]);

        if ($response->getStatusCode() != 200) {
            throw new \Exception("Not able to access");       
        }elseif ($response->getHeaders()['content-type'][0] != 'application/json') {
            throw new \Exception("Incorrect response format. Json expected");
        }

        return $response->getHeaders()['content-type'][0];
    }

    /**
     * @When I send a POST request to :arg1 with invalid informations body in JSON:
     */
    public function iSendAPostRequestToWithInvalidInformationsBodyInJson($arg1, PyStringNode $string)
    {
        $response = $this->client->request('POST',$arg1, [
            'json' => ['username' => 'bamboo', 'password' => 'otherpassword'],
        ]);

        if ($response->getStatusCode() === 200) {
            throw new \Exception("Status is Ok. Re-check test.");
        }
        
        return $response;
    }

    /**
     * @Then the response code should be :arg1
     */
    public function theResponseCodeShouldBe($arg1)
    {
        $response = $this->client->request('POST','http://localhost:8080/api/api_login', [
            'json' => ['username' => 'bamboo', 'password' => 'otherpassword'],
        ]);

        if ($response->getStatusCode() === 200) {    
            throw new \Exception("Status is Ok. Re-check test.");
        }

        return $response->getStatusCode();
    }

    /**
     * @When I send a POST request to :arg1 with an invalid route and a body in JSON:
     */
    public function iSendAPostRequestToWithAnInvalidRouteAndABodyInJson($arg1, PyStringNode $string)
    {
        $response = $this->client->request('POST',$arg1, [
            'json' => ['username' => 'bamboo', 'password' => 'otherpassword'],
        ]);

        if ($response->getStatusCode() === 200) {    
            throw new \Exception("Status is Ok. Re-check test.");
        }

        return $response;
    }

    /**
     * @Then the response code will be :arg1
     */
    public function theResponseCodeWillBe($arg1)
    {
        $response = $this->client->request('POST','http://localhost:8080/api/login_checkhbdz', [
            'json' => ['username' => 'bamboo', 'password' => 'otherpassword'],
        ]);

        if ($response->getStatusCode() === 200) {    
            throw new \Exception("Status is Ok. Re-check test.");
        }

        return $response->getStatusCode();
    }
}