<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class EmailValidator extends CustomValidator{

  function runValidation()  {
    $email = $this->_model->{$this->field};
    $pass = true;
    if(!empty($email)){
      $pass = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    return $pass;
  }
}
