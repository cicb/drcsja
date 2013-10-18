<?php
App::uses('Md2', 'Model');

/**
 * Md2 Test Case
 *
 */
class Md2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.md2',
		'app.item',
		'app.user',
		'app.content_type',
		'app.extra',
		'app.fba',
		'app.galery',
		'app.video'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Md2 = ClassRegistry::init('Md2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Md2);

		parent::tearDown();
	}

}
