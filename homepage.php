<html>
<title>home</title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .container {
            margin-top: 2%;
        }
        
     body    {
            overflow-x: hidden;
        }
        
        .inner img {
            transition: all 1.5s ease;
        }
        
        .inner :hover img {
            transform: scale(1.5);
        }
        .inner inner1{
            position: absolute;
        }
        .inner inner2{
            position:relative;
        }
    </style>



</head>

<body>


    <div class="bg-primary">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                </div>
                <div class="col-sm-4">
                    <b> PAYING GUEST ACCOMADATION SYSTEM </b>

                </div>
                <div class="col-sm-1">
                    <b class=" mr-1"><a class="text-dark"href="admin.php">Admin</a></b>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-dark">
        <div class="col-sm-7 p-1">
            <img src="images\pg.jpg" style="height:15%">

        </div>
        <div class="col-sm-5 ">
            <ul style="list-style-type:none;" class="d-flex p-3">
                <li class=""><a href=" # ">Home</a></li>
                <li class="pl-3 "><a href="# ">PG</a></li>
                <li class="pl-3"><a href="# ">ABOUT</a></li>
                <li class="pl-3 "><a href="# ">OWNER</a></li>
                <li class="pl-3"><a href="login.php">login</a><a href="signup1.php">/signup</a></li>
                <li class="pl-3"><a href="# ">CONTACT</a></li>
            </ul>
        </div>
    </div>

    <div style="align-items: center;;flex: 1;justify-content: center" class="p-5">
        <div>
            <h2 style="text-align:center">PG Accomodation in Various State or Cities</h2>

        </div>
        <div>

            <p style="color:gray;text-align:center;">Who are in extremely love with eco friendly system
            </p>
        </div>
                    


        <div class="container">
            <div class="row mb-5 p-4">
            <?php

                include('connection.php');
                $sql="select * from pgs ";
                $result = mysqli_query($conn,$sql);
                if($result->num_rows) {
                    while ($row= mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-4 mt-3">
                        <div class="card shadow" style="width:20rem">
                            <div class="inner">
                                <img class="card-img-top inner1" src="images/'.$row['image'].'" style="width:100%;
      left: 20px;">
    <a href="pgdetails.php"class="btn btn-primary inner2">for pg</a>
                             </div>
                            <div class="card-body ">
                                <p class="card-text "><b>PG Name:'.$row['name'].'</b></p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span style="color:gray;font-size:11px;">AC :</span> <span style="color:green;font-size:11px;">'.($row["is_ac"] == 0 ? "No" : "Yes").' </span><br>
                                        <span style="color:gray;font-size:11px;">Parking:</span> <span style="color:green;font-size:11px;">'.($row["is_parking"]==0?"No" : "Yes").' </span><br>
    
    
    
                                    </div>
                                    <div class="col-lg-4">
                                        <span style="color:gray ;font-size:11px;">Balcony:</span> <span style="color:green ;font-size:11px;">Yes </span><br>
                                        <span style="color:gray ;font-size:11px;">Price:</span> <span style="color:green ;font-size:10px;">7000P/M </span><br>
    
    
                                    </div>
                                    <div class="col-lg-4">
                                        <span style=\'color:gray; font-size:11px; \'>Laudnry :</span> <span style="color:green ;font-size:11;">Yes </span><br>
                                        <span style="color:gray ;font-size:11px;">Type:</span> <span style="color:green ;font-size:11px;">Both</span><br>
    
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }       
                }     
            ?>
            </div>
        </div>
    </div>
    <div class="row bg-dark p-5 shadow style=width:100%">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-3 ">

            <h4 style="color:honeydew">About Us</h4>
            


            <span style="color:red;font-size:15px;">PG Accomodation System</span>

            <p style="color:gray;"> The aim of pg Accomodation system to provide user friendly environment to pg seeker at affordable price.</p>

        </div>


        <div class="col-lg-7">
            <h4 style="color:honeydew">Contact Us</h4>
            <span style="color:red;font-size:15px;">PG Accomodation System</span>
            <span style="color:red;font-size:15px;">Contact Number:</span><span style="color:gray;">91-8221877654</span></
            <span style="color:red;font-size:15px;">email:</span><span style="color:gray;">abcc12@gmail.com</span>



        </div>
    </div>


</body>

</html>