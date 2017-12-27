<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TransactionControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'transaction/add');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'transaction/list');
    }

}
