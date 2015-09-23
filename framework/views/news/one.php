<?php  foreach ($item as $article): ?>
    <h1><?php  echo $article->title; ?></h1>
    <div><?php echo $article->text; ?></div>

<?php endforeach ?>
