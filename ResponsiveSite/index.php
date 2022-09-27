<!DOCTYPE html>
<html lang="en">

<head>
    <title>Responsive website</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light bg-gradient border border-light fw-semibold">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Deepak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/first.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/second.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/third.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/fourth.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr class="line">

    <section class="my5">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/construction.jpg" class="img-fluid aboutimg" alt=" Construction">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4 fw-semibold">I am Deepak</h2>
                    <p class="py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum autem,
                        nesciunt
                        vitae praesentium tempora quam provident sunt maxime incidunt quisquam possimus nemo. Non,
                        officiis, magnam at illum cumque assumenda ad nam, repellat enim facere soluta? Exercitationem
                        sint id maxime ipsum. Assumenda sapiente at ratione, minima, culpa doloribus nisi voluptates eum
                        sequi, in repellat illum. Vero asperiores ducimus tempora eaque corrupti minima sit tempore
                        debitis laboriosam neque doloremque eius incidunt, eveniet delectus consequuntur odio in
                        voluptatibus dicta ea similique laudantium. Iste officia cumque, veritatis quisquam, magnam
                        dolorum unde quidem eligendi laboriosam a eveniet maxime soluta impedit ea quis asperiores
                        nostrum.</p>
                    <a href="about.php" class="btn btn-success">Wanna know me</a>
                </div>
            </div>
        </div>
    </section>
    <hr class="line">

    <section class="my5">
        <div class="py-5">
            <h2 class="text-center">Our services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/ConstructBuilding.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Building</h4>
                            <p class="card-text">We are ready to construct your dream House.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/plaster.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Plaster</h4>
                            <p class="card-text">We are ready to construct your dream House.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/interior.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title"></h4>
                            <p class="card-text">We are ready to construct your dream House.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="line">

    <section class="my5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col--12">
                    <img src="img/basement.jpg" class="img-fluid pb-4" alt="">
                </div>
            </div>
        </div>
    </section>
    <hr class="line">

    <section class="my5">
        <div class="py-5">
            <h2 class="text-center">Contact us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userData.php" method="POST">
                <div class="form-group py-3">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group py-3">
                    <label>Email-id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group py-3">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group py-3">
                    <label>Comment</label>
                    <textarea name="" id="" class="form-control" name="comment">
                    </textarea>
                </div>
                <button type="submit" class="btn-success btn">Submit</button>
            </form>
        </div>
    </section>
    <hr class="line">

    <footer>
        <p class="p-3 bg-dark text-white text-center">@companyName</p>
        </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>