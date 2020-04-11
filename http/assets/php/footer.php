<?php

// Name: php/footer.php
// Description:

// FOOTER {{{

// Section: Physical Address 
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12"));
phone($col, $phoneNumber, "h2");
element($col, "h2", array("class"=>"text-center"), "Located at 1319 45Ave NE #5, Calgary, Alberta");

// Google {{{1
// Maps {{{2
$row = element($panel, "div", array("id"=>"section-location", "class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "iframe", array(
    "id"=>"googleMap",
    "style"=>"width: 75%",
    "frameborder"=>"0",
    "src"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.831072976366!2d-114.032371!3d51.093125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716500c531255d%3A0xf2d24169e7a44e1b!2sDe+Minico&#39;s!5e0!3m2!1sen!2sca!4v1509148157628"
));

// Footer {{{1
$row = element($panel, "div", array("id"=>"footer", "class"=>"row"));
$col = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center"));
$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefFacebook));
element($a, "img", array("src"=>$iconFacebook));
$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
element($a, "img", array("src"=>$iconInstagram));
$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefTwitter));
element($a, "img", array("src"=>$iconTwitter));

// }}} FOOTER
?>
