<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <script src="inc/jquery.min.js"></script>
    <script src="inc/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">All User Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="panel panel-default">
            <div class="panel-headeing">
                <h2>User list <span class="float-right"><strong>Welcome!</strong></span></h2>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <th width="20%">Serial</th>
                    <th width="20%">Name</th>
                    <th width="20%">Usernaem</th>
                    <th width="20%">Email Address</th>
                    <th width="20%">Action</th>

                    <tr>
                        <td>01</td>
                        <td>Mahabub</td>
                        <td>Rahman</td>
                        <td>mahabub@test.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Rahul</td>
                        <td>Al</td>
                        <td>mrahul@test.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>arif</td>
                        <td>Rahman</td>
                        <td>arif@test.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>


                </table>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    <span class="float-end">Like Us</span>
                </h3>
            </div>
        </div>
    </div>

</body>

</html>