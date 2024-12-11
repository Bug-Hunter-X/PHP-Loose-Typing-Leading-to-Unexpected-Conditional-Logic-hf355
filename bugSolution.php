function myFunction() {
  // Some code here
  return $value;
}

// ... later in the code ...

if (myFunction() === null) {
  // Handle null value
} elseif (myFunction() === false) {
  // Handle false value
} else {
  // Handle other values
}
//or
 if ($result === null || $result === false){
    //handle
}
