<?php
class userController
{
   private $modelInstance;
   private static $controllerInstance;
   private function __construct() {}
   public static function controllerObject()
   {
      if (!self::$controllerInstance) {
         self::$controllerInstance = new userController;
      }
      return self::$controllerInstance;
   }
   private function modelObject()
   {
      if (!$this->modelInstance) {
         $this->modelInstance = new userConnection;
      }
      return $this->modelInstance;
   }
   public function delete($id)
   {
      $result = $this->modelObject()->delete($id);
      if ($result) {
         loadView::loadView("userDeleteResult");
      }
   }
   public function find($id)
   {
      $result = $this->modelObject()->customSelect($id);
      if ($result) {
         loadView::loadView("editUserForm", $result);
      }
   }
   public function insert($data)
   {
      $result = $this->modelObject()->insert($data);
      if ($result) {
         loadView::loadView("userInsertResult");
      }
   }
   public function update($data)
   {
      $result = $this->modelObject()->update($data);
      if ($result) {
         loadView::loadView("updateUserResult");
      }
   }
   public function selectAll()
   {
      $result = $this->modelObject()->selectAll();
      if ($result) {
         loadView::loadView("userList", $result);
      }
   }
   public function getHome()
   {
      // $result = $this->modelObject()->getHome();
      // if ($result) {
      loadView::loadView("home");
      // }
   }
   public function getUserForm()
   {
      // $result = $this->modelObject()->getUserForm();
      // if ($result) {
      loadView::loadView("userForm");
      // }
   }
   public function notFound()
   {
      // $result = $this->modelObject()->notFound();
      // if ($result) {
      loadView::loadView("404");
      // }
   }
}
