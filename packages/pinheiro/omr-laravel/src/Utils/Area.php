<?php

namespace Pinheiro\OmrLaravel\Utils;

class Area
{
	/**
     * Total number of pixels
     *
     * @var int
     */
    private $pixels;

    /**
     * Number of white pixels
     *
     * @var int
     */
    private $whitePixels;

    /**
     * Number of black pixels
     *
     * @var int
     */
    private $blackPixels;

    /**
     * Constructor
     * @param int $pixels
     * @param int $whitePixels
     * @param int $blackPixels
     */
    public function __construct(int $pixels, int $whitePixels, int $blackPixels)
    {
        $this->pixels = $pixels;
        $this->whitePixels = $whitePixels;
        $this->blackPixels = $blackPixels;
    }

    /**
     * Percentage of black pixels
     *
     * @returns float
     */
    public function percentBlack(): float
    {
        return 100 * $this->blackPixels / $this->pixels;
    }

    /**
     * Percentage of white pixels
     *
     * @returns float
     */
    public function percentWhite(): float
    {
        return 100 * $this->whitePixels / $this->pixels;
    }
}
