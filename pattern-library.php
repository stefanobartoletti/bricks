<?php
/**
* Template Name: Pattern Library
*
*/

get_header();

$bs_colors_brand = array(
	'primary',
	'secondary',
);

$bs_colors_scheme = array(
	'light',
	'dark',
);

$bs_colors_main = array_merge(
	$bs_colors_brand,
	$bs_colors_scheme,
);

$bs_colors_semantic = array(
	'success',
	'info',
	'warning',
	'danger',
);

$bs_colors = array_merge(
	$bs_colors_main,
	$bs_colors_semantic,
);

$bs_font_weights = array(
	'100',
	'200',
	'300',
	'400',
	'500',
	'600',
	'700',
	'800',
	'900',
);

$bs_lorem_short = 'Lorem ipsum dolor sit amet';

$bs_lorem_long = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, ut. Repudiandae excepturi sequi quaerat ex eos dicta earum, fuga deleniti amet accusantium recusandae quia aperiam aut assumenda, quas ratione laborum.';

$bs_images_cols = array(
	'',
	'row-cols-md-2',
	'row-cols-md-3',
	'row-cols-md-2 row-cols-lg-4',
	'row-cols-md-3 row-cols-lg-6',
);

?>

<main id="content-wrapper" class="py-5">

	<div id="colors" class="container mb-5">

		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Colors</h2>

			<?php foreach ( $bs_colors as $color ) { ?>

			<div class="col-12 col-md-3 pb-3">
				<div class="bg-<?php echo esc_attr( $color ); ?> p-5"></div>
				<p class="text-capitalize"><?php echo esc_attr( $color ); ?></p>
			</div>

			<?php } ?>

		</div>

	</div> <!-- #colors -->

	<div id="typography" class="container mb-5">

		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Typography</h2>

			<div class="col-12 pb-3">
				<p class="h1 mb-4">h1. <?php echo esc_html( $bs_lorem_short ); ?></p>
				<p class="h2 mb-4">h2. <?php echo esc_html( $bs_lorem_short ); ?></p>
				<p class="h3 mb-4">h3. <?php echo esc_html( $bs_lorem_short ); ?></p>
				<p class="h4 mb-4">h4. <?php echo esc_html( $bs_lorem_short ); ?></p>
				<p class="h5 mb-4">h5. <?php echo esc_html( $bs_lorem_short ); ?></p>
				<p class="h6 mb-4">h6. <?php echo esc_html( $bs_lorem_short ); ?></p>
			</div>

			<div class="col-12 pb-3 pt-5">
				<p class="h1 display-1 mb-4">Display 1</p>
				<p class="h1 display-2 mb-4">Display 2</p>
				<p class="h1 display-3 mb-4">Display 3</p>
				<p class="h1 display-4 mb-4">Display 4</p>
				<p class="h1 display-5 mb-4">Display 5</p>
				<p class="h1 display-6 mb-4">Display 6</p>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<p><?php echo esc_html( $bs_lorem_long ); ?></p>
				<p><?php echo esc_html( $bs_lorem_long ); ?></p>
				<p><?php echo esc_html( $bs_lorem_long ); ?></p>
				<p><?php echo esc_html( $bs_lorem_long ); ?></p>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<p class="lead mb-4">LEAD. <?php echo esc_html( $bs_lorem_long ); ?></p>
				<p class="small mb-4">SMALL. <?php echo esc_html( $bs_lorem_long ); ?></p>
				<p class="fw-bold mb-4">BOLD. <?php echo esc_html( $bs_lorem_long ); ?></p>
				<p class="fst-italic mb-4">ITALIC. <?php echo esc_html( $bs_lorem_long ); ?></p>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<?php foreach ( $bs_font_weights as $weight ) { ?>
					<p style="font-weight: <?php echo esc_attr( $weight ); ?>;"><?php echo esc_attr( $weight ); ?>. <?php echo esc_html( $bs_lorem_long ); ?></p>
				<?php } ?>
			</div>

			<div class="col-12 col-md-6 pt-5">
				<?php foreach ( $bs_font_weights as $weight ) { ?>
				<p style="font-style: italic; font-weight: <?php echo esc_attr( $weight ); ?>;"><?php echo esc_attr( $weight ); ?>. <?php echo esc_html( $bs_lorem_long ); ?></p>
				<?php } ?>
			</div>

		</div>

	</div> <!-- #typography -->

	<div id="buttons" class="container mb-5">

		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Buttons</h2>

			<?php foreach ( $bs_colors_main as $color ) { ?>

			<div class="col-12 col-md-3 pb-5">

				<div class="mb-4">
					<button type="button" class="btn btn-<?php echo esc_attr( $color ); ?>">Button</button>
					<button type="button" class="btn btn-outline-<?php echo esc_attr( $color ); ?>">Button</button>
				</div>

				<div class="mb-4">
					<button type="button" class="btn btn-lg btn-<?php echo esc_attr( $color ); ?>">Button</button>
					<button type="button" class="btn btn-lg btn-outline-<?php echo esc_attr( $color ); ?>">Button</button>
				</div>

				<div class="mb-4">
					<button type="button" class="btn btn-sm btn-<?php echo esc_attr( $color ); ?>">Button</button>
					<button type="button" class="btn btn-sm btn-outline-<?php echo esc_attr( $color ); ?>">Button</button>
				</div>

			</div>

			<?php } ?>

		</div>

	</div> <!-- #buttons -->

	<div id="blocks" class="container mb-5">

		<h2 class="border-bottom mb-5">Blocks</h2>

		<?php foreach ( $bs_colors_main as $key_1 => $color_1 ) { ?>

			<div class="row mb-4 p-4 bg-<?php echo esc_attr( $color_1 ); ?>">

			<?php foreach ( $bs_colors_main as $key_2 => $color_2 ) { ?>

				<?php if ( $key_1 != $key_2 ) { ?>
		
				<div class="col-12 col-md-4 p-5 text-<?php echo esc_attr( $color_2 ); ?>">				

					<p class="h2 mb-4">Lorem ipsum dolor</p>

					<p class="mb-4"><?php echo esc_html( $bs_lorem_long ); ?></p>

					<div>
						<button type="button" class="btn btn-<?php echo esc_attr( $color_2 ); ?>">Button</button>
						<button type="button" class="btn btn-outline-<?php echo esc_attr( $color_2 ); ?>">Button</button>
					</div>

				</div>
	
				<?php } ?>	
			
			<?php } ?>	

		</div>
		
		<?php } ?>	
		
	</div> <!-- #blocks -->

	<div id="images" class="container mb-5">

		<h2 class="border-bottom mb-5">Images</h2>

		<?php foreach ( $bs_images_cols as $col ) { ?>

		<div class="row <?php echo esc_attr( $col ); ?> mb-5">
			<div class="col position-relative">
				<img class="img-fluid" src="https://dummyimage.com/1920x1080.jpg">
				<div class="img-details position-absolute top-0 mt-1 ms-1 px-2 py-1 bg-light">
					<p class="natural-width mb-0"></p>
					<p class="client-width mb-0"></p>
					<p class="percent-width mb-0"></p>
					<p class="screen-width mb-0"></p>
				</div>
			</div>
		</div>

		<?php } ?>

		<script>
			const imagesRows = document.querySelectorAll('#images .row');

			imagesRows.forEach(function (row) {

				const img = row.querySelector('.img-fluid');
				const naturalW = row.querySelector('.img-details .natural-width');
				const clientW = row.querySelector('.img-details .client-width');
				const percentW = row.querySelector('.img-details .percent-width');
				const screenW = row.querySelector('.img-details .screen-width');

				function displayImgDetails() {
					naturalW.innerHTML = 'naturalWidth(px): ' + img.naturalWidth;
					clientW.innerHTML = 'clientWidth(px): ' + img.clientWidth;
					percentW.innerHTML = 'percent(%): ' + Math.round(img.clientWidth / img.naturalWidth * 100 );
					screenW.innerHTML = 'Width(vw): ' + Math.round(img.clientWidth / document.body.clientWidth * 100 );
				};

				img.addEventListener('load', displayImgDetails);
				window.addEventListener('resize', displayImgDetails	);
			});

		</script>
	
	</div> <!-- #images -->

	<div id="forms" class="container mb-5">

		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Forms</h2>

			<div class="col-12 col-md-6 pb-5">

				<form class="border rounded p-4">

					<div class="mb-4">
						<label for="input-1" class="form-label">Example input</label>
						<input type="email" class="form-control" id="input-1" placeholder="name@example.com">
					</div>

					<div class="mb-4">
						<label for="select-1" class="form-label">Example select</label>
						<select class="form-select" aria-label="Default select example" id="select-1">
							<option selected>Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>

					<div class="mb-4">
						<label for="textarea-1" class="form-label">Example textarea</label>
						<textarea class="form-control" id="textarea-1" rows="3"></textarea>
					</div>

					<div class="mb-4">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check-01">
							<label class="form-check-label" for="check-01"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
					</div>

					<button type="submit" class="btn btn-primary w-100">Submit</button>

				</form>

			</div>

			<div class="col-12 col-md-6 pb-5">

				<form class="border rounded p-4">

					<div class="mb-4">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check-1" checked>
							<label class="form-check-label" for="check-1"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check-2">
							<label class="form-check-label" for="check-2"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check-3">
							<label class="form-check-label" for="check-3"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
					</div>

					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio-1" checked>
							<label class="form-check-label" for="radio-1"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio-2">
							<label class="form-check-label" for="radio-2"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio-3">
							<label class="form-check-label" for="radio-3"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
					</div>

					<div class="mb-4">
						<div class="form-check form-switch">
							<input type="checkbox" class="form-check-input" id="switch-1" checked>
							<label class="form-check-label" for="switch-1"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check form-switch">
							<input type="checkbox" class="form-check-input" id="switch-2">
							<label class="form-check-label" for="switch-2"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
						<div class="form-check form-switch">
							<input type="checkbox" class="form-check-input" id="switch-3">
							<label class="form-check-label" for="switch-3"><?php echo esc_html( $bs_lorem_short ); ?>.</label>
						</div>
					</div>

					<div class="mb-4">
						<label for="range-1" class="form-label">Example range</label>
						<input type="range" class="form-range" id="range-1">
					</div>

				</form>

			</div>
	
			<div class="col-12 col-md-6 pb-5">

				<div class="border rounded p-4">

					<form>
						<div class="row g-3 mb-5">
							<div class="col-9">
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-primary w-100">Submit</button>
							</div>
						</div>
					</form>

					<form>
						<div class="row g-3 mb-5">
							<div class="col-9">
								<input type="text" class="form-control form-control-lg" placeholder="First name" aria-label="First name">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-lg btn-primary w-100">Submit</button>
							</div>
						</div>
					</form>

					<form>
						<div class="row g-3">
							<div class="col-9">
								<input type="text" class="form-control form-control-sm" placeholder="First name" aria-label="First name">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
							</div>
						</div>
					</form>

				</div>

			</div>

		</div>

	</div> <!-- #forms -->

	<div id="alerts" class="container mb-5">

		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Alerts</h2>

			<div class="col-12 col-md-6 pb-5">

			<?php foreach ( $bs_colors as $color ) { ?>

				<div class="alert alert-<?php echo esc_attr( $color ); ?>" role="alert">
					A simple <?php echo esc_attr( $color ); ?> alert—check it out!
				</div>
			
			<?php } ?>
			
			</div>

		</div> 
	
	</div> <!-- #alerts -->

	<div id="navbars" class="container mb-5">
		
		<div class="row pt-5">

			<h2 class="border-bottom mb-5">Navbars</h2>
			
			<div class="col-12 pb-5">

			<?php foreach ( $bs_colors_scheme as $scheme ) { ?>

				<nav class="navbar navbar-expand-lg navbar-<?php echo esc_attr( $scheme ); ?> bg-<?php echo esc_attr( $scheme ); ?> mb-5">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">Navbar</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent<?php echo '-' . esc_attr( $scheme ); ?>" aria-controls="navbarSupportedContent<?php echo '-' . esc_attr( $scheme ); ?>" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent<?php echo '-' . esc_attr( $scheme ); ?>">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Link</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?php echo '-' . esc_attr( $scheme ); ?>" role="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										Dropdown
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown<?php echo '-' . esc_attr( $scheme ); ?>">
										<li><a class="dropdown-item" href="#">Action</a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled">Disabled</a>
								</li>
							</ul>
							<form class="d-flex">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
						</div>
					</div>
				</nav>

			<?php } ?>

		</div>

	</div> <!-- #navbars -->

</main> <!-- #content-wrapper -->

<?php
get_footer();
