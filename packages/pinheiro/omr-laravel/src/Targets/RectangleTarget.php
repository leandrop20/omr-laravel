<?php

namespace Pinheiro\OmrLaravel\Targets;

use Pinheiro\OmrLaravel\Abstracts\Target;
use Pinheiro\OmrLaravel\Utils\Point;

class RectangleTarget extends Target
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
    
}
