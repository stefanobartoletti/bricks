<?php 

// --- Social Share URLs ---

// https://github.com/bradvin/social-share-urls

// URL arguments

$url = get_the_permalink();
$title = rawurlencode(get_the_title() . ' - ' . get_bloginfo('name'));
$thumbnail = get_the_post_thumbnail_url();

// Share URLs

$shareurl_facebook = 'https://www.facebook.com/shareurl.php?u='.$url;
$shareurl_twitter = 'https://twitter.com/intent/tweet?url='.$url.'&text='.$title;
$shareurl_linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url='.$url.'&title='.$title;
$shareurl_pinterest = 'https://pinterest.com/pin/create/button/?url='.$url.'&description='.$title.'&media='.$thumbnail;
$shareurl_pocket = 'https://getpocket.com/edit?url='.$url;
$shareurl_telegram = 'https://t.me/share/url?url='.$url.'&text='.$title;
$shareurl_email = 'mailto:?subject='.$title.'&body='.$url;


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
$sb_socials[] = new sb_social_network('LinkedIn', 'fab fa-linkedin-in', $shareurl_linkedin);
$sb_socials[] = new sb_social_network('Pinterest', 'fab fa-pinterest-p', $shareurl_pinterest);
$sb_socials[] = new sb_social_network('Pocket', 'fab fa-get-pocket', $shareurl_pocket);
$sb_socials[] = new sb_social_network('Telegram', 'fab fa-telegram-plane', $shareurl_telegram);
$sb_socials[] = new sb_social_network('Email', 'fas fa-envelope', $shareurl_email);


// --- Social Buttons HTML ---

?>

<div class="social-share media py-3">

    <div class="btn btn-lg align-self-center mb-1 py-1 mr-1">
        <i class="fas fa-share-alt"></i>
    </div>

    <div class="media-body">

        <?php foreach ($sb_socials as $sb_social) { ?>

            <a class="btn btn-lg share-buttons share-<?php echo strtolower($sb_social->sb_social_name) ?> py-1 mb-1" href="<?php echo $sb_social->sb_social_shareurl ?>" role="button" target="_blank">
                <i class="<?php echo $sb_social->sb_social_icon ?>"></i>
            </a>

        <?php } ?>

    </div>

</div>