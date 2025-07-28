<?php
namespace App\Tests\Infrastructure\Http;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExampleControllerTest extends WebTestCase
{
    public function testCreateProduct()
    {
        $client = static::createClient();
        $client->request(
            'GET',
            '/example',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json']
        );

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());
    }
}