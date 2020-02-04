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

      if(strpos($code, "K") == false){
        if(strpos($code, "K") == 0){
          if(strpos($code, "S") == 1){
            var_dump("Kortrijk Sporenroute");
          }
        }
      }else if(strpos($code, "L") == false){
        if(strpos($code, "L") == 0){
          if(strpos($code, "S") == 1){
            var_dump("Lille Sporenroute");
          }
        }
      }else if(strpos($code, "V") == false){
        if(strpos($code, "V") == 0){
          if(strpos($code, "S") == 1){
            var_dump("Valenciennnes Sporenroute");
          }
        }
      }else if(strpos($code, "T") == false){
        if(strpos($code, "T") == 0){
          if(strpos($code, "S") == 1){
            var_dump("Tournai Sporenroute");
          }
        }
      }

      var_dump(strpos($code, "V"));
      // if(strpos($code, "S") == 1){
      //     if(strpos($code, "K") == 0){
      //       array_push($_SESSION['user']['unlockedroutes'], "0");
      //     }
      // }

      // if(strpos($code, "S") == 1){
      //   if(strpos($code, "L")){
      //     if(strpos($code, "L") == 0){
      //       array_push($_SESSION['user']['unlockedroutes'], "3");
      //     }
      //   }
      // }

      // if(strpos($code, "S") == 1){
      //   if(strpos($code, "V")){
      //     if(strpos($code, "V") == 0){
      //       array_push($_SESSION['user']['unlockedroutes'], "6");
      //     }
      //   }
      // }

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
    if ($detect->isMobile()){
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
