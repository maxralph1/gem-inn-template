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

    <script src="./script.js" defer></script>
</head>

<body class="d-flex flex-column" style="position: relative">
    <?php include './includes/topnav.php'; ?>

    <main class="container last-section-margin mt-5">
        <section>
            <h3 class="fs-3 fw-bold border-bottom">Onyx Jewelry</h3>

            <p class="d-flex justify-content-end">
                <a href="" class="btn btn-danger">
                    Add to cart
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" style="color: #fff;" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                    </svg>
                </a>
            </p>

            <div class="row mt-4">
                <div class="col-md-5 d-flex flex-column">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="./images/bridget-flohe.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/coppertist-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/coppertist-2.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-6">
                    <h4 class="fs-4 fw-bold mt-3">Description</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem blanditiis quos iusto aliquam sunt unde neque deleniti temporibus iste impedit esse autem, quod tempora! Doloremque eos veritatis at sed aliquam consequatur dolore, odio, laborum, aperiam modi sit vero earum animi culpa facilis libero officiis consequuntur vel aut deleniti rem sapiente eaque repellat. Porro illum autem incidunt, quod alias quibusdam eligendi exercitationem ad soluta itaque at in accusamus a nam odit beatae vitae omnis laboriosam voluptas nulla id eos commodi culpa! Architecto molestiae possimus totam, eius aperiam vero ipsa asperiores vitae sed qui blanditiis ut dolore voluptas inventore expedita error quaerat voluptatum odit voluptate nisi sapiente temporibus cumque ea? Nostrum nobis exercitationem, unde numquam odio quae accusantium libero, iste deserunt voluptatum illum tempora?</p>
                </div>
            </div>

        </section>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>