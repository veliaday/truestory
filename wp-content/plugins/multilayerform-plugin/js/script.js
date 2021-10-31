function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  if (x[0] == x[n]) {
  
  x[0].style.display ="block";  
  } else {
  
   x[0].style.display ="none";
  
  }
  
   if (x[1] == x[n]) {
  
  x[1].style.display ="block";  
  } else {
  
   x[1].style.display ="none";
  
  }
  
   if (x[2] == x[n]) {
  
  x[2].style.display ="block";  
  } else {
  
   x[2].style.display ="none";
  
  }
  
  // ... and fix the Previous/Next buttons:
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

var popupshowing = false;
var currentTab = 0; // Current tab is set to be the first tab (0)
document.getElementById("knappen").addEventListener("click", function() {
if (popupshowing == false )  {
  document.getElementById("overlay").style.visibility = "visible";
  popupshowing = true;
  showTab(currentTab);
  
} 
});

document.getElementById("popupclose").addEventListener("click", function() {
if (popupshowing == true )  {
  document.getElementById("overlay").style.visibility = "hidden";
  popupshowing = false;
} 
});


function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}


document.getElementById("step1").addEventListener("click",()=>showTab(0))
document.getElementById("step2").addEventListener("click",()=>showTab(1))
document.getElementById("step3").addEventListener("click",()=>showTab(2))



