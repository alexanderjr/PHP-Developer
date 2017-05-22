<?php

	 require_once("../vendor/autoload.php");
     require_once "config.php";
	 require_once "service.php";

	 $list = $container['ServiceProduct']->list();

	 foreach($list as $product)
     {
         echo $product['name'];
     }

	 //print_r($list);