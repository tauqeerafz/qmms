<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "DataTables.php" );

// Alias Editor classes so they are easy to use
use
	Editor\Editor,
	Editor\Field,
	Editor\Format,
	Editor\Join,
	Editor\Upload,
	Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
	->fields(
		Field::inst( 'first_name' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'last_name' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'position' ),
		Field::inst( 'email' ),
		Field::inst( 'office' ),
		Field::inst( 'extn' )->validator( 'Validate::numeric' ),
		Field::inst( 'age' )->validator( 'Validate::numeric' ),
		Field::inst( 'salary' )->validator( 'Validate::numeric' ),
		Field::inst( 'start_date' )
			->validator( 'Validate::dateFormat', array(
				"format"  => Format::DATE_ISO_8601,
				"message" => "Please enter a date in the format yyyy-mm-dd"
			) )
			->getFormatter( 'Format::date_sql_to_format', Format::DATE_ISO_8601 )
			->setFormatter( 'Format::date_format_to_sql', Format::DATE_ISO_8601 )
	)
	->process( $_POST )
	->json();
