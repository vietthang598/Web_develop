<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
    <link rel="stylesheet" href="layout.css">
    <style>   

.form{
  padding: 25px 30px;
}

.form form{
  margin: 20px 0;
}
.form form .error-text{
  color: #ffffff;
  padding: 8px 10px;
  text-align: center;
  border-radius: 5px;
  background: #e09da2;
  border: 1px solid #ffffff;
  margin-bottom: 10px;
  display: none;
}
.form form .name-details{
  display: flex;
}
.form .name-details .field:first-child{
  margin-right: 10px;
}
.form .name-details .field:last-child{
  margin-left: 10px;
}
.form form .field{
  display: flex;
  margin-bottom: 10px;
  flex-direction: column;
  position: relative;
}
.form form .field label{
  margin-bottom: 2px;
}
.form form .input input{
  height: 40px;
  width: 100%;
  font-size: 16px;
  padding: 0 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.form form .field input{
  outline: none;
}
.form form .image input{
  font-size: 17px;
}
.form form .button input{
  height: 45px;
  border: none;
  color: #fff;
  font-size: 17px;
  background: #333;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 13px;
}
.form form .field i{
  position: absolute;
  right: 15px;
  top: 70%;
  color: #ccc;
  cursor: pointer;
  transform: translateY(-50%);
}
.form form .field i.active::before{
  color: #333;
  content: "\f070";
}
.form .link{
  text-align: center;
  margin: 10px 0;
  font-size: 17px;
}
.form .link a{
  color: #333;
}
.form .link a:hover{
  text-decoration: underline;
}

  

        
     

</style>   
</head>

<body >
  <!-- Page Content -->
  <div class="wrapper">
  <div class="w3-container" >
    <header style="padding-left:0;">
      Viet Nam
    </header>
<center> <h1> Login </h1> </center>   
<div class="wrapper">
    <section class="form login">
      
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="http://localhost/index.php?page=home">Signup now</a></div>
    </section>
  </div>
  </div>
  <script src="loginform.js"></script>
</body>
</html>