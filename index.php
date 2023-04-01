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

    <main class="container last-section-margin mt-5">
        <section class="row align-items-center my-5">
            <div class="col-md-5">
                <h2 class="fs-2 fw-bold">Shop with leisure</h2>
                <p class="fs-3"><span class="text-danger">Gem-Inn Jewelries</span> is your one-stop shop for all exquisite gems. Order and have it delivered at your doorsteps.</p>
                <p><a href="/products.php" class="btn btn-danger">Check out our gallery</a></p>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide col-md-7" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                </div>
                <div class="carousel-inner rounded" style="height: 350px;">
                    <div class="carousel-item active">
                        <img src=" ./images/bridget-flohe.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src=" ./images/coppertist-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/coppertist-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/cornelia.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/gary-yost.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/jenna-day.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/kazzle-john.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/mong-bui.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/simran-sood.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section>
            <h3 class="fs-3 fw-bold border-bottom">Our Products</h3>

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