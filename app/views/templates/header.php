<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul'] ?></title>
  <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php if ($data['judul'] === 'Home Page') : ?>
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-link" href="<?= BASEURL; ?>/seiyuu">Seiyuu</a>
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
          <?php elseif ($data['judul'] === 'Seiyuu List') : ?>
            <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/seiyuu">Seiyuu</a>
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
          <?php elseif ($data['judul'] === 'About Page') : ?>
            <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-link" href="<?= BASEURL; ?>/seiyuu">Seiyuu</a>
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/about">About</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-4">