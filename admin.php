<!DOCTYPE html>
<html lang="en">

<title>Admin</title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/admin.js"></script>

</head>

<body>

    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <i class="fab fa-facebook-f"></i> Facebook
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i> Instagram</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">My account</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <aside class="bg-dark" style="width: 20%; min-height:100vh;float: left;">
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h2 class="text-center">ADMIN</h2>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-fw fa-home"></i>State</a>
                        <ul class="collapse list-styled" id="homeSubmenu">
                            <li>
                                <a href="#">Add State</a>
                            </li>
                            <li>
                                <a href="#">Manag State</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bullhorn"></i>City</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Add City</a>
                            </li>
                            <li>
                                <a href="#">Manage City</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>Reg Owner</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-newspaper-o"></i>PG Details</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bullhorn"></i>Pages</a>
                        <ul class="collapse list-styled" id="homeSubmenu">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </aside>







    <section class="f-r" style="width: 80%; float:right;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-danger mt-5 shadow">
                        <div class="row text-light">
                            <div class="col-sm-3">
                                <span class="glyphicon glyphicon-globe p-4 mr-3"></span>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <p class="card-text text-light">
                                        Total state
                                    </p>
                                    <p class="card-text text-light">9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card bg-success mt-5 shadow">
                        <div class="row text-light">
                            <div class="col-sm-3">
                                <span class="glyphicon glyphicon-globe p-4 mr-3"></span>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <p class="card-text text-light">
                                        Total City
                                    </p>
                                    <p class="card-text text-light">13</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning mt-5 shadow">
                        <div class="row text-light">
                            <div class="col-sm-3 ">
                                <span class="glyphicon glyphicon-user p-4 mr-3"></span>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <p class="card-text text-light">
                                        Total PG Owner
                                    </p>
                                    <p class="card-text text-light"><b>2</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info mt-5 shadow">
                        <div class="row text-light">
                            <div class="col-sm-3 ">
                                <span class="glyphicon glyphicon-home p-4 mr-3"></span>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body ">
                                    <p class="card-text text-light">
                                        Total PG
                                    </p>
                                    <p class="card-text text-light"><b>4</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


</body>

</html>