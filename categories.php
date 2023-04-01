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

    <main class="flex-shrink-0 container last-section-margin mt-5">
        <section>
            <h3 class="fs-3 fw-bold border-bottom">Our Product Categories</h3>

            <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
                <article class="col">
                    <div class="card">
                        <img src="/images/bridget-flohe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Engagement bands</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum fugit sit, magnam porro omnis fugiat beatae dignissimos. Qui veniam tempora animi quibusdam laborum nisi perspiciatis, numquam et, iure accusamus maiores...</p>
                        </div>
                    </div>
                </article>
                <article class="col">
                    <div class="card">
                        <img src="/images/coppertist-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ear rings</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi rem eligendi ab delectus illo, cum fugit doloremque sed deleniti dolor asperiores provident nisi impedit voluptatum distinctio ipsum magnam dolores nobis.</p>
                        </div>
                    </div>
                </article>
                <article class="col">
                    <div class="card">
                        <img src="/images/gary-yost.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fashion rings</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias quaerat illo ullam repellat, quisquam cumque libero, debitis reprehenderit ipsum natus optio numquam, voluptatum similique suscipit ab dicta neque at rerum!</p>
                        </div>
                    </div>
                </article>
                <article class="col">
                    <div class="card">
                        <img src="/images/simran-sood.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wrist bands</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, facilis quia in architecto ipsa dolore totam eveniet officia dolorum aut similique consequuntur, necessitatibus itaque dolorem ex doloribus consectetur earum? Ullam!</p>
                        </div>
                    </div>
                </article>
            </div>

        </section>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>