<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php print $post['title']; ?></h3>
    <small class="post-date">Posted on: <?php print $post['created_at']; ?></small><br>
    <?php print $post['body']; ?>
<?php endforeach; ?>