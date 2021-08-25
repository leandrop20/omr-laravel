<?php

namespace Pinheiro\OmrLaravel\Abstracts;

abstract class Target
{
    /**
     * Store results if the target was marked
     *
     * @var boolean
     */
    protected $marked = false;

    /**
     * Identifier
     *
     * @var string
     */
    protected $id;

    /**
     * Black pixels percentage compared to whites to consider marked
     *
     * @var float
     */
    protected $tolerance = 24;

    /**
     * Black pixels percentage
     *
     * @var float
     */
    protected $blackPixelsPercent = 0;

    /**
     * Checks if the target was marked
     *
     * @return boolean
     */
    public function isMarked()
    {
        return $this->marked;
    }

    /**
     * Tells whether the target was marked
     *
     * @param boolean $marked
     */
    public function setMarked(bool $marked)
    {
        $this->marked = $marked;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getTolerance(): float
    {
        return $this->tolerance;
    }

    /**
     * @param float $tolerance
     */
    public function setTolerance(float $tolerance)
    {
        $this->tolerance = $tolerance;
    }

    /**
     * @return float
     */
    public function getBlackPixelsPercent(): float
    {
        return $this->blackPixelsPercent;
    }

    /**
     * @param float $blackPixelsPercent
     */
    public function setBlackPixelsPercent($blackPixelsPercent)
    {
        $this->blackPixelsPercent = $blackPixelsPercent;
    }

}
