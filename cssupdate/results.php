<?php

require_once("Template.php");
require_once("DB.class.php");

$page = new Template("DB Lab");
$page->setTopSection();
$page->setHeadSection("<link rel='stylesheet' href='prettylab.css'>");
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

//get POST input and assign to variable here
//sanitize input
if(!empty($_POST['name'])){
	$link = $db->returnDB();
	$input = $_POST['name'];
	$safeInput = mysqli_real_escape_string($link,$input);
	$query = "SELECT booktitle, isbn, author FROM bookinfo WHERE booktitle LIKE '%{$safeInput}%' OR isbn LIKE '%{$safeInput}%' OR author LIKE '%{$safeInput}%'";
	$result = $db->dbCall($query);
	$position=0;
	print "<body><table style='width:100%'>";
	print "<main><header><tr>";
	print "<th>Book Title</th>
		  <th>ISBN</th>
		  <th>Author</th></header>";
	print "</tr>";
	while($position < count($result)){
		print "<tr>";
		print "<td>";
		print $result[$position]['booktitle'] . " ";
		print "</td>";
		print "<td>";
		print $result[$position]['isbn'] . " ";
		print "</td>";
		print "<td>";
		print $result[$position]['author'] . " ";
		print "</td>";
		print "</tr>";
		$position++;
	}
	print "</table></body>";
}else{
	print "You must fill in a search term";
}



print $page->getBottomSection();

