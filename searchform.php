<?php 

$searchtext = esc_html__( 'Search', 'bricks' );

?>

<form class="search-form" action="<?php echo esc_url_raw(home_url()); ?>" method="get">

    <div class="form-row">

        <div class="col">
            <input class="form-control form-control-sm" type="search" placeholder="<?php echo $searchtext ?>"
                aria-label="<?php echo $searchtext ?>" name="s">
        </div>

        <div class="col-3">
            <button class="btn btn-sm btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>

    </div>

</form>