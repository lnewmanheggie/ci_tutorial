<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php print $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img src="../../../images/posts/<?php print $post['post_image']; ?>" width="250">
        </div>
        <div class="col-md-9">
            <small class="post-date">Posted on: <?php print $post['created_at']; ?> in <strong><?php print $post['name']; ?></strong></small><br>
            <?php print word_limiter($post['body'], 50); ?>
            <br><br>
            <p><a class="btn btn-secondary" href="<?php print site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?php print $this->pagination->create_links(); ?>
</div>