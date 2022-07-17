<?php
include 'helper.php';
error_reporting(E_ALL);
session_start();
$user= [
    'gokceeliif' => '123456'
];

if(get('islem')== 'login'){
    $_SESSION['username']=post('username');
    $_SESSION['password']=post('password');
    if(post('username')== false){
        $_SESSION['error']='lütfen adınızı giriniz';
        header('Location:login.php');
        exit();

    }
    else if(!post('password')){
        $_SESSION['error']='lütfen parola giriniz';
        header('Location:login.php');
        exit();

    }
    
       else {
        if(array_key_exists(post('username'),$user)){

            if($user[post('username')]==post('password')){
                $_SESSION['login']=true;
                $_SESSION['username']=post('username');
                $_SESSION['password']=post('password');
                
                header('Location:home.php');
                exit();

            }
            else{
                $_SESSION['error']='kayıtlı kullanıcı bulunamadı';
                header('Location:login.php');
                exit();
            }}
        
         else {
            $_SESSION['error']='kayıtlı kullanıcı bulunamadı ';
            header('Location:login.php');
            exit();
        }
    }
}
if(get('islem')=='aboutme'){
 $aboutme=post('aboutme');

   $islem=file_put_contents('./db/'.session('username').'.txt',htmlspecialchars($aboutme));
   if($islem){
    header('Location:home.php?islem=true');
    exit();
   }
   else{
    $_SESSION['error']='dosya kaydedilemedi';
    header('Location:home.php?islem=false');
    exit();
   }
     



}
if(get('islem')=='logout'){
    session_destroy();
    session_start();
    $_SESSION['error']='oturum sonlandırıldı';
    header('Location:login.php');
}
