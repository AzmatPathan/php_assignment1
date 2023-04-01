<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League</title>
</head>
<body>
     <header id="header">
    <h1 id="logo">Premier League</h1>
    <nav class="menu">
      <ul class="menuul">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
  </header>
    <?php

    $connect = mysqli_connect(
        'sql209.epizy.com',//HostName
        'epiz_33366213',//UserName
        'O7xtvUnuWqZcerr',//Password
        'epiz_33366213_Football_Clubs'//DatabaseName
      );

      $query = "SELECT * FROM PremierLeague ORDER BY points";

      $result =  mysqli_query($connect, $query);

      echo " Number of clubs".mysqli_num_rows($result);
      
    ?>
    
</body>
</html>