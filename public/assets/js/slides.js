$( document ).ready(function() {
var links=['https://docs.google.com/presentation/d/1rwr9ZEwKEFH8_KKKcMpwO4KB__nkKRmhjK0RWxPiqqA/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/17VsliANiNc-twnSNtfuKm2-9KCICBbMbqIyXgNzNVm4/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1EJBRyxLIwd-F3Smc7A1w2Ju2du6gUJpKsCHSeFTydFI/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1IOs3Z8agFK3Q30bQPaxiZV0sOTq6KWrtn7s9tMdpbtE/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1lkGXmy0LU2o9-2IDTvyBjNkt86A2e3m__2v1NS1G9hE/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1hWzw5B2pRju-TBS6l53_xEXFf3kjiFVguW5Mg-qg2aI/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1ZqmU2b5teBt-x8pI2GEXXDrpOSeVTFGPtOSWxZ6DQug/embed?start=false&loop=false&delayms=3000'];
var id=['html1','data2','ui3','js4','js5','d36','rf7'];
  function loadslide(deckno){
      
    
      $("#slidedeck").attr('src',links[deckno]);

      for(i in id){

        $("#"+id[i]).css({'background-color':'#ffc61e '});
      }
      $("#"+id[deckno]).css({'background-color':'#70bf44 '});
  }
  
  $("#nextc").click(function( event ) {
        var nextcount= $(this).data('count');
        if(nextcount==7){
          alert('The eternity is too far away.');
        }
        
        if(nextcount<7){
        $("#prevc").data("count", nextcount-1);
        var stringval=(parseInt(nextcount)+1)+"/8";
        $("#curc").html(stringval);
        $("#nextc").data("count",parseInt(nextcount)+1);
        loadslide(nextcount);}
 
    });

  $("#prevc").click(function( event ) {

        var prevcount= $(this).data('count');
        if(prevcount==-1){
          alert("What came first: chicken or the egg?");
        }
        if(prevcount>-1){
        $("#prevc").data("count", parseInt(prevcount)-1);
        var stringval=(parseInt(prevcount)+1)+"/8";
        $("#curc").html(stringval);
        $("#nextc").data("count",parseInt(prevcount)+1)
        loadslide(prevcount);
        }
    });


});