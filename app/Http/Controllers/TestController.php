<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pinheiro\OmrLaravel\ImagickScanner;
use Pinheiro\OmrLaravel\MapJson;

class TestController extends Controller
{
    
	public function scan()
	{
		$imagePath = public_path() . '/example/test2.png';
		$mapJsonPath = public_path() . '/example/map.json';
		
		$scanner = new ImagickScanner();
		$scanner->setImagePath($imagePath);
		$map = MapJson::create($mapJsonPath);
		$result = $scanner->scan($map);

		dd('::test finished::', $result);
	}

}
