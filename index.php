<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<title>PHP chat</title>
</head>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>My HTML Form</title>
</head>
<body>
  <div class="divmain">
    
      <h2>Send a message!</h2>
    
    <form action="action.php" class="blogdesire-form" method="post">
      <input type="text" name="username" placeholder="Nickname" required autocomplete="off"> <br>
      <input type="text" name="password" placeholder="Message" required autocomplete="off"> <br>
      <input type="submit" name="submit" value="Send" >
    
  </div>
  <h2>Chat:</h2>
  <object  width="100%" height="500px" type="text/plain" data="chat.txt" >
  </object>

</body>
</html>
