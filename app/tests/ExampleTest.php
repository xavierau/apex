<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$this->call('GET', '/buy');

		$this->assertRedirectedToRoute('home', null, ['message'=>"ok"]);
	}

	public function testAboutPage()
	{
		$this->call('GET', '/about');

		$this->assertViewHas('tags');
	}
	
}
