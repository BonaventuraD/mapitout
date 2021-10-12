<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>halogaes</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        h1 {
    font-size: 50px;
    text-align: center;
        }
    .container1 {
    display: grid;
    justify-content: center;
    align-content: center;
    background-color: #963700;
    margin-top: 50px;
    height: 150px;
    }

    .profile {
    height: 10em;
    display: grid;
    background-color: #eb5600;
    justify-content: center;
    align-content: center;
    }

    .info{
    display: grid;
    justify-content: center;
    align-content: center;
    margin-bottom: 70px;
    margin-top: 50px;
    }

    .topcard {
    display: grid;
  justify-content: center;
  align-content: center;

  gap: 30px;
  grid-auto-flow: column;
    }

    #spasi {
    padding-right: 20px;
        }

    </style>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index2.html">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.html">Curator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index4.html">Account</a>
                    </li>

                </ul>

            </div>
    </nav>
    </div>
    

    <div class="container1">
        <link rel="stylesheet" href="about.css">
        <h1>My Account</h1>
    </div>
    <div class="profile">
        <h3>Account Name: </h3>
        <h3>Email: </h3>
        <h3>Displayed name: </h3>
    </div>
    <div class="profilepic">
        </div>
    <div class="info">
        <h2>Preference list</h2>
        <button>Edit</button>
    </div>
    
    <div class=topcard>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div> 
    
</body>