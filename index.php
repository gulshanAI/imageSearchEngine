<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        img{
            padding: 15px;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <form id="searchit" action="action_page.php" method="POST">
            <div class="form-group">
                <label for="search">Search</label>
                <input type="text" class="form-control" id="search" placeholder="Enter your Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <div class="result">
        </div>
    </div>
</body>
<script src="search.js"></script>
</html>