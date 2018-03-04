<?php

require_once("Template.php");
require_once("DB.class.php");

$page = new Template("DB Lab");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
/*
print "<table style="width:100%">
  <tr>
	<th>id</th>
    <th>inserttime</th> 
    <th>booktitle</th>
    <th>isbn</th> 
    <th>author</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>";
*/
$db = new DB();

//var_dump($db);

if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

$query = "SELECT * FROM bookinfo";

$result = $db->dbCall($query);
$position=0;
print "<table style='width:100%'>";
print "<tr>";
print "<th>ID</th>
	  <th>Insert Time</th> 
      <th>Book Title</th>
	  <th>ISBN</th>
      <th>Author</th> 
      <th>Status</th>";
print "</tr>";
while($position < count($result)){
	print "<tr>";
	print "<td>";
	print $result[$position]['id'] . " ";
	print "</td>";
	print "<td>";
	print $result[$position]['inserttime'] . " ";
	print "</td>";
	print "<td>";
	print $result[$position]['booktitle'] . " ";
	print "</td>";
	print "<td>";
	print $result[$position]['isbn'] . " ";
	print "</td>";
	print "<td>";
	print $result[$position]['author'] . " ";
	print "</td>";
	print "<td>";
	print $result[$position]['status'] . "<br \>";
	print "</td>";
	print "</tr>";
	$position++;
}
print "</table>";


print $page->getBottomSection();

