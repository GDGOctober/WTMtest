<?php
session_start();
ob_start(); //Fix Error of using header
include 'inc/header.php';   //Header of Website
include 'inc/content.php';  //Content of Website
include 'inc/contact.php';  //Contact Form of Website
include 'inc/footer.php';   //Footer of Website
session_unset();
session_destroy();
?>