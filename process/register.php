<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../connect/connect.php';
include_once '../signUp.php';

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function registerUser($name, $username, $email, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
        
            $query_check_duplicate_email = 'SELECT COUNT(*) FROM info WHERE email = :email';
            $stmt_check_duplicate_email = $this->conn->prepare($query_check_duplicate_email);
            $stmt_check_duplicate_email->bindParam(':email', $email);
            $stmt_check_duplicate_email->execute();
            $email_count = $stmt_check_duplicate_email->fetchColumn();

            if ($email_count > 0) {
                return 'Email already exists.';
            }

            $query_check_duplicate_username = 'SELECT COUNT(*) FROM info WHERE username = :username';
            $stmt_check_duplicate_username = $this->conn->prepare($query_check_duplicate_username);
            $stmt_check_duplicate_username->bindParam(':username', $username);
            $stmt_check_duplicate_username->execute();
            $username_count = $stmt_check_duplicate_username->fetchColumn();

            if ($username_count > 0) {
                return 'Username already exists.';
            }

            $query = 'INSERT INTO info (name, username, email, password) VALUES (:name, :username, :email, :password)';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);

            if ($stmt->execute()) {
                return true; 
            } else {
                return 'Registration failed. An error occurred.';
            }
        } catch (PDOException $e) {
            return 'Registration failed. Database error: ' . $e->getMessage();
        }
    }
}

$database = new Database();
$db = $database->connect();

$user = new User($db);

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

$error_message = "";

if ($password !== $confirm_password) {
    $error_message = "Passwords do not match.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email address format.";
} else {
    $registration_result = $user->registerUser($name, $username, $email, $password);
    if ($registration_result === true) {
        header("Location: ../viewUsers.php");
        exit();
    } else {
        $error_message = $registration_result;
    }
}

if (!empty($error_message)) {
    echo "<div style='background-color: white; color: black; padding: 5px 10px; text-align: center; border-radius: 20px; margin: 10px; max-width: 250px; max-height: 300px;'>";
    echo $error_message;
    echo "<br>You will be automatically redirected to the registration page. If not, <a href='../signUp.php' style='color: black; text-decoration: underline;'>click here</a>.";
    echo "</div>";    
    header("refresh:5;url=../signUp.php");
}
    }
?>
