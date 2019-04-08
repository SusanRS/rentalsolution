
setTimeout(function() {
        $('#alerts').fadeOut('slow');
        }, 3000);

   


function show()
{   
  var v = document.getElementById('property').value;
  //var divr = document.getElementById('rdiv');
  //var divh = document.getElementById('hdiv');
   if(v== 'Rental'){
      //divh.style.display = "none";
     document.getElementById('hdiv').style.display = "none";
    document.getElementById('rdiv').style.display = 'block';
  

}
    else if (v== 'Homestay'){
     //divr.style.display = "none";
    document.getElementById('rdiv').style.display = "none";
    document.getElementById('hdiv').style.display = 'block';


}}
