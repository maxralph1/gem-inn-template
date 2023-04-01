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

<body class="d-flex flex-column h-100" style="position: relative">
    <?php include './includes/topnav.php'; ?>

    <main class="container last-section-margin">
        <div class="py-5">
            <h2 class="fs-3 fw-bold border-bottom">Login</h2>
        </div>

        <div class="">
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="" required>
                        <div class="invalid-feedback">
                            Password is required.
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div class="row gy-3">
                    <div class="col-md-5">
                        <p>
                            Don't have an account yet? <a href="./register.php" class="text-danger text-decoration-none">Sign Up</a>
                        </p>
                    </div>

                    <div class="col-md-3">

                    </div>

                    <div class="col-md-4">
                        <button class="w-100 btn btn-danger btn-lg" type="submit"><a href="./payment-confirmation.php" class="text-white text-decoration-none">Login</a></button>
                    </div>
                </div>



                <!-- <button class="w-100 btn btn-danger btn-lg" type="submit">Proceed to checkout</button> -->

            </form>
        </div>


    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>