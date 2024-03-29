<?php
/*
 * PoiXson phpPortal - Website Utilities Library
 * @copyright 2004-2016
 * @license GPL-3
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\phpPortal\render;

use pxn\phpUtils\System;
use pxn\phpUtils\Defines;


class RenderWebMinimal extends \pxn\phpPortal\WebRender {



	public function getName() {
		return 'minimal';
	}
	public function getWeight() {
		return 10;
	}



	public function doRender() {
		if (System::isShell()) {
			$name = $this->getName();
			fail("Cannot use a WebRender class in this mode! $name",
				Defines::EXIT_CODE_USAGE_ERROR);
		}
fail('UNFINISHED!');
		return TRUE;
	}



}
