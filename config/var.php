<? 

   // lang
   // $lang = 'kz';
   // if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
   // if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];

   // 
   $ver = 2.021;

   // date - time
   $date = date("Y-m-d", time());
   $time = date("H:m:s", time());
   $datetime = date('Y-m-d H:i:s', time());

   // url
	$url = $url_full = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];



   // setting
   $site_set = [
      'analitics' => true,
      'header' => true,
      'mheader' => false,
      'menu' => true,
      'menu_mb' => true,

      'footer' => true,
      'footer_t' => true,
      'footer_c' => true,
      'form' => true,
      'cl_wh' => true,
      
      'swiper' => false,
      'plyr' => false,
      'aos' => false,
      'autosize' => false,


      'analitics' => true,
      'mheader' => true,
      'um_menu' => false,
   ];
   $scss = ['anim', 'norm', 'main'];
   $sjs = ['norm', 'main'];
   $css = [];
   $js = [];
   $code = rand(1000, 9999);