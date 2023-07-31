<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/bulma.min.css">
</head>
<body>
<section class="hero is-medium is-info is-bold">
	<div class="hero-body">
		<div class="container has-text-centered">
			<h2 class="subtitle">
				Your local development environment
			</h2>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column">
				<h3 class="title is-3 has-text-centered">Environment</h3>
				<hr>
				<div class="content">
					<ul>
						<li>server type <?=$_SERVER['SERVER_SOFTWARE'];?></li>
						<li>PHP <?= phpversion(); ?></li>
						<li>
							<?php

							$link = mysqli_connect("database", "marketes", "test12345", null);

							/* check connection */
							if (mysqli_connect_errno()) {
								printf("MySQL connecttion failed: %s", mysqli_connect_error());
							} else {
								/* print server version */
								printf("MySQL Server %s", mysqli_get_server_info($link));
							}
							/* close connection */
							mysqli_close($link);
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>
