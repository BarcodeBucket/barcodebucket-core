<?php

namespace BarcodeBucket\Model;

/**
 * Class Publication
 * @package PublicationBucket\Model
 */
class Publication
{
    /**
     * @var string
     */
    private $title;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
