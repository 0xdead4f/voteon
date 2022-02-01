// JavaScript Document

$(window).scroll(function(){
	var y = $(window).scrollTop();

	if(y>=1&&y<600){
		$('#nav_home').css('background-color','#24AFED');
		$('#nav_service').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#24afed');
		$('#nav_ul').css('background-color','#eee');
	}
	else if(y>=600&&y<1200){
		$('#nav_home').css('background-color','#FFF');
		$('#nav_service').css('background-color','#24AFED');
		$('#nav_about').css('background-color','#FFF');
		$('#nav_ul').css('background-color','#24AFED');
		$('#dot-nav li').css('border-color','#fff');
		$('#sc_service').css('top','0px');
		$('#sc_service').css('visibility','visible');
		$('#sc_to').css('height','330px');
		$('#sc_expo').css('height','330px');
		$('#sc_enter').css('height','330px');
	}
	else if(y>=1200&&y<2200){
		$('#nav_service').css('background-color','#FFF');
		$('#nav_about').css('background-color','#24AFED');
		$('#nav_program').css('background-color','#FFF');
		$('#nav_ul').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#24AFED');
		$('#title_ab').css('top','0px');
		$('#title_ab').css('opacity','1');
		$('#sc_ab1').css('opacity','1');
		$('#sc_ab1').css('left','0px');
		$('#sc_ab2').css('opacity','1');
		$('#sc_ab2').css('right','0px');
	}
	else if(y>=2200&&y<2800){
		$('#nav_about').css('background-color','#FFF');
		$('#nav_program').css('background-color','#24AFED');
		$('#nav_team').css('background-color','#FFF');
		$('#nav_ul').css('background-color','#24AFED');
		$('#dot-nav li').css('border-color','#fff');
		$('#title_pro').css('color','#30b0bb');
		$('#myTab').css('left','0px');
		$('#myTab').css('opacity','1');
		$('#myTabContent').css('bottom','0px');
		$('#myTabContent').css('opacity','1');
		$('#img1_prog').css('width','555px');
		$('#img1_prog').css('opacity','1');
	}
	else if(y>=2800&&y<3100){
		$('#nav_program').css('background-color','#FFF');
		$('#nav_team').css('background-color','#30b0bb');
		$('#nav_new').css('background-color','#FFF');
		$('#nav_ul').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#30b0bb');
		$('#title_reg').css('top','0px');
		$('#title_reg').css('opacity','1');
		$('#prize').css('top','0');
		$('#prize').css('opacity','1');
	}
	else if(y>=3100&&y<3700){
		$('#title_prize').css('top','0px');
		$('#title_prize').css('opacity','1');
		$('#bigprize').css('opacity','1');
	}
	else if(y>=3700&&y<4200){
		$('#title_prize1').css('top','0px');
		$('#title_prize1').css('opacity','1');
		$('#bigprize1').css('opacity','1');
	}
	else if(y>=4200&&y<4500){
		$('#to_reg').css('opacity','1');
		$('#to_reg').css('width','100%');
		$('#cara_reg').css('height','1000px');
		$('#reg1').css('opacity','1');
	}
	else if(y>=4500&&y<4800){
		$('#reg2').css('opacity','1');
	}
	else if(y>=4800&&y<5500){
		$('#buy').css('opacity','1');
		$('#reg3').css('opacity','1');
		$('#button_reg').css('opacity','1');
		$('#button_reg2').css('opacity','1');
		$('#nav_ul').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#30b0bb');
		$('#nav_team').css('background-color','#30b0bb');
		$('#nav_new').css('background-color','#fff');
	}
	else if(y>=5500&&y<6500){
		$('#nav_team').css('background-color','#FFF');
		$('#nav_new').css('background-color','#24AFED');
		$('#nav_promote').css('background-color','#FFF');
		$('#nav_ul').css('background-color','#24AFED');
		$('#dot-nav li').css('border-color','#fff');
		$('#news').css('opacity','1');
		$('.news-article').css('opacity','1');
	}
	else if(y>=6500&&y<7800){
		$('#nav_ul').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#30b0bb');
		$('#nav_new').css('background-color','#FFF');
		$('#nav_promote').css('background-color','#30b0bb');
		$('#nav_gallery').css('background-color','#fff');
		$('#title_promo').css('margin-top','0px');
		$('#promo').css('opacity','1');
	}
	else if(y>=7800&&y<8400){
		$('#nav_promote').css('background-color','#FFF');
		$('#nav_gallery').css('background-color','#24AFED');
		$('#nav_test').css('background-color','#fff');
		$('#nav_ul').css('background-color','#24AFED');
		$('#dot-nav li').css('border-color','#fff');
	}else if(y>=8400&&y<8900){
		$('#nav_ul').css('background-color','#FFF');
		$('#dot-nav li').css('border-color','#24AFED');
		$('#nav_gallery').css('background-color','#FFF');
		$('#nav_test').css('background-color','#24AFED');
		$('#nav_contact').css('background-color','#fff');
	}else if(y>=8900&&y<10000){
		$('#nav_test').css('background-color','#fff');
		$('#nav_contact').css('background-color','#24AFED');
		$('#nav_ul').css('background-color','#24AFED');
		$('#dot-nav li').css('border-color','#fff');
	}
	else{
		$('#nav_home').css('background-color','#FFF');
		$('#nav_service').css('background-color','#FFF');
		$('#nav_about').css('background-color','#FFF');
		$('#nav_program').css('background-color','#FFF');
		$('#nav_team').css('background-color','#FFF');
		$('#nav_new').css('background-color','#FFF');
		$('#nav_promote').css('background-color','#FFF');
		$('#nav_gallery').css('background-color','#FFF');
		$('#nav_test').css('background-color','#FFF');
		$('#nav_contact').css('background-color','#FFF');
		$('#sc_service').css('top','100px');
		$('#sc_service').css('visibility','hidden');
		$('#sc_to').css('height','0px');
		$('#sc_expo').css('height','0px');
		$('#sc_enter').css('height','0px');
		$('#title_ab').css('top','-130px');
		$('#title_ab').css('opacity','0');
		$('#sc_ab1').css('opacity','0');
		$('#sc_ab1').css('left','-200px');
		$('#sc_ab2').css('opacity','0');
		$('#sc_ab2').css('right','-100px');
		$('#title_pro').css('color','#fff');
		$('#myTab').css('left','-100px');
		$('#myTab').css('opacity','0');
		$('#myTabContent').css('bottom','-100px');
		$('#myTabContent').css('opacity','0');
		$('#img1_prog').css('width','0px');
		$('#img1_prog').css('opacity','0');
		$('#title_reg').css('top','-200px');
		$('#title_reg').css('opacity','0');
		$('#prize').css('top','100px');
		$('#prize').css('opacity','0');
		$('#title_prize').css('top','100px');
		$('#title_prize').css('opacity','0');
		$('#bigprize').css('opacity','0');
		$('#title_prize1').css('top','100px');
		$('#title_prize1').css('opacity','0');
		$('#bigprize1').css('opacity','0');
		$('#to_reg').css('opacity','0');
		$('#to_reg').css('width','40%');
		$('#cara_reg').css('height','0px');
		$('#reg1').css('opacity','0');
		$('#reg2').css('opacity','0');
		$('#reg3').css('opacity','0');
		$('#buy').css('opacity','0');
		$('#button_reg').css('opacity','0');
		$('#button_reg2').css('opacity','0');
		$('#news').css('opacity','0');
		$('.news-article').css('opacity','0');
		$('#title_promo').css('margin-top','-200px');
		$('#promo').css('opacity','0');
	}
});
$(document).ready(function(){
    $('.awesome-tooltip').tooltip({
        placement: 'left'
    });

    $(window).bind('scroll',function(e){
      dotnavigation();
    });

    function dotnavigation(){

        var numSections = $('section').length;

        $('#dot-nav li a').removeClass('active').parent('li').removeClass('active');
        $('section').each(function(i,item){
          var ele = $(item), nextTop;

          console.log(ele.next().html());

          if (typeof ele.next().offset() != "undefined") {
            nextTop = ele.next().offset().top;
          }
          else {
            nextTop = $(document).height();
          }

          var docTop = $(document).scrollTop();

          if(docTop >= thisTop && (docTop < nextTop)){
            $('#dot-nav li').eq(i).addClass('active');
          }
        });
    }

    /* get clicks working */
    $('#dot-nav li').click(function(){

        var id = $(this).find('a').attr("href"),
          posi,
          ele,
          padding = 0;

        ele = $(id);
        posi = ($(ele).offset()||0).top - padding;

        $('html, body').animate({scrollTop:posi}, 'slow');

        return false;
    });

/* end dot nav */
});
