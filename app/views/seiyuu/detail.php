<h1>detail</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['seiyuu']['name']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Birth: <?= $data['seiyuu']['birth']; ?></h6>
        <h6 class="card-subtitle mb-2"><?= $data['seiyuu']['gender']; ?></h6>
        <p class="card-text"><?= $data['seiyuu']['about']; ?></p>
        <a href="<?= BASEURL; ?>/seiyuu" class="card-link">back</a>
    </div>
</div>