<?php
// Check if form is submitted
if (isset($_POST["visachecksubmit"]) && !empty($_POST["visachecksubmit"])) {
  // Set variables
  $purpose = $_POST['purpose'];
  $nationality = $_POST['nationality'];
  $duration = $_POST['visitduration'];
  $multipleVisit = $_POST['multiplevisit'];
  echo $purpose.$nationality.$duration.$multipleVisit;

  // Check if required fields are empty
  if (empty($purpose)){
    // Redirect to to empty page if empty
    header("Location: visachecker.php?visacheck=purposeempty&nationality=$nationality&visitduration=$duration&multiplevisit=$multipleVisit");
  }else{
    if (empty($nationality)){
      // Redirect to to empty page if empty
      header("Location: visachecker.php?visacheck=nationalityempty&purpose=$purpose&visitduration=$duration&multiplevisit=$multipleVisit");
  }
  }
}else{
  // Redirect to error page if something went wrong
  header("Location: visachecker.php?visacheck=error");
}
