<?php

// CSS

// $minCSS = new \MatthiasMullie\Minify\CSS();
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/style.css");
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/form.css");
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/button.css");
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/message.css");
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/load.css");
// $minCSS->add(dirname(__DIR__, 1). "/views/assets/fonts-icons/css/line-awesome.min.css");
// $minCSS->minify(dirname(__DIR__, 1) . "/views/assets/style.min.css");

// $minAdminCSS = new \MatthiasMullie\Minify\CSS();
// $minAdminCSS->add(dirname(__DIR__, 1). "/views/assets/css/admin/admin.css");
// $minAdminCSS->add(dirname(__DIR__, 1). "/views/assets/css/admin/button.css");
// $minAdminCSS->add(dirname(__DIR__, 1). "/views/assets/css/admin/boxes.css");
// $minAdminCSS->add(dirname(__DIR__, 1). "/views/assets/css/admin/apexcharts.css");
// $minAdminCSS->minify(dirname(__DIR__, 1) . "/views/assets/adminStyle.min.css");


// JS
$minJS = new \MatthiasMullie\Minify\JS();
$minJS->add(dirname(__DIR__, 1). "/views/assets/js/jquery.js");
$minJS->add(dirname(__DIR__, 1). "/views/assets/js/jquery-ui.js");

$minJS->minify(dirname(__DIR__, 1) . "/views/assets/jquery.min.js");
