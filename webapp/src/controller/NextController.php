<?php

require_once __DIR__ . '/Controller.php';

class NextController extends Controller {



  public function index(){
    $this->detectMobile("mobile");
  }

  public function routes(){
    if(!empty($_SESSION['user'])){
     $_SESSION['user']['unlockedroutes'] = array();
     foreach($_SESSION['user']['codes'] as $code){

      if(strpos($code, "S") == 1 && strpos($code, "K") == 0){
        array_push($_SESSION['user']['unlockedroutes'], "0");
      }

      if(strpos($code, "S") == 1 && strpos($code, "L") == 0){
        array_push($_SESSION['user']['unlockedroutes'], "3");
      }

      if(strpos($code, "S") == 1 && strpos($code, "V") == 0){
        array_push($_SESSION['user']['unlockedroutes'], "6");
      }

      if(strpos($code, "T") == 1 && strpos($code, "T") == 0){
        array_push($_SESSION['user']['unlockedroutes'], "9");
      }

      var_dump($_SESSION['user']);
     }
    }
  }

  public function route(){

  }

  public function ar(){

  }

  public function arscene(){

  }

  public function desktop(){

  }

  public function mobile(){

  }

  public function logout(){
    session_destroy();
    header('Location: index.php');
    exit();
  }

  private function detectMobile($currentPage){
    include 'mobiledetection.php';
    $detect = new Mobile_Detect();

    // Check for any mobile device.
    if (!$detect->isMobile()){
      // mobile content
      header('Location: index.php?page='.$currentPage.'');
      exit();
    }else{
      // other content for desktops
      header('Location: index.php?page=desktop');
      exit();
    }
  }
}
