<?php

 require_once './libs/Smarty.class.php';
    
$mySmarty = new Smarty();
$mySmarty->template_dir = './templates';
$mySmarty->config_dir = './config';
$mySmarty->compile_dir = './templates_c';
$mySmarty->cache_dir = './cache';

