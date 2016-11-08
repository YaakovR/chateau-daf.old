<?php
	require "top.php";
	require "utils/getMesechtos.php";
?>

		<div class="container" id="mainContainer">
			<div class="row">
				<div class="well col-sm-4" id="shiurimWell">
					<ul id="shiurim">
						<?php foreach ($mesechtos as $mesechta) : ?>
							<li><a class="mesechta" href=""> <?php echo $mesechta['name']; ?> </a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div id="boxDiv">
					<iframe id="boxIframe" src="https://app.box.com/embed_widget/s/e73ljh7yvzz1825now8isf324utugf1v?view=list&sort=name&direction=DESC&theme=blue" width="730" height="550" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen> </iframe>
				</div>
			</div>
		</div>

		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script-->
		<script src="../../jquery-2.2.2.min.js"></script>
		<script id="mainScript" src="./models/app.js"></script>
		<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
		<script src="../../bootstrap-3.3.6/js/bootstrap.min.js"></script>
		<script src="js/dafYomi.js"></script>
	</body>
</html>