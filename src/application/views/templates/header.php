<html>

<head>
    <title>citutorial</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php print base_url(); ?>css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <a class="navbar-brand" href="/">Blog</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php print base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print base_url(); ?>index.php/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print base_url(); ?>index.php/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print base_url(); ?>index.php/categories">Categories</a>
                </li>

                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php print base_url(); ?>index.php/users/register">Register</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php print base_url(); ?>index.php/users/login">Login</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php print base_url(); ?>index.php/posts/create">Create Post</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php print base_url(); ?>index.php/categories/create">Create Category</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php print base_url(); ?>index.php/users/logout">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- 
        <?php if ($this->session->flashdata('user_registered')) : ?>
            <?php print '<p class="alert alert-success>' . $this->session->flashdata('user_registered') . '</p>'; ?>
        <?php endif; ?> -->