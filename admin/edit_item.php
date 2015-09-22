<?php

$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

//Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

//Set variables

if ( isset($_POST['id']) )
{
	$id = $_POST['id'];
}
if ( isset($_GET['id']) )
{
	$id = $_GET['id'];
}
if ( isset($_POST['page']) )
{
	$table = $_POST['page'];
}
if ( isset($_GET['page']) )
{
	$table = $_POST['page'];
}

if ( isset($_POST['submit']) && $_POST['submit'] == 'Update Entry'  )
{
	$photo_name = $_POST['title'];
  	if (!empty($_FILE['upload']['name'])) {
	  
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
	else
	{
		$uploaddir_short = $_POST['image'];
		
	}
	$description = $_POST['description'];
	$title = $_POST['title'];
	//connect to database
	require ("../include/dbconn.php");
	 // Insert a record
    $sql = "UPDATE ".$table." SET 
            image_path='".$uploaddir_short."', 
            title='".$title."', 
            description='".$description."' 
			WHERE id=$id";
    if (@mysql_query($sql)) {
       $msg .= "Item has been added.";
	   echo $sql;
    } else {
       $error = "Error adding item: " . mysql_error();
    }
}
?>
	
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Edit Item Page</title>
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
    
  <?php
  //connect to database
  require ("../include/dbconn.php");
  $sql = "SELECT * FROM ".$page." WHERE id=".$id."";
  $result = @mysql_query($sql);
  $row = mysql_fetch_array($result);
		
?> 
</table>	
                                            
	  
    <p>Title: <input type="text" name="title" size="35" value="<?php echo $row['title']; ?>"/></p>
    <p><table width="281" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="66">Description:</td>
    <td width="194"><textarea name="description" cols="30" rows="6" ><?php echo $row['description']; ?></textarea></td>
  </tr>
</table></p>
       <p>Picture: <?php echo $row['image_path']; ?> <input type="file" size="25" name="upload" /> <span style="color:#F00">Please resize picture to 220 width</span></p>                                     
	  <p align="left"><input type="submit" name="submit" value="Update Entry" /> <input type="hidden" name="id" value="<? echo $id; ?>"><input type="hidden" name="page" value="<? echo $page; ?>">
      <input type="hidden" name="image" value="<? echo $row['image_path']; ?>"></p>
	</form>
	</body>
	</html>