<h2><?php print $post['title']; ?></h2>
<small class="post-date">Posted on: <?php print $post['created_at']; ?></small><br>
<div class="post-body">
    <?php print $post['body']; ?>
</div>

<hr>

<?php print form_open('/posts/delete/' . $post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>

<?php print form_open('/posts/edit/' . $post['slug']); ?>
    <input type="submit" value="edit" class="btn btn-secondary">
</form>


<!-- <a class="btn btn-secondary" href="/posts/edit/<?php print $post['slug']; ?>">Edit</a> -->
