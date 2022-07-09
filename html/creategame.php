<?php
$dirtyname = $_POST["playername"];
if(empty($dirtyname) || $dirtyname -eq ""){
    header('Location: index.php');
    exit();
}
$cleanname = htmlspecialchars(stripslashes(trim($dirtyname)));
$namecookie = setcookie($playername, $cleanname, time() + 86400, "/");
$warnmessage = "";
if(!isset($_COOKIE[$namecookies])){
    $warnmessage = "<div class = \"alert alert-warning\">Please enable cookies.</div>";
    $_SESSION["playername"] = $cleanname;
}
?>

<!DOCTYPE html>
<!-- Landing page with login -->

<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <title>Durak Lobby</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
     
     <body>
     <?php echo $warnmessage ?>
     <div class="container-fluid">
     <div class="row">
     
     </div>
     </div>
     
     </body>
     
</html>
