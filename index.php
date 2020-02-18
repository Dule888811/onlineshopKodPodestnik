<?php

session_start();
session_name('online_shop');

require 'config.php';
require LIBS.'Router.php';
require LIBS.'Controller.php';
require LIBS.'View.php';
require LIBS.'Model.php';

$onlineshop = new Router();
die();
?>