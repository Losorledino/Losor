<div class="cell">
    <div class="box">
        <h1 class="title"><?= $film['titre'] ?></h1>            
        <div class="fixed-grid">
            <div class="grid">
                <h2 class="subtitle is-4">note : <?= $film['note_moyenne'] ?>/10</h2>
                <h2 class="subtitle is-4">realisateur : <?= $film['nom'] ?> <?= $film['prenom'] ?></h2>
                <h2 class="subtitle is-4">date de sortie : <?= $film['annee'] ?></h2>
                <h2 class="subtitle is-4">genre : <?= $film['genre'] ?></h2>
            </div>
        </div>
        <h3 class="subtitle is-5">RESUME : <?= $film['resume'] ?></h3>
    </div>
</div>


