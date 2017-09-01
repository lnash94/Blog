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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
<!--    <script src="http://cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>-->
    <script src="http://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url();?>/">Blog</a>
        </div>
            <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>/about">About</a></li>
                <li><a href="<?php echo base_url();?>/posts">Blogs</a></li>
                <li><a href="<?php echo base_url();?>/categories">Categories</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!$this->session->userdata('logged_in')):?>
                        <li><a href="<?php echo base_url();?>users/register">Register User</a></li>
                        <li><a href="<?php echo base_url();?>users/login">Login User</a></li>
                    <?php endif;?>
                    <?php if ($this->session->userdata('logged_in')):?>
                        <li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
                        <li><a href="<?php echo base_url();?>categories/create">Create Categories</a></li>
                        <li><a href="<?php echo base_url();?>users/logout">Log out</a></li>
                    <?php endif;?>
                </ul>
            </div>
    </div>
</nav>
<div class="container">
<!--Fash massage-->
    <?php  if ($this->session->flashdata('user_registered')):?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif; ?>


    <?php  if ($this->session->flashdata('post_created')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('post_updated')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('category_created')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('post_deleted')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedin')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedout')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
    <?php endif; ?>
    <?php  if ($this->session->flashdata('category_deleted')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>';?>
    <?php endif; ?>


