<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <div class="card text-bg-danger">
                <h1>This is my Sneakers</h1>

                <h3><?= $data['title'] ?></h3>
                <h4><?= $data['description'] ?></h4>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <!-- begin tabel -->
    <div class="row mt-4 offset-1 pd-5">
        <div class="col-1"></div>
        <div class="col-9 p-5 ">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                <a href="<?= URLROOT; ?>/pages/index" class="btn btn-primary mt-3">Back to Home</a>
                        <?php foreach ($data['Sneakers'] as $sneakers): ?>
                            <tr>
                                <td><?= $sneakers->Merk; ?></td>
                                <td><?= $sneakers->Model; ?></td>
                                <td><?= $sneakers->Type; ?></td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- eind tabel -->
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>