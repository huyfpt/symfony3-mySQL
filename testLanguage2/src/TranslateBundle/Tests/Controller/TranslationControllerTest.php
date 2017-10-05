<?php

namespace TranslateBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TranslationControllerTest extends WebTestCase
{
    public function testTranslation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/translation');
    }

}
