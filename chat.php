
<?php
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Save the message to the database
    $query = "INSERT INTO chat_messages (username, message) VALUES ('$username', '$message')";
    $result = mysqli_query($db, $query);

    // Get all the messages from the database
    $query = "SELECT username, message FROM chat_messages ORDER BY created_at DESC";
    $result = mysqli_query($db, $query);

    // Loop through the messages and display them on the page
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><b>" . $row['username'] . ": </b>" . $row['message'] . "</p>";
    }

    // Read the CSV file
    $file = fopen("data.csv", "r");

    // Get the rows and columns of the CSV file
    $rows = fgetcsv($file);
    $columns = count($rows);

    // Create a multidimensional array of the CSV data
    $data = array();
    for ($i = 0; $i < $rows; $i++) {
        $row = fgetcsv($file);
        $data[] = $row;
    }

    // Close the CSV file
    fclose($file);

    // Use the multidimensional array to access the data in the CSV file
    echo $data[0][0]; // Prints the first row of the first column
    echo $data[1][1]; // Prints the second row of the second column
?>