<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/NextDAO.php';

class NextController extends Controller {

  private $nextDAO;

  function __construct() {
    $this->nextDAO = new NextDAO();
  }

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
      if(!empty($_POST)){
        if(!empty($_POST['action']) && $_POST['action'] == 'changeLanguage'){
          $_SESSION['user']['l'] = $_POST['language'];
        }
      }

     $_SESSION['user']['unlockedroutes'] = array();
     foreach($_SESSION['user']['codes'] as $code){

      $firstCharacter = $code[0];
      $secondCharacter = $code[1];

      if($firstCharacter == "K"){
        if($secondCharacter == "T"){
          array_push($_SESSION['user']['unlockedroutes'], "0");
        }
      }

      if($firstCharacter == "K"){
        if($secondCharacter == "S"){
          array_push($_SESSION['user']['unlockedroutes'], "1");
        }
      }

      if($firstCharacter == "K"){
        if($secondCharacter == "F"){
          array_push($_SESSION['user']['unlockedroutes'], "2");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "T"){
          array_push($_SESSION['user']['unlockedroutes'], "3");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "S"){
          array_push($_SESSION['user']['unlockedroutes'], "4");
        }
      }

      if($firstCharacter == "L"){
        if($secondCharacter == "F"){
          array_push($_SESSION['user']['unlockedroutes'], "5");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "T"){
          array_push($_SESSION['user']['unlockedroutes'], "6");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "S"){
          array_push($_SESSION['user']['unlockedroutes'], "7");
        }
      }

      if($firstCharacter == "V"){
        if($secondCharacter == "F"){
          array_push($_SESSION['user']['unlockedroutes'], "8");
        }
      }

      if($firstCharacter == "T"){
        if($secondCharacter == "T"){
          array_push($_SESSION['user']['unlockedroutes'], "9");
        }
      }


      if($firstCharacter == "T"){
        if($secondCharacter == "S"){
          array_push($_SESSION['user']['unlockedroutes'], "10");
        }
      }


      if($firstCharacter == "T"){
        if($secondCharacter == "F"){
          array_push($_SESSION['user']['unlockedroutes'], "11");
        }
      }
     }

     $routes = $_SESSION['user']['unlockedroutes'];

     $this->set('routes', $routes);
    }
  }

  public function route(){
    if(!empty($_POST)){
      if(!empty($_POST['action']) && $_POST['action'] == 'skipOnboarding'){
        $_SESSION['user']['skiponboarding'] = 1;
      }

      if(!empty($_POST['action']) && $_POST['action'] == 'sendCode'){
        if(!empty($_POST['email'])){

          //Handling mail
          unset($_SESSION['error']);
          $_SESSION['user']['email'] = $_POST['email'];
          $to_email = $_POST['email'];
          $subject = "Thank you! Here is your code for a NEXT show of your choice";
          $message = '<h1>Thank You for using our platform, we have something special for you!</h1><br/><br/><p>You received a new code for a show in the future!</p><br/><p>Your code is: <b>'.$_POST['code'].'</b></p>';
          $headers = array('From: admin@arunext.eu', 'Cc: admin@arunext.eu', 'Content-type: text/html; charset: utf8\r\n');
          mail($to_email,$subject,$message,implode("\r\n",$headers));

          //Send To Database
          $this->nextDAO->insert(array(
            'email' => $_POST['email'],
            'code' => $_POST['code'],
          ));

          header('Location: index.php?page=thankyou');
          exit;
        }else{
          $_SESSION['error'] = "GELIEVE ALLES CORRECT IN TE VULLEN";
          header('Location: index.php?page=route&id='.$_GET['id'].'&city='.$_GET['city'].'&cityRouteId='.$_GET['cityRouteId'].'');
          exit;
        }
      }
    }

    array_push($_SESSION['user']['activeRoutes'], $_COOKIE['activeRoute']);
    $this->set('visitedPoints', $_SESSION['user']['activeRoutes']);
  }

  public function ar(){}

  public function arscene(){}

  public function desktop(){}

  public function mobile(){}

  public function faq(){}

  public function thankyou(){}

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
