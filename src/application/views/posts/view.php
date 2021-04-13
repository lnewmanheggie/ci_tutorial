<h2><?php print $post['title']; ?></h2>
<small class="post-date">Posted on: <?php print $post['created_at']; ?></small><br>
<img src="../../../images/posts/<?php print $post['post_image']; ?>" width="250">
<div class="post-body">
    <?php print $post['body']; ?>
</div>

<?php if ($this->session->userdata('user_id') === $post['user_id']) : ?>
    <hr>

    <?php print form_open('/posts/delete/' . $post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
    </form>

    <?php print form_open('/posts/edit/' . $post['slug']); ?>
    <input type="submit" value="edit" class="btn btn-secondary">
    </form>

    <hr>
<?php endif; ?>

<h3>Comments</h3>
<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
        <h5><?php print $comment['body']; ?> [by <strong><?php print $comment['name']; ?>]</strong></h5>
    <?php endforeach; ?>
<?php else : ?>
    <p>No comments to display</p>
<?php endif; ?>

<hr>

<h3>Add Comment</h3>
<?php print validation_errors(); ?>
<?php print form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea type="text" name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php print $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>
</form>