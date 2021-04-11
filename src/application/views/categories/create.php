<h2><?= $title ;?></h2>

<?php print validation_errors(); ?>

<?php print form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="enter name">
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>