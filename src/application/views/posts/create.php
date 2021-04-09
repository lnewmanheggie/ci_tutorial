<h2><?= $title; ?></h2>

<?php print validation_errors(); ?>

<?php print form_open('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label>Add Body</label>
        <textarea id="editor" class="form-control" rows="7" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>