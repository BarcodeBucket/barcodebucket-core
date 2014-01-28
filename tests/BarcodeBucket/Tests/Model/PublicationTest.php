<?php

namespace BarcodeBucket\Tests\Model;

use BarcodeBucket\Model\Publication;

/**
 * Class PublicationTest
 * @package BarcodeBucket\Tests\Model
 */
class PublicationTest extends \PHPUnit_Framework_TestCase
{
    public function testTitleAccessors()
    {
        $publication = new Publication();
        $publication->setTitle($title = 'Paperinik');
        $this->assertSame($title, $publication->getTitle());
    }
}
