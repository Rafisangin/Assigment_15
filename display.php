<?php
include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <!-- Make the table responsive -->
            <div class="table-responsive">
                <table class="table bg-danger text-light text-center text-nowrap">
                    <thead>
                        <tr class="bg-danger">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `usermessage`";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $message = $row['message'];
                                echo '<tr>
                                        <th>' . $id . '</th>
                                        <td>' . $name . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $message . '</td>
                                        <td>
                                            <button class="btn btn-outline-primary">
                                                <a href="update.php?updateid=' . $id . '" class="text-dark text-decoration-none">Update</a>
                                            </button>
                                            <button class="btn btn-outline-danger">
                                                <a href="delete.php?deletedid=' . $id . '" class="text-dark text-decoration-none">Delete</a>
                                            </button>
                                        </td>
                                      </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    
    
</body>
</html>