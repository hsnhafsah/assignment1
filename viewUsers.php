<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, white, purple);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center">User List</h1>
        <?php
        require_once 'connect/connect.php';

        class ViewUsers extends Database {
            public function getUsers() {
                $query = 'SELECT * FROM info'; 
                $stmt = $this->connect()->prepare($query);
                if (!$stmt) {
                    die("Error in query preparation: " . $this->getConnection()->errorInfo());
                }
                $stmt->execute();
                if (!$stmt) {
                    die("Error in query execution: " . $this->getConnection()->errorInfo());
                }
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            public function displayUsers() {
                $users = $this->getUsers();

                if (!empty($users)) {
                    echo '<ul class="list-group">';
                    foreach ($users as $user) {
                        echo '<li class="list-group-item">';
                        echo '<h2>User ID: ' . $user['id'] . '</h2>';
                        echo '<p>Name: ' . $user['name'] . '</p>';
                        echo '<p>Username: ' . $user['username'] . '</p>';
                        echo '<p>Email: ' . $user['email'] . '</p>';
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No users found.</p>';
                }
            }
        }

        $viewUsers = new ViewUsers();
        $viewUsers->displayUsers();
        ?>
    </div>
</body>
</html>
