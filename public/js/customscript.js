 setTimeout(function()
        {
            $('#alerts').fadeOut('slow');
        }, 3000);

        function show()
        {   
          var v = document.getElementById('change_property').value;
          //var divr = document.getElementById('rdiv');
          //var divh = document.getElementById('hdiv');
           if(v== 'Rental'){
              //divh.style.display = "none";
            document.getElementById('div_homestay').style.display = "none";
            document.getElementById('div_rental').style.display = 'block';
            }
            else if (v== 'Homestay'){
             //divr.style.display = "none";
            document.getElementById('div_rental').style.display = "none";
            document.getElementById('div_homestay').style.display = 'block';
            }
            else
            {
                document.getElementById('div_homestay').style.display = 'none'
                document.getElementById('div_rental').style.display = 'none'
            }
        }

     


var scrolled=0;

$(document).ready(function(){

      
    $("#Right").on("click" ,function(){
                scrolled=scrolled+500;
        if(scrolled >= 1500)
        {
          scrolled = 1500;
        }
        
        $("#rentjs").animate({
                scrollLeft:  scrolled
           });

      });

    
    $("#Left").on("click" ,function(){
        scrolled=scrolled-500;
        
        if(scrolled <= 0)
        {
          scrolled = 0;
        }
        
        $("#rentjs").animate({
                scrollLeft:  scrolled
           });

      });

$("#hRight").on("click" ,function(){
                scrolled=scrolled+500;
        if(scrolled >= 1500)
        {
          scrolled = 1500;
        }
        
        $("#homejs").animate({
                scrollLeft:  scrolled
           });

      });

    
    $("#hLeft").on("click" ,function(){
        scrolled=scrolled-500;
        
        if(scrolled <= 0)
        {
          scrolled = 0;
        }
        
        $("#homejs").animate({
                scrollLeft:  scrolled
           });

      });


});
