<? 

   require 'db.php';
   require 'fun.php';
   require 't.php';
   require 'var.php';

   class core {
      public function __construct() {
         session_start();
         new db; new fun; new t;
      }
   }


   // data
   $core = new core;
   $site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));


   // lang
   $lang = 'ru';
   if (isset($_GET['lang'])) if ($_GET['lang'] == 'ru' || $_GET['lang'] == 'kz') $_SESSION['lang'] = $_GET['lang'];
   if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];


   // setting
   // $ver = 1.45;
   // $site_set = [
   //    'header' => true,
   //    'menu' => true,
   //    'footer' => true,
   //    'footer_c' => true,
   // ];
   // $css = [];
   // $js = [];