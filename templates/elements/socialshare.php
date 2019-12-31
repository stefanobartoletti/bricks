<div class="elem-socialshare media py-3">

    <div class="btn btn-lg align-self-center mb-1 py-1 mr-1">
        <i class="fas fa-share-alt"></i>
    </div>

    <div class="media-body">

        <?php 
        
        $socialshare = sb_socialnetworks();

        foreach ($socialshare as $key => $value) { if ($value['has-share'] == true) { ?>

            <a class="share-button share-<?php echo $key ?> btn btn-lg py-1 mb-1" href="<?php echo $value['share-url'] ?>" role="button" target="_blank" title="<?php echo esc_html__('Share with ', 'bricks').$value['nice-name'] ?>">
                <i class="<?php echo $value['icon-style'].' '.$value['icon-name'] ?>"></i>
            </a>

        <?php }}; ?>

    </div>

</div>