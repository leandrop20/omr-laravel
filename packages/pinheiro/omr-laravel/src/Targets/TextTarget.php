<?php

namespace Pinheiro\OmrLaravel\Targets;

use Pinheiro\OmrLaravel\Abstracts\Target;
use Pinheiro\OmrLaravel\Utils\Point;

class TextTarget extends Target
{
    /**
     * Pointer Top/Left
     *
     * @var Point
     */
    private $a;

    /**
     * Pointer Bottom/Right
     *
     * @var Point
     */
    private $b;

    /**
     * Image
     *
     * @var string
     */
    private $imageBlob;

    /**
     * Contructor
     *
     * @param $id
     * @param Point $a
     * @param Point $b
     */
    public function __construct($id, Point $a, Point $b)
    {
        $this->id = $id;
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * Get Pointer Top/Left
     *
     * @return Point
     */
    public function getA(): Point
    {
        return $this->a;
    }

    /**
     * Get Pointer Bottom/Right
     *
     * @return Point
     */
    public function getB(): Point
    {
        return $this->b;
    }

    /**
     * Set image blob
     *
     * @param string
     */
    public function setImageBlob(string $imageBlob)
    {
        $this->imageBlob = $imageBlob;
    }

    /**
     * Set image blob
     *
     * @return string
     */
    public function getImageBlob(): string
    {
        return $this->imageBlob;
    }

}
