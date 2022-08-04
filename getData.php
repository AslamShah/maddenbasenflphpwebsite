<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'Kyle12_12', 
    'pass' => 'MaddenBase12', 
    'db'   => 'maddenbaseposts' 
); 
 
// DB table to use 
$table = 'posts'; 
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'image', 'dt' => 0,
                     ),
    array( 'db' => 'positionteam',  'dt' => 1 ), 
    array( 'db' => 'description',      'dt' => 2 ), 
   
); 
 
$searchFilter = array(); 
if(!empty($_GET['search_keywords'])){ 
    $searchFilter['search'] = array( 
        'image' => $_GET['search_keywords'], 
        'positionteam' => $_GET['search_keywords'], 
        'description' => $_GET['search_keywords'], 
        
    ); 
} 
if(!empty($_GET['filter_option'])){ 
    $searchFilter['filter'] = array( 
        'positionteam' => $_GET['filter_option'] 
    ); 
} 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns, $searchFilter ) 
);
