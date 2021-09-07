<html>
<head>
    <meta charset="utf-8">
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <html>
    <head>
      <script src="js/script.js" defer></script>
      <!--newcss-->
      <link rel="stylesheet" href="css/bootstrap.min.css"">


<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <title>About Pokemon</title>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title"><img src="img/Pokedex_logo_50.png" alt=""></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="http://localhost:8888/PokedexV1/Pokemon.php">Home</a></li>
            <li><a href="http://localhost:8888/PokedexV1/Pokedex.php">Pokedex</a></li>
            <li><a href="http://localhost:8888/PokedexV1/login.php">Login</a></li>
            <li><a href="http://localhost:8888/PokedexV1/about.php">About Us</a></li>
          </ul>
        </div>
      </nav>


<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: pokedex.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Pokedex where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>About This Pokemon</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Sprite</label>
                        <div class="controls">
                            <label class="checkbox">
                            <?php
      
      //server details
       $servername = "localhost"; //variables start with a $ sign
       $username = "root";
       $password = "root";
       $dbname = "pokemon";
       $conn = new mysqli($servername, $username, $password, $dbname);
       if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }
       $sql = "SELECT * FROM Pokedex";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             echo"<tr>";
               echo "<rd><img src=img/pokemon/".$data["sprite"] ."></rd>";
              }
        }
        $conn->close();
        ?>                 
      </div>

                            </label>
                        </div>
                      </div>
                      <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['type'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Type2</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['type2'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Evolution</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['evolution'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="pokedex.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
<style>
  * {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
  background: url('../img/.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

.navbar {

  display: flex;
  position: relative;
  justify-content: space-between;
  align-items: center;
  background-color: red;
  color: red;
}

.brand-title {
  font-size: 1.5rem;
  margin: .5rem;
}

.navbar-links {
  height: 100%;
}

.navbar-links ul {
  display: flex;
  margin: 0;
  padding: 0;
}

.navbar-links li {
  list-style: none;
}

.navbar-links li a {
  display: block;
  text-decoration: none;
  color: rgb(0, 0, 0);
  padding: 1rem;
}

.navbar-links li:hover {
  background-color: rgb(255, 255, 255);
  
}

.toggle-button {
  position: absolute;
  top: .75rem;
  right: 1rem;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 11px;
}

.toggle-button .bar {
  height: 3px;
  width: 100%;
  background-color: black;
  border-radius: 10px;
}

@media (max-width: 800px) {
  .navbar {
      flex-direction: column;
      align-items: flex-start;
  }

  .toggle-button {
      display: flex;
  }

  .navbar-links {
      display: none;
      width: 100%;
  }

  .navbar-links ul {
      width: 100%;
      flex-direction: column;
  }

  .navbar-links ul li {
      text-align: center;
  }

  .navbar-links ul li a {
      padding: .5rem 1rem;
  }

  .navbar-links.active {
      display: flex;
  }
}
.content h1{
    font-size: 40px;
    font-weight: 100;
    margin-top: 24px;
    margin-bottom: 20px;
    color: green;
}
.content p{
    font-size: 20px;
    color: rgb(255, 255, 255);
}
.content{
    margin-left: 3%;
    margin-top: 10%;
}
.content .btn{
    display: inline-block;
    background: linear-gradient(45deg, #87adfe, #ff77cd);
    border-radius: 6px;
    padding: 10px 20px;
    box-sizing: border-box;
    text-decoration: none;
    color: fffafa;
    box-shadow: 3px 8px 22px rgba(94,28,68,0,15);   
}

.p
{
    display: inline-block;
    background: linear-gradient(45deg, #87adfe, #ff77cd);
    border-radius: 6px;
    padding: 100px 20px;
    box-sizing: border-box;
    text-decoration: none;
    color: fffafa;
    bottom: 50px;
    box-shadow: 3px 8px 22px rgba(94,28,68,0,15);
}

.social.links{
  display: flex;
  left: 300px;
  bottom: 25px;
}
.social.links a{
  text-decoration: none;
  color: rgb(white);
  padding-right: 20px;
  font-size: 14px;
}
</style>