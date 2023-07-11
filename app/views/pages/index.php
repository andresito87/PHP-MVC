<?php require APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title'] ?></h1>
<<<<<<< HEAD
<ul>
    <?php foreach($data['posts'] as $post) : ?>
        <li><?php echo $post->name; ?></li>
    <?php endforeach; ?>
</ul>
=======
<p>This is the PHP MVC framework. Please refer to the docs on how to use it.</p>
>>>>>>> 4e8c5d2 (first commit after merge with develop branch)

<?php require APPROOT . '/views/inc/footer.php'; ?>