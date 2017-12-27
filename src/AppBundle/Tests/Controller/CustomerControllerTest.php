<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'customer/list');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'customer/add');
    }

}
