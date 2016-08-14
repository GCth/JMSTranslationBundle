<?php

namespace JMS\TranslationBundle\Tests\Functional\Controller;

use JMS\TranslationBundle\Tests\Functional\BaseTestCase;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class TranslateControllerTest extends BaseTestCase
{
    public function testIndexAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/_trans/');

//        var_dump($client->getResponse()->getContent());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("text.foo")')->count()
        );
    }
}
