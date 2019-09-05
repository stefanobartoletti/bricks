<?php 

// --- Social Share URLs ---

// https://github.com/bradvin/social-share-urls

// URL arguments

$url = get_the_permalink();
$title = rawurlencode(get_the_title());

// Share URLs

$shareurl_facebook = 'https://www.facebook.com/shareurl.php?u='.$url;
$shareurl_twitter = 'https://twitter.com/intent/tweet?url='.$url.'&text='.$title;


// --- Social Network Class ---

class sb_social_network {

    public $sb_social_name;
    public $sb_social_icon;
    public $sb_social_shareurl;

    public function __construct($sb_social_name, $sb_social_icon, $sb_social_shareurl) {
        $this->sb_social_name = $sb_social_name;
        $this->sb_social_icon = $sb_social_icon;
        $this->sb_social_shareurl = $sb_social_shareurl;
    }
    
}

// --- Social Networks Objects ---

// Every single Social Network is an item in the $sb_socials[] array.
// https://stackoverflow.com/a/8612210

$sb_socials[] = new sb_social_network('Facebook', 'fab fa-facebook-f', $shareurl_facebook);
$sb_socials[] = new sb_social_network('Twitter', 'fab fa-twitter', $shareurl_twitter);


// --- Social Buttons HTML ---

?>

<div class="sharebuttons py-3">

    <div class="btn">
        <i class="fas fa-share-alt"></i>
    </div>

    <?php foreach ($sb_socials as $sb_social) { ?>

        <a class="btn socialshare share-<?php echo strtolower($sb_social->sb_social_name) ?>" href="<?php echo $sb_social->sb_social_shareurl ?>" role="button">
            <i class="<?php echo $sb_social->sb_social_icon ?>"></i>
        </a>

    <?php } ?>

</div>