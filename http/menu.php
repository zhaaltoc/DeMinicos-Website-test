<?php

// Name: menu.php
// Authors: Travis Gall
// Description: Main menu

require_once "assets/php/header.php";
require_once "../mysql/mysqler.php";

// Menu {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "h1", array(), "In Store Menu");
br($col, 2);

menus($conn, $panel, 'Pizza');
menus($conn, $panel, 'Drinks');
menus($conn, $panel, 'Desserts');

// Footer {{{1
require_once "assets/php/footer.php";
?>
