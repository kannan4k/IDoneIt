		<link href="./css/style.css" rel="stylesheet">
		<script src="./js/jquery.js" type="text/javascript" ></script>
		


		<header>
			<div class="container">
				<div class="row">
					<h1 id="logo" class="span4"><a href="index.php" title="iDoneIt"><span class="blue"><strong>iDoneIt</strong></span></a></h1>
					<nav class="span8" id="navigation">
						<ul class="nav nav-pills">
							<div class="blue" id="login_user"><?php
								if($_SESSION['mobile_number'])
								{
									echo "Welcome: ".$_SESSION['mobile_number'];?>
									<li class="li-tour"><a href="logout.php">Logout</a></li>
									<?php
								}
								?>
							</div>
							
							<li></li>
							<li></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>