<?php

//include_once "Classes/Person.php";
//include_once "Classes/Students.php";
//include_once "Classes/Connection.php";
//include_once "Classes/Database.php";

//File ေတွ အများကြီး ချိတ်ဖို့ spl_autoload ကိုသုံးပါတယ်။

include_once "auto-load.php";



//$p1 = new Person('Tha',24,"male");
//
//print_r($p1);
//print_r($p1->intro());
//
//
//$p2 = new Person('Su Su',23,"female");
//
//print_r($p2);
//print_r($p2->intro());
//
//$st1 = new Student("Ko Ko",20,"male","WAD",8,6);
//print_r($st1);

//$db = new Database();
//print_r($db);
//
//$db = new Contact($);
//print_r($db->contacts());
//
//$user = new User("users");
//print_r($user->find(2));
//
//$db = new Database();
//print_r($db);

$contacts = new Contact();
print_r($contacts->fetchAll());




