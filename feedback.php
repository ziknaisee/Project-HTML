<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message, file_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $message, $filePath);

    // Set parameters and execute
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $filePath = '';

    // Handling file upload
// Handling file upload
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = basename($_FILES['file']['name']);
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $uploadFileDir = 'uploads/';

    // Check if file extension is allowed
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Check if the directory exists, if not, create it
        if (!file_exists($uploadFileDir)) {
            mkdir($uploadFileDir, 0777, true); // Creates the directory recursively
        }

        $dest_path = $uploadFileDir . $fileName;
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $filePath = $dest_path;
        } else {
            echo "Error moving uploaded file.";
            exit();
        }
    } else {
        echo "Upload failed. Allowed file types: " . implode(',', $allowedfileExtensions);
        exit();
    }
}

    // Execute prepared statement
    if ($stmt->execute()) {
        echo "Message sent successfully!";
        echo '<button onclick="window.location.href=\'index.php\'">Back to Home</button>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
