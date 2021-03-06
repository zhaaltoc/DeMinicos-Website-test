<?php
// Name: orderform.php
// Authors: Travis Gall
// Description: Order Form

// Header {{{1
require_once "assets/php/header.php";

// Variables {{{1
// $imgOrderForm = $img . "/De Minico’s order list.PNG";
$imgOrderForm = $img . "/orderlist.png";
$docOrderForm = "/De Minico’s order list.pdf";
$styleLinkFile .= 'color:#cccc33;';

// Style {{{2
// reduced the top margin to balance the document.
// I managed to produce the png file using libre office and export to png option form the source word doc.
// this produced more white space around the image.. 
// As a result, all the borders could be reduced by ~7% in theory.
$styleOrderFormTop = "2%";
$styleOrderFormBottom = "7%";

$styleOrderFormDiv .= "display: inline-block;";
$styleOrderFormDiv .= "width: 100%;";
$styleOrderFormDiv .= "border 2px solid red;";
$styleOrderFormDiv .= "overflow: hidden;";

$styleOrderFormImg .= "width: 90%;";
$styleOrderFormImg .= "position: relative;";
$styleOrderFormImg .= 'top: ' . $styleOrderFormTop . ';';
//$styleOrderFormImg .= 'bottom: ' .$stylOrderFormBottom . ';';
$styleOrderFormImg .= "transform: translateY(-" . $styleOrderFormTop . ");";

$stringLinkFile = 'Download the Order Form';

// Layout {{{1
// OrderForm {{{2
$row = element($panel, "div", array("class"=>"row", 'style'=>'padding-bottom:0px;'));
$col = element($row, "div", array("class"=>"col-12 text-center", "style"=>$styleOrderForm));
// Download
linkfile($col , "h2" , $doc , $docOrderForm, $stringLinkFile, '', $styleLinkFile);

// Email
email($col, "h3", $email, $emailcc, $emailSubject, false, '"' . $emailStr . '"', $classPhone, $stylePhone);

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-2 text-center"));
$col = element($row, "div", array("class"=>"col-md-8 text-center"));
$div = element($col, "div", array("style"=>$styleOrderFormDiv));
element($div, "img", array("src"=>$imgOrderForm, "style"=>$styleOrderFormImg));

$row = element($panel, "div", array("class"=>"row", 'style'=>'padding-bottom:0px;'));
$col = element($row, "div", array("class"=>"col-12 text-center", "style"=>$styleOrderForm));
// Email
email($col, "h3", $email, $emailcc, $emailSubject, false, '"' . $emailStr . '"', $classPhone, $stylePhone);

// Download
linkfile($col , "h2" , $doc , $docOrderForm, $stringLinkFile, '', $styleLinkFile);

// Footer {{{1
require_once "assets/php/footer.php";
?>
