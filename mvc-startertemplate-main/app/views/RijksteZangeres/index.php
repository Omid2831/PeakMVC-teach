<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-6 ">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <div class="card text-bg-danger">
                <h1>Hello that is my 4TH view</h1>

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
                        <th>Nettowaarde(miljoen)</th>
                        <th>Land</th>
                        <th>Mobiel</th>
                        <th>Leeftijd</th>
                    </tr>
                </thead>
                <tbody>
                    <a href="<?= URLROOT; ?>/pages/index" class="btn btn-primary mt-3">Back to Home</a>
                    <?php foreach ($data['Zangeres'] as $zangeres): ?>
                        <tr>
                            <td><?= $zangeres->Naam; ?></td>
                            <td><?= $zangeres->Nettowaarde; ?></td>
                            <td><?= $zangeres->Land ?></td>
                            <td><?= $zangeres->Mobiel; ?></td>
                            <td><?= $zangeres->Leeftijd; ?></td>
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