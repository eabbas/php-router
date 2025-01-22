<?php
class app
{
   public static function startApp()
   {
      new router(request::getUri(), userController::controllerObject());
   }
}
