<?php
App::uses('Fba', 'Model');

/**
 * Fba Test Case
 *
 */
class FbaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fba',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fba = ClassRegistry::init('Fba');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fba);

		parent::tearDown();
	}

}
