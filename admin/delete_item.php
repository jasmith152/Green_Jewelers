<?php

$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

//Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

if ( isset($_GET['id']) )
{
	$id = $_GET['id'];
}
if ( isset($_GET['page']) )
{
	$page = $_GET['page'];
}

if ( isset($_POST['submit']) and $_POST['submit'] == 'Delete')
{
	//connect to database
	require ("../include/dbconn.php");
	
	$id = $_POST['id'];
	$page = $_POST['page'];

	// delete record 
    $sql = "DELETE FROM ".$page." WHERE id=".$id." LIMIT 1";
   
    if (@mysql_query($sql)) {
   		if (@mysql_affected_rows($dbcnx) == 1) {
			print "Item has been deleted.";
	    } else {
			print "Error deleting item: " . mysql_error()."<br>
			The query being run was: " . $sql . "";
	    }

    }
	else
	{
		print '<p class = "Colors_and_font">fail mysql_query (inside submit) because: ' . mysql_error(). '</p>
				  <p class = "Colors_and_font">running from query: ' . $sql . '</p>';
	}
}
?>
	
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Delete Item Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body style=" background-color:#E2EEFB; font-family:Arial, Helvetica, sans-serif;font-size:12px">
    <a href="index.php" style="color:#00F">Back to Database</a>
    <?php
		if (!empty($msg)) 
		{
	    	echo "<p style='color: blue;'>$msg</p>\n";
		}
		if (!empty($error))
		{
	    	echo "<p style='color: red;'>$error</p>\n";
		}
		
		
	?>
    
   	<form action="<?php echo $PHP_SELF; ?>" method="post" name="edit_item_registration">
                                                            
                                       
	  <table align="center" id="" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr align="center">
    <td>Picture</td>
    <td>Title</td>
    <td>Description</td>
  </tr>
  <?php
  //connect to database
  require ("../include/dbconn.php");
  $sql = "SELECT * FROM ".$page." WHERE id=".$id."";
  if( $result = @mysql_query($sql) )
		{
			
				while( $row = mysql_fetch_array($result) )
				{
				echo "<tr>";
				echo "<td align='center'><img src='../".$row['image_path']."' alt='pic didnt work :('/></td>";
				echo "<td align='center'>".$row['title']."</td>";
				echo "<td>".$row['description']."</td>"; 
				echo "</tr>";
				}
			
		}
		else
		{
			print '<p class = "Colors_and_font">fail mysql_query because: ' . mysql_error(). '</p>
				   <p class = "Colors_and_font">running from query: ' . $sql . '</p>';
		}
 
?> 
</table>	
                                            
	  <p align="left"><input type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure you want to delete the data ?');"/> <input type="hidden" name="id" value="<? echo $id; ?>"><input type="hidden" name="page" value="<? echo $page; ?>"></p>
	</form>
	</body>
	</html>