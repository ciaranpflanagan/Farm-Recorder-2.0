<?php
// This File Contains The Database Access Info.
// This File Also Establishes A Connection to MySQL, Selects The Database, And Sets The Encoding.

// Setting the database access info as constants for LIVE site
//DEFINE ('DB_USER1', 'u1269666_born');
//DEFINE ('DB_PASSWORD1', '.3.tQ2/,t0');
//DEFINE ('DB_HOST1', 'mysql2036int.cp.blacknight.com');
//DEFINE ('DB_NAME1', 'db1269666_born_animals');

// Setting the database access info as constants for LOCAL site
DEFINE ('DB_USER1', 'root');
DEFINE ('DB_PASSWORD1', '');
DEFINE ('DB_HOST1', 'localhost');
DEFINE ('DB_NAME1', 'db1269666_born_animals');

// Making the connection
$dbc = @mysqli_connect (DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) OR die ('Couldn\'t connect to MySQL: ' . mysqli_connect_error() );

// Setting the encoding
mysqli_set_charset($dbc, 'utf8');