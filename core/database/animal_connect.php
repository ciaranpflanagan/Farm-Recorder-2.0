<?php
// This File Contains The Database Access Info.
// This File Also Establishes A Connection to MySQL, Selects The Database, And Sets The Encoding.

// Setting the database access info as constants for LIVE site
//DEFINE ('DB_USER', 'u1269666_born');
//DEFINE ('DB_PASSWORD', '.3.tQ2/,t0');
//DEFINE ('DB_HOST', 'mysql2036int.cp.blacknight.com');
//DEFINE ('DB_NAME', 'db1269666_born_animals');

// Setting the database access info as constants for LOCAL site
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'db1269666_born_animals');

// Making the connection
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Couldn\'t connect to MySQL: ' . mysqli_connect_error() );

// Setting the encoding
mysqli_set_charset($dbc, 'utf8');