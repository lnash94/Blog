<h2> <?= $title ?> </h2>
<?php
echo validation_errors();
echo form_open('posts/update')?>
<input type="hidden" name="id" value="<?php echo $post['id'];?>">

<form>
    <div class="form-group">
        <label >Title</label>
        <input type="text" class="form-control"  name="title" placeholder="Add titel" value="<?php echo $post['title'];?>">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label >Body</label>
        <textarea id="editor1" name="body" class="form-control"  placeholder="Add Body"><?php echo $post['body'];?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>