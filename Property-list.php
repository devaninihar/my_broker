<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>My Broker</title>
</head>

<body>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class='bx bxs-home-circle nav__logo-icon'></i> My Broker

            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <?php $id = $_GET['id'] ?>

                        <a href="homepage(user).php?id=<?php echo $id ?>" class="nav__link ">HOME</a>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link active-link">PROPERTY</a>
                        <div class="dropdown-content">
                            <a href="Property-list.php?id=<?php echo $id ?>" class="nav__link active-link">Property
                                list</a>
                            <a href="Property-valuation.php?id=<?php echo $id ?>" class="nav__link active-link">Property
                                Valuation</a>
                        </div>
                    </li>
                    <li class="nav__item">
                        <a href="Add-property.php?id=<?php echo $id ?>" class="nav__link ">ADD PROPERTY</a>
                    </li>
                    <li class="nav__item">
                        <a href="Profile.php?id=<?php echo $id ?>" class="nav__link ">PROFILE</a>
                    </li>
                    <li class="nav__item">
                        <a href="logout.php?id=<?php echo $id ?>" class="nav__link ">LOGOUT</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change buttoOn -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>

    <!--===========property list navbar============-->
    <div class="container-xxl bg-white p-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <?php $id = $_GET['id'] ?>

                                <a class="nav__link active-link" href="Property-list.php?id=<?php echo $id ?>">All
                                    Property</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav__link " href="sell.php?id=<?php echo $id ?>">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="nav__link " href="rent.php?id=<?php echo $id ?>">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--==================== property-list ====================-->
        <h2 class="section__title">
            Property
        </h2>
        <?php
        include 'connection.php';
        $query = "SELECT imagepath, cost, type, built, bhk, bathroom, listingtype, p_id FROM property WHERE status = 1 and property_status=1";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="tab-content"><div id="tab-1" class="tab-pane fade show p-0 active"><div class="row g-4 container">';

            $propertyCount = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $imag = $row['imagepath'];
                $price = $row['cost'];
                $title = $row['type'];
                $size = $row["built"];
                $beds = $row["bhk"];
                $baths = $row["bathroom"];
                $typee = $row["listingtype"];
                ?>
                <div class="row-3 justify-content-around">
                    <div class="featured__card">
                        <span class="featured__tag">
                            <?php echo $typee; ?>
                        </span>
                        <!--<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><img  src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" alt="" width="200" height="300"></a>-->

                        <img src="<?php echo $imag; ?>" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">
                                <?php echo $title; ?>
                            </h3>
                            <span class="featured__price">Price:
                                <?php echo $price; ?>
                            </span>
                        </div>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-ruler-combined text-primary me-2"></i>
                            <?php echo $size; ?> Sqft
                        </small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>
                            <?php echo $beds; ?> Bed
                        </small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>
                            <?php echo $baths; ?> Bath
                        </small>
                        <a href="info.php?id=<?php echo $_GET['id']; ?>&p_id=<?php echo $row['p_id']; ?>"><br><br>
                            <center>
                                <button class="button featured__button">Info</button>
                        </a>
                        </center>

                    </div>
                </div>

                <?php
            }

            echo '</div></div></div>';
        } else {
            echo "No properties found.";
        }
        ?>
      
        <!--           
-->
      
        <!-- ====new property list============ -->
        <!--=============== property grid ===============-->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/property-grid.css">
           
        <section class="property-grid grid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-option">
                            <!-- <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ============================= -->
                    <style>
                        .row.g-4 {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: flex-end;
                        }

                        .featured__container {
                            width: 30%;
                            margin-bottom: 20px;
                            margin-right: 20px;
                            gap: 1rem;
                        }
                    </style>
                    <style>
                        .py-5 {
                            padding-top: 5rem;
                            padding-bottom: 5rem;
                        }

                        h1 {
                            font-size: 2.5rem;
                            color: #00000;
                        }

                        p {
                            font-size: 1.2rem;
                            color: #333333;
                        }
                    </style>

                    <!--=============== SCROLL UP ===============-->
                    <a href="#" class="scrollup" id="scroll-up">
                        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
                    </a>

                    <!--=============== SWIPER JS ===============-->
                    <script src="js/swiper-bundle.min.js"></script>

                    <!--=============== MAIN JS ===============-->
                    <script src="js/main.js"></script>
                </div>
</body>

</html>