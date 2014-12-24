<?php include 'header.php';?>

<div class="splash-container">
	<div class="splash">
		<img class="splash-head" width="350" src="/img/SEN.png">
		<p class="splash-subhead">Welcome To The SEN Test</P>
		<p class="splash-subhead">You will use the form below to submit your tests with us at the end of your session. Please make sure
		to complete and save all necessary tests BEFORE submitting the form.</p>
	</div>
</div>


<div class="content-wrapper">
	<div class="content">
	<h2 class="content-head is-center">Instructions:</h2>
	<li class="pure-menu-selected is-center"> Please <a href="iq.php" target="_blank"> complete the mandatory IQ test</a> first. <br .> Enter your PIN code given by our HR department.</li>

	<p>
	<li class="pure-menu-selected is-center">Open and complete the <a href="/docs/EnglishTest.pdf" target="_blank">English Test</a>  and <a href="/docs/FrenchTest.pdf" target="_blank">French Test</a>.</li>	
	</p>
	<p>
	<li class="pure-menu-selected is-center">Save all documents on the Desktop.</li>
	</p>
	<p>
	<li class="pure-menu-selected is-center">Complete the form below.</li>
	</p>
	<p>
	<li class="pure-menu-selected is-center">Delete your saved documents from the Desktop.</li>
	</p>
	<p>
	<li class="pure-menu-selected is-center">Close the browser and shut down the computer.</li>
	</p>
</div>

<div class="ribbon l-box-lrg pure-g" align="center">
	<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
	<form class="pure-form pure-form-stacked" method="post" action="insertsen.php" enctype="multipart/form-data">
                    <fieldset>
			<input id="testrole" name="testrole" value="SEN" type="hidden" />
                        <label for="firstname">First Name(s):</label>
                        <input id="firstname" name="firstname" type="text" placeholder="Your First Name(s)" required>
                        <label for="lastname">Last Name(s):</label>
                        <input id="lastname" name="lastname" type="text" placeholder="Your Last Name(s)" required>
                        <label for="etest">Select your English Test pdf file:</label>
                        <input id="etest" name="etest" type="file" placeholder="English Test" required>
			<label for="ftest">Select your French Test pdf file:</label>
			<input id="ftest" name="ftest" type="file" placeholder="French Test" required>
                        <button type="submit" class="pure-button">Submit</button>
                    </fieldset>
                </form>
	</div>
</div>

<?php include 'footer.php';?>
