<?php
	include("../../config.php");
	$pageTitle = "JavaScript";
	include($PATH_ROOT . "includes/header.php");
?>
		<div class="section">
			<h1>JavaScript</h1>
			<p>This page contains various JavaScript examples and experiments. This includes DOM creation and manipulation, Event binding and delegation, AJAX, and JSON. These examples use native code rather than libraries (jQuery, YUI, Dojo).</p>
			<p><a class="external" href="/assets/js/script.js">View the JavaScript source</a></p>
		</div>

		<div id="xhr" class="section">
			<h1>Ajax</h1>
			<p>Example of XMLHttpRequest implementation</p>
			<div class="results">

			</div>
			<p><a href="<?php echo $URL_ROOT; ?>examples/javascript/json.php" class="trigger">Send</a></p>
		</div>

		<div id="delegate" class="section">
			<h1>DOM/Events</h1>
			<p>Example of DOM manipluation, event binding, and event delegation</p>
			<ul class="results">
				
			</ul>
			<p><a href="#" class="trigger">Add Link</a></p>
		</div>
<?php
	include($PATH_ROOT . "includes/footer.php");
?>
