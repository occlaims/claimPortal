<div class="col-md-12 mb25"> 
	<?php 
	if(!empty($_SESSION['claimID'])) {
		/*$conn->execute_sql("delete", "", "claims", "c_id=?", array("i" => $_SESSION['claimID']));
		$conn->execute_sql("delete", "", "third_party", "tp_c_id=?", array("i" => $_SESSION['claimID']));
		unset($_SESSION['claimID']);*/
	} 
	?>             
    <div class="col-md-2 logobg"></div>
    <div class="col-md-10"><h3>Home</h3><div class="title-divider"></div></div>
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-10 mb25"><p>Please select an action.</p></div>
    	<?php 
		if($_SESSION['permissions']['accident_recovery'] == "Y") {
        	echo "<a href=\"". _ROOT . "/index.php?displayPage=accident_recovery\"><button type=\"button\" 
			class=\"w100 btn btn-purp navbar-btn btn-lg mr5 p25 h150 col-md-12\">Incident Recovery</button></a><br>";
         } 
		 if($_SESSION['permissions']['breakdown'] == "Y") { 
        	echo "<a href=\"". _ROOT . "/index.php?displayPage=breakdown_assistance\"><button type=\"button\" 
			class=\"w100 btn btn-yellow navbar-btn btn-lg mr5 p25 h150 col-md-12 greytext\">Breakdown Assistance</button></a><br>";
         } 
        if($_SESSION['permissions']['fnol'] == "Y") { 
			echo "<a href=\"". _ROOT . "/index.php?displayPage=fnol\"><button type=\"button\" 
			class=\"w100 btn btn-primary navbar-btn btn-lg mr5 p25 h150 col-md-12\">FNOL</button></a><br>";
        } ?>
</div> 