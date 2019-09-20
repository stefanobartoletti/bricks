<?php 

$searchtext = esc_html__( 'Search', 'sb-base-theme' );

?>

<form class="form-inline" action="<?php echo esc_url_raw(home_url()); ?>" method="get">

    <input class="form-control form-control-sm mr-2" type="search" placeholder="<?php echo $searchtext ?>"
        aria-label="<?php echo $searchtext ?>" name="s">
    <button class="btn btn-sm btn-outline-dark" type="submit"><?php echo $searchtext ?></button>

</form>