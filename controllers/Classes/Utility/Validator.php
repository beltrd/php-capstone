<?php
/**
 * Validator file!
 * @file Validator.php
 * @course Inter PHP, WDD 2018
 * @author Diego Beltran <beltrd@gmail.com>
 * @created_at 2018-08-15
 */
namespace controllers\Classes\Utility;

class Validator
{
  private $errors = [];
  /**
   * @param $field_name
   * @return void
   */
  public function required($field_name)
  {
    if(empty($_POST[$field_name])){
      $label = ucwords(str_replace('_', ' ', $field_name));
      $this->errors[$field_name] = $label ." is a required field";
      //echo $error[$field_name] ;
    }
  }

  /**
   * @param $pass - password
   * @param $comp_pass - comparing password
   * @return void
   */
  public function passwordMatch($pass, $comp_pass)
  {
    if(empty($_POST[$pass]) == empty($_POST[$comp_pass])){
      $this->errors[$pass] = $pass ." THIS DOES NOT MATCH!!";
    }
  }

  /**
   * @param $field_name
   * @param $min_length
   * @return void
   */
  public function minLength($field_name, $min_length)
  {
    if(strlen($_POST[$field_name]) < $min_length){
      $this->errors[$field_name] = "$field_name must be at least $min_length character long";
    }
  }

  /**
   * @param $field_name
   * @param $max_length
   * @return void
   */
  public function maxLength($field_name, $max_length)
  {
    if(strlen($_POST[$field_name]) > $max_length){
      $this->errors[$field_name] = "$field_name must be less than $max_length character long";
    }
  }

  /**
   * @param $password
   * @return void
   */
  public function passWordChecker($field_name)
  {
    $pattern = '/(?=.*[A-Z])(?=.*[a-z])(?=.*[\d])(?=.*[_!@#\$%\^&\*]).{8,}/';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    //preg_match($pattern, $string, $matches);

    if(preg_match($pattern, $string, $matches) === 0){
      $this->errors[$field_name] = "$label, has an illegal character!";
    }
  }

  /**
   * @param $field_name - validate strings
   * @return void
   */
  public function validateString($field_name)
  {
    $pattern = '/^[a-zA-Z]{1,16}$/';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, has an illegal character! (only letters)";
    }
  }

  /**
   * @param $field_name - validate 0 or 1
   * @return void
   */
  public function validateBoolean($field_name)
  {
    $pattern = '/^[0-1]$/';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, has an illegal character! (only 1(true) of 0(false))";
    }
  }

  /**
   * @param $field_name - float numbers
   * @return void
   */
  public function validatefloat($field_name)
  {
    $pattern = '/^([0-9]{1,3})(\.)([0-9]{1,2})$/';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, format ex. {100.00}";
    }
  }
  /**
   * @param $field_name - string
   * @param $category_count - count of categories - int
   * @return void
   */
  public function validateCatergory($field_name, $category_count)
  {
    $pattern = "/^[0-$category_count]$/";
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, from 1 to $category_count";
    }
  }

  /**
   * @param $field_name - string
   * @param $countries_count - count of countries - int
   * @return void
   */
  public function validateCountries($field_name, $countries_count)
  {
    $pattern = "/^[0-$countries_count]$/";
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, from 1 to $countries_count";
    }
  }
  /**
   * @param $field_name - string
   * @return void
   */
  public function validateNumbs($field_name)
  {
    $pattern = "/^[0-9]{1,4}$/";
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if(empty($matches)){
      $this->errors[$field_name] = "$label, only numbers are accepted";
    }
  }


  /**
   * @param $field_name - validate the phone number
   * @return void
   */
  public function validateTel($field_name)
  {
    $pattern = '/\(?[0-9]{3}\)?\.?\s?\-?[0-9]{3}\-?\.?\s?[0-9]{4}/';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    preg_match($pattern, $string, $matches);

    if (empty($matches)) {
      if (empty($matches)) {
        $this->errors[$field_name] = "$label, is not a valid phone number!";
      }
    }
  }

  /**
   * @param $field_name - postal code validation
   * @return void
   */
  function validatePostCode($field_name){
    $pattern = '/[a-zA-Z]\d[a-zA-Z]\s?\-?\d[a-zA-Z]\d/i';
    $string = $_POST[$field_name];
    $label = ucwords(str_replace('_', ' ', $field_name));
    //preg_match();

    if(preg_match($pattern, $string, $matches) === 0){
      $this->errors[$field_name] = "$label, is not OKAY!";
    }
  }

  //escape function
  /**
   * @return clean VALUES - ready to use on a html form and not get hacked
   */
  public function esc($string)
  {
    return htmlspecialchars($string, NULL, "UTF-8", false);
  }
  /**
   * @return clean value - ready to be put on a html form
   */
  public function esc_attc($string)
  {
    return htmlspecialchars($string, ENT_QUOTES, "UTF-8", false);
  }


  /*--------------------------------------------*/
  /**
   * @return $errors - all the errors in the array
   */
  public function errors()
  {
    return $this->errors;
  }
}
