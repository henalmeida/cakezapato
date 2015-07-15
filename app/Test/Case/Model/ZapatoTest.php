<?php
App::uses('Zapato', 'Model');

/**
 * Zapato Test Case
 *
 */
class ZapatoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zapato',
		'app.marca',
		'app.modelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Zapato = ClassRegistry::init('Zapato');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zapato);

		parent::tearDown();
	}

}
