<?php
header ('Content-type: text/html; charset=utf-8');


include 'header.php';
include 'connect.php';

$testrole = $_POST['testrole'];
$firstname = str_replace(" ", "", $_POST['firstname']);
$lastname = str_replace(" ", "", $_POST['lastname']);
$englishtest = $_FILES['etest']['name'];
$frenchtest = $_FILES['ftest']['name'];

$extetest = pathinfo($englishtest, PATHINFO_EXTENSION);
$extftest = pathinfo($frenchtest, PATHINFO_EXTENSION);

$newnametest = date("Y-m-d").".".$lastname."_".$firstname.".EnglishTest.".$extetest;
$newnameftest = date("Y-m-d").".".$lastname."_".$firstname.".FrenchTest.".$extftest;


$targetfolder = "docs/sen/".$lastname."_".$firstname."/";

mkdir($targetfolder);
move_uploaded_file($_FILES['etest']['tmp_name'], $targetfolder.$newnametest);
move_uploaded_file($_FILES['ftest']['tmp_name'], $targetfolder.$newnameftest);

$store = "INSERT INTO tb_candidates (testrole, firstname, lastname, etestname, ftestname, cstudyname) VALUES ('$testrole', '$firstname', '$lastname', '$newnametest', '$newnameftest', '$newnamecstudy')";
mysql_query($store) or die(mysql_error());

mysql_close();
?>
<script type="text/JavaScript">
setTimeout("location.href = 'http://testing.ecovadis.lan';",10000);
</script>

<div class="content is-center">
<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
<h2>Thank You!</h2>
<p></p>
</div>


<br />
<h3>We have succesfully received your submission.</h3>
<br />

<img id="checkmark" src="/img/V.png" alt="">

<h4>Please do not forget to..</h4>
<li>delete your documents from the Desktop.</li>
<li>close the browser.</li>
<li>shut down the computer.</li>
</div>

<?php include 'footer.php';?>
