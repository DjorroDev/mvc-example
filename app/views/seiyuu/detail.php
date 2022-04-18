<h1><?= $data['seiyuu']['name']; ?></h1>
<img src="<?= BASEURL; ?>/img/people/<?= $data['seiyuu']['image']; ?>" class="mb-3" alt="<?= $data['seiyuu']['name']; ?>">
<h6 class="mb-2 text-muted">Birth: <?= $data['seiyuu']['birth']; ?></h6>
<h6 class="mb-2"><?= $data['seiyuu']['gender']; ?></h6>
<p class="card-text"><?= nl2br($data['seiyuu']['about']); ?></p>
<a href="<?= BASEURL; ?>/seiyuu" class=" btn btn-primary mb-5">back</a>