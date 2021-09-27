$('#submenu_account').hide();
$('.page_up2').hide();

var show_menu = true;
$(".btn_account").on('click', function(){
	if(show_menu == true){
		$('#submenu_account').show('slow');
		$('.page_down2').hide('slow');
		$('.page_up2').show('slow');
		show_menu = false;
	}else{
		$('#submenu_account').hide('slow');
		$('.page_up2').hide('slow');
		$('.page_down2').show('slow');
		show_menu = true;
	}
});

$('.page_up').hide();
$('#menu_notify').hide();
var show_notify = true;
$(".btn_notify").on('click', function(){
	if(show_notify == true){
		$('#menu_notify').show('slow');
		$('.page_down').hide('slow');
		$('.page_up').show('slow');
		show_notify = false;
	}else{
		$('#menu_notify').hide('slow');
		$('.page_up').hide('slow');
		$('.page_down').show('slow');
		show_notify = true;
	}
});

function readURL(input) {
	if (input.files && input.files[0]) {
	  var reader = new FileReader();
	  reader.onload = function (e) {
		$('#blah').attr('src', e.target.result);
	  };
  
	  reader.readAsDataURL(input.files[0]);
	}
}