<html>
    <head>
      <link rel="stylesheet" href="cs/background_styles.css">
      <script src="js/script.js" defer></script>
      <title>Login To Pokedex</title>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title"><img src="img/Picture 1.png" alt=""></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="http://localhost:8888/PokedexV1/#/">Home</a></li>
            <li><a href="http://localhost:8888/PokedexV1/signup.php">Signup</a></li>
            <li><a href="http://localhost:8888/PokedexV1/pokedex.php">Pokedex</a></li>
            <li><a href="http://localhost:8888/PokedexV1/about.php">About us</a></li>
          </ul>
        </div>
      </nav>
     <div class="sign-in-form">
        <h1> Login </h1>
        <form>
            <input type="email" class="input-box" placeholder="Your Email">
            <input type="password" class="input-box" placeholder="Your Password">
            <p><span><input type="checkbox"></span> I agree to the terms of services</p>
            <button type="button" class="Login-btn">Login</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="Google-btn">Login With Google</button>
            <p>Dont Have An Account? <a href="http://localhost:8888/eyeQ/signup.html">Sign Up</a></p>

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
    background: url('../img/back.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

.navbar {
    background-image: url(img/backgroos.png);
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(253, 253, 253);
    color: white;
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
    background-color: rgb(15, 137, 207);
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
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
.sign-in-form
  {
    width: 292px;
    box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
    background: #fff;
    padding: 20px;
    margin: 8% auto 0;
    text-align: center;
  }
  .sign-in-form-h1
  {
    color: #1c8adb;
    margin-bottom: 30px;
  }
  .input-box
  {
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 100%;
    border: 1px solid #999;
    outline: none;
  }
  button
  {
    color: #fff;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-size: 15px;
    margin: 10px 0;
    border: none;
    outline: none;
    cursor: pointer;
  }
  .Login-btn
  {
    background-color: #1c8adb;
  }
  .Google-btn
  {
    background-color: 21afde;
  }
  a
  {
    text-decoration: none;
  }
  hr
  {
    margin-top: 20px;
    width: 80%;
  }
  .or
  {
    background: #fff;
    width: 30px;
    margin: -19px auto 10px;
  }

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
  