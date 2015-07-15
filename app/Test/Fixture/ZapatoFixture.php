<?php
/**
 * ZapatoFixture
 *
 */
class ZapatoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'marca_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modelo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'talla' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'color' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'precio' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 1,
			'marca_id' => 1,
			'modelo_id' => 1,
			'talla' => 1,
			'color' => 'Lorem ipsum dolor ',
			'precio' => '',
			'created' => '2015-07-10 02:37:49',
			'modified' => '2015-07-10 02:37:49'
		),
	);

}
