<?php
include("haut-page.php");
include("navi-peli.php");
?>

	<div id="cadre-blanc-produit">

<?php
	if ($_GET['page'] == "isistation-longue" OR $_GET['page'] == "")
	{
		include("page-produit-include/slongue.php");
	}

	if ($_GET['page'] == "isistation-plate")
	{
		include("page-produit-include/splate.php");
	}

	if ($_GET['page'] == "isiscenter")
	{
		include("page-produit-include/center.php");
	}
    
    if ($_GET['page'] == "console-murale")
	{
		include("page-produit-include/murale.php");
	}

	if ($_GET['page'] == "pupitre")
	{
		include("page-produit-include/pupitre.php");
	}

	if ($_GET['page'] == "bureau")
	{
		include("page-produit-include/bureau.php");
	}
?>


	</div><!--fin cadre-blanc-produit-->

<?php
include("bas-page.php");
?>