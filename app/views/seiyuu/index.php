<div class="row">
    <div class="col-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" id="buttonAdd" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#modalForm">
            Add People
        </button>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <form action="<?= BASEURL; ?>/seiyuu/search" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" autocomplete="off" placeholder="Search seiyuu" name="keyword" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="submit" id="searchBtn">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th scope="col" class="col-1">No.</th>
                    <th scope="col" class="col-5">Name</th>
                    <th scope="col" class="col-3">Birth</th>
                    <th scope="col" class="col-2">action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data['seiyuu'] as $seiyuu) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>
                            <?php if ($seiyuu['image'] != null || $seiyuu['image'] !== 'nophoto.jpg') : ?>
                                <a href="<?= BASEURL; ?>/seiyuu/detail/<?= $seiyuu['id']; ?>">
                                    <img class="mx-2" src="<?= BASEURL; ?>/img/people/<?= $seiyuu['image']; ?>" width="100px" alt="<?= $seiyuu['name']; ?>">
                                </a>
                            <?php endif; ?>

                            <a class="" style="text-decoration: none;" href="<?= BASEURL; ?>/seiyuu/detail/<?= $seiyuu['id']; ?>">
                                <?= $seiyuu['name']; ?>
                            </a>
                        </td>
                        <td><?= $seiyuu['birth']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/seiyuu/detail/<?= $seiyuu['id']; ?>" class="ms-1 badge bg-primary text-white" style="text-decoration:none;">detail</a>
                            <a href="<?= BASEURL; ?>/seiyuu/edit/<?= $seiyuu['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalForm" class=" ms-1 badge bg-success text-white showModalEdit" data-id="<?= $seiyuu['id']; ?>" style="text-decoration:none;">edit</a>
                            <a href="<?= BASEURL; ?>/seiyuu/delete/<?= $seiyuu['id']; ?>" class="ms-1 badge bg-danger text-white" style="text-decoration:none;" onclick="return confirm('Are you sure want to delete data?')">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
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
                <form action="<?= BASEURL; ?>/seiyuu/add" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="image" class="form-label">picture</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="image">
                    </div>
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
                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
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