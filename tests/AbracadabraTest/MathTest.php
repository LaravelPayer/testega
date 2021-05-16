<?php

namespace AbracadabraTest;

use Abracadabra\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
	/**
	 * @test
	 *
	 */
	public function sumIt()
	{
		$math = new Math();
		
		$this->assertEquals(3, $math->sum(1,2));
	}
	
	/**
	 * @test
	 *
	 */
	public function errorsumIt()
	{
		$math = new Math();
		
		$this->assertEquals(3, $math->sum(1,2));
	}
	/**
	 * @test
	 *
	 */
	public function errorsumIts()
	{
		$math = new Math();
		
		$this->assertEquals(3, $math->sum(1,2));
	}
}
