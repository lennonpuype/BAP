<?php
class DAO {
<<<<<<< HEAD
  private static $dbHost = "server248.web-hosting.com";
	private static $dbName = "arunmtgx_next";
	private static $dbUser = "arunmtgx_user";
  private static $dbPass = "user123";
=======
  // private static $dbHost = "ID276018_ppp.db.webhosting.be";
	// private static $dbName = "ID276018_ppp";
	// private static $dbUser = "ID276018_ppp";
  // private static $dbPass = "ID276018_ppp";

  private static $dbHost = "localhost";
	private static $dbName = "immo_verkoopsdossier";
	private static $dbUser = "immogoed_verkoopsdossier";
  private static $dbPass = "immogoed_verkoopsdossier";

>>>>>>> bfaa3ece6a06b354324a23b0af20cdf656ee0075

  private static $sharedPDO;

  protected $pdo;

  function __construct() {
    if(empty(self::$sharedPDO)) {
      self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
      self::$sharedPDO->exec("SET CHARACTER SET utf8");
      self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    $this->pdo =& self::$sharedPDO;
  }
}
