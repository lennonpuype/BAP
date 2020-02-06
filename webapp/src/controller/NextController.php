<?php

require_once __DIR__ . '/Controller.php';

class NextController extends Controller {



  public function index(){
    $this->detectMobile("mobile");
  }

  public function routes(){
    if(!empty($_GET['action']) && $_GET['action'] == "enternewcode"){
      if(!empty($_GET['code'])){
        array_push($_SESSION['user']['codes'], $_GET['code']);

        header('Location: index.php');
        exit();
      }else{
        header('Location: index.php');
        exit();
      }
    }

    if(!empty($_SESSION['user'])){
      // var_dump($_SESSION['user']['codes']);
      // if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      //   header('Content-Type: application/json');
      //   var_dump(json_encode(array('user' => $_SESSION['user'], 'outcome' => 'success')));
      //     echo json_encode(array('user' => $_SESSION['user'], 'outcome' => 'success')), "\n";
      //     exit();
      // }

     $_SESSION['user']['unlockedroutes'] = array();
     foreach($_SESSION['user']['codes'] as $code){

      $firstCharacter = $code[0];
      $secondCharacter = $code[1];

      if($firstCharacter == "K"){
        if($secondCharacter == "T"){
          //var_dump("Kortrijk Talentroute");
          array_push($_SESSION['user']['unlockedroutes'], "0");
        }
      }

      if($firstCharacter == "K"){
        if($secondCharacter == "S"){
          //var_dump("Kortrijk Sporenroute");
          array_push($_SESSION['user']['unlockedroutes'], "1");
        }
      }

      if($firstCharacter == "K"){
        if($secondCharacter == "F"){
          //var_dump("Kortrijk Futuristischeroute");
          array_push($_SESSION['user']['unlockedroutes'], "2");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "T"){
          //var_dump("Lille Talentroute");
          array_push($_SESSION['user']['unlockedroutes'], "3");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "S"){
          //var_dump("Lille Sporenroute");
          array_push($_SESSION['user']['unlockedroutes'], "4");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "F"){
          //var_dump("Lille Futuristischeroute");
          array_push($_SESSION['user']['unlockedroutes'], "5");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "T"){
          //var_dump("Valenciennes Talentroute");
          array_push($_SESSION['user']['unlockedroutes'], "6");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "S"){
          //var_dump("Valenciennes Sporenroute");
          array_push($_SESSION['user']['unlockedroutes'], "7");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "F"){
          //var_dump("Valenciennes Futuristischeroute");
          array_push($_SESSION['user']['unlockedroutes'], "8");
        }
      }

      if($firstCharacter == "T"){
        if($secondCharacter == "T"){
          //var_dump("Kortrijk Talentroute");
          array_push($_SESSION['user']['unlockedroutes'], "9");
        }
      }


      if($firstCharacter == "T"){
        if($secondCharacter == "S"){
          var_dump("Kortrijk Sporenroute");
          array_push($_SESSION['user']['unlockedroutes'], "10");
        }
      }


      if($firstCharacter == "T"){
        if($secondCharacter == "F"){
          var_dump("Kortrijk Futuristischeroute");
          array_push($_SESSION['user']['unlockedroutes'], "11");
        }
      }
     }

     $routes = $_SESSION['user']['unlockedroutes'];

     $this->set('routes', $routes);
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
