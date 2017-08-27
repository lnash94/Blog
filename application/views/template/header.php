<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/25/2017
 * Time: 10:23 PM
 */?>

<html>
<head>
<title> Tech_Blog
</title>
<!--    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
<!--    <script src="http://cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>-->
    <script src="http://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url();?>/">webApp</a>
        </div>
            <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>/about">About</a></li>
                <li><a href="<?php echo base_url();?>/posts">Blogs</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
                </ul>
            </div>
    </div>
</nav>
<div class="container">
