<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <style>
        .navbar {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }

        .navbar-brand, .nav-link {
            color: white !important;
            font-family: 'IBM Plex Sans', sans-serif;
        }

        .form-control {
            border-radius: 0.75rem;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-title {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .ss{
            padding:  80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;">
                <h4><i class="fa fa-user-plus" aria-hidden="true"></i> GLOBAL HOSPITALS</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="index.php"><h6>HOME</h6></a>
                    </li>
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="services.html"><h6>ABOUT US</h6></a>
                    </li>
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="ourDoctors.php"><h6>OUR DOCTORS</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html"><h6>CONTACT</h6></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-20 ss ">
        <h2 class="text-center mb-4">Our Doctors</h2>
        <div class="row">
           

            <?php
            // Database connection
            $con = mysqli_connect("localhost", "root", "", "myhmsdb");

            // Query to fetch doctors
            $query = "SELECT * FROM doctb";
            $result = mysqli_query($con, $query);

            // Loop through doctors and create card for each
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://toppng.com/uploads/preview/logo-doctors-logo-black-and-white-vector-11563999612kv1q84czrt.png" class="card-img-top" alt="' . $row['username'] . '\'s photo">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['username'] . '</h5>
                                <p class="card-text">' . $row['spec'] . '</p>
                                <p class="card-text"><small class="text-muted">Email: ' . $row['email'] . '</small></p>
                                <p class="card-text"><small class="text-muted">Fees: ' . $row['docFees'] . '</small></p>
                            </div>
                        </div>
                    </div>';
            }
            mysqli_close($con);
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>