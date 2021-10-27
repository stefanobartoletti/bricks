<?php 
/**
* Template Name: Pattern Library
*
*/


?>

<?php get_header(); ?>

<?php 

$bs_colors = [
	'primary',
	'secondary',
	'light',
	'dark',
	'success',
	'info',
	'warning',
	'danger'
]

?>

<main id="content-wrapper">

	<div class="container py-5">

		<h1>Pattern Library</h1>

		<div id="colors" class="row py-5">

			<h2 class="mb-5">Colors</h2>

			<?php foreach ($bs_colors as $color) { ?>

			<div class="col-12 col-md-3 pb-3">
				<div class="bg-<?php echo $color; ?> p-5">
				</div>
				<p class="text-capitalize"><?php echo $color ?></p>
			</div>

			<?php } ?>

		</div> <!-- #colors -->

	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
