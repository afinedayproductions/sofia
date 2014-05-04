<div id="profil">

	<h1>Développeur PHP / web</h1>

	<div class="clearfix">

		<div class="historique">
		
		<?php for ($i = 0; $i < count($langages); $i++) {

			if($i == $langages_column_separator || $i == 2 * $langages_column_separator)
				echo '</div>
		<div class="historique">
			<div>' . $langages[$i]->name . ' <span>' . $langages[$i]->duration . '</span></div>';
			else
				echo '<div>' . $langages[$i]->name . ' <span>' . $langages[$i]->duration . '</span></div>';
		
		} ?>

		</div>

	</div>
	<!-- end .clearfix -->

</div>
<!-- end .profil -->