<!DOCTYPE html>
<html lang="en">

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
    <!-- ======font-awosam icon=================== -->
    <script src="https://kit.fontawesome.com/9c57d9cb6d.js" crossorigin="anonymous"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>My Broker</title>
</head>

<style>
    body {
        margin: 167px;
        background-color: var(--body-color);
        color: var(--text-color);
        transition: .4s;
    }

    /* Your CSS styles here */
    /* Add more styles as needed */
    .back-to-page-button {
        color: black;
        background-color: #ffb566 !important;
        padding: 5px 10px;
        /* Adjust padding to control button size */
        font-size: 14px;
        /* Adjust font size */
        text-decoration: none;
        border-radius: 5px;
    }



    .property-image {
        flex: 1;
        padding: 20px;
    }


    .property-image img {
        max-width: 500px;
        height: 300;
        border: 1px solid #ddd0;
        padding: 5px;
    }



    .property-info h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .property-info p {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .property-info a {
        display: block;
        margin-top: 20px;
        color: #f9f7f7;
        text-decoration: none;
    }

    .property-info a:hover {
        text-decoration: underline;
    }

    img {
        vertical-align: inherit;
        border-style: dashed;
        width: 250px;
    }

    /* ======info ============ */
    .story__img {
        left: 21rem;
        top: 18rem;
    }

    .property-info {
        flex: 9;
        padding: 144px;
    }

    .property-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        /* border: 1px solid #ddd; */
        /* background-color: #f9f9f9; */
        margin: 20px;
    }

    #drop {
        background-color: teal;
        color: white;
        padding: 10px;
        font-size: 16px;
        width: : 200px;
        height: : 60px;
        border-radius: 5px;
        font-size: 20px;
    }

    #drop-down {
        position: relative;
        display: inline-block;
    }

    #dropdown-menu {
        display: none;
        position: absolute;
        background-color: #666;
        width: 160px;
        margin-left: -45px;
        border-radius: 5px;
        z-index: 1;
    }

    #dropdown-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .gfg {
        font-size: 40px;
        font-weight: bold;
        color: #009900;
        Text-align: center;
    }

    p {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }

    #dropdown-menu a:hover {
        background-color: #ddd;
    }

    #drop-down:hover #dropdown-menu {
        display: block;
    }

    /* Style the submit button */
    input[type="submit"] {
        background-color: hsl(0, 0%, 21%);
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: hsl(31, 100%, 70%);
        ;
    }

    .button--small {
        padding: 1rem 1.5rem;
    }

    .button {
        display: inline-block;
        background-color: var(--button-color);
        color: #FFF;
        padding: 1.25rem 2rem;
        font-weight: var(--font-medium);
        transition: .3s;
    }

    .button--small-drop {
        padding: 1rem 1.5rem;
        display: inline-block;
        background-color: var(--button-color);
        color: #FFF;
        padding: 1.25rem 2rem;
        font-weight: var(--font-medium);
        transition: .3s;
        border-radius: 129px;
    }

    .container-info {
        /* background-color: #f0f0f0; */
        /* border: 1px solid #ccc; */
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        width: 280px;
        margin-left: 59px;
        margin-top: -102px;

    }

    .container-info p {
        margin: 5px 0;
        font-size: 16px;
        color: #333;
    }

    /* card */
    .card {
        width: 190px;
        height: 175px;
        border-radius: 16px;
        /* background: hsl(31deg 100% 79.57%);; */
        box-shadow: 20px 20px 60px #bebebe,
            -20px -20px 60px #ffffff;
    }

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
/* icon */
.card i {
        color: black; /* Set color to black */
        font-size: 3em; /* Set size to big */
    }

    .card-container {
        display: flex;
        justify-content: space-around;
        margin: 16px 5%;
        /* To account for the 2% spacing between cards */
    }
