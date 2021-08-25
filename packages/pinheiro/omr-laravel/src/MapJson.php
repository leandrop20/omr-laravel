<?php

namespace Pinheiro\OmrLaravel;

use Pinheiro\OmrLaravel\Interfaces\Map;
use Pinheiro\OmrLaravel\Utils\Point;
use Pinheiro\OmrLaravel\Targets\CircleTarget;
use Pinheiro\OmrLaravel\Targets\RectangleTarget;
use Pinheiro\OmrLaravel\Targets\TextTarget;

class MapJson implements Map
{
	private $limits;
	private $targets;

	public static function create(string $pathJson)
	{
		$mapJson = new MapJson();
		$mapJson->setPathJson($pathJson);

		return $mapJson;
	}

	private function setPathJson(string $pathJson)
	{
		$json = file_get_contents($pathJson);
		$decoded = json_decode($json, true);

		$this->limits = $decoded['limits'];
		$this->targets = $decoded['targets'];
	}

	/**
     * Most point to the top/left
     *
     * @return Point
     */
    public function topLeft()
    {
        $topLeft = $this->limits['topLeft'];

        return new Point($topLeft['x'], $topLeft['y']);
    }

    /**
     * Most point to the top/right
     *
     * @return Point
     */
    public function topRight()
    {
        $topRight = $this->limits['topRight'];

        return new Point($topRight['x'], $topRight['y']);
    }

    /**
     * Most point to the bottom/left
     *
     * @return Point
     */
    public function bottomLeft()
    {
        $bottomLeft = $this->limits['bottomLeft'];

        return new Point($bottomLeft['x'], $bottomLeft['y']);
    }

    /**
     * Most point to the bottom/right
     *
     * @return Point
     */
    public function bottomRight()
    {
        $bottomRight = $this->limits['bottomRight'];

        return new Point($bottomRight['x'], $bottomRight['y']);
    }

    /**
     * Targets
     *
     * @return Target[]
     */
    public function targets()
    {
        $targets = [];

        foreach ($this->targets as $target) {
            if ($target['type'] == 'text') {
                $t = new TextTarget(
                	$target['id'],
                	new Point($target['x1'], $target['y1']),
                	new Point($target['x2'], $target['y2'])
                );
            }

            if ($target['type'] == 'rectangle') {
                $t = new RectangleTarget(
                	$target['id'],
                	new Point($target['x1'], $target['y1']),
                	new Point($target['x2'], $target['y2'])
                );
            }

            if ($target['type'] == 'circle') {
                $t = new CircleTarget(
                	$target['id'],
                	new Point($target['x'], $target['y']),
                	$target['radius']
                );
            }

            if (isset($target['tolerance'])) {
                $t->setTolerance($target['tolerance']);
            }

            $targets[] = $t;
        }

        return $targets;
    }

}
