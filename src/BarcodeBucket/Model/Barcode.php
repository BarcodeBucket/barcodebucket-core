<?php

namespace BarcodeBucket\Model;

/**
 * Class Barcode
 * @package BarcodeBucket\Model
 */
class Barcode
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $gtin;

    /**
     * @param string $gtin
     * @param string $uuid
     */
    public function __construct($gtin, $uuid)
    {
        $this->gtin = $gtin;
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }
}
