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
            <div class="container">
                <form action="../includes/api.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                </form>

                <div>
                    <?php
                        print_r($newData['qtd_repositorios_publicos']);
                    ?>
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