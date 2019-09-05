<?php 

// --- Social Share URLs ---

// https://github.com/bradvin/social-share-urls

// URL arguments

$url = get_the_permalink();

// Share URLs

$shareurl_facebook = 'https://www.facebook.com/shareurl.php?u=' . $url;


// --- Social Networks Class ---
class sb_social_network {

    public $sb_social_name;
    public $sb_social_icon;
    public $sb_social_shareurl;

    public function __construct($sb_social_name, $sb_social_icon, $sb_social_shareurl) {
        $this->sb_social_name = $sb_social_name;
        $this->sb_social_icon = $sb_social_icon;
        $this->sb_social_shareurl = $sb_social_shareurl;
      }

    public function share_button() {
        echo '<p>This is ' . $this->sb_social_name . ', its icon is called ' . $this->sb_social_icon . ' and its URL is ' . $this->sb_social_shareurl . '.';
    }
    
}

// --- Social Networks Objects ---

$sb_social_facebook = new sb_social_network(
    'facebook',
    'fab fa-facebook-f',
    $shareurl_facebook
);

$sb_social_facebook->share_button();

// https://stackoverflow.com/a/8612210/10580177

?>


<div class="sharebuttons py-3">

    <div class="btn">
        <i class="fas fa-share-alt"></i>
    </div>
    
    <a class="btn socialshare share-facebook" href="#" role="button">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a class="btn socialshare share-twitter" href="#" role="button">
        <i class="fab fa-twitter"></i>
    </a>

    <a class="btn socialshare share-linkedin" href="#" role="button">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a class="btn socialshare share-pinterest" href="#" role="button">
        <i class="fab fa-pinterest-p"></i>
    </a>

    <a class="btn socialshare share-pocket" href="#" role="button">
        <i class="fab fa-get-pocket"></i>
    </a>

    <a class="btn socialshare share-telegram" href="#" role="button">
        <i class="fab fa-telegram-plane"></i>
    </a>

    <a class="btn socialshare share-email" href="#" role="button">
        <i class="fas fa-envelope"></i>
    </a>

</div>