<?php

$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

//Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

//Set variables
$table = $_POST['page'];
$img = 0;

if (  isset($_POST['submit']) && $_POST['submit'] == 'Add Entry' )
{
	 $photo_name = $_POST['title'];
 
  	if (!empty($_FILES['upload']['name'])) {
      $uploaddir = '/home/jimgreen/public_html/images/';
	  
      $uploadfile = $uploaddir.$photo_name.".jpg";
	  $img_name = $photo_name.".jpg";
      if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
          //print "File is valid, and was successfully uploaded. ";
          //print "Here's some more debugging info:\n";
          //print_r($_FILES);
          //shell_exec('chmod a+r ../uploads/'.$img_name1);
		  $msg = "file uploaded successfully";
		  $img = 1;
		  $uploaddir_short = 'images/'.$photo_name;
      } else {
          print "Possible file upload attack!  Here's some debugging info:\n";
          print_r($_FILES);
          exit;
      }
  	}

  	require ("../include/dbconn.php");
	//creating SQL query
	$sql = "INSERT INTO ".$table." (";
	 /*title, description) VALUES ('";
	.$_POST['image_path']."','".$_POST['title']."','".$_POST['description']."')";*/

	if ( $img > 0 )
	{
		$sql .= "image_path,";
	}
	if ( !empty($_POST['title']) )
	{
		$sql .= "title,";
	}
	if ( !empty($_POST['description']) )
	{
		$sql .= "description";
	}
	$sql .= ") VALUES(";
	 
	if ( $img > 0 )
	{
		//echo $uploadfile;
		$sql .= "'".$uploaddir_short.".jpg',";	
	}
	if ( !empty($_POST['title']) )
	{
		$sql .= "'".$_POST['title']."'";	
	}
	if ( !empty($_POST['description']) )
	{
		$sql .= ",'".$_POST['description']."'";	
	}
	$sql .= ")";
	
	//creating SQL query
	if (@mysql_query($sql)) {$msg .= " Item has been added.";} 	else {$error .= "Error adding item: " . mysql_error();
	echo $sql;}?>
	
    <!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Add Item Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body style="background-color:#E2EEFB; font-family:Arial, Helvetica, sans-serif;font-size:12px">
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
       
   	<form action="<?php echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data" name="add_item_registration">

	  <p>Title: <input type="text" name="title" size="35" /></p>
      <p><table width="281" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="66">Description:</td>
    <td width="194"><textarea name="description" cols="30" rows="6"></textarea></td>
  </tr>
</table>
 </p>
      <p>Picture: <input type="file" size="25" name="upload" /> <span style="color:#F00">Please resize picture to 220 width</span></p>
	  <p align="left"><input w type="submit" name="submit" value="Add Entry" />
      <input type="hidden" name="page" value="<?php echo $table; ?>" /></p>
	</form>
	</body>
	</html>
	
<?php }
else
{?>
	
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Add Item Page</title>
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
    
   	<form action="<?php echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data" name="add_item_registration">
                                                            
	  <p>Title: <input type="text" name="title" size="35" /></p>
      <p><table width="281" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="66">Description:</td>
    <td width="194"><textarea name="description" cols="30" rows="6"></textarea></td>
  </tr>
</table></p>
      <p>Picture: <input type="file" size="20" name="upload" /> <span style="color:#F00">Please resize picture to 220 width</span></p>
	  <p align="left"><input type="submit" name="submit" value="Add Entry" />
      <input type="hidden" name="page" value="<?php echo $table; ?>" /></p>
	</form>
	</body>
	</html>
<? }?>