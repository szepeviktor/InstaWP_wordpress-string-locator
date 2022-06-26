<?php

namespace JITS\StringLocator\Extension\SQL;

function validate_sql_fields( $field ) {
	return preg_match( '/^[0-9a-zA-Z_]+$/s', $field );
}

require_once __DIR__ . '/class-search.php';
require_once __DIR__ . '/class-edit.php';
require_once __DIR__ . '/class-save.php';

require_once __DIR__ . '/Tests/class-serialized-data.php';