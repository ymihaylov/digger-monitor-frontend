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
                <h2>Manage</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Port #</th>
                        <th scope="col">IP</th>
                        <th scope="col">Enable / Disable Ping</th>
                        <th scope="col">Test Ping</th>
                        <th scope="col">Test Ping Result</th>
                        <th scope="col">Enable / Disable Check Speed</th>
                        <th scope="col">Test Speed</th>
                        <th scope="col">Test Speed Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Port 1</th>
                        <td>192.168.1.1</td>
                        <td>
                            <select class="form-control">
                                <option>Enabled</option>
                                <option>Disabled</option>
                            </select>
                        </td>
                        <td><a href="#" class="btn btn-primary">Test Ping</a></td>
                        <td>Response in 12 ms</td>
                        <td>
                            <select class="form-control">
                                <option>Enabled</option>
                                <option>Disabled</option>
                            </select>
                        </td>
                        <td><a href="#" class="btn btn-primary">Test Speed</a></td>
                        <td>Speed is 12 Mh/s</td>
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