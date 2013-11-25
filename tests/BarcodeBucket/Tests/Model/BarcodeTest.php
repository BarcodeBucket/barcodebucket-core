<?php

namespace BarcodeBucket\Tests\Model;

use BarcodeBucket\Model\Barcode;

/**
 * Class BarcodeTest
 * @package BarcodeBucket\Tests\Model
 */
class BarcodeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $barcode = new Barcode($uuid = 'd57fac6f-133c-4d3f-bb8f-be41275686a5', $gtin = '09780321125217');

        $this->assertEquals($uuid, $barcode->getUuid());
        $this->assertEquals($gtin, $barcode->getGtin());
    }
}
