<html>
<head>
    <meta charset="utf-8">
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <title>Pokedex Lobby</title>
    </head>
    <body>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
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
            <li><a href="http://localhost:8888/PokedexV1/login.php">Login</a></li>
            <li><a href="http://localhost:8888/PokedexV1/about.php">About Us</a></li>
            <li><a href="#">Pokedex</a></li>
          </ul>
        </div>
      </nav>
    <div class="container">
            <div class="row">
                <h3>Pokedex</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <?php
      
      //server details
       $servername = "localhost"; //variables start with a $ sign
       $username = "root";
       $password = "root";
       $dbname = "pokemon";
 
       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
       if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }
       // Query
       $sql = "SELECT * FROM pokedex";
 
       //Gets data from database
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         //start the table
         echo"<table border='1', cellpadding=10>";
         echo"<tr>";
           echo"<th>Sprite</th>";
           echo"<th>Name</th>";
           echo"<th>Type</th>";
           echo"<th>Type2</th>";
           echo"<th>Evolution</th>";
         echo"</tr>";
 
       // output data of each row
       //cycles through each row in the database table
         while($row = $result->fetch_assoc()) {
             echo"<tr>";
           // get data from each field in tblusers

               echo"<td><img src=img/pokemon/".$row["sprite"] ."></td>";
               echo"<td>".$row["name"] . "</td>";
               echo"<td>".$row["type"]."</td>";
               echo"<td>".$row["type2"]."</td>";
               echo"<td>".$row["evolution"]."</td>";
               echo '<td width=>';
               echo '<a class="btn" href= "read.php?id='.$row['id'].'">Read</a>';
               echo ' ';
               echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
               echo ' ';
               echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
               echo '</td>';
               echo '</tr>';
              }
          //end the table
            echo"</table>";
        } else { 
            echo "O results"; 
        }
        $conn->close(); //close the database connection
        ?>                 
      </div>
  
  <!-- End Document -->
    </body>
    <body>
    <div class="socials">
  <a href="https://instagram.com"><img src="img/icons8-instagram-48.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
  <a href="https://twitter.com"><img src="img/icons8-twitter-48.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
  <a href="https://facebook.com"><img src="img/icons8-facebook-48.png" alt="HTML tutorial" style="width:42px;height:42px;"></a>
    </div>
    </socials>
    </body>
  </html>
  <style> 
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

.socials{
  display: flex;
  left: 300px;
  bottom: 25px;
}
.socials a{
  text-decoration: none;
  color: rgb(white);
  padding-right: 20px;
  font-size: 14px;
}
</style>
</style>
        