($(document).ready(function(){
    $('input[type="radio"]').click(function(){
      var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
)