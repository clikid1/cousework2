<?php
include('connection.php');

if (isset($_POST['register'])) {
    // Check if any field is empty
    if (empty($_POST['firstname']) || empty($_POST['lastname']) ||  empty($_POST['email']) || empty($_POST['contact_no']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || empty($_POST['role'])) {
        echo "<script>alert('Please fill in all fields');</script>";
        echo "<script>window.location.href='signup.html';</script>";
        exit(); // Stop further execution if any field is empty
    }

    // Assign form values to variables
    $role = $_POST['role'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contactno = $_POST['contact_no'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // Check if password and confirm password match
    if ($password !== $confirmpassword) {
        echo "<script>alert('Password and confirm password are not the same');</script>";
        echo "<script>window.location.href='signup.html';</script>";
    } //else {
        // Hash the password
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);//

        // Prepare and execute the SQL query
        $query = "INSERT INTO users (firstname, lastname, email, password, contact_no, role) VALUES ('$firstname', '$lastname', '$email', '$password', '$contactno', '$role')";
        
        echo "Query: $query<br>"; // Debug: Check the SQL query
        
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Registration successful!');</script>";
            // Redirect to login page after successful registration
            echo "<script>window.location.href='login.html';</script>";
            exit();
        } else {
            echo "<script>alert('Error: Registration failed');</script>";
            // Handle error if registration fails
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    

    // Close database connection
    mysqli_close($conn);
}
?>
