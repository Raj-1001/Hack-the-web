<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // Define a filename and open the file for writing
    $filename = "user_input.txt";
    $file = fopen($filename, "a"); // "a" means append mode

    if ($file) {
        $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

        // Write the data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);

        echo "Data saved to file successfully.";
    } else {
        echo "Error opening the file.";
    }
}
?>