<?php 
use RainLab\Translate\Classes\Translator;
class Cms586c6e4984efd612748204_2052751582Class extends \Cms\Classes\LayoutCode
{
public function onStart()
{

   if (class_exists('RainLab\Translate\Classes\Translator')) {
        $translator = Translator::instance();
        $this['locale'] = $translator->getLocale();
    }

    @session_start();
    if (isset($_SESSION['langset'])) return;
    if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
        $this['country'] = $_SERVER["HTTP_CF_IPCOUNTRY"];
    } else {
        $this['country'] = "VN";
    }

    $frSpeakingCountries = array("FR","CA","BE");

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (in_array($this['country'], $frSpeakingCountries)) {
	
   	    $actual_link = "http://".$_SERVER['HTTP_HOST']."/fr".$_SERVER['REQUEST_URI'];
        $_SESSION['langset'] = true;
        $this['test'] = "fr";
	    header('Location: '.$actual_link);
        exit();
    } else {
 	    $actual_link = "http://".$_SERVER['HTTP_HOST']."/en".$_SERVER['REQUEST_URI'];
        $_SESSION['langset'] = true;
        $this['test'] = "en";
	    header('Location: '.$actual_link);
        exit();
   	}
}
}
