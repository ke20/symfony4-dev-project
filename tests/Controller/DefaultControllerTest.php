<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    /** @var Client */
    protected $client;

    protected function setUp()
    {
        $this->client = static::createClient();
    }

    public function testIndex():void
    {
        $this->client->request('GET', '/');

        $response = $this->client->getResponse();

        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
        $this->assertContains('First page of test to replace', $response->getContent());
    }
}
