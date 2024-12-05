<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["array"])) {
        $data = $_POST["array"];
        $selectedSeats = $data;

        // Step 1: Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "journey_ease";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo ("Connection failed: " . $conn->connect_error);
        }
        // Step 3: Generate Ticket_ID automatically (as previously shown)
        $sql = "SELECT MAX(Ticket_ID) AS max_ticket_id FROM ticket_reservation";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $maxTicketID = $row['max_ticket_id'];

        if ($maxTicketID === null) {
            $nextTicketID = 'TKT0001';
        } else {
            $nextTicketNumber = intval(substr($maxTicketID, 3)) + 1;
            $nextTicketID = 'TKT' . str_pad($nextTicketNumber, 4, '0', STR_PAD_LEFT);
        }
        // Step 4: Insert reservation data into the database
        $price = 2000;
        if ($conn->connect_error) {
            echo ("Connection failed: " . $conn->connect_error);
        } else {
            // Attempt to prepare the statement                     
            $stmt = $conn->prepare("INSERT INTO ticket_reservation (Shedule_ID, SeatNO, Gender, Ticket_ID, Price) VALUES (?, ?, ?, ?, ?)");

            if (!$stmt) {
                echo "Error preparing statement: " . $conn->error;
            } else {
                foreach ($selectedSeats as $seat) {
                    // Ensure each seat follows the expected format
                    if (preg_match("/^SH\d+-\d+-\w+$/", $seat)) {
                        list($scheduleID, $seatNo, $gender) = explode('-', $seat);
                        $stmt->bind_param("sssss", $scheduleID, $seatNo, $gender, $nextTicketID, $price);
                        if ($stmt->execute()) {
                            echo "Inserted successfully.";
                        } else {
                            echo "Error executing statement: " . $stmt->error;
                            // Exit the loop or return from the script in case of an error
                            break;
                        }
                    }
                }
                echo
                '<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Indicates a successful or positive action.
              </div>';
                $stmt->close();
            }
        }
        // Step 5: Close the database connection
        $conn->close();

        // Optionally, you can redirect the user to a confirmation page.
    } else {
        echo "jj";
    }
    ?>
    <p>
    </p>
</body>

</html>