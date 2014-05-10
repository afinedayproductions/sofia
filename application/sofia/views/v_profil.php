<div id="profil-index">

	<h2>Qui suis-je ?</h2>
	<h3>Et ce que je veux</h3>

	<div class="langages-group clearfix">

		<div>Langages:</div>

		<div class="langages">
		
		<?php for ($i = 0; $i < count($langages); $i++) {

			if($i == $langages_column_separator || $i == 2 * $langages_column_separator)
				echo '</div>
		<div class="langages">
			<div>' . $langages[$i]->name . ' <span>' . $langages[$i]->duration . '</span></div>';
			else
				echo '<div>' . $langages[$i]->name . ' <span>' . $langages[$i]->duration . '</span></div>';
		
		} ?>

		</div>

	</div>
	<!-- end .clearfix -->

	<div class="un-petit-mot">

		<div>Un petit mot:</div>

		<br>

		<p>
			Je suis Fabien MATHIS, j'ai 23 ans. Je suis un développeur web à Toulouse, France. 
			<br>
			J'ai validé une licence pro RTAI à l'université Toulouse 1 Capitole.
			<br><br>
			Je recherche actuellement une agence web ou un agence de communication à Toulouse ou en proche banlieue pour un travail ! Si vous avez besoin d'un développeur web, vous pouvez télécharger mon CV.
		</p>

		<div class="a-block">
			<a class="a-block" href="<?php echo docs_url('Fabien_MATHIS_CV.pdf'); ?>" download="Fabien_MATHIS_CV.pdf">Télécharger mon CV</a>
		</div>

	</div>
	<!-- end .un-petit-mot -->

</div>
<!-- end #profil-index -->