<?php

class Controller {

protected $f3;
protected $db;
protected $upload_dir;
protected $app_dir;
protected $public_dir;
protected $home_url;
protected $tpl = "base.htm";

function __construct() {

$f3 = Base::instance();
$this->f3 = $f3;
$this->home_url = $this->f3->get('SCHEME').'://'.$this->f3->get('HOST').$this->f3->get('BASE');

// Uploads Dir
$this->upload_dir = $f3->get('upload_dir');

// App Dir
$this->app_dir = $f3->get('app_dir');

// Public Path
$this->public_dir = $f3->get('public_dir');
}

// Set Data
function afterroute($f3) {
$site_title = $f3->get('site_title');
$active_menu = $f3->get('PATH');
$home_url = $this->home_url;
$current_style = $f3->exists('COOKIE.style') ? $f3->get('COOKIE.style') : 'style';
$recaptcha_key = $f3->get("recaptcha_key");
$form = new Form;
$f3->set('form',$form);
$f3->set('current_style',$current_style);
$f3->set('site_title',$site_title);
$f3->set('home_url',$home_url);
$f3->set('active_menu',$active_menu);
$f3->set('site_key',$recaptcha_key);
$maintenance = $f3->get('maintenance');
if($maintenance){
$f3->status(503);
echo Template::instance()->render('503.htm');
exit;
}

// Check Login
$get_auth = $f3->get('SESSION.user');

if($get_auth){

$f3->set('logged_in',true);

$f3->set('users',$get_auth);	

}

/* Set Boards List */
$board_list = Boards::all();
$f3->set('board_list',$board_list);

if(isset($this->tpl)){
/* Register Filters */
$preview = Template::instance();
$preview->filter('crop','Helper::instance()->crop');
$preview->filter('remove_tags','Helper::instance()->remove_tags');
$preview->filter('remove_slash','Helper::instance()->remove_slash');
$preview->filter('remove_spaces','Helper::instance()->remove_spaces');
$preview->filter('remove_execute_code','Helper::instance()->remove_execute_code');
$preview->filter('remove_white_spaces','Helper::instance()->remove_white_spaces');
$preview->filter('replace_data','Helper::instance()->replace_data');
echo $preview->render($this->tpl);

}

}

}