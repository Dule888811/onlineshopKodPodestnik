<?php

session_start();
session_name('online_shop_admin');

require 'config.php';
require LIBS.'Router.php';
require LIBS.'Admin_Controller.php';
require LIBS.'Admin_View.php';
require LIBS.'Admin_Model.php';

$onlineshop = new Router('admin');
?>