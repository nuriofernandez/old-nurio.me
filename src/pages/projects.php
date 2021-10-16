<?php
function renderProject($name, $tabulation)
{
	ob_start();
	$include_return = include('pages/projects/' . $name . '.php');
	$contents = ob_get_contents();
	ob_end_clean();

	echo str_replace("\n", "\n" . $tabulation, $contents) . "\n";
}

?>

<div class="mobile-adapt container">

	<div style="height:50px"></div>

	<!-- START OF 'minecraft-server-list' PROJECT CONTENT -->
	<?php renderProject('minecraft-server-list', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>

	<!-- START OF 'reflected-event-handler' PROJECT CONTENT -->
	<?php renderProject('reflected-event-handler', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>

	<!-- START OF 'gta-sa-memory-hacking' PROJECT CONTENT -->
	<?php renderProject('gta-sa-memory-hacking', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>

	<!-- START OF 'ads-link-skiper' PROJECT CONTENT -->
	<?php renderProject('ads-link-skiper', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>

	<!-- START OF 'glaucus' PROJECT CONTENT -->
	<?php renderProject('glaucus', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>

	<!-- START OF 'minecraft-servers' PROJECT CONTENT -->
	<?php renderProject('minecraft-servers', "\t"); ?>
	<!-- END OF PROJECT CONTENT -->

	<div style="height:50px"></div>
</div>