<?php $contact_bt_spec = "javascript:NewWindow('contact_us.php','popup','620','850','center','front');"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="include/style.css" rel="stylesheet" type="text/css">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $matatag_description; ?>">
<meta name="title" content="<?php echo $page_title; ?>">
<link rel="stylesheet" href="include/style.css" type="text/css">

<!-- slideshow -->
<SCRIPT TYPE="text/javascript" src="include/slideshow.js"></SCRIPT>
<SCRIPT TYPE="text/javascript">
<!--

SLIDES = new slideshow("SLIDES");
SLIDES.timeout = 3000;
SLIDES.prefetch = -1;
SLIDES.repeat = true;

s = new slide();
s.src =  "images/slide1.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide2.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide3.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide4.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide5.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

if (false) SLIDES.shuffle();

//-->
</SCRIPT>

<!-- pop-up -->
<SCRIPT LANGUAGE='JAVASCRIPT' TYPE='TEXT/JAVASCRIPT'>
    <!--
    var win=null;
    function NewWindow(mypage,myname,w,h,pos,infocus){
    if(pos=="random"){myleft=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;mytop=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
    if(pos=="center"){myleft=(screen.width)?(screen.width-w)/2:100;mytop=(screen.height)?(screen.height-h)/2:100;}
    else if((pos!='center' && pos!="random") || pos==null){myleft=0;mytop=20}
    settings="width=" + w + ",height=" + h + ",top=" + mytop + ",left=" + myleft + ",scrollbars=yes,location=no,directories=no,status=no,menubar=yes,toolbar=no,resizable=yes";win=window.open(mypage,myname,settings);
    win.focus();}
    // -->
    </script>
    
</head>

<body>

<div class="container">
  <div class="header">
  <div class="address_phone"><img src="images/address_phone.png" width="536" height="60"></div>
  <div class="title"><img src="images/title.png" width="184" height="86"></div>
      
</div><!-- end .header -->
<div class="nav_bar"><table width="500" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="middle" align="center">
    <td><a onmouseover="style.color='#000'" onMouseOut="style.color='#FFF'" href="index.php" style="text-decoration:none;color:#FFF">Home</a></td>
    <td>|</td>
    <td><a onmouseover="style.color='#000'" onMouseOut="style.color='#FFF'" href="about_us.php" style="text-decoration:none;color:#FFF">About Us</a></td>
    <td>|</td>
    <td><a onmouseover="style.color='#000'" onMouseOut="style.color='#FFF'" href="directions.php" style="text-decoration:none;color:#FFF">Directions</a></td>
    <td>|</td>
    <td><a onmouseover="style.color='#000'" onMouseOut="style.color='#FFF'" href="<?php echo $contact_bt_spec; ?>" style="text-decoration:none;color:#FFF">Contact Us</a></td>
  </tr>
</table>
</div><!-- end .nav_bar -->
  <div class="sidebar_left">
    <table width="225" border="0" cellpadding="0" cellspacing="0" id="table_format" style="font-size:14px;font-weight:bold">
  <tr>
    <td height="55" align="center"><strong><span style="font-size:24px;color:#fff">Our Jewelry</span></strong></td>
  </tr>
  <tr>
    <td height="25" valign="middle"><a href="bridal-engagement.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Bridal / Engagement</a></td>
  </tr>
  <tr>
    <td height="25"><a href="anniversary.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Anniversary</a></td>
  </tr>
  <tr>
    <td height="25"><a href="diamond-bracelet.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Diamond Bracelets</a></td>
  </tr>
  <tr>
    <td height="25"><a href="diamond-earrings.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Diamond Earrings</a></td>
  </tr>
  </table>
  <div style="margin-left:15px;"><img src="images/gold_diamond.png" width="135" height="94"></div>
  <table width="225" border="0" cellpadding="0" cellspacing="0" id="table_format" style="font-size:14px;font-weight:bold">
  <tr>
    <td><a href="diamond-pendants.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Diamond Pendants</a></td>
  </tr>
  <tr>
    <td><a href="diamond-rings.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Diamond Rings</a></td>
  </tr>
  <tr>
    <td><a href="gemstones.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Gemstones</a></td>
  </tr>
  <tr>
    <td><a href="estate-vintage-antique.php"><img src="images/green_jewl.png" width="24" height="22">Estate / Vintage / Antique</a></td>
  </tr>
  </table>
  <br><br>
  <table width="225" border="0" cellpadding="0" cellspacing="0" id="table_format" style="font-size:14px;font-weight:bold">
  <tr>
    <td><a href="gold.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Gold</a></td>
  </tr>
  <tr>
    <td><a href="platinum.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Platinum</a></td>
  </tr>
  <tr>
    <td><a href="silver-alternate-metals.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Silver & Alternate metals</a></td>
  </tr>
  <tr>
    <td><a href="mens.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Men's</a></td>
  </tr>
  </table>
  <br><br>
  <table width="225" height="228" border="0" cellpadding="0" cellspacing="0" id="table_format" style="font-size:14px;font-weight:bold">
  <tr>
    <td><a href="manatee-florida.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Manatee / Florida</a></td>
  </tr>
  <tr>
    <td valign="bottom" height="68"><a href="sara-blaine.php"><img src="images/green_jewl.png" width="24" height="22">Sara Blaine</a></td>
  </tr>
  <tr>
    <td height="25"><a href="watches.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Watches</a></td>
  </tr>
  <tr>
    <td height="25"><a href="religious.php" style="text-decoration:none"><img src="images/green_jewl.png" width="24" height="22">Religious</a></td>
  </tr>
  <tr>
    <td align="center"><br><br><br><img src="images/sidebar_left_pic7.png" width="225" height="230"></td>
  </tr>
  <!--<tr>
    <td>&nbsp;</td>
  </tr>-->
</table>
<div style="position:relative;width:83px;height:87px;top:-870px;left:150px;"><img src="images/silver_diamond.png" width="83" height="87"></div>
<div style="position:relative;width:76px;height:88px;top:-790px;left:150px;"><img src="images/pendent.png" width="76" height="88"></div>
<div style="position:relative;width:128px;height:82px;top:-760px;left:90px;"><img src="images/manatee.png" width="128" height="82"></div>
<div style="position:relative;width:55px;height:130px;top:-730px;left:150px;"><img src="images/seahorse.png" width="55" height="130"></div>
<div style="position:relative;width:120px;height:117px;top:-715px;left:100px;"><img src="images/sting_ray.png" width="120" height="117"></div>

</div><!-- end .sidebar_left -->
