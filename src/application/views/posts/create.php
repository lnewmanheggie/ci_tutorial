<h2><?= $title; ?></h2>

<?php print validation_errors(); ?>

<?php print form_open_multipart('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label>Add Body</label>
        <textarea id="editor" class="form-control" rows="9" name="body"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
                <option value="<?php print $category['id']; ?>"><?php print $category['name']; ?></option>
            <?php endforeach; ?>

        </select>
    </div>
    <div class="form-group">
        <label>Upload image</label>
        <input type="file" name="userfile" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 