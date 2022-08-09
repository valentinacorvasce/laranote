<h2>Le mie note</h2>

<!-- Compilazione di un file con PHP standard; -->
<h3><?php echo $intestazione; ?></h3>

<?php foreach ($contents as $content) : ?>
    <h5><?php echo $content['id'] ?></h5>
    <h5><?php echo $content['title'] ?></h5>
    <h5><?php echo $content['description'] ?></h5>

<?php endforeach; ?>
