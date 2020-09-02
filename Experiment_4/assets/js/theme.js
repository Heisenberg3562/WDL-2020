
var $regexname=/^[a-zA-Z]*$/;
$('#ename').on('keypress keydown keyup blur',function(){
     if (!$(this).val().match($regexname)) {
      $('#emsg').removeAttr("hidden")
     }
   else{
        $('#emsg').attr("hidden","")
       }
 });

$('#email').on('keypress keydown keyup blur',function(){
     if (!$(this).val().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      $('#emailmsg').removeAttr("hidden")
     }
   else{
        $('#emailmsg').attr("hidden","")
       }
 });

$('#password').on('keypress keydown keyup blur',function(){
     if (!$(this).val().match(/^[a-zA-Z0-9*]*$/)) {
      $('#passmsg').removeAttr("hidden")
     }
   else{
        $('#passmsg').attr("hidden","")
       }
 });

$('#signup').click(function(){
if ($('#rpassword').val() != $('#password').val()) {
      $('#rpassmsg').removeAttr("hidden")
     }
   else{
        $('#rpassmsg').attr("hidden","")
       }
});
