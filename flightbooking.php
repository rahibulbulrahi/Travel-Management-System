<html>

<head>
    <title>Flight Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <style>
    body {
        background-image: url("images/beach4.jpg");
    }
    </style>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <!-- first row -->
            <div class="col-12 mb-2 bg-light">
                <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
                    
                    <a class="btn btn-outline-warning ml-2" href="index.php"><i class="fa fa-sign-out"
                            aria-hidden="true"></i>
                        Logout
                    </a>
                </nav>
            </div>

            <!-- 2nd row -->
            <!-- col 1 -->
            <div class="col-2 bg-light border">
                <nav class=" d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2 mt-2" href="dashboard.php"><i class="fa fa-home"
                                        aria-hidden="true"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2" href="profile.php"><i class="fa fa-user"
                                        aria-hidden="true"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2" href="hotelbooking.php"><i class="fa fa-bed"
                                        aria-hidden="true"></i>
                                    Hotel Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2" href="flightbooking.php"><i class="fa fa-plane"
                                        aria-hidden="true"></i>
                                    Flight Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2" href="packages.php"><i class="fa fa-briefcase"
                                        aria-hidden="true"></i>
                                    Packages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info mb-2" href="history.php"><i class="fa fa-history"
                                        aria-hidden="true"></i>
                                    History
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- col 2 -->
            <div class="col-10 bg-transparent">
                <div class="container-fluid">
                    <a href="newflightbooking.php" class="btn btn-info mb-2"><i class="fa fa-plus"
                            aria-hidden="true"></i> New
                        Booking</a>
                    <table class="table table-hover table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Dhaka</td>
                                <td>Dubai</td>
                                <td>10 september,2020</td>
                                <td><a class='btn btn-outline-dark mr-2' href="updateflightbooking.php"><i
                                            class="fa fa-pencil" aria-hidden="true"></i> Update</a><a href='#'
                                        class='btn btn-outline-danger'><i class="fa fa-trash" aria-hidden="true"></i>
                                        Cancel</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>London</td>
                                <td>Sylhet > Dhaka</td>
                                <td>8 May, 2020</td>
                                <td><a class='btn btn-outline-dark mr-2' href="updateflightbooking.php"><i
                                            class="fa fa-pencil" aria-hidden="true"></i> Update</a><a href='#'
                                        class='btn btn-outline-danger'><i class="fa fa-trash" aria-hidden="true"></i>
                                        Cancel</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Dhaka</td>
                                <td>Coxs Bazar</td>
                                <td>25 january, 2020</td>
                                <td><a class='btn btn-outline-dark mr-2' href="updateflightbooking.php"><i
                                            class="fa fa-pencil" aria-hidden="true"></i> Update</a><a href='#'
                                        class='btn btn-outline-danger'><i class="fa fa-trash" aria-hidden="true"></i>
                                        Cancel</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>