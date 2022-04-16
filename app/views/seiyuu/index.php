<div class="row">
    <div class="col-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#modalForm">
            Add People
        </button>
        <h3 class="mb-4">list of seiyuu</h3>
        <ul class="list-group">
            <?php foreach ($data['seiyuu'] as $seiyuu) : ?>
                <li class="list-group-item"> <?= $seiyuu['name']; ?>
                    <a href="<?= BASEURL; ?>/seiyuu/delete/<?= $seiyuu['id']; ?>" class="ms-1 badge bg-danger text-white float-end" style="text-decoration:none;" onclick="return confirm('Are you sure want to delete data?')">delete</a>
                    <a href="<?= BASEURL; ?>/seiyuu/detail/<?= $seiyuu['id']; ?>" class="ms-1 badge bg-primary text-white float-end" style="text-decoration:none;">detail</a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>



<!-- Modal -->
<div class="modal fade " id="modalForm" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add New Seiyuu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/seiyuu/add" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="birth" class="form-label">Birth date</label>
                        <input type="date" class="form-control" id="birth" name="birth">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About</label>
                        <textarea class="form-control" id="about" name="about" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>