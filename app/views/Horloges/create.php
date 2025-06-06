<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <!-- Display success or error message -->
    <?php if (!empty($data['message'])): ?>
        <div class="alert alert-success">
            <?= htmlspecialchars($data['message']); ?>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6 text-begin text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>
    
    <!-- Begin form -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="<?= URLROOT; ?>/Horloges/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">merk</label>
                    <input name="merk" type="text" class="form-control" id="merk" value="<?= $_POST['merk'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">model</label>
                    <input name="model" type="text" class="form-control" id="model" value="<?= $_POST['model'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Prijs" class="form-label">prijs</label>
                    <input name="prijs" type="number" min="0" max="15000" class="form-control" id="prijs" value="<?= $_POST['Prijs'] ?? ''; ?>" required>
                </div>                
                
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-3"></div>
    </div>
    <!-- End form -->
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>