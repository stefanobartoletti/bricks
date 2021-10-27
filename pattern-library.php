<?php
/**
* Template Name: Pattern Library
*
*/

get_header();

$bs_colors = array(
	'primary',
	'secondary',
	'light',
	'dark',
	'success',
	'info',
	'warning',
	'danger',
)

?>

<main id="content-wrapper">

	<div class="container py-5">

		<h1 class="border-bottom">Pattern Library</h1>

		<div id="colors" class="row pt-5">

			<h2 class="border-bottom mb-5">Colors</h2>

			<?php foreach ( $bs_colors as $color ) { ?>

			<div class="col-12 col-md-3 pb-3">
				<div class="bg-<?php echo $color; ?> p-5">
				</div>
				<p class="text-capitalize"><?php echo $color; ?></p>
			</div>

			<?php } ?>

		</div> <!-- #colors -->

		<div id="typography" class="row pt-5">

			<h2 class="border-bottom mb-5">Typography</h2>

			<div class="col-12 pb-3">
				<p class="h1 mb-4">h1. Lorem ipsum dolor sit amet</p>
				<p class="h2 mb-4">h2. Lorem ipsum dolor sit amet</p>
				<p class="h3 mb-4">h3. Lorem ipsum dolor sit amet</p>
				<p class="h4 mb-4">h4. Lorem ipsum dolor sit amet</p>
				<p class="h5 mb-4">h5. Lorem ipsum dolor sit amet</p>
				<p class="h6 mb-4">h6. Lorem ipsum dolor sit amet</p>
			</div>

			<div class="col-12 pb-3 pt-5">
				<p class="display-1 mb-4">Display 1</p>
				<p class="display-2 mb-4">Display 2</p>
				<p class="display-3 mb-4">Display 3</p>
				<p class="display-4 mb-4">Display 4</p>
				<p class="display-5 mb-4">Display 5</p>
				<p class="display-6 mb-4">Display 6</p>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<p class="lead mb-4">LEAD. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p class="small mb-4">SMALL. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p class="fw-bold mb-4">BOLD. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
				<p class="fst-italic mb-4">ITALIC. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.</p>
			</div>

		</div> <!-- #typography -->

	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
