<h2><?= $title ;?></h2>

<?php echo validation_errors();?>
<!--/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/28/2017
 * Time: 5:56 PM
 */-->
<?php echo form_open_multipart('categories/create')?>
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
