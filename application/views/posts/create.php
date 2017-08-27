<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/27/2017
 * Time: 7:19 AM
 */
echo validation_errors();
echo form_open_multipart('posts/create')?>
<h2> <?= $title ?> </h2>
<form>
    <div class="form-group">
        <label >Title</label>
        <input type="text" class="form-control"  name="title" placeholder="Add titel">
<!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label >Body</label>
        <textarea id="editor1" name="body" class="form-control"  placeholder="Add Body"></textarea>
     </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach;?>
        </select>

    </div>
    <div class="form-group">
        <label>Upload image</label>
        <input type="file" name="userfile" size="20">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>