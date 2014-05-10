<nav class="clearfix">

	<a href="<?php echo base_url(); ?>" id="logo">
		<img src="<?php echo img_url('panda/afineday-64x.png'); ?>" alt="AFDP" height="64" width="64">
	</a>
	<!-- end #logo -->

	<label for="nav-input">☰</label>
	<input type="checkbox" name="nav-input" id="nav-input">

	<ul>
		<li><?php echo anchor('', 'Home'); ?></li><!--
		--><li><?php echo anchor('works/all/', 'Travaux'); ?></li><!--
		--><li><?php echo anchor('contact', 'Contact'); ?></li>
	</ul>

</nav>
<!-- end nav -->