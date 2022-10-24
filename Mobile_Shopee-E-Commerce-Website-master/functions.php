<?php

//require mysql connection
require ('database/DBController.php');

//require product class
require ('database/Product.php');

//require cart class
require ('database/Cart.php');

//DBController Object
$db=new DBController();

//Product Object
$product=new Product($db);
$product_shuffle= $product->getData();

//Cart Object
$Cart=new Cart($db);
