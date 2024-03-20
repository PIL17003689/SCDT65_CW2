<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/styles.css') }}">

    <script src="https://kit.fontawesome.com/b647881002.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400|Open+Sans+Condensed:300">
    <script ... src="{{ url_for('static', filename='scripts/scripts.js') }}"></script>

    <img ... src="{{ url_for('static', filename='images/Logo1.png') }}" alt="Logo">

</head>
<body>

<nav class="navbar navbar-expand navbar-inverse" style="width:100%;">
      <div class="container-fluid justify-content-center" style="width:100%;">
        <ul class="nav navbar-nav">
          <li><a id="len1" class="hoverable" href="./index.php">Home</a></li>
          <li><a id="len2" class="hoverable" href="./about.php">About</a></li>
          <li><a id="len3" class="hoverable" href="./forecast.php">Forecasts</a></li>
          <li><a id="len4" class="hoverable" href="./contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>