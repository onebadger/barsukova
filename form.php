<?php 

if(isset($_POST['email'])) {
  $message = 'Mail: ' .$_POST['email'];
  mail('yakov.barsukov@gmail.com', 'barsukov.ru', $message);
} else {
  header('Refresh: 3; URL=../index.html');
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
   
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Barsukova</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic" rel="stylesheet" />
    <meta http-equiv="refresh" content="15;url=index.html" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
<!--    <link rel="stylesheet" type="text/css" href="css/responsive.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="hohoho">
      <p class="text-white" for="exampleInputEmail1">спасибо пожалуйста!</p>
      <form action="http://barsukov.ru/"><button type="submit" class="btn btn-success">back</button></form>
    </div>
  </body>
</html>