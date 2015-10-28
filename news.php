<?php include_once 'partials/header.php' ?>

		<div class="news-container">

			<div class="news-header">
				<h1>Actualités</h1>
				<p>Découvrez toute l'actualité du cinéma</p>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<?php for ($i = 0; $i < 6; $i++) { ?>
					<div class="news-post">
						<h2>Titre actualité</h2>
						<p>January 1, 2014 by <a href="#">John</a></p>

						<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
						<hr>
						<blockquote>
							<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</blockquote>
					</div>
					<?php } ?>
				</div>

				<?php include_once 'partials/sidebar-news.php' ?>

			</div>
		</div>

<?php include_once 'partials/footer.php' ?>