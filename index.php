
<!DOCTYPE html>
<html>
<head>
  <title>AITAM LOGIN</title>
<link rel="icon" type="image/png" href="images/aitam.ico"/>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style/style1.css">
<script src="bootstrap/boot.js"></script>
<script src="bootstrap/boot0.js"></script>
<link rel="stylesheet" href="bootstrap/boot2.css">
<script src="bootstrap/boot3.js"></script>
<script src="bootstrap/boot4.js"></script>
</head>
<style type="text/css">
  @media screen and (min-width: 1080px) {
    html {
        overflow-x: hidden;
        overflow-y: hidden;
    }
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html,
body {
    width: 100%;
    height: 100%;
    background-color: #f5f6f5;
    font-size: 16px;
}
.footer {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  color: black;
  text-align: center;
  margin-left: 0.5%;
}

#btn{
  background-color: #333;
}
#btn:hover{
  background-color: #0968CF;
}
.login-page-cont {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .forms-cont {
        position: absolute;
        width: 600px;
        height: 600px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        perspective: 1000px;
        -webkit-perspective: 1000px;
        background-size: #d5d5d5;
    }

    .register-form,
    .login-form {
        background-color: #fff;
        box-shadow: -8px 5px 15px -8px rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        width: 100%;
        height: 100%;
        padding: 15px 50px;
        text-align: center;
        position: absolute;
        left: 0;
        top: 0;
        transform: rotateY(0);
        -webkit-transform: rotateY(0);
        transition: all 1s cubic-bezier(0.3, 0.49, 0.51, 1.23);
        -webkit-transition: all 1s cubic-bezier(0.3, 0.49, 0.51, 1.23);
        z-index: 1;
    }

    .register-form {
        transform: rotateY(-180deg);
        -webkit-transform: rotateY(-180deg);
        z-index: 0;
    }

    .forms-cont.signin .register-form {
        transform: rotateY(0);
        -webkit-transform: rotateY(0);
        z-index: 1;
    }

    .forms-cont.signin .login-form {
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
        z-index: 0;
    }

    .register-form form,
    .login-form form {
        position: absolute;
        left: 50%;
        top: 48%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        min-width: 80%;
    }

    .auth-logo {
        text-align: center;
        margin-bottom: 35px;
    }

    .auth-logo img {
        max-width: 70px;
        max-height: 70px;
        user-select: none;
        -webkit-user-drag: none;
    }

    .form-inputs .form-group {
        margin-bottom: 25px;
    }

    /* .form-inputs .form-group.form-check {
        margin-bottom: 22px;
    } */

    .form-inputs .form-group .input-label {
        color: #333;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 3px;
    }

    .form-inputs .form-group .form-control {
        height: 40px;
        font-size: 18px;
        font-weight: 600;
        border-radius: 25px;
        line-height: 40px;
        text-align: center;
        border-color: #333 !important;
        box-shadow: 0px 0px 10px grey;
        color: purple;
    }

    .form-inputs .form-group .form-control::placeholder {
        color: #ccc;
        font-weight: 300;
        font-family: Arial;
    }
    .ceni{
         color: #ccc;
        font-weight: 300;
        font-family: Arial;
    }
    .remember-check-box {
        color: #333;
        display: inline-block;
        position: relative;
        padding-left: 20px;
        font-size: 16px;
        margin: 0;
    }

    .remember-check-box .form-check-input {
        margin: 0;
        width: 0;
        height: 0;
        opacity: 0;
    }

    .remember-check-box label {
        cursor: pointer;
    }

    .remember-check-box .check-box {
        position: absolute;
        border: 3px solid #333;
        border-radius: 5px;
        width: 15px;
        height: 15px;
        margin: 0;
        left: 0;
        top: 5px;
    }

    .remember-check-box .check-box:before {
        content: "\f00c";
        color: #008498;
        position: absolute;
        left: -1px;
        top: -1px;
        font-size: 12px;
        visibility: hidden;
        opacity: 0;
        transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
    }

    .remember-check-box .form-check-input[type=checkbox]:checked+.check-box::before {
        visibility: visible;
        opacity: 1;
    }

    .form-inputs .btn-block {
        border-radius: 25px;
        width: 65%;
        margin: 0 auto;
        height: 40px;
    }
select {
    text-align-last: center;
    text-align: center;
}


select option[data-default]{
     color: #333;
}

    /* .register-form .auth-logo {
        margin-bottom: 16px;
    } 

    .register-form .form-inputs .form-group {
        margin-bottom: 8px;
    }*/

    .signin-btn {
        color: #9E9E9E;
        display: inline-block;
        position: absolute;
        padding: 5px;
        box-shadow: none !important;
        font-size: 14px;
        font-weight: 600;
      white-space: nowrap;
        top: 50%;
        left: 100%;
        transform: translate(10px, -50%);
        -webkit-transform: translate(10px, -50%);
    }

    .signin-btn:hover {
        color: #008498;
    }

    .signin-btn:active {
        transform: translate(10px, -50%) scale(0.9);
        -webkit-transform: translate(10px, -50%) scale(0.9);
    }


@media only screen and (min-width : 280px) {
  .cont{ width: 90% }
}

@media only screen and (min-width : 480px) {
  .cont{ width: 60% }
}

@media only screen and (min-width : 768px) {
  .cont{ width: 40% }
}

@media only screen and (min-width : 992px) {
  .cont{ width: 30% }
}

h2{ color: #fff; margin-top: 25px; }

</style>

<script type="text/javascript">
$(document).ready(function(){
  $("#signIn").hide();
 $("#goToSignInSection").click(function(){
   $("#signInSection").toggleClass("signin");
   $("#login, #signIn").toggle();
 });  
});
</script>

<body>
<div class="login-page-cont">
    <div class="forms-cont" id="signInSection">
        <div class="login-form">
           <form class="form-inputs" name="signInForm">
                <p class="auth-logo">
                    <img src="images/aitamlogo.png" alt="Icon"/>
                    <p><h1>AITAM</h1><p style="font-weight: bold;font-size: 18px; color: #333;">INVENTORY MANAGEMENT SYSTEM (AIM)</p></p><br>
                </p>
            </form>
        </div>

        <div class="register-form">
            

             <form class="form-inputs" name="loginForm" action="login.php" method="POST">
                <p class="auth-logo">
                     <img src="images/aitamlogo.png" alt="Icon"/>
                </p>
                <div class="form-group">
                    <label class="input-label" for="inputText"  ><i class="fa fa-user"></i> User Name</label>
                    <input name="username" type="text" class="form-control"
                        placeholder="username" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label class="input-label" for="inputPassword"><i class="fa fa-key"></i> Password</label>
                    <input type="password" class="form-control" name="password"
                        placeholder="password" />
                </div>
                <div class="form-group form-check">
                  <label class="input-label" for="inputPassword"><i class="fa fa-list-alt"></i> Category</label>
                   <select class="form-control" name="cate">
                    <option class="ceni" value="" selected data-default>Category</option>
                    <option class="cen" value="admin">Admin</option>
                    <option class="cen" value="departmentadmin">Department Admin</option>
                    <option class="cen" value="faculty">Faculty</option>
                    <option class="cen" value="security">Security</option>
                </select>
                </div>
               <button type="submit" id="btn" class="btn btn-primary btn-block" name="submit">Submit</button>
            </form>
        </div>

        <button type="button" class="btn signin-btn" id="goToSignInSection">
            <span id="signIn"><h3>AITAM</h3></span>
            <span id="login"><h3><i class="fa fa-sign-in">&nbspLogin</i></h3></span>
          <i class="fas fa-hand-point-right"></i>
        </button>
    </div>

</div>
</body>
<footer>
<div class="footer">

	<center><p>Designed and Developed by Developers Club, <a href="http://www.aitamsac.in">AITAM SAC</a></p></center>
</div>
</footer>

</html>