</style>
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
                        <a href="#" class="nav__link">PROPERTY</a>
                        <div class="dropdown-content">
                            <a href="Property-list.php?id=<?php echo $id ?>" class="nav__link active-link">Property
                                list</a>
                            <a href="Property-valuation.php?id=<?php echo $id ?>" class="nav__link active-link">Property
                                Valuation</a>
                        </div>
                    </li>
                    <li class="nav__item">
                        <a href="Add-property.php?id=<?php echo $id ?>" class="nav__link active-link">ADD PROPERTY</a>
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

    <?php
    require ('./connection.php');

    // Check if the 'p_id' parameter is set in the URL
    if (isset ($_GET['p_id'])) {
        $p_id = $_GET['p_id'];

        // Include your database connection code here
        require ('./connection.php');

        // Query to retrieve property information
        $query = "SELECT * FROM property WHERE p_id = $p_id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $imag = $row['imagepath'];
            $price = $row['cost'];
            $title = $row['type'];
            $size = $row["built"];
            $beds = $row["bhk"];
            $baths = $row["bathroom"];
            $typee = $row["listingtype"];
            $type = $row['type'];
            $bhk = $row['bhk'];
            $bathroom = $row['bathroom'];
            $balcony = $row['balcony'];
            $furniture = $row['furniture'];
            $coverp = $row['coverp'];
            $openp = $row['openp'];
            $cost = $row['cost'];
            $maintenancecharges = $row['maintenancecharges'];
            $built = $row['built'];
            $listingtype = $row['listingtype'];
            $propertyusage = $row['propertyusage'];
            $address = $row['address'];

            // HTML code to display the property information
            echo '<div class="property-container">';
            echo '<div class="property-image">';
            echo '<img src="' . $imag . '" alt="" class="story__img">';
            echo '<div class="story__square"></div>';
            echo '</div>'; // Close property-image div
            echo '<div class="property-info">';
            echo '<h2 class="section__title story__section-title">' . $title . '</h2>';
            echo '<h1 class="story__title"  style="color: green; ">₹' . $price . '</h1>';

            echo '<form action="compper_property.php?id=' . htmlspecialchars($id) . '" method="get">';

            // Property Comparison Form
    
            echo '<form action="compper_property.php?id=' . htmlspecialchars($id) . '" method="get">';
            echo '<input type="hidden" name="p_id" value="' . htmlspecialchars($p_id) . '">';

            // Property selector
            echo '<label for="p_id2" style="color: black; font-weight: bold;">Select Property to Compare:</label> ';

            echo '<select name="p_id2" id="p_id2" class="button--small-drop">';

            // Query to populate the options for Property 2
            $query = "SELECT p_id, type FROM property WHERE status = 1"; // Adjust the query as needed
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['p_id'] == $p_id) ? 'selected' : '';
                echo '<div id="drop-down">';
                echo '<div id="dropdown-menu">';
                // echo '  <div class="dropdown-content">';
                echo '<option value="' . $row['p_id'] . '" ' . $selected . '>' . $row['type'] . '</option>';
            }
            //   Close the database connection
            mysqli_close($conn);

            // Submit Button
            echo '</select>';
            echo '<br><br>';
            echo '<input type="submit" value="Compare Properties">';
            echo '</form>'; // Close the Property Comparison Form
            echo '<a href="property-list.php?id=' . htmlspecialchars($id) . '" class="button ">Back to home</a></br>';
            echo '</div>'; // Close property-info div
            echo '</div>'; // Close property-container div
    
            echo '</div>';
            echo '</div>'; 

            echo '</div>'; // Close property-info div
            echo '</div>'; // Close property-container div
            // echo '<div class="container-info">';
            echo'<div class="card-container">';
            echo '<div class="card">';
            echo '<p> <br><i class="fa-solid fa-bed"></i> <br> Beds  <br> <p style="color: green; font-size: 35px;">' . $beds . '</p> </p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p>  <br><i class="fa-solid fa-sink"></i> <br> Baths   <br>  <p style="color: green; font-size: 35px;">' . $baths .'</p> </p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p>  <br><i class="fa-solid fa-kitchen-set"></i>  <br> BHK  <p style="color: green; font-size: 35px;">' . $bhk . '</p> </p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p>  <br><i class="fa-solid fa-couch"></i>  <br> Furniture  <p style="color: green; font-size: 25px;">' . $furniture . '</p> </p>';
            echo '</div>'; //close card div
            echo '</div>';
            echo'<br>';
            echo'<div class="card-container">';
            echo '<div class="card">';
            echo '<p> <br><i class="fa-solid fa-car"></i> <br> Open Parking <p style="color: green; font-size: 35px;"> ' . $openp . '</p> </p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p>  <br> <i class="fa-solid fa-warehouse"></i>  <br> Covered Parking <p style="color: green; font-size: 35px;"> ' . $coverp . '</p></p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p> <br> <i class="fa-solid fa-building"></i> <br>Property Usage <p style="color: green; font-size: 25px;"> ' . $propertyusage . '</p> </p>';
            echo '</div>'; //close card div
            echo '<div class="card">';
            echo '<p> <br> <i class="fa-solid fa-house"></i> <br>Listing Type <p style="color: green; font-size: 25px   ;">' . $listingtype . '</p> </p>';
            echo '</div>';
            echo '</div>'; //close card div
            echo'</div>';//closecard-container
            // echo '</div>';//close continer info
    

        } else {
            echo "Property not found.";
        }
    } else {
        echo "Invalid property ID.";
    }
    ?>
    <?php
    //     require('./connection.php');
    
    // // Check if the 'p_id' parameter is set in the URL
