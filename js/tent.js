$(document).ready(function() {

    $("input:checkbox").on('click', function() {
      // in the handler, 'this' refers to the box clicked on
      var $box = $(this);
      if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });


});
function showForm(){
    var selopt = document.getElementById("opts").value;
    if (selopt == 1) {
        document.getElementById("f1").style.display="block";
        document.getElementById("f2").style.display="none";
        document.getElementById("f3").style.display="none";
        document.getElementById("f4").style.display="none";
    }
    if (selopt == 2) {
        document.getElementById("f1").style.display="none";
        document.getElementById("f2").style.display="block";
        document.getElementById("f3").style.display="none";
        document.getElementById("f4").style.display="none";
    }
    if (selopt == 3) {
        document.getElementById("f2").style.display="none";
        document.getElementById("f1").style.display="none";
        document.getElementById("f3").style.display="block";
        document.getElementById("f4").style.display="none";

    }
    if (selopt == 4) {
        document.getElementById("f1").style.display="none";
        document.getElementById("f2").style.display="none";
        document.getElementById("f3").style.display="none";
        document.getElementById("f4").style.display="block";
    }
}



