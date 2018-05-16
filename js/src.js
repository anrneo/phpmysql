$(document).ready(function(){
    $('.registro').on('click', function(){
        $('#form1').remove()
         $('#form2').show()      
         })

    // Attach a submit handler to the form
$("#form2").on('submit', function( event ) {
    var form = $( this )
    usu = form.find( "input[name='usuario']" ).val()
    ema = form.find( "input[name='email']" ).val()
    pas1 = form.find( "input[name='pass1']" ).val()
    pas2 = form.find( "input[name='pass2']" ).val()
    
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (emailRegex.test(ema)) {
      
    } else {
        $('#emaok').show()
        event.preventDefault(); 
       }

    if(pas1!=pas2){
        $('#pas').show()
        event.preventDefault();
    }
    
   
    })
})

