<? session_start(); ?>
<?
// require_once('lang.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// $translationTable = yaml_parse("
// kwcontact:
//   da: Kontakt
//   en: Contact
// ");
// phpinfo();
// die();
// var_dump($translationTable);
// die();

$cv_json = file_get_contents('cv.da.json');
$data = json_decode($cv_json, false);

$lang = 'da';
$translationTable['meta.title'][$lang] = "Curriculum Vitae - Anton Christensen"
?> 
<? require('header.php') ?>
<div class="cv-wrapper">
  <div class="left-panel">
    <div class="top">

    <img src="/img/profile.jpg" class="image fl"/>
    <h1>Anton Christensen</h1>
    <h2 class="ib">Software Ingeniør</h2>
    <br>
    <br>
    <div>Software udvikler med stor erfaring inden for:
      <ul>
        <li>Moderne web services</li>
        <li>Indlejrede systemer</li>
        <li>Formel software modellering</li>
      </ul>
    </div>
    <!-- <h3 class="ib text-faded"> - Aalborg</h3> -->
      
    </div>
    <div class="bottom">
      <table>
        <h3>Kontakt</h3>
        <tr><td>Mail:</td><td>anton.christensen9700@gmail.com</td></tr>
        <tr><td>Tlf:</td> <td>+45 60 61 46 18</td></tr>
        <tr class="joined"><td>Addr:</td><td>Birkevej 18</td></tr>
        <tr class="joined"><td>     </td><td>8450 Hammel</td></tr>
      </table>
    </div>

  </div>
  <div class="right-panel">
    <? foreach($data->sections as $section): ?>
    <div class="section">
      <h2 class="header"><span class="icon"></span><?= $section->title ?></h2>
      <table>
        <? foreach($section->entries as $entry): ?>
        <tr class="entry">
          <td>
            <h3 class="place"><?= $entry->place ?></h3>
            <h3 class="title"><?= $entry->title ?></h3>
            <div class="time text-faded"><?= $entry->time ?></div>
            <? if(isset($entry->description)): ?><div class="description"><?= $entry->description ?></div><? endif ?>
          </td>
        </tr>
        <? endforeach ?>
      </table>
    </div>
    <? endforeach ?>
  </div>
</body>
</html>