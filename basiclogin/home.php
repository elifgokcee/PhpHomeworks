<?php
include 'islem.php';
if( $_SESSION['login'] == false || !isset($_SESSION['login']) ){
    header('Location:login.php');
    exit();
};
$aboutme=file_get_contents('./db/'.session('username').'.txt');

 ?>
<!DOCTYPE html>
<html xmlns:th="http://www.w3.org/1999/xhtml"
 xmlns:sec="https://www.thymeleaf.org/thymeleaf-extras-springsecurity5">
<head xmlns:th="https://www.thymeleaf.org">
<meta charset="UTF-8">
<title>HOME</title>
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
.text-content{
    height: 300px;
}
button{position: absolute; bottom: 8px; right: 8px}
form{position:relative;}

</style>
</head>
<body>

<h1 >WELCOME</h1>



<div id="login-div ha-div" >
<div class="bg-div"><h1 class="text-white">
<?=session('username'); ?>
</h1>
<?php
if( get('islem') ){
    if(get('islem')== false){
    echo ' <div class="alert alert-danger">İşlem başarısız </div>';}
    else if(get('islem') == true ){
        echo ' <div class="alert alert-success">İşlem başarılı </div>';
   
}}

    

?>
<div class='text-content'>
    <form action="islem.php?islem=aboutme" method="post">
    <textarea class="form-control text-black" cols="30" rows="10" style="resize: none;" name="aboutme"><?=$aboutme?></textarea>
    <button type="submit" class="btn btn-success ">KAYDET</button>
    
    </form>
    <a href="login.php?islem=logout" class="btn btn-success btn-sm mt-2 w-100">OTURUMU KAPAT</a>
 
</div>
  <div class="form-floating mb-3 ha-div" >


</div>
</div>
</div>



	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>