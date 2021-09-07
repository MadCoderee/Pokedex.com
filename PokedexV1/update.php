<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <html>
    <head>
      <script src="js/script.js" defer></script>
      <!--newcss-->
      <link rel="stylesheet" href="css/bootstrap.min.css"">


<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <title>Pokedex Lobby</title>
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
</head>
<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: pokedex.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $spriteError = null;
        $nameError = null;
        $typeError = null;
        $type2error = null;
        $evolutionError = null;
        
    
         
        // keep track post values
        $sprite = $_POST['sprite'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $type2 = $_POST['type2'];
        $evolution = $_POST['evolution'];

         
        // validate input
        $valid = true;
        if (empty($sprite)) {
            $sprite = 'Please Input An Image';
            $valid = false;
        }
         
        if (empty($name)) {
            $nameError = 'Please Enter Pokemons Name';
            $valid = false;
        }

        if (empty($type)) {
            $typeError = 'Please Enter Pokemons Type';
            $valid = false;
        }

        if (empty($type2)) {
            $type2Error = 'Please Enter Pokemons Second Type';
            $valid = false;
        }
         
        if (empty($evolution)) {
            $evolutionError = 'Please Enter Pokemons Evolution';
            $valid = false;
        }
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE Pokedex  set sprite = ?, name = ?, type = ?, type2 = ?, evolution =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($sprite,$name,$type,$type2,$evolution,$id));
            Database::disconnect();
            header("Location: pokedex.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Pokedex where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $sprite = $data['sprite'];
        $name = $data['name'];
        $type = $data['type'];
        $type2 = $data['type2'];
        $evolution = $data['evolution'];
        Database::disconnect();
    }
?>

 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Pokemon</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($sprite)?'error':'';?>">
                        <label class="control-label">sprite</label>
                        <div class="controls">
                        <input name="sprite" type="file"  placeholder="sprite" value="<?php echo !empty($sprite)?$sprite:'';?>">
                        <if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg">
                            <?php if (!empty($sprite)): ?>
                                <span class="help-inline"><?php echo $sprite;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($typeError)?'error':'';?>">
                        <label class="control-label">type</label>
                        <div class="controls">
                            <input name="type" type="text" placeholder="type" value="<?php echo !empty($type)?$type:'';?>">
                            <?php if (!empty($typeError)): ?>
                                <span class="help-inline"><?php echo $typeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($type2Error)?'error':'';?>">
                        <label class="control-label">type2</label>
                        <div class="controls">
                            <input name="type2" type="text" placeholder="type2" value="<?php echo !empty($type2)?$type2:'';?>">
                            <?php if (!empty($type2Error)): ?>
                                <span class="help-inline"><?php echo $type2Error;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($evolutionError)?'error':'';?>">
                        <label class="control-label">evolution</label>
                        <div class="controls">
                            <input name="evolution" type="text"  placeholder="evolution" value="<?php echo !empty($evolution)?$evolution:'';?>">
                            <?php if (!empty($evolutionError)): ?>
                                <span class="help-inline"><?php echo $evolutionError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="pokedex.php">Back</a>
                        </div>
                    </form>
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
        