<?php
$title = 'World';
$posts = [
  [
    'title' => 'Big tech stuff',
    'date' => 'January 6, 2011',
    'author' => 'Bob',
    'body' => 'Big stuff',
  ],
  [
    'title' => 'Some tech title 2',
    'date' => 'January 3, 2021',
    'author' => 'Torbik',
    'body' => 'Some tech content 2',
  ],
  [
    'title' => 'Some Tech title 3',
    'date' => 'January 5, 2021',
    'author' => 'Morss',
    'body' => 'Some tech content 3',
  ],
  [
    'title' => 'Some tech title 4',
    'date' => 'January 7, 2023',
    'author' => 'Paat',
    'body' => 'Some tech content 4',
  ],
];


?>


<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>
