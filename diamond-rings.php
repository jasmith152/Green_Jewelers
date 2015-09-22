<?php
$page_title = 'Diamond Rings Page';
$matatag_description = '';
include('header.php');
?>
<div class="content" style="width:700px;">
  <table id="table_format" width="100%" border="0" cellspacing="2" cellpadding="2" style="font-size:14px">
			<tr>
				<td colspan="2"><strong style="font-size:24px">Diamond Rings</strong></td>
			</tr>
			<tr>
				<td align="center">
						<img src="images/diamond-rings.jpg" alt="" height="335" width="350" border="0" />
				</td>
                <td>
					<p>Welcome to Jim Green Jewelers. Since 1987, Jim Green has offered the finest jewelry at competitive prices. His reputation is well known in Crystal River, Florida and throughout Citrus County. This recognition is evidenced by Jim Green Jewelers receiving the Citrus County Chronicle Reader's Choice “Best of the Best” award for sixteen consecutive years. With over 30 years experience, craftsmanship is evident in every piece of jewelry Jim creates, refurbishes and repairs.</p>
					<p>Jim is joined at Jim Green Jewelers by his wife Julie. Together they select each piece of jewelry in their showroom. Including Bridal and Engagement, Anniversary, Vintage/Antique, Gold, Silver, Platinum, Diamonds, Gem Stones, Religious, and Manatee and Florida theme jewelry. </p>
					
				</td>
				
			</tr>
            </table>
            <?php
			//connect to database
			require ("include/dbconn.php");
			//Set Defualt Query
			$sql = 'SELECT * FROM diamond_rings ORDER BY id ASC';
			if( $result = @mysql_query($sql) )
			{
				while( $row = mysql_fetch_array($result) )
				{
					echo "<table id='table_format' style='font-size:14px' width='100%' border='0' cellspacing='3' cellpadding='3'>";
					echo "<tr>";
					echo "<td width='33%' rowspan='2'><img src='".$row['image_path']."' alt='pic didnt work :('/></td>";
					echo "<td align='left' width='28%'><strong>".$row['title']."</strong></td>";
					echo "<td align='right' width='39%'><span style='color:#F00;font-size:16px;'>Call 352-563-0633 for pricing</span></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='left' valign='top' colspan='2'>".$row['description']."</td>";
					echo "</tr>";
					echo "<table>";
				}
			}
			else
			{
				echo "fail mysql_query because: " . mysql_error()."\n";
				echo "running from query: " . $sql."\n";
			}
			?>
            <table id="table_format" width="100%" border="0" cellspacing="2" cellpadding="2" style="font-size:10px;color:#00F">
			<tr>
				<td align="center">
			<a href="bridal-engagement.php" style="color:#00F">Bridal / Engagement</a> | <a href="anniversary.php" style="color:#00F">Anniversary</a> | <a href="diamond-bracelet.php" style="color:#00F">Diamond Bracelets</a> | <a href="diamond-earrings.php" style="color:#00F">Diamond Earrings</a> | <a href="diamond-pendents.php" style="color:#00F">Diamond Pendants</a> | <a href="diamond-rings.php" style="color:#00F">Diamond Rings</a> | <a href="gemstones.php" style="color:#00F">Gemstones</a><br />
						<a href="estate-vintage-antique.php" style="color:#00F">Estate / Vintage / Antique</a> | <a href="gold.php" style="color:#00F">Gold</a> | <a href="platinum.php" style="color:#00F">Platinum</a> | <a href="silver-alternate-metals.php" style="color:#00F">Silver &amp; Alternate Metals</a> | <a href="mens.php" style="color:#00F">Men's</a> | <a href="manatee-florida.php" style="color:#00F">Manatee / Florida</a> | <a href="sara-blaine.php" style="color:#00F">Sara Blaine</a> | <a href="watches.php" style="color:#00F">Watches</a> | <a href="religious.php" style="color:#00F">Religious</a>
				</td>
			</tr>
		</table>
</div><!-- end .content -->
<?php
include('footer.php');
?>  