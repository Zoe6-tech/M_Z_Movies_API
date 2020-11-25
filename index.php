<h1>This is Movie API project</h1>

<?php
#test database connection
include_once 'config/database.php';//load database coonnection

//instantie database
$database=new Database();
$db=$database->getConnection();

var_export($db);//test, like console.log in js

//stop php in this line,like break in php
exit;
//if php connection database, this line shouldnt show up
echo "i am not supposed to be seen!";