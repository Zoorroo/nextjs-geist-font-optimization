<?php

namespace App\Tests\Api;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class EntrepriseApiTest extends ApiTestCase
{
    public function testGetEntreprises()
    {
        $response = static::createClient()->request('GET', '/api/entreprises');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/Entreprise',
            '@id' => '/api/entreprises',
            '@type' => 'hydra:Collection',
        ]);
    }
}
