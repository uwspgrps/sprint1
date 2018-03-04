<?php

require_once("DB.class.php");

$db = new DB();

//var_dump($db);

if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

/*
//INSERT example
//Pretend this is unsanitized
//user data from a form:
$user = "bob";
$safeUser = $db->dbEsc($user);

$query = "INSERT INTO testschema (username,pass,active) " .
          "VALUES ('{$safeUser}','l33t',1)";
$result = $db->dbCall($query);

//This will contain the insert id
print "Insert statement executed, insert id was: " . $result . "\n";
*/

//If using unsanitized data, be sure
//to call the dbEsc() method on any individual values!
// Must do that prior to building the statement here

$query = "SELECT * FROM bookinfo";

$result = $db->dbCall($query);
$position=0;
while($position < count($result)){
	print $result[$position]['id'] . " ";
	print $result[$position]['inserttime'] . " ";
	print $result[$position]['booktitle'] . " ";
	print $result[$position]['isbn'] . " ";
	print $result[$position]['author'] . " ";
	print $result[$position]['status'] . "<br \>";
	$position++;
}

//print $result[0]['author'];
//var_dump($result);

/*
//UPDATE example
//If using unsanitized data, be sure
//to call the dbEsc() method on any individual values!
// Must do that prior to building the statement here

$query = "UPDATE testschema SET pass = 'testpass' WHERE id = 1";
$result = $db->dbCall($query);

print "Update statement executed, affected rows: " . $result . "\n";
*/
?>
