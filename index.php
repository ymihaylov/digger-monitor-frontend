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
                <h2>Status for 192.168.1.100</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Port #</th>
                            <th scope="col">Status</th>
                            <th scope="col">IP</th>
                            <th scope="col">Ping</th>
                            <th scope="col">Last Restart</th>
                            <th scope="col">Total restarts for the last 1h</th>
                            <th scope="col">Total speed</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Port 1</th>
                            <td><span class="btn-success">Enabled</span></td>
                            <td>192.168.1.1</td>
                            <td>20</td>
                            <td>0.34h</td>
                            <td class="">3 restarts</td>
                            <td>138 Mh/s</td>
                            <td><a class="btn btn-primary" href="http://78.90.52.170:3333/" target="_blank">Details</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Port 2</th>
                            <td><span class="btn-success">Enabled</span></td>
                            <td>192.168.1.1</td>
                            <td>20</td>
                            <td>0.34h</td>
                            <td class="">12 restarts</td>
                            <td>138 Mh/s</td>
                            <td><a class="btn btn-primary" href="http://78.90.52.170:3333/" target="_blank">Details</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Port 3</th>
                            <td><span class="btn-danger">Disabled</span></td>
                            <td>192.168.1.1</td>
                            <td>20</td>
                            <td>0.34h</td>
                            <td class="">134 restarts</td>
                            <td>138 Mh/s</td>
                            <td><a class="btn btn-primary" href="http://78.90.52.170:3333/" target="_blank">Details</a></td>
                        </tr>
                    </tbody>
                </table>
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