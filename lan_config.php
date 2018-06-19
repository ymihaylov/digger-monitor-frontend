<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">

    <title>Digger Monitor Configurator - Status</title>
</head>

<body>

<?php require_once 'pieces/_navbar.php' ?>

<main id="main-container" role="main">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-12">
                <h2>LAN Config</h2>
                <form>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" checked for="exampleCheck1">DHCP</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">IP Address</label>
                        <input type="text" class="ip form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="IP Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subnet Mask</label>
                        <input type="text" class="ip form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subnet Mask">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gateway</label>
                        <input type="text" class="ip form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gateway">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">DNS1</label>
                        <input type="text" class="ip form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="DNS1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">DNS2</label>
                        <input type="text" class="ip form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="DNS2">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->
</main>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>