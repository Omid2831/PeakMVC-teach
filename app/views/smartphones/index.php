<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-6 ">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <div class="card text-bg-danger">
                <h1>Hello that is my first view</h1>

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
                        <th>Prijs</th>
                        <th>Geheugen</th>
                        <th>Besturingssysteem type</th>
                        <th>Schermgrootte</th>
                        <th>ReleaseDate</th>
                        <th>MegaPixels</th>

                    </tr>
                </thead>
                <tbody>
                <a href="<?= URLROOT; ?>/pages/index" class="btn btn-primary mt-3">Back to Home</a>
                    <?php foreach ($data['smartphones'] as $smartphone): ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                            <td><?= $smartphone->Prijs; ?></td>
                            <td><?= $smartphone->Geheugen; ?></td>
                            <td><?= $smartphone->Besturingssysteem; ?></td>
                            <td><?= $smartphone->Schermgrootte; ?></td>
                            <td><?= $smartphone->ReleaseDate; ?></td>
                            <td><?= $smartphone->MegaPixels; ?></td>
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