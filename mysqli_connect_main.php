<?php
// This File Contains The Database Access Info.
// This File Also Establishes A Connection to MySQL, Selects The Database, And Sets The Encoding.

// Setting the database access info as constants
//DEFINE ('DB_USER2', 'u1269666_manager');
//DEFINE ('DB_PASSWORD2', 'kA_0,X(:xj');
//DEFINE ('DB_HOST2', 'mysql2111int.cp.blacknight.com');
//DEFINE ('DB_NAME2', 'db1269666_manager');

// Setting the database access info as constants for LOCAL site
DEFINE ('DB_USER2', 'root');
DEFINE ('DB_PASSWORD2', '');
DEFINE ('DB_HOST2', 'localhost');
DEFINE ('DB_NAME2', 'db1269666_manager');

// Making the connection
$dbc = @mysqli_connect (DB_HOST2, DB_USER2, DB_PASSWORD2, DB_NAME2) OR die ('Couldn\'t connect to MySQL: ' . mysqli_connect_error() );

// Setting the encoding
mysqli_set_charset($dbc, 'utf8');
