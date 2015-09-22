<?php
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

//Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"';
echo '"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<title>Content Editor</title>';
echo '<link href="style.css" rel="stylesheet" type="text/css" />';
echo '</head>';

echo '<body>';


if (isset($_POST['submit'])) 
{
	require ("../include/dbconn.php");
	if (!empty($msg)) 
	{
    	echo "<p style='color: blue;'>$msg</p>\n";
	}
	if (!empty($error))
	{
    	echo "<p style='color: red;'>$error</p>\n";
	}
	switch($_POST['page']) {
	case 'anniversary':
		//Set Query
		$sql = 'SELECT * FROM anniversary ORDER BY id ASC';
		$page_name = "Anniversary Page";
	break;
	case 'bridal_engagement':
		//Set Query
		$sql = 'SELECT * FROM bridal_engagement ORDER BY id ASC';
		$page_name = "Bridal Engagement Page";
	break;
	case 'bridal_bracelet':
		//Set Query
		$sql = 'SELECT * FROM bridal_bracelet ORDER BY id ASC';
		$page_name = "Bridal Bracelet Page";
	break;
	case 'bridal_earrings':
		//Set Query
		$sql = 'SELECT * FROM bridal_earrings ORDER BY id ASC';	
		$page_name = "Bridal Earrings Page";
	break;
	case 'bridal_pendants':
		//Set Query
		$sql = 'SELECT * FROM bridal_pendants ORDER BY id ASC';	
		$page_name = "Bridal Pendants Page";
	break;
	case 'diamond_rings':
		//Set Query
		$sql = 'SELECT * FROM diamond_rings ORDER BY id ASC';	
		$page_name = "Diamond Rings Page";
	break;
	case 'estate_vintage_antique':
		//Set Query
		$sql = 'SELECT * FROM estate_vintage_antique ORDER BY id ASC';	
		$page_name = "Estate Vintage Antique Page";
	break;
	case 'gemstones':
		//Set Query
		$sql = 'SELECT * FROM gemstones ORDER BY id ASC';	
		$page_name = "Gemstones Page";
	break;
	case 'gold':
		//Set Query
		$sql = 'SELECT * FROM gold ORDER BY id ASC';	
		$page_name = "Gold Page";
	break;
	case 'manatee_florida':
		//Set Query
		$sql = 'SELECT * FROM manatee_florida ORDER BY id ASC';	
		$page_name = "Manatee Florida Page";
	break;
	case 'mens':
		//Set Query
		$sql = 'SELECT * FROM mens ORDER BY id ASC';	
		$page_name = "Men's Page";
	break;
	case 'platinum':
		//Set Query
		$sql = 'SELECT * FROM platinum ORDER BY id ASC';	
		$page_name = "Platinum Page";
	break;
	case 'sara_blaine':
		//Set Query
		$sql = 'SELECT * FROM sara_blaine ORDER BY id ASC';	
		$page_name = "Sara Blaine Page";
	break;
	case 'silver_alternate_metals':
		//Set Query
		$sql = 'SELECT * FROM silver_alternate_metals ORDER BY id ASC';	
		$page_name = "Silver Alternate Metals Page";
	break;
	case 'watches':
		//Set Query
		$sql = 'SELECT * FROM watches ORDER BY id ASC';	
		$page_name = "Watches Page";
	break;
	case 'religious':
		//Set Query
		$sql = 'SELECT * FROM religious ORDER BY id ASC';	
		$page_name = "Religious Page";
	break;
	}
	if( $result = @mysql_query($sql) )
	{
?>
<!-- Show Page Selection -->
<table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><form action="<?php echo $PHP_SELF; ?>" method="POST" name="pageselect">
Select the page you would like to edit: <select name="page" id="page" size="1">
<option value="anniversary">anniversary page</option>
<option value="bridal_engagement">bridal engagement page</option>
<option value="bridal_bracelet">bridal bracelet page</option>
<option value="bridal_earrings">bridal earrings page</option>
<option value="bridal_pendants">bridal pendants page</option>
<option value="diamond_rings">diamond rings page</option>
<option value="estate_vintage_antique">estate-vintage-antique page</option>
<option value="gemstones">gemstones page</option>
<option value="gold">gold page</option>
<option value="manatee_florida">manatee-florida page</option>
<option value="mens">mens page</option>
<option value="platinum">platinum page</option>
<option value="sara_blaine">sara-blaine page</option>
<option value="silver_alternate_metals">silver-alternate-metals page</option>
<option value="watches">watches page</option>
<option value="religious">religious page</option>
</select> <input type="submit" name="submit" id="submit" value="GO"> </form></td>
    <td><form action="add_item.php" method="POST" name="pageselect2"><input type="submit" name="submit" value="Add Item" /><input type="hidden" name="page" value="<?php echo $_POST['page']; ?>" /></form></td>
  </tr>
</table>
<!-- End Page Selection -->
<hr width="90%">
<table align="center" width="100%" border="0" cellspacing="3" cellpadding="3">
   <tr align="center">
    <td colspan="4"><span style="font-size:24px;font-weight:bold"><?php echo $page_name; ?></span></td>
  </tr>
  <tr align="center">
    <td>Picture</td>
    <td>Title</td>
    <td>Description</td>
    <td></td>
  </tr>
  <?php
  while( $row = mysql_fetch_array($result) )
  {
  	echo "<tr>";
    echo "<td align='center'><img src='../".$row['image_path']."' alt='pic didnt work'/></td>";
	echo "<td align='center'>".$row['title']."</td>";
    echo "<td>".$row['description']."</td>"; 
	echo "<td><a href='edit_item.php?id=".$row['id']."&page=".$_POST['page']."' style='color:#00F'>Edit</a>&nbsp;&nbsp;|";
	echo "&nbsp;&nbsp;<a href='delete_item.php?id=".$row['id']."&page=".$_POST['page']."' style='color:#00F'>Delete</a></td>";
  	echo "</tr>";
  }
		
}
else
{
	echo "<p style='color: red;'>fail mysql_query because: " . mysql_error(). "</p>\n";
	echo "<p style='color: red;'>running from query: " . $sql. "</p>\n";
}
?> 
</table>	
	
<?php }
else
{?>
<!-- Show Page Selection -->
<form action="<?php echo $PHP_SELF; ?>" method="POST" name="pageselect">
Select the page you would like to edit: <select name="page" id="page" size="1">
<option value="anniversary">anniversary page</option>
<option value="bridal_engagement">bridal engagement page</option>
<option value="bridal_bracelet">bridal bracelet page</option>
<option value="bridal_earrings">bridal earrings page</option>
<option value="bridal_pendants">bridal pendants page</option>
<option value="diamond_rings">diamond rings page</option>
<option value="estate_vintage_antique">estate-vintage-antique page</option>
<option value="gemstones">gemstones page</option>
<option value="gold">gold page</option>
<option value="manatee_florida">manatee-florida page</option>
<option value="mens">mens page</option>
<option value="platinum">platinum page</option>
<option value="sara_blaine">sara-blaine page</option>
<option value="silver_alternate_metals">silver-alternate-metals page</option>
<option value="watches">watches page</option>
<option value="religious">religious page</option>
</select> <input type="submit" name="submit" id="submit" value="GO"> 
<!-- End Page Selection -->
<hr width="90%">
</body>
</html>
	
<?php }?>