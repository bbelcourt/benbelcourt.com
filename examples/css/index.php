<?php
	include("../../config.php");
	$pageTitle = "CSS";
	include($PATH_ROOT . "includes/header.php");
?>
		<div class="section">
			<h1>CSS</h1>
			<p>This page contains various CSS examples and experiments.</p>
		</div>

		<div id="transforms" class="section">
			<h1>Transforms</h1>
			<div class="sandbox">
				<div class="ribbon">
					<p>This box is transformed</p>
				</div>

				<div class="container">
					<div class="flip-widget">
						<div class="front face">
							<div class="content">
								<h2>Item List</h2>

								<ul>
									<li>Item 01</li>
									<li>Item 02</li>
									<li>Item 03</li>
								</ul>

								<a href="#" class="edit trigger">edit</a>
							</div>
						</div>
						<div class="back face">
							<div class="content">
								<h2>Edit Item List</h2>

								<form id="edit-item-list" action="#">
									<div class="row">
										<label for="input_01">Input 01</label>
										<input type="text" name="input_01" value="" />
									</div>
									<div class="row">
										<label for="input_02">Input 02</label>
										<input type="text" name="input_02" value="" />
									</div>
									<div class="buttons">
										<input type="submit" class="trigger" name="submit" value="Submit" />
										<a href="#" class="cancel trigger">cancel</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include($PATH_ROOT . "includes/footer.php");
?>