//     if (isset($_GET['p_id'])) {
//         $p_id = $_GET['p_id'];
//         $id = $_GET['id'];
    
    //         // Include your database connection code here
//         require('./connection.php');
    
    //         // Query to retrieve property information
//         $query = "SELECT * FROM property WHERE p_id = $p_id";
//         $result = mysqli_query($conn, $query);
    
    //         if (mysqli_num_rows($result) > 0) {
//             $row = mysqli_fetch_assoc($result);
//             $imag = $row['imagepath'];
//             $price = $row['cost'];
//             $title = $row['type'];
//             $size = $row["built"];
//             $beds = $row["bhk"];
//             $baths = $row["bathroom"];
//             $typee = $row["listingtype"];
//             $type = $row['type'];
//             $bhk = $row['bhk'];
//             $bathroom = $row['bathroom'];
//             $balcony = $row['balcony'];
//             $furniture = $row['furniture'];
//             $coverp = $row['coverp'];
//             $openp = $row['openp'];
//             $cost = $row['cost'];
//             $maintenancecharges = $row['maintenancecharges'];
//             $built = $row['built'];
//             $listingtype = $row['listingtype'];
//             $propertyusage = $row['propertyusage'];
//             $address = $row['address'];
    
    //             // HTML code to display the property information
//             echo '<div class="property-container">';
//             echo '<div class="property-image">
//                 <img class="img-fluid" src="' . $imag . '" alt="Property Image">
//             </div>';
//             echo '<div class="property-info">';
//             echo '<h1>Type: ' . $title . '<br></h1>'; // Added <br> tag after the title
// //                echo '<h1>address: ' . $address . '<br></h1>'; // Added <br> tag after the title
//             echo "<h1> Address: <a href='https://www.google.com/maps/search/?api=1&query=$address' target='_blank'>$address</a></h1>";
    
    //             echo '<p>Price: ' . $price . '</p>';
//             echo '<p>Size: ' . $size . ' Sqft</p>';
//             echo '<p>Beds: ' . $beds . ' | Baths: ' . $baths . ' | BHK: ' . $bhk . '</p>';
//             echo '<p>Furniture: ' . $furniture . ' | Open Parking: ' . $openp . ' | Covered Parking: ' . $coverp . '</p>';
//             echo '<p>Property Usage: ' . $propertyusage . ' | Listing Type: ' . $listingtype . '</p>';
//             echo '<a href="property-list.php?id=' . htmlspecialchars($id) . '" class="back-to-page-button">Back to Page</a>';
//             echo '.<br>';
    
    //             // Property Comparison Form
//             echo '<form action="compper_property.php?id=' . htmlspecialchars($id) . '" method="get">';
//             echo '<input type="hidden" name="p_id" value="' . htmlspecialchars($p_id) . '">';
    
    //             // Property selector
//             echo '<label for="p_id2">Select Property to Compare:</label>';
//             echo '<select name="p_id2" id="p_id2">';
    
    //             // Query to populate the options for Property 2
//             $query = "SELECT p_id, type FROM property WHERE status = 1"; // Adjust the query as needed
//             $result = mysqli_query($conn, $query);
    
    //             while ($row = mysqli_fetch_assoc($result)) {
//                 $selected = ($row['p_id'] == $p_id) ? 'selected' : '';
//                 echo '<option value="' . $row['p_id'] . '" ' . $selected . '>' . $row['type'] . '</option>';
//             }
    
    //             // Close the database connection
//             mysqli_close($conn);
    
    //             // Submit Button
//             echo '</select>';
//             echo '<br><br>';
//             echo '<input type="submit" value="Compare Properties">';
//             echo '</form>'; // Close the Property Comparison Form
    
    //             echo '</div>'; // Close property-info div
//             echo '</div>'; // Close property-container div
//         } else {
//             echo "Property not found.";
//         }
//     } else {
//         echo "Invalid property ID.";
//     }
    ?>




    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
</body>


</html>