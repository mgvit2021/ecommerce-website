<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="../bootstrap/jquery.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="jquery.particleground.min.js"></script>
    <script src="particle.js"></script>
    <link href="style11.css" rel="stylesheet"/>
</head>
<body>
    
        <div id="particles">
            <center>
                <div id="intro">
                        <div class="banner">
                                <h1 id="labell"><span id="first">V</span><span id="second">  answer</span></h1>
                                <br>
                                <p id="text1">A place to share problems and solutions</p>
                                <br>
                                <br>
                                <div class="login">
                                    <table class="btns">
                                        <tr>
                                            <td>
                                                <input type="button" id="google" value="Continue with Google">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="button" id="facebook"value="Continue with Facebook">
                                            </td>
                                        </tr>
                                    </table>
                                    <form action="login_validate.php" method="post">
                                    <div class="form1 form-group">
                                        <p id="ltxt"><b>Login:</b></p>
                                        <br>
                                        <input type="text" id="inp1" placeholder="Enter username" name="username"><br>
                                        <input type="password" id="inp2" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="logfoot">
                                    <a href="#" id="fpass"onmouseover="pColor(this)"onmouseout="nColor(this)">Forgot Password?</a>
                                    <input type="submit" value="Login" id="loginbutt" name="login" >                            
                                 </div>
                            </form>
                              
                            
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                <div id="signup">
                                        <a href="#" id="fpass"onmouseover="pColor(this)"onmouseout="nColor(this)">New User?</a>
                                  </div>
                                <br>
								</div>
                                <div class="bott">
                                    <ul id="links">
                                        <li ><a href="#"onmouseover="pColor(this)"onmouseout="nColor(this)" id="lelem">About Us</a></li>
                                        <li ><a href="#"onmouseover="pColor(this)"onmouseout="nColor(this)" id="lelem">Feedback</a></li>
                                        <li><a href="#" onmouseover="pColor(this)"onmouseout="nColor(this)" id="lelem">Careers</a></li>
                                        <li><a href="#" onmouseover="pColor(this)"onmouseout="nColor(this)" id="lelem">Contact</a></li>
                                        <li>&copy;Team.Inc 2019</li>
                                    </ul>
                                </div>
                            </div>
                </div>
            </center>
              </div>
</body>
</html>