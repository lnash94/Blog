
<?php echo validation_errors();?>
<!--user registration form-->
<?php echo form_open('users/register');?>
<div class="col-md-4 col-md-offset-4">
    <h2><?= $title; ?></h2>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">

    </div>
    <div class="form-group">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="email">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm password">
    </div>
<button type="submit" class="btn btn-primary" name="">Submit</button>

<?php echo  form_close();?>
</div>