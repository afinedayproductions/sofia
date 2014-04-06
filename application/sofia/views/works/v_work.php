<div id="work">

	<div class="work">
			
		<div class="work-poster">
			
			<ul>

				<?php for($i = 0; $i < count($work->images); $i++) { ?>

				<li><img src="<?php echo img_url('works/'.$work->images[$i]); ?>"></li>

				<?php } // end for count($work->images) ?>

			</ul>

			<div class="work-poster-handler clearfix">

				<?php 
					for($i = 0; $i < count($work->images); $i++) {
						if($i === 0) {
				?>

				<div class="selected" data-index="<?php echo $i; ?>"></div>

				<?php 
						} // end if $i === 0
						else { 
				?>

				<div data-index="<?php echo $i; ?>"></div>

				<?php
						} // end if else $i === 0
					} // end for count($work->images) 
				?>

			</div>
			<!-- end .work-poster-handler -->

		</div>
		<!-- end .work-poster -->

		<h1>
			<span><?php echo $work->title; ?></span>
			<span><?php echo $work->periode; ?></span>
		</h1>

		<div class="work-infos">
			
			<ul>
				<li>
					<span>Client</span>
					<?php echo $work->client; ?>
				</li>
				<li>
					<span>Rôle</span>
					<?php echo $work->role; ?>
				</li>
				<li>
					<span>Tech</span>
					<?php echo $work->tech; ?>
				</li>
			</ul>

			<div>
				<h2>Résumé</h2>
				<p><?php echo $work->resume; ?></p>

				<?php if($work->collaborateurs) { ?>

				<h2>Collaborateurs</h2>
				<p><?php echo $work->collaborateurs; ?></p>

				<?php } // end if $work->collaborateurs ?>
			</div>

			<a href="<?php echo $work->url; ?>">Accèder à l'application</a>

		</div>
		<!-- end .work-infos -->

	</div>
	<!-- end .work -->

</div>
<!-- end #works -->