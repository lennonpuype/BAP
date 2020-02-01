<?php

require_once __DIR__ . '/Controller.php';

class NextController extends Controller {



  public function index(){
    $this->detectMobile("mobile");

    // if(!empty($_POST)){
    //   if(!empty($_POST['action'])){
    //     if($_POST['action'] === `entercode`){
    //       $_SESSION['user']['l'] = $_POST['l'];
    //       $_SESSION['user']['codes'] = array();
    //       $_SESSION['user']['codes'] = array_push($_POST['code']);
    //     }
    //   }
    // }
  }

  public function routes(){
    if(!empty($_SESSION['user'])){
      var_dump($_SESSION['user']);
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
      header('Location: index.php?page=mobile');
      exit();
    }
  }
}
