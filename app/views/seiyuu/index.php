<div class="row">
    <div class="col-6">
        <h3 class="mb-4">list of seiyuu</h3>
        <ul class="list-group">
            <?php foreach ($data['seiyuu'] as $seiyuu) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"> <?= $seiyuu['name']; ?>
                    <a href="<?= BASEURL; ?>/seiyuu/detail/<?= $seiyuu['id']; ?>" class="badge bg-primary text-white" style="text-decoration:none;">detail</a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>