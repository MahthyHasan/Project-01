<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ease Travels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        .seat {
            position: relative;
            border: 0.1px;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            justify-content: center;
            align-items: center;
            padding: 0px;
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .selected-child {
            background-color: #dfff00;
        }

        .selected-woman {
            background-color: pink;
        }

        .selected-man {
            background-color: green;
        }
    </style>
</head>

<body class="bg-body-secondary">
    <!--Nav bar start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navBar">

        <div class="container-fluid">
            <a class="navbar-brand Logo-TravelEase logoTravelEase" href="#"><img class="LogoImage" src="./Images/2.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbarTabsMenue" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0 ml-auto">
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="commanUser.php">
                            <span class="coustomIcon ">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="aboutus.php">
                            <span class="coustomIcon">
                                <ion-icon name="accessibility-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                About Us
                            </span>
                        </a>
                    </li>
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="contactus.php">
                            <span class="coustomIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
                <a href="findTickets.php">
                    <button class="btn btn-outline-warning buyticket-button" type="submit">
                        Buy Tickets
                    </button>
                </a>
                </form>
            </div>
        </div>
    </nav>
    <!---Nav bar End-->
    <!--Body Part Starts-->
    <!-- Testing Part Start -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal content goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
    <!-- Testing Part End -->
    <!--Ticket Filter Form Start-->
    <div class="routeFilter">
        <div class="row align-items-center5">
            <div class="bannerbacgground">
                <img class="bannerbacgground" src="./Images/2.png">
            </div>
            <div class="col-lg-7 text-center text-lg-start BannerTextBody">
                <h1 class="text text-lg-start BannerTitle">It is far more easier to Traval</h1>
                <p>Travel with EaseTravales</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="FindTicketsCommanUser.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" aria-placeholder="Pickup Point" name="departure_location" id="departure_location">
                                <option selected>Pickup Point</option>
                                <option value="badulla">Badulla</option>
                                <option value="colombo">Colombo</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="arrival_location" id="arrival_location">
                                <option selected>Dropping Point</option>
                                <option value="badulla">Badulla</option>
                                <option value="colombo">Colombo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text mt-3" id="basic-addon1">Diparture Date</span>
                                <input type="date" class="form-control mt-3" placeholder="Departure Date" aria-label="Departure Date" aria-describedby="basic-addon1" name="departure_date" id="departure_date">
                                <script>
                                    // Get today's date in yyyy-mm-dd format
                                    function getCurrentDate() {
                                        const today = new Date();
                                        const year = today.getFullYear();
                                        const month = String(today.getMonth() + 1).padStart(2, '0');
                                        const day = String(today.getDate()).padStart(2, '0');
                                        return `${year}-${month}-${day}`;
                                    }

                                    // Set the input field value to the current date
                                    document.getElementById('departure_date').value = getCurrentDate();

                                    // Disable previous dates
                                    document.getElementById('departure_date').min = getCurrentDate();
                                </script>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button type="submit" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="button1">
                        Find Tickets
                    </button>
                    <hr class="my-4 mt-2">
                    <div class="row text-center">
                        <div class="col-3"></div>
                        <div class="col">
                            <a href="sign_in.php">
                                <button type="button" class="btn btn-outline-success">Sign IN</button>
                            </a>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Ticket Filter Form End-->
    <!--Find Rroute Page Start-->
    <div class="grid text-center mt-5">
        <h1> Our Routes </h1>
    </div>
    <div>
        <div class="row">
            <div class="col-3">
                <div class="grid text-center mt-2">
                    <h2> Easy Option </h2>
                </div>

            </div>
            <div class="col-9">
                <div class="grid text-center mt-2">
                    <h2> Available Routes </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Easy option Tabs Start-->
            <div class="col-3" id="FindTicketsSEction">
                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                    <div class="position-sticky">
                        <div class="list-group list-group-flush mx-3 mt-4">

                            <!--Easy Option Routes Start-->
                            <!--Route No 1 Badulla to Colombo (BTC)-->
                            <a class="list-group-item list-group-item-action sidebarnew1" id="list-dashBoard-list" data-bs-toggle="list" href="#list-dashBoard" role="tab" aria-controls="list-dashBoard" aria-selected="True" tabindex="-1"><span>Badulla to Colombo</span></a>
                            <!--Route No 2 Passara to Colombo(CTB)-->
                            <a class="list-group-item list-group-item-action sidebarnew1" id="list-proposal-list" data-bs-toggle="list" href="#list-proposal" role="tab" aria-controls="list-proposal" aria-selected="false"><span>Colombo to Badulla</span></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Easy Option Contents Start-->
            <div class="col-9">
                <div id="content">
                    <div class="tab-content" id="nav-tabContent">
                        <!--BTC Content Start-->
                        <div class="tab-pane fade" id="list-dashBoard" role="tabpanel" aria-labelledby="list-dashBoard-list" style="height:100%;">
                            <!--Route no1 start-->
                            <?php
                            try {
                                $db = new PDO('mysql:host=localhost;dbname=journey_ease', 'root', '');
                                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                // Your SQL query to select data from schedule and bus tables
                                $sql = "SELECT schedule.*, bus.*, route.Start_Location 
                                FROM schedule 
                                INNER JOIN bus ON schedule.Bus_ID = bus.Bus_ID 
                                INNER JOIN route ON schedule.Route_ID = route.Route_ID
                                WHERE route.Start_Location = 'Badulla'";

                                // Prepare and execute the query
                                $stmt_BC = $db->prepare($sql);
                                $stmt_BC->execute();

                                // Fetch all the rows as an associative array
                                $results = $stmt_BC->fetchAll(PDO::FETCH_ASSOC);

                                // Loop through the results and print details from both tables
                                foreach ($results as $row) {
                                    $PassSheduleID = $row['Schedule_ID'];
                                    echo '<div class="container mt-3 mb-3">';
                            ?>
                                    <?php echo '<div class="p-5 text-center bg-body-tertiary rounded-3">'; ?>
                                    <h1 class="text-body-emphasis"><?php echo $row['Start_Location']; ?> - <?php echo 'Colombo'; ?></h1>

                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-3">
                                                <table>
                                                    <tr>
                                                        <th><?php echo $row['Departure_Time']; ?></th>
                                                        <th><ion-icon name="arrow-forward"></ion-icon></th>
                                                        <th><?php echo $row['Arrival_Time']; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $row['Start_Location']; ?></td>
                                                        <td><ion-icon name="arrow-forward"></ion-icon></td>
                                                        <td><?php echo 'Colombo' ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-6 text-center">
                                                <h3><?php echo $row['Type_of_Bus']; ?></h3>
                                                <h5><?php echo $row['Bus_Registration_Number']; ?></h5>
                                            </div>
                                            <div class="col-3 text-center">
                                                <h3 class="ticketPrice">RS. 2000</h3>
                                                <small><?php echo $row['Date'] ?></small>
                                                <a href="SeatSelection.php?var=<?php echo urlencode($PassSheduleID); ?>"><button type="button" class="btn btn-outline-primary mt-2">Choose Seat</button></a>

                                            </div>
                                        </div>
                                    </div>
                        </div>
                        <?php echo '</div>'; ?>
                        <?php echo '</br>'; ?>
                <?php
                                }
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                ?>
                <!-- Route No 1 End -->

                    </div>

                    <!--BTC Content End-->
                    <!--CTB Content End-->
                    <div class="tab-pane fade" id="list-proposal" role="tabpanel" aria-labelledby="list-proposal-list" style="height:100%;">
                        <!--Route no1 start-->
                        <?php
                        try {
                            $db = new PDO('mysql:host=localhost;dbname=journey_ease', 'root', '');
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Your SQL query to select data from schedule and bus tables
                            $sql = "SELECT schedule.*, bus.*, route.Start_Location 
                                FROM schedule 
                                INNER JOIN bus ON schedule.Bus_ID = bus.Bus_ID 
                                INNER JOIN route ON schedule.Route_ID = route.Route_ID
                                WHERE route.Start_Location = 'Colombo'";

                            // Prepare and execute the query
                            $stmt_CB = $db->prepare($sql);
                            $stmt_CB->execute();

                            // Fetch all the rows as an associative array
                            $results = $stmt_CB->fetchAll(PDO::FETCH_ASSOC);

                            // Loop through the results and print details from both tables
                            foreach ($results as $row) {
                                echo '<div class="container mt-3 mb-3">';
                        ?>
                                <?php echo '<div class="p-5 text-center bg-body-tertiary rounded-3">'; ?>
                                <h1 class="text-body-emphasis"><?php echo $row['Start_Location']; ?> - <?php echo 'Badulla'; ?></h1>

                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <table>
                                                <tr>
                                                    <th><?php echo $row['Departure_Time']; ?></th>
                                                    <th><ion-icon name="arrow-forward"></ion-icon></th>
                                                    <th><?php echo $row['Arrival_Time']; ?></th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['Start_Location']; ?></td>
                                                    <td><ion-icon name="arrow-forward"></ion-icon></td>
                                                    <td><?php echo 'Badullla' ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h3><?php echo $row['Type_of_Bus']; ?></h3>
                                            <h5><?php echo $row['Bus_Registration_Number']; ?></h5>
                                        </div>
                                        <div class="col-3 text-center">
                                            <h3 class="ticketPrice">RS. 2000</h3>
                                            <small><?php echo $row['Date'] ?></small>
                                            <button type="button" class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Choose Seat</button>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <?php echo '</div>'; ?>
                    <?php echo '</br>'; ?>
            <?php
                            }
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
            ?>
            <!-- Route No 1 End -->
                </div>
                <!--cTB Content End-->

                <!--new menu item end-->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--Find Rroute Page End-->
    <!--Easy Option Contents End-->
    <!--Body Part End-->
    <!--Footer Start-->
    <footer class="border-top footerbackground">
        <div class="row">
            <div class="col-12 col-md ">
                <span>
                    <img class="mb-2" src="images/logo2.jpg" alt="" width="24" height="19">
                </span>
                <span>
                    <p>Make Your Journy Easy</p>
                </span>
                <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
                <div class="row ">
                    <div class="container firstCol">
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLF">
                                    <ion-icon name="logo-facebook">
                                </span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLI">
                                    <ion-icon name="logo-instagram">
                                </span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLW">
                                    <ion-icon name="logo-whatsapp">
                                </span>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLT">
                                    <ion-icon name="logo-twitter">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md">
                <h5 style="color: white;">Links</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"> <a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="accessibility-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                About Us
                            </span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Policies</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">privacy Policy</a></li>
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Terms & Conditions</a></li>
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Ticket Policy</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contact us</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none listtext" href="../contactus/index.php">
                            <span class="coustomIcon">
                                <ion-icon name="location-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                No2, Passara Raod, Badulla.
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                +94123987456
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="at-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                EaseTravales@Bus.com
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!--Footer End-->
</body>

</html>