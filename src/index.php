<?
require('vendor/autoload.php');
require_once('lang.php');

$notices = array();

if($_SERVER['REQUEST_URI'] == "/") {
    if(!isset($_COOKIE['last_lang_used'])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    }
    else {
        $lang = $_COOKIE['last_lang_used'];
    }
    header("Location: /" . $lang);
    die();
}
else if(0 == strpos($_SERVER['REQUEST_URI'], "/da")) { $lang = 'da'; }
else if(0 == strpos($_SERVER['REQUEST_URI'], "/en")) { $lang = 'en'; }

setcookie('last_lang_used', $lang, time() + (86400 * 30), "/");

if(isset($_GET) && isset($_GET['path'])) {
    if($_GET['path'] == "/calendar") {require('calendar.php'); die(); } 
    if($_GET['path'] == "/cv") {header("Location: /" . $lang . "/cv"); die(); } 
    if($_GET['path'] == "/en/cv") {require('cv.en.php'); die(); } 
    if($_GET['path'] == "/da/cv") {require('cv.da.php'); die(); } 
    if(!in_array($_GET['path'], ['', '/', '/da', '/en'])) {require('404.php'); die(); } 
}

session_start();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?> 
<? require('header.php') ?>
<div class="wrapper">
    <h1 class="logo noselect">AntonChristensen.net</h1>
    <div class="polyring">
        <div class="poly poly1 experience"><span class="noselect"><?= $translationTable['experience.menu'][$lang] ?></span></div>
        <div class="poly poly2 uni"><span class="noselect"><?= $translationTable['aau.menu'][$lang] ?></span></div>
        <!-- <div class="poly poly3 projects"><span class="noselect">Projekter</span></div> -->
        <div class="poly poly4 contact"><span class="noselect"><?= $translationTable['contact.menu'][$lang] ?></span></div>
    </div>
    
    <div class="pageContent experienceContent">
        <div class="contentwrapper">
            <div class="topshadow"></div>
            <? require('pages/experience.php') ?>
        </div>
    </div>
    <div class="pageContent uniContent">
        <div class="contentwrapper">
            <div class="topshadow"></div>
            <? require('pages/uni.php') ?>
        </div>
    </div>
    <div class="pageContent projectsContent">
        <div class="contentwrapper">
            <div class="topshadow"></div>
            <? require('pages/projects.php') ?>
        </div>
    </div>
    <div class="pageContent contactContent">
        <div class="contentwrapper">
            <? require('pages/contact.php') ?>
        </div>
    </div>
</div>
<? require('footer.php') ?>
