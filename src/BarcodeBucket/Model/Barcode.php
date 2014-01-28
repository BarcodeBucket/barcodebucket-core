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
    protected $uuid;

    /**
     * @var string
     */
    protected $gtin;

    /**
     * @param string $uuid
     * @param string $gtin
     */
    public function __construct($uuid, $gtin)
    {
        $this->uuid = $uuid;
        $this->gtin = $gtin;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }
}
