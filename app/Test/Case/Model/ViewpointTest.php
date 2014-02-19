<?php
App::uses('Viewpoint', 'Model');

/**
 * Viewpoint Test Case
 *
 */
class ViewpointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.viewpoint',
		'app.tag',
		'app.whiteboard'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Viewpoint = ClassRegistry::init('Viewpoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Viewpoint);

		parent::tearDown();
	}

}
