<?php 

include 'islem.php';



?>

<!DOCTYPE html>
<html >
<head >
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
body *{
font-family: monospace;}
.login-div{
width:64%;height:400px;
}
.bg-div{
align-items:center;background-color:#5EC28D;margin:0 auto;padding:24px;width:36%;border-radius:24px;
}
.ha-div{
margin:0 auto;
width:64%;

}
h1{color:beige;text-align:center;padding:16px;margin-bottom:64px!important;background-color:#5EC28D;
width:100%;margin:0 auto;
}

</style>
</head>
<body>

<h1 >LOGİN PLEASE</h1>

<form action="islem.php?islem=login" method="post">

<div id="login-div ha-div" >
<div class="bg-div " >

  <div class="form-floating mb-3 ha-div" >

 <label for="username" class="text-white">username</label>
  <input type="text" class="form-control" name="username" placeholder="username" value="<?=session('username'); ?>"/>
 
     </div>
   <div class="form-floating ha-div">
  <label for="password" class="text-white">Password</label>
  <input type="text" class="form-control" name="password" placeholder="password" value="<?=session('password'); ?>"/>

   </div>

<div class="ha-div" id="login-button-div">
<button class="btn text-white"  style="margin:48px;border:none;width:72%;background-color:#12928F">Login</button>
</div>
</div>
</div>


</form>
	
<?php if (session('error')): ?><div ><div class="alert alert-secondary" style="width:36%;margin:20px auto;"><?= session('error');?></div></div><?php endif; ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php $_SESSION['error']=null; 
  $_SESSION['username']=null;
  $_SESSION['password']=null;?>