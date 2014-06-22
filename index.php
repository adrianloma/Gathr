<!DOCTYPE html>
<head>
  <title>gathr</title>
  <style>
    body {
      text-align: center;
      background: url("http://i.imgur.com/uqCzr3O.jpg?1");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      color: white;
      font-family: helvetica;
      text-rendering: optimizeSpeed;
    }
    
    p {
        font-size: 42px;
        width: 60%;
        margin: 50px auto;
        text-shadow: 0px 2px 1px rgba(0,0,0,0.5);
    }

    .mask {
      background: rgba(127, 140, 141,0.4);
      position: fixed;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      z-index: 10;

    }

    .info {
      position: relative;
      z-index: 20;
    }

    input {
      border: 0;
      padding: 10px;
      font-size: 18px;
      padding: 20px;
    }

    input[type="submit"]{
      background: black;
      color: white;
    }
  </style>
</head>
<body>
  <div class="mask"></div>
  <div class="info">
    <a href="http://imgur.com/l9gdoMj"><img src="http://i.imgur.com/l9gdoMj.png?1" title="Hosted by imgur.com" /></a>
    <p>Gathr lets you create and share events quickly with friends, so you don't miss out on anything.</p>
    <form action="/landing.php" method="post">
      <?php
        if (array_key_exists('email', $_POST) && !empty($_POST['email']))
        {
          $thing = $_POST['email']."success";
        }
        else $thing = 'temp string';
        printf("<input type=\"email\" name = \"email\" placeholder=\"$thing\">");
        ?>
      
      <input type="submit">
    </form>

  </div>
</body>

