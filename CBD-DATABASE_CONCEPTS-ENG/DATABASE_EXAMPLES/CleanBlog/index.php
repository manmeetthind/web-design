<?php
define('INCLUDE',1);

class Page{
        public $title;
        public $name;
        public $content;

        public function __construct($title){
                $this->title = $title;
        }

        public function setData($result){

                while( $row = $result->fetch_assoc() ){

                        $this->name = $row['name'];
                
                        $this->title = $row['title'];
                
                        $this->content = $row['content'];
                
                }

        }

}

$pages = array(
        'main' => "Home Page",
        'about' => "About Me",
        'posts/article' => "Another Post",
        'post' => "Man must explore, and this is exploration at its greatest",
        'contact' => "Contact Me"
);


$sql = "SELECT `name`, `title`, `content` FROM `pages` WHERE `slug` = 'about' ";

$db = new mysqli('localhost','root','root','cleanblog');

$result = $db->query($sql);

if( !empty($result) ){
        $index = 'about';

        $page = new Page("");

        $page->setData($result);
}


if( isset($_GET['p']) && isset($pages[$_GET['p']]) ){
        $index = $_GET['p'];
}else{
        $index = 'main';
}

if( isset($_POST['email']) ){
        include("php/form-handler.php");
}

//$page = $pages[$index];

$title = $pages[$index];

include("php/header.php");

//include("php/$index.php");
?>
<!-- Main Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $page->content ?>
    </div>
    </div>
</div>
<?php
include("php/footer.php");
