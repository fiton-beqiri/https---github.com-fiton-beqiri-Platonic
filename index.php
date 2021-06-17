<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bookstore</title>

    <link rel="stylesheet" href="style.css">
    <script defer src="../Platonic/script.js"></script>


</head>
<body>

    
    <div class="container">
        
        <div class="navbar">
            <img id="PlatonicLogo" src=".//Images//logo3.png" alt="Logo1" class="logo" >
           
               <ul class="headerList">
                    <li><a href="../Platonic/index.html" >Home</a></li>
                    <li><a href="" >Browse</a></li>
                    <li><a href="../Platonic/Audiobook.html" >Audiobook</a></li>
                </ul>
         
            <img src=".//Images/menu.png" class="menu-icon">
        </div>
    </div>

    <div class="row">

        <div class="col">
            <h1>Platonic Bookstore</h1>
            <p>Libraria me e madhe Digjitale ne Kosove</p>

            <button class="button" type="button">Explore</button>

        </div>     
    </div>



    <div class="form">
        <div class="link-container">
          <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
          <a href="#" onclick="changeForm(1)">Register</a>
        </div>
        <form id="mainForm" action="">
          <div class="login forms form-style">
            <label for="">Username:</label>
            <input type="text" class="input" placeholder="username..." />
            <label for="">Password:</label>
            <input type="password" class="input" placeholder="password..." />
            <input
              id="submit"
              type="submit"
              class="input submit"
              value="Login"
              onclick="validate(0)"
            />
          </div>
          <div class="register forms hidden">
            <label for="">Name:</label>
            <input type="text" class="input" placeholder="username..." />
            <label for="">Lastname:</label>
            <input type="text" class="input" placeholder="password..." />
            <label for="">Password:</label>
            <input type="text" class="input" placeholder="password..." />
            <input
              id="submit"
              type="submit"
              class="input submit"
              value="Login"
              onclick="validate(1)"
            />
          </div>
        </form>
      </div>

</body>
</html>