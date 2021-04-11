<h2><?= $title; ?></h2>

<ul class="list-group">
    <?php foreach($categories as $category) : ?>
        <li class="list-group-item">
            <a href="<?php print site_url('/categories/posts/' . $category['id']); ?>">
                <?php print $category['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>