<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<title></title>
</head>

<body>
<form action="include/formmail_recaptcha.php" method="post" accept-charset="utf-8" name="contact_form" >
<input type="hidden" name="subject" value="Online Contact form from Jim Green Jewelers" />
     <input type="hidden" name="recipient" value="jgjewelers@embarqmail.com" />
     <!--<input type="hidden" name="recipient" value="john@naturecoastdesign.net" />-->
     <input type="hidden" name="required" value="first_name,last_name,email,answer" />
     <input type="hidden" name="redirect" value="" />
<fieldset>
<legend>Contact Us</legend>

</p><em>Required fields indicated by *</em></p>
<p>
  <label for="first_name">* First Name:</label> 
	<input type="text" name="first_name" id="first_name"/> 
</p>
<p>
	<label for="last_name">* Last Name:</label>
	<input type="text" name="last_name" id="last_name"/>
</p>
<p>
	<label for="phone">Phone:</label>
	<input type="number" name="phone" id="phone" size="10" />
</p>
<p>
  	<label for="email">* Email:</label>
	<input type="text" name="email" id="email" />
</p>
<p>
	<label for="interested in">I am interested in learning more about your:</label>
</p>
<p><input name="Custom Jewelry" type="checkbox" value="Yes">Custom Jewelry &nbsp;&nbsp;&nbsp;
<input name="Bridal / Engagement" type="checkbox" value="Yes">Bridal / Engagement</p>
<p><input name="Anniversary" type="checkbox" value="Yes">Anniversary &nbsp;&nbsp;&nbsp;
<input name="Diamond Bracelets" type="checkbox" value="Yes">Diamond Bracelets</p>
<p><input name="Diamond Earrings" type="checkbox" value="Yes">Diamond Earrings &nbsp;&nbsp;&nbsp;
<input name="Diamond Pendants" type="checkbox" value="Yes">Diamond Pendants</p>
<p><input name="Diamond Rings" type="checkbox" value="Yes">Diamond Rings &nbsp;&nbsp;&nbsp;
<input name="Gemstones" type="checkbox" value="Yes">Gemstones</p>
<p><input name="Estate/Vintage/Antique" type="checkbox" value="Yes">Estate/Vintage/Antique &nbsp;&nbsp;&nbsp;
<input name="Gold" type="checkbox" value="Yes">Gold</p>
<p><input name="Platinum" type="checkbox" value="Yes">Platinum &nbsp;&nbsp;&nbsp;
<input name="Silver & Alternate Metals" type="checkbox" value="Yes">Silver & Alternate Metals</p>
<p><input name="Men's" type="checkbox" value="Yes">Men's &nbsp;&nbsp;&nbsp;
<input name="Manatee/Florida Theme" type="checkbox" value="Yes">Manatee/Florida Theme</p>
<p><input name="Sara Blaine" type="checkbox" value="Yes">Sara Blaine &nbsp;&nbsp;&nbsp;
<input name="Watches" type="checkbox" value="Yes">Watches</p>
<p><input name="Religious" type="checkbox" value="Yes">Religious &nbsp;&nbsp;&nbsp;
<input name="Other" type="checkbox" value="Yes">Other</p>
<p>
  <label for="comments">Questions/Comments:</label>
<textarea name="comments" id="text" cols="35" rows="5" align="right"></textarea></p>
<?php
echo "<div style='text-align:left;'>";
echo "<p><em>* To reduce SPAM, please answer the question below.</em><br>";
echo "Name a state, in the United States, that startes with the letter 'F'?&nbsp;&nbsp;";
echo "<input type='text' size='10' name='answer' />";
echo "</div></p>";
?>
<div><button type="submit"><span>Submit</span></button></div>

</fieldset>
</form>
</body>
</html>