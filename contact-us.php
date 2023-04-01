<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
</head>

<body class="d-flex flex-column" style="position: relative">
    <?php include './includes/topnav.php'; ?>

    <main class="container last-section-margin">
        <section class="row align-items-center my-5 text-danger">
            <div class="col-md-6">
                <h2 class="fs-2 fw-bold">Gem-Inn, Paris</h2>
                <p class="fs-3">#1234 Rue Paris Saint-Germain, Paris</p>
                <p><a href="/products.php" class="text-danger text-decoration-none fs-5">+12345678</a></p>
            </div>
            <div class="col-md-6">
                <h2 class="fs-2 fw-bold">Gem-Inn, Berlin</h2>
                <p class="fs-3">#1234 Strasse BundesStrasse, Berlin</p>
                <p><a href="/products.php" class="text-danger text-decoration-none fs-5">+12345678</a></p>
            </div>
            <div class="col-md-6">
                <h2 class="fs-2 fw-bold">Gem-Inn, Stockholm</h2>
                <p class="fs-3">#1234 Hårt arbete och framgång Street, Stockholm</p>
                <p><a href="/products.php" class="text-danger text-decoration-none fs-5">+12345678</a></p>
            </div>

        </section>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>