<?php include 'password_protect.php'; ?>
<?php include '../header.php';?>
<?php include '../connect.php'; ?>
<?php
$query = "SELECT COUNT(*) FROM tb_candidates WHERE testrole = 'SEN'";
$total = mysql_fetch_row(mysql_query($query));
?>



<div class="content is-center">
	<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
	<h2>Candidate list SEN</h2>
	<p>There are <?php echo "<b>".$total[0]."</b>"; ?> records in the list.</p>
	<a href="resultevs.php">Show EVS candidates</a>
	



<?php
include "../connect.php";

$result = mysql_query("SELECT * FROM tb_candidates where testrole = 'SEN' ORDER BY submitdate DESC");
$file_path = "http://testing.ecovadis.lan/docs/sen/";


echo "<table  border='0' >
<tr>
<th>Submit Date</th>
<th>Firstname</th>
<th>Lastname</th>
<th>English Test</th>
<th>French Test </th>
</tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['submitdate'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo '<td><a href="' . $file_path.$row['lastname']."_".$row['firstname']."/".$row['etestname'].'" target="_blank">' . 'Open</a></td>';
  echo '<td><a href="' . $file_path.$row['lastname']."_".$row['firstname']."/".$row['ftestname'].'" target="_blank">' . 'Open</a></td>'; 
  echo "</tr>";
}

echo "</table>";

mysql_close();
?>

<br />
<br />
	</div>
</div>
<?php include '../footer.php';?>



<?php include 'footer.php';?>

