<?php

namespace TextSeparator\tests;

use TextSeparator\Kernel\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTests extends TestCase 
{
	private $app;

	protected function setUp()
    {
        $this->app = new Application();
    }

    public function testIsString()
    {
    	$this->assertIsString($this->app->sortText('test'));
    }

    public function testIsArray()
    {
    	$this->assertIsArray($this->app->getSortArray('test'));
    }
 
}