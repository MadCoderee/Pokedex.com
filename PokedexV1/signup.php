<html>
    <head>
      <link rel="stylesheet" href="css/background_styles.css">
      <script src="js/script.js" defer></script>
      <title>Sign Up To Pokedex</title>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title"><img src="images/Picture 1.png" alt=""></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="http://localhost:8888/eyeQ/">Home</a></li>
            <li><a href="http://localhost:8888/eyeQ/login.html">Login</a></li>
            <li><a href="http://localhost:8888/eyeQ/Pokedex.html">Pokedex</a></li>
          </ul>
        </div>
      </nav>
      <div class="sign-up-form">
        <h1> Sign Up </h1>
        <form>
            <input type="email" class="input-box" placeholder="Your Email">
            <input type="password" class="input-box" placeholder="Your Password">
            <p><span><input type="checkbox"></span> I agree to the terms of services</p>
            <button type="button" class="signup-btn">Sign Up</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="Google-btn">Signup With Google</button>
            <p>Already Have An Account? <a href="http://localhost:8888/eyeQ/login.html">Login</a></p>

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