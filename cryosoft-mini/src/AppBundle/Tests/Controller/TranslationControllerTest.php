<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TranslationControllerTest extends WebTestCase
{
    public function testTranslate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/translate');
    }

}
