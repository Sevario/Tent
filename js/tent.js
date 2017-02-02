$(document).ready(function() {

    $('.matenform').show();
    $('.aantal').hide();

    $('#maten').change(function () {
        var selected = $('#maten option:selected').text();
        if (selected !== "") {
            $('.aantal').show('fast');
        }
        else {
            $('.aantal').hide('fast');
        }
        
    
    });
    
    
    //Show advies input if box checked
    $('.advies').click(function() {
        $(".advieschecked").toggle(this.checked);
        
    });
    
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

    //Deselect all options if "geen opties" is selected
    $('input#geenopties').on('change', function() {
        $('input#verlichting').not(this).prop('checked', false);  
        $('input#verwarming').not(this).prop('checked', false);  
        $('input#systeemvloer').not(this).prop('checked', false);  
        
    });
    
        //Deselect all other options if "geen deur" is selected
    $('input#geendeur').on('change', function() {
        $('input#roldeur').not(this).prop('checked', false);  
        $('input#overhead').not(this).prop('checked', false);  
        $('input#enkeledeur').not(this).prop('checked', false);  
        $('input#dubbeledeur').not(this).prop('checked', false);  
    });
    
    //Deselect geen opties if other options are selected
    $('input#verlichting').on('change', function() { $('input#geenopties').not(this).prop('checked', false);  });
    $('input#verwarming').on('change', function() { $('input#geenopties').not(this).prop('checked', false);  });
    $('input#systeemvloer').on('change', function() { $('input#geenopties').not(this).prop('checked', false);  });
});
