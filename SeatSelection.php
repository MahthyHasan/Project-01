<?php
// Include the file containing the DatabaseConnection class
require_once 'classes/dbconnectorC.php';

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "journey_ease";

// Create an instance of the DatabaseConnection class
$db = new dbconnectorC($host, $username, $password, $database);

?>
<?php
if (isset($_GET['var'])) {
    $SHID = $_GET['var'];
}
?>
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
            background-color: #FFFD8C;
        }

        .selected-woman {
            background-color: #FF9EAA;
        }

        .selected-man {
            background-color: #A2FF86;
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
    <div class="routeFilter">
        <div class="row align-items-center5">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col calenderDiv">
                            <input type="date" class="calender">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="genderSelectionDiv">
                            <select id="passengerCategory" class="passengerCategory">
                                <option value="child">Child</option>
                                <option value="woman">Woman</option>
                                <option value="man">Man</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <div class="SeatSelectionDiv">
                        <div class="busSeats">
                            <div class="row text-center">
                                <h3>Front</h3>
                            </div>
                            <div id="seatContainer">
                                <!--select seat row start-->
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    $j = 5 * $i - 4;
                                ?>
                                    <div class="row mt-1">
                                        <div class="col-1"></div>
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="seat seatsWithNumberImages" data-seat-number="<?php echo $j; ?>">
                                                        <span>
                                                            <small class="seatNumber"><?php echo $j; ?></small>
                                                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="seat" data-seat-number="<?php echo $j + 1; ?>">
                                                        <span>
                                                            <small class="seatNumber"><?php echo $j + 1; ?></small>
                                                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="seat" data-seat-number="<?php echo $j + 2; ?>">
                                                        <span>
                                                            <small class="seatNumber"><?php echo $j + 2; ?></small>
                                                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="seat" data-seat-number="<?php echo $j + 3; ?>">
                                                        <span>
                                                            <small class="seatNumber"><?php echo $j + 3; ?></small>
                                                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="seat" data-seat-number="<?php echo $j + 4; ?>">
                                                        <span>
                                                            <small class="seatNumber"><?php echo $j + 4; ?></small>
                                                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                <?php } ?>
                                <!--Select select Row End -->
                            </div>
                            <div class="col-3"></div>
                        </div>
                        <div class="row text-center">
                            <h3>Reer</h3>
                        </div>
                        <div class="row text-center ">
                            <div class="text-center displaySeatCatogery">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByMale">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByFemale">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByChild">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><small>Male</small></td>
                                        <td><small>Female</small></td>
                                        <td><small>Child</small></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="displayLables">
                            <div class="row">
                                <div>
                                    <p>Selected Seats:</p>
                                    <label id="selectedSeatsLabel"></label>
                                </div>
                                <div>
                                    <p>Total Price: <span id="totalPrice">0</span></p>
                                </div>
                            </div>
                        </div>
                        <script>
                            // JavaScript code here
                            const seatButtons = document.querySelectorAll('.seat');
                            const passengerCategorySelect = document.getElementById('passengerCategory');
                            const totalPriceDisplay = document.getElementById('totalPrice');
                            const selectedSeatsLabel = document.getElementById('selectedSeatsLabel');

                            let selectedSeats = {};

                            seatButtons.forEach((seatButton) => {
                                seatButton.addEventListener('click', () => {
                                    const seatNumber = seatButton.getAttribute('data-seat-number');
                                    const passengerCategory = passengerCategorySelect.value;

                                    if (selectedSeats[seatNumber]) {
                                        // Deselect the seat
                                        delete selectedSeats[seatNumber];
                                        seatButton.classList.remove(`selected-${passengerCategory}`);
                                    } else {
                                        // Select the seat
                                        selectedSeats[seatNumber] = passengerCategory;
                                        seatButton.classList.add(`selected-${passengerCategory}`);
                                    }

                                    // Update the total price (you can set your own pricing logic)
                                    const totalPrice = Object.keys(selectedSeats).length * 2000; // Assuming each seat costs $10
                                    totalPriceDisplay.textContent = totalPrice;

                                    // Generate reference numbers for selected seats
                                    const referenceNumbers = Object.entries(selectedSeats).map(([seat, ageGroup]) => {
                                        return `<?php echo $SHID ?>-${seat}-${ageGroup}`;
                                    });

                                    // Update the selected seats label
                                    selectedSeatsLabel.textContent = referenceNumbers.join(', ');
                                });
                            });
                        </script>


                        <div class="checkout mt-3">
                            <button class="btn btn-outline-primary" onclick="test()"> Proceed to Checkout</button>
                        </div>
                    </div>
                    <script>
                        function test() {
                            const labelElement = document.getElementById('selectedSeatsLabel');
                            const labelText = labelElement.textContent;
                            const dataArray = labelText.split(',');
                            const SelectedSeatsArray = dataArray.map(item => item.trim());
                            console.log("clicked");

                            $.ajax({
                                url: "testingPage.php",
                                method: 'POST',
                                data: {
                                    array: SelectedSeatsArray
                                },
                                success: function(result) {
                                    console.log("success");
                                    $("#kkkkkk").html(result);
                                }
                            });

                        }
                    </script>
                    <br>
                </div>
            </div>
        </div>
        <div class="bg-white" id="kkkkkk"></div>

        <!--Seat Select POP UP End-->
        <!--Body Part End-->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Body Part End -->
    <!--Footer Start-->
    <footer class="border-top footerbackground">
        <div class="row">
            <div class="col-12 col-md ">
                <span>
                    <img class="mb-2" src="images/logo2.jpg" alt="" width="24" height="19">
                </span>
                <span>

                    <a href=>
                        <p>Make Your Journy Easy</p>
                    </a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Footer End-->
</body>

</html>