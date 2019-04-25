<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap  -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <?php 

                    $hostname = 'localhost';
                    $username = 'malamuor_user';
                    $password = 'z0vQOiNOJ?[L';
                    $db = 'malamuor_malamu';

                       $connection = mysqli_connect($hostname,$username,$password,$db);
                       if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                       
                       
                        $query_view_users = "SELECT * FROM `tbl_user`";
                        $result_view_user = mysqli_query($connection,$query_view_users);

                        echo  "<table class='table table-bordered'>";
                            echo "<thead><tr>";
                                echo "<th> User ID</th>";
                                echo "<th> First Name</th>";
                                echo "<th> Middle Name</th>";
                                echo "<th> Last Name</th>";
                                echo "<th> Username</th>";
                                echo "<th> Phone Number</th>";
                                echo "<th> Phone Number Status</th>";
                                echo "<th> Birth Date</th>";
                                echo "<th> Gender</th>";
                                echo "<th> Country</th>";
                                echo "<th> Register Date Time</th>";
                                
                            echo "</tr></thead>";
                        while ($row_view_user = mysqli_fetch_assoc($result_view_user)) {
                            //print_r($row_view_user);
                           
                            echo "<tbody><tr>";
                                echo "<td>{$row_view_user['user_id']}</td>";
                                echo "<td>{$row_view_user['first_name']}</td>";
                                echo "<td>{$row_view_user['middle_name']}</td>";
                                echo "<td>{$row_view_user['last_name']}</td>";
                                echo "<td>{$row_view_user['username']}</td>";
                                echo "<td>{$row_view_user['phone_number']}</td>";
                                echo "<td>{$row_view_user['phone_verification']}</td>";
                                echo "<td>{$row_view_user['birthday']}</td>";
                                echo "<td>{$row_view_user['gender']}</td>";
                                echo "<td>{$row_view_user['country']}</td>";
                                echo "<td>{$row_view_user['register_date']}</td>";
                            echo "</tr></tbody>";
                        }
                        echo "</table>";
                        ?>
                    
                    </div>
                </div>
            </div>
            
    </body>
</html>




