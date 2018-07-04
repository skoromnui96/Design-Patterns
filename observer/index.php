<?php
require_once "UserObserver.php";
require_once "User.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 03.07.2018
 * Time: 23:46
 */


$observer = new UserObserver();

$user = new User();
$user->attach($observer);

$user->changeEmail('foo@bar.com');
var_dump($observer->getChangedUsers());