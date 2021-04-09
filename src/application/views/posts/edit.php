<h2><?= $title; ?></h2>

<?php print validation_errors(); ?>

<?php print form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php print $post['id']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php print $post['title']; ?> ">
    </div>
    <div class="form-group">
        <label>Add Body</label>
        <textarea class="form-control" rows="3" name="body"><?php print $post['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>