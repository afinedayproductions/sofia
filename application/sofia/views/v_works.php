<div id="works">

	<h2>Travaux que j'ai réalisés</h2>
	<h3>Seul ou en équipe</h3>

	<div class="work-resume-group clearfix">

		<?php
			foreach ($works as $key => $work) {
		?>

			<div class="work-resume" style="background-image: url('<?php echo img_url('works/' . $work->work_ID . '/' .$work->background); ?>')">

				<a href="<?php echo base_url(); ?>works/<?php echo $work->work_ID; ?>">
					<h2><span><?php echo $work->title; ?></span></h2>
				</a>

			</div>
			<!-- end .work-resume -->

		<?php
			} // end foreach $works
		?>

	</div>
	<!-- end .works-resume-group -->

</div>
<!-- end #works -->