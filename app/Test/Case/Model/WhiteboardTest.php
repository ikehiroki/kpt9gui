<?php
App::uses('Whiteboard', 'Model');

/**
 * Whiteboard Test Case
 *
 */
class WhiteboardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.whiteboard',
		'app.tag',
		'app.viewpoint'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Whiteboard = ClassRegistry::init('Whiteboard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Whiteboard);

		parent::tearDown();
	}

}
