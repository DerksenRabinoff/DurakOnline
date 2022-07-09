<?php
session_start();
?>
<!DOCTYPE html>
<!-- Landing page with login -->

<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <script>
     function changecard(){
         var xpercent = Math.floor((Math.random() - .00001) * 13) * 123.07692307692308;
         var ypercent = Math.floor((Math.random() - .00001) * 4) * 200;
         
         var stringtemplate = "KSpx Ypx";
         document.getElementById("flipcard").style.backgroundPosition = stringtemplate.replace("KS", xpercent.toString()).replace("Y", ypercent.toString());
     }
     setInterval(changecard, 1000);
     </script>
     <title>Durak By Dan</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
     
     <body>
     <br><br><br>
     <div class="container-fluid">
     <form method = "post" action="lobby.php" style="margin-left: 30%; margin-right: 30%">
     <h3 style = "text-align: center">Welcome to Durak!</h3><br><br>
     <label class="form-label" style = "text-align: center; display: block">Please Enter Your Username and Password</label>
     <div style = "text-align: center">
     <input type="checkbox" name="newplayer" style = "display: inline; margin: auto; margin-bottom: 2px">
     <label class="form-label" style = "margin: auto; dislay: inline">Create New Username and Password</label></div>
     <input type="text" name="playername" style = "display: block; margin: auto; margin-bottom: 2px" value = "Username">
     <input type="password" name="playerpassword" style = "display: block; margin: auto; margin-bottom: 2px" value = "Password">
     <input type="submit" value="Enter" class = "btn btn-primary" style = "display: block; margin: auto"></input>
     <br>
     <br>
     </div>
     <div id="flipcard" style= "height: 200px; width: 125px; background:url(resources/cardstemplate.png); background-position: 0px 0px; background-size: 1600px 800px;"></div>
     </body>
     
</html>
