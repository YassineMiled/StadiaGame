<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Liste des jeux -->
        <div class="col-md-10 col-lg-9">
            <h1 class="mb-4 text-center">Tous nos jeux vidéo</h1>
            
            <div class="row">
                <?php if (empty($lesJeux)): ?>
                    <div class="col-12">
                        <div class="alert alert-info">
                            Aucun jeu n'est disponible pour le moment.
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($lesJeux as $jeu): ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <?php if (!empty($jeu['image'])): ?>
                                    <img src="<?= htmlspecialchars($jeu['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($jeu['title']) ?>">
                                <?php else: ?>
                                    <div class="text-center p-3 bg-light">
                                        <i class="fas fa-gamepad fa-4x text-muted"></i>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= htmlspecialchars($jeu['title']) ?></h5>
                                    <p class="card-text text-muted">
                                        <?= substr(htmlspecialchars($jeu['description']), 0, 100) ?> ...
                                    </p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 mb-0"><?= number_format($jeu['price'], 2, ',', ' ') ?> €</span>
                                            <a href="index.php?action=detail&id=<?= $jeu['id'] ?>" class="btn btn-sm btn-primary">Voir détails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <small>Date de sortie: <?= date('d/m/Y', strtotime($jeu['release_date'])) ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>