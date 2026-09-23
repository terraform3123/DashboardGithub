<?php
include_once __DIR__ . '/../includes/view.php'
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <title>Dashboard Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <main>
            <div class="container d-flex flex-column align-items-center justify-content-center gap-5">
                <div class="title">
                    <h1>Dashboard Github</h1>
                </div>
                <form action="../includes/api.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                </form>

                    <img style="border-radius: 50%; width= 300px; height: 250px;" src="<?= $newData['avatar_user'] ?>" alt="">
                    <div class="info-label">
                        <p class="text-center">Usuario: <?= $newData['login'] ?></p>
                        <p class="text-center">Name: <?= $newData['nome'] ?></p>
                        <p class="text-center">Public Repositories: <?= $newData['qtd_repositorios_publicos']; ?></p>

                    </div>
            </div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>