<?php
  // Helper functions
  // Redirect to specified page
  function redirectTo($page) {
    header("Location: " . $page);
    exit;
  }

  function sanitize($value) {
  	if (!empty($value)) {
  		return htmlentities(strip_tags(trim($_POST[$value])));
  	}
  	return false;
  }

  // function to keep values on form after page reload
  function stickyForm($value) {
  	return isset($_POST[$value]) ? $_POST[$value] : '';
  }
  function stickyUpdate($formfield='', $dbfield='') {
    if (!empty($formfield) || !empty($dbfield)) {
      return isset($_POST[$formfield]) ? $_POST[$formfield] : $dbfield;
    }
    return false;
  }


  // Radio button handler
  function stickyRadio($field='', $label=''){
  	if (!empty($field) && !empty($label)) 
  		return (isset($_POST[$field]) && $_POST[$field] == $label) ? "checked" : '';
  }

  function stickyRadioUpdate($formfield='', $dbfield='', $formvalue=''){
    if (isset($_POST[$formfield])){
      if ($_POST[$formfield] == $formvalue){
        return " checked='checked'";
      }
    }
    else {
      if ($dbfield == $formvalue){
        return " checked='checked'";
      }
    }
  }

  // Select/menu handler
  function stickySelect($value='', $query=''){
  	if (!(strcmp(stickyForm($value), $query))){
        return " selected";
      } 
  }

  function stickySelectUpdate($formfield='', $dbfield='', $choice=''){
    if (isset($_POST[$formfield])) {
      if (!(strcmp(stickyForm($formfield), $choice))){
          echo " selected='selected'";
        }
    }
    else {
      if (!(strcmp($dbfield, $choice))){
          echo " selected='selected'";
        }
    }
  }

  // Server messages
  function setRememberMe($userId) {
    $cookieTime = 259200; // 3 days
    $token = "3dj4kj32jnj3DJNF3KKMkfdkdnfiekn2iSN3" . rand(1, 1000) . "_" . $userId;
    if (setcookie('userId', $token, time() + $cookieTime, "/")) {
      return $token;
    }
    return false;
  }

  function clearRememberMe($userId) {
    if (isset($_COOKIE['userId'])) {
      $uId = (int) explode("_", $_COOKIE['userId'])[1];
      if ((int)$userId === $uId) {
        setcookie('userId', null, time() - 1, "/");
        unset($_COOKIE['userId']);  
        return true;
      }
      return true;
    }
    return false;
  }

  function getCookie() {
    if (isset($_COOKIE['userId'])) {
      return $_COOKIE['userId'];
    }
    return false;
  }


  function error($errors){ 
      if (!empty($errors)){
        echo "<div class='alert alert-danger'>";
        foreach ($errors as $error){
          echo " - ".$error."<br>";
        }
        echo "</div>";
      }
  }

  function success($message){ 
      if (!empty($message)){
      	$output = "<div class='alert alert-success'>";
      	$output .= $message;
      	$output .= "</div>";

      	echo $output;
      }
  }

  // User Authentication
  function accessGranted() {
  	return isset($_SESSION['accessId']) && $_SESSION['accessId'] !== 0 ? true : false;
  }

  function admin(){
    return isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] > 0 ? true : false;
  }

  /* Working with Dates */
  function datetime_to_text($date="") {
    if (!empty($date)) {
      $unixtimestamp = strtotime($date);
      // Format date
      return strftime("%B %d, %Y %I:%M %p", $unixtimestamp);
    }
  }

  function date_to_text($date=""){
    $unixdatetime = strtotime($date);
    return strftime("%B %d, %Y", $unixdatetime);
  }

  // Return excerpt of an article
  function excerpt($body, $limit) {
    if (!empty($body)) {
      $body = strip_tags($body);
      $sentences = explode(' ', $body);
      $words = "";
      $counter = 1;
      foreach ($sentences as $word) {
        if ($counter > $limit) {
          break;
        }
        $words .= $word." ";
        $counter++;
      }
      return $words." &hellip;";
    }
    return false;
  }

  // Utitlities
  function get_order_id($string = "") {
    $datetime = explode(" ", $string);
    $dateInString = implode("", array_reverse(explode("-", $datetime[0])));

    return $dateInString;
  }

  function money($amount = "") {  
    return number_format($amount, 2); 
  }

  
  function dd($value) {
    echo "<pre>";
      print_r($value);
    echo "</pre>";
    die();
  }

  function dump($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
  }

  function checkIfFileSelected($file) {
    return $file['name'] > 0 ? true : false;
  }

  function deleteImagesFromDirectory($images, $tableObj) {
    $res = 0;
    foreach($images as $image) {
        $imageName = $tableObj->getImage($image->id)->name;
        if (file_exists("../dist/img/posts/" . $imageName)) {
            unlink("../dist/img/posts/" . $imageName);
            $res = 1;
        } else {
            $res = 0;
        }
        $res = 1;
    }
    return $res == 1 ? true : false;
}