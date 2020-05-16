<?php

  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->is_permission);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'administrator';
        break;
      case 2:
        return 'staff';
        break;
        case 3:
          return 'customer';
          break;
      default:
        return 'invaliduser';
        break;
    }
  }


?>
