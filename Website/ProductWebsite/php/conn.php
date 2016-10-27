<?php 

### EDIT HERE ###

// DB CONNECT INFO
$db_host = "localhost";
$db_name = "SparrowWeb";
$db_user = "SparrowWeb";
$db_pw = "";

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "hits_table_name";
$GLOBALS['info_table_name'] = "info_table_name";

### STOP EDITING HERE ###

// CONNECT TO DB
try {   
	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));  
}  
catch(PDOException $e) {  
    echo $e->getMessage();
}

?>