<?php

namespace Tests\binhhv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SlideControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getSlides');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals(2, $crawler->filter('ul#bxslider-home4 > li')->count());
        //$this->assertContains(2, $crawler->filter('ul.bxslider-home4 > li')->count());
    }
}
