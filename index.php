<?php error_reporting(0) ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Super Global Method</title>
</head>
<body>

<br>
<br>
<br>
<div class="container">

    <div class="row">
        <div class="col-4 offset-4">
            <h1 class="text-center">Result is :
                <?php
                include "Calculator.php";
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {

                    $op = '';
                    if ($_GET['add'] == '+'){
                        $op = '+';
                    }elseif ($_GET['sub'] == '-'){
                        $op = '-';
                    }elseif ($_GET['multi'] == '*'){
                        $op = '*';
                    }elseif ($_GET['divi'] == '/'){
                        $op = '+';
                    }else{
                        $op = '+';
                    }

                    $calc = new Calculator($_GET['numberOne'], $_GET['numberTwo'], $op);

                }
                ?>
            </h1>
            <form method="GET" action="index.php">
                <div class="form-group">
                    <label>Number One</label>
                    <input type="number" class="form-control" name="numberOne" placeholder="Enter Number">
                </div>
                <div class="form-group">
                    <label>Number two</label>
                    <input type="number" name="numberTwo" class="form-control" id="exampleInputPassword1"
                           placeholder="Password">
                </div>

                <input type="submit" class="btn btn-success" name="add" value="+">
                <input type="submit" class="btn btn-danger" name="sub" value="-">
                <input type="submit" class="btn btn-info" name="multi" value="*">
                <input type="submit" class="btn btn-dark" name="divi" value="/">
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>