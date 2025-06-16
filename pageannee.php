<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Année</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  </head>
  <body>
    <section class="section">
      <nav class="breadcrumb is-large" aria-label="breadcrumbs">
        <ul>
          <li><a href="index.php">Looopps</a></li>
          <li><a href="pageannee.php">Année</a></li>
          <li><a href="pagegenre.php">Genre</a></li>
          <li><a href="pageartiste.php">Réalisateur</a></li>
        </ul>
      </nav>
      <div class="container">
        <div class="columns is-mobile is-multiline is-centered">
          <div class="column is-narrow">
            <p class="bd-notification is-primary">
              <div class="field">
                <h1 class="title">RENTRER UNE ANNÉE</h1>
              </div>  
              <form action = "annee.php" method = "GET">
                <div class="field has-addons">
                  <div class="control">
                    <input class="input is-large" type="search" name=annee placeholder="Année">
                  </div>
                  <div class="control">
                    <button class="button is-link is-large">Search</button>
                  </div>
                </div>
              </form>
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
