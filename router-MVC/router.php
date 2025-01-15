<?php
class router
{
   private $requestArr;
   private $controller;
   public function __construct($requestArr, userController $controller)
   {
      $this->requestArr = $requestArr;
      $this->controller = $controller;
      $this->callMethod();
   }
   public function arrayMethod()
   {
      return [
         "userForm" => function () {
            $this->controller->getUserForm();
         },
         "userList" => function () {
            $this->controller->selectAll();
         },
         "home" => function () {
            $this->controller->getHome();
         },
         "" => function () {
            $this->controller->getHome();
         },
         "getUserData" => function () {
            $this->controller->insert($_POST);
         },
         "updateUserData" => function () {
            $this->controller->update($_POST);
         },
         "delete" => function () {
            $this->controller->delete($this->requestArr[count($this->requestArr) - 1]);
         },
         "edit" => function () {
            $this->controller->find($this->requestArr[count($this->requestArr) - 1]);
         },
      ];
   }
   public function callMethod()
   {
      $flag = false;
      $array = $this->arrayMethod();
      foreach ($array as $key => $value) {
         if ($key === $this->requestArr[count($this->requestArr) - 1] || $key === $this->requestArr[count($this->requestArr) - 2]) {
            $value();
            $flag = true;
         }
      }
      if (!$flag) {
         $this->controller->notFound();
      }
   }
}
