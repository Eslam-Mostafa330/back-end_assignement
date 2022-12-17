<?php

include 'DB.php';
$db = new DB;

## Select Query ##
// $data = $db->table("categories")->select()->first();

## Delete Query ##
// $data = $db->delete("users")->where('id', 4)->execute();

## Insert Query ##
// $data = $db->insert("categories",[
//     'id' => 19,
//     'name' => 'category47'
// ])->execute();

## Update Query ##
// $data = $db->table("categories")->update(['name' => 'New Category'])->where('id', '=', 19);

## 'And' Operator Query ##
// $data = $db->table("products")->update(['name' => 'Product 2'])->where('id', '=', 6)->and('price', '=', 25)->execute();

## 'Or' Operator Query ##
// $data = $db->table("users")->select("email")->where('id', '=', 5)->or('id', '=', 6)->all();

## Inner Join Query ##
// $data = $db->table("users")->select("users.id, products.name")->join("products")->on('users.id', '=', 'products.id')->all();

echo "<pre>";
print_r($data);


?>
