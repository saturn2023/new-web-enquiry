
  $(document).ready(function() { 

    document.querySelector('#issue-select').addEventListener("change", function() {
        document.getElementById("issue-1").style = "display:none";
        document.getElementById("issue-2").style = "display:none";
        document.getElementById("rate-show").style = "display:none";
        
        if (this.value == "1") {
    document.getElementById("issue-1").style = "display:block";
    document.getElementById("rate-show").style = "display:block";
  }
  if (this.value == "2") {
    document.getElementById("issue-2").style = "display:block";
    document.getElementById("rate-show").style = "display:block";
  }
  else{
     
  }
});
var $checkboxes = $('input[type=checkbox]');

$checkboxes.change(function () {
    if (this.checked) {
        if ($checkboxes.filter(':checked').length == 1) {
            $checkboxes.not(':checked').prop('disabled', true);
        }
    } else {
        $checkboxes.prop('disabled', false);
    }
});







   });
  
  