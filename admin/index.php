<?php include 'password_protect.php'; ?>
<?php include '../header.php';?>
<?php include '../connect.php'; ?>
<?php
 
$querytotal = "SELECT COUNT(*) FROM tb_candidates";
$querytotalSEN = "SELECT COUNT(*) FROM tb_candidates WHERE testrole = 'SEN'";
$querytotalEVS = "SELECT COUNT(*) FROM tb_candidates WHERE testrole = 'EVS'";


$total = mysql_fetch_row(mysql_query($querytotal));
$totalSEN = mysql_fetch_row(mysql_query($querytotalSEN));
$totalEVS = mysql_fetch_row(mysql_query($querytotalEVS));
?>



<div class="ribbon l-box-lrg pure-g" align="center">
	<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
	<h2>Candidate list</h2>
	<a href="resultsen.php">Show SEN candidates</a> - <a href="resultevs.php">Show EVS candidates</a>
	<p>A total of <?php echo "<b>".$total[0]."</b>"; ?> candidates have been tested until today:
	<?php echo "<b>".$totalSEN[0]."</b>"; ?> candidates for SEN, <?php echo "<b>".$totalEVS[0]."</b>"; ?> candidates for EVS.</p> 
	</div>
</div>
<?php include '../footer.php';?>

