// $(function(){
//     	$('#email').on('blur',function()){
// 		if(/[^0-9A-Za-z.@_]/.test(this.value)){
// 			alert("Invalid Email");
// 			this.value = "";
// 			$(this).focus();
// 	}
// }
// });


$(document).ready(function(){
	$('#email').blur(function(){
		if(!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value)){
			// alert("Invalid Email");
			$('#email').css("background-color","red");
			this.value = "";
			$(this).focus();
		}
		else{
			$('#password').css("background-color","white");
		}
	})

	$('#password').blur(function(){
		if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/.test(this.value)){
			$('#password').css("background-color","red");
			this.value = "";
			$(this).focus();
		}
		else{
			$('#password').css("background-color","white");
		}
	})
})


// /[^0-9A-Za-z.@_]/

// $(document).ready(function(){
//   $("input").focus(function(){
//     $(this).css("background-color", "yellow");
//   });
//   $("input").blur(function(){
//     $(this).css("background-color", "green");
//   });
// });