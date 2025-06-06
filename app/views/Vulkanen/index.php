<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <div class="card text-bg-danger">
                <h1>This is my Vulkanen</h1>

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
                        <th>Naam</th>
                        <th>Hoogte</th>
                        <th>Land</th>
                        <th>JaarLaatsteUitbarsting</th>
                        <th>AantalSlachtoffers</th>
                    </tr>
                </thead>
                <tbody>
                <a href="<?= URLROOT; ?>/pages/index" class="btn btn-primary mt-3">Back to Home</a>
                        <?php foreach ($data['Vulkaan'] as $vulkaan): ?>
                            <tr>
                                <td><?= $vulkaan->Naam; ?></td>
                                <td><?= $vulkaan->Hoogte; ?></td>
                                <td><?= $vulkaan->Land; ?></td>
                                <td><?= $vulkaan->JaarLaatsteUitbarsting; ?></td>
                                <td><?= $vulkaan->AantalSlachtoffers; ?></td>
                                
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