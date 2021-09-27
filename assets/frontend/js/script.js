$(document).ready(function(){
	//bắt sự kiện click của id=btnSearch
	$("#btnSearch").click(function(){
		var key = $("#key").val();
		//di chuyển đến url tìm kiếm
		location.href = "index.php?controller=search&action=name&key="+key;
	});
	//-------------------------------------
	$(".input-control").keyup(function(){
	var strKey = $("#key").val();
	if(strKey.trim() == "")
		$(".smart-search").attr("style", "display: none");
	else{
		$(".smart-search").attr("style", "display: block");
		//------------
		//sử dụng ajax để lấy dữ liệu
		$.get("index.php?controller=search&action=ajaxSearch&key="+strKey, function(data){
			//clear các thẻ li bên trong thẻ ul
			$(".smart-search ul").empty();
			//thêm dữ liệu vừa lấy được bằng ajax vào thẻ ul
			$(".smart-search ul").append(data);
		});
		//------------
	}
	});
	//-------------------------------------
});
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

var stt = 3;
var firstImg = $("div.slideNews:first").attr("idx");
var nextImg = firstImg + 3;
var endImg = $("div.slideNews:last").attr("idx");
firstShow();
function firstShow(){
	$("div.slideNews").attr("display", "none");
	for(var i = $("div.slideNews").attr("idx"); i < endImg; i++){
		if(i < 4){
            if(i==0){
                $("div.slideNews").eq(0).fadeIn(500);
                continue;
            }
			$("div.slideNews").eq(i).show();
		}
	}
}

function lastShow(){
	$("div.slideNews").attr("display", "none");
	for(var i = $("div.slideNews").attr("idx"); i < endImg; i++){
		if(i > endImg - 4){
			$("div.slideNews").eq(i).show();
		}
	}
}

$("#next").click(function () {
    if (++stt > endImg) {
        stt = 3;
    }
    changeImg(stt);
});

$("#prev").click(function(){
	if(--stt < 3){
		stt = endImg;
	}
	changeImg(stt);
});

var interval;
var timer = function () {
    interval = setInterval(function () {
        $("#next").click();
    }, 5000);
};
timer();



function changeImg(stt) {
	if(stt == 3){
		$("div.slideNews").hide();
		firstShow();
	}
	if(stt == endImg){
		$("div.slideNews").hide();
		lastShow();
	}
    $("div.slideNews").eq(stt-4).hide();
    $("div.slideNews").eq(stt).fadeIn(500);

    clearInterval(interval);
    timer();
};
