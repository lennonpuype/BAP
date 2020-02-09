<?php

require_once __DIR__ . '/DAO.php';

class NextDAO extends DAO {

  public function selectById($id) {
    $sql = "SELECT * FROM `next_kortingscodes` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `next_kortingscodes` (`email`, `code`) VALUES (:email, :code)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':code', $data['code']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function validate($data) {
    $errors = array();
    if (empty($data['email'])) {
      $errors['email'] = 'please enter the email';
    }

    return $errors;
  }
}
