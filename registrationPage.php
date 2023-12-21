<?php
include 'registration.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title> 
  <link rel="stylesheet" href="registration.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script src="registration.js"></script>
  <script>
    $(function(){
      $('#username').on('change',function(){
        let value = $(this).val();
        console.log(value);

        $.ajax({
          url:'registration.php',
          type:'post',
          data:{
            'username':value
          },
          dataType:'json',
          success:function(response){
              if(response.exists){
                alert("username already exists");
              }
          },
          error:function(){
            alert("error : "+status+" "+error)
          }
        })
      })
<<<<<<< HEAD

      // $('#forms').submit(function(){
      //   let name = $('#name').val()
      //   console.log(name);
      //   let email = $('#email').val()
      //   console.log(email);
      //   let username = $('#username').val()
      //   console.log(username);
      //   let password = $('#password').val()
      //   console.log(password);


      // })
=======
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
    })
  </script>
  <script>

  </script>
</head>
<body>
  <div class="registration-form">
    <h2 style="text-align: center;color:#e6a6a6;font-size: 35px;font-family: Ephesis;"><font size="6">User Registration</font></h2>
<<<<<<< HEAD
    <form action="" method="post" id="forms">
=======
    <form action="registration.php" method="post" id="forms">
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
      <div class="form-group">
        
        <input type="text" id="name" name="name" placeholder="Enter your Name" class="inputimg" style="background-image: url('photos/user\(1\).png');" required><br>
       
      </div>
      <div class="form-group">
        <br>
        <input type="email" id="email" name="email"  placeholder="Enter your email" class="inputimg" style="background-image: url('photos/envelope.png');" required><br>
      </div>
      <div class="form-group">
        <br>
        <input type="text" id="username" name="username" placeholder="Enter your username" class="inputimg" style="background-image: url('photos/user.png');"  required>
       
      </div>
      
      <div class="form-group">
        <br>
        <input type="password" id="password" name="password" class="inputimg"  placeholder="Enter your password" style="background-image: url('photos/padlock.png');" required>
      </div>
      <div class="form-group">
        <br>
        <input type="password" id="confirm_password" name="confirm_password" class="inputimg"  placeholder="Confirm the password" style="background-image: url('photos/approved.png');" required>
      </div>
      <div>
        <br>
<<<<<<< HEAD
      <a href=""><input name="submit" type="submit" value="Register" class="buttonstyle"></a>
=======
      <a href="customermain.html"><input name="submit" type="submit" value="Register" class="buttonstyle"></a>
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
      </div>
    </form>
  </div>
</body>
</html>
