<?php 

class sb_share {

    public $sb_share_name;
    public $sb_share_color;
    public $sb_share_icon;
    public $sb_share_url;

    public function __construct($name, $color, $icon, $url) {
        $this->sb_share_name = $name;
        $this->sb_share_color = $color;
        $this->sb_share_icon = $icon;
        $this->sb_share_url = $url;
      }

    public function share_button() {
        echo '<p>This is ' . $this->sb_share_name . ', its brand color is ' . $this->sb_share_color . ', its icon is called ' . $this->sb_share_icon . ' and its URL is ' . $this->sb_share_url . '.';
    }
    
}

$sb_share_facebook = new sb_share(
    'Facebook',
    '#3b5998',
    'facebook-f',
    'https://www.facebook.com/sharer.php?u=' . get_the_permalink()
);

$sb_share_facebook->share_button();

// https://stackoverflow.com/a/8612210/10580177

?>


<div class="socialshare py-3">

    <div class="btn">
        <i class="fas fa-share-alt"></i>
    </div>
    
    <a class="btn" href="#" role="button" style="background-color: #3b5998">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #1da1f2">
        <i class="fab fa-twitter"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #0077b5">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #bd081c">
        <i class="fab fa-pinterest-p"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #ef4056">
        <i class="fab fa-get-pocket"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #0088cc">
        <i class="fab fa-telegram-plane"></i>
    </a>

    <a class="btn" href="#" role="button" style="background-color: #777777">
        <i class="fas fa-envelope"></i>
    </a>

</div>