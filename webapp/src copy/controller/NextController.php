<?php

require_once __DIR__ . '/Controller.php';

class NextController extends Controller {



  public function index(){
    $this->detectMobile("mobile");
  }

  public function routes(){

  }

  public function route(){

  }

  public function ar(){

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
