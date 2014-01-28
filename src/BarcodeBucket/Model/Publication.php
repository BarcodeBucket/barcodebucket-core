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
    protected $title;

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
