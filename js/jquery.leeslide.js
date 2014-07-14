/**
 * leeslide beta
 * @authors leedow (644743991@qq.com)
 * @website http://www.leedow.com
 * @date    2014-06-14 12:38:27
 * @version beta
 */
(function($){
var $this, $tab, $container, option, params;
var flags = {
	tabDisplay	: false,
	tabStat		: 'lsd-show'
}
/*
 * 
 */
$.fn.leeslide = function(options){
	option = $.extend( {}, $.fn.leeslide.option, options );
	params = {
		width		: 0,
		height		: 0,
		counter		: 0
	};
	

	$this = $(this);
	$tab = $this.find('.lsd-tab');
	$container = $this.find('.lsd-container');

	//initing
	initParams();
	initSize();
	//slideTo(1);
	initTab();

	return $this;

	//init the children boxes' size
	function initSize(){
		$this.css({
			width	: params.width,
			height	: params.height
		});
		
		$('body').css({
			width	: params.width,
			height	: params.height
		});

		$this.find('.lsd-box').each(function(){
			$(this).css({
				width	: params.width,
				height	: params.height
			});
		});

		
	}

	//init the params
	function initParams(){
		params.width	= $(window).width();
		params.height	= $(window).height(); 	
		 
		params.counter	= $this.find('.lsd-box').size();
	}

	function slideTo(key){
		$.fn.leeslide.slideTo(key);
	}

	//init tab
	function initTab(){
		$tab.children('ul').children('li').each(function(index){
			$(this).click(function(){

				slideTo(index);
			});
		});

		$tab.hover(function(){
			showTab();
		},function(){
			hideTab(flags.tabStat);
		});

		var t = $tab.children('ul').children('li:eq(0)').attr('class');
		if(t.indexOf('lsd-rm') >= 0){
			hideTab('lsd-rm');
		} else if(t.indexOf('lsd-hide') >= 0){
			hideTab('lsd-hide');
		} else {
			hideTab('lsd-show');
		}
	}

	//slide the menu
	function showTab(){
		$tab.fadeIn().animate({
			left	: 0
		}, 'fast');
	}

	function hideTab(tag){
		var leftDis=0;
		if(tag == 'lsd-rm'){
			leftDis = -$tab.width();
		} else if(tag == 'lsd-hide'){
			leftDis = option.tabPos - $tab.width();
		} else {
			leftDis=0;
		}
		//alert(tag);
		$tab.animate({
			left	: leftDis
		}, 'fast');
	}

	function rmTab(){
		$tab.fadeOut();
	}
}

$.fn.leeslide.option = {
	direction	: 'top' ,
	tabPos		: 20,
	content 	: {}
}

$.fn.leeslide.slideTo = function(key){
	var clickTab = $tab.children('ul').children('li:eq(' + key + ')');
	var tag = clickTab.attr('class')?clickTab.attr('class'):'';

	rebootTab(tag);
	
	distance = -key*params.height;
	$container.animate({
		top	:  distance
	}, 'normal', function(){
		loadContent(tag);
	});
	return $this;

	function rebootTab(className){
		if(className.indexOf('lsd-hide') >= 0 ){
			flags.tabStat = 'lsd-hide';
			 
		} else if(className.indexOf('lsd-rm') >= 0){
			flags.tabStat = 'lsd-rm';
			 
		}else {//alert('show');
			flags.tabStat = 'lsd-show';	
			//alert('gobotot'+flags.tabStat) 
		}

		$tab.find('li').removeClass('current');
		$tab.find('li:eq('+key+')').addClass('current');

		var leftDis=0;
		
		$tab.fadeIn().animate({
			left	: leftDis
		}, 'fast');
	}

	function loadContent(className){
		for(keyName in option.content){
			if(className.indexOf(keyName) >= 0){
				var dx = $container.children('.lsd-box:eq(' + key + ')');
				var l;
				tmp = '<div class="lsd-iframe" style="display:none;"><IFRAME id="lsd-iframe-'+ key +'" src="'
					+ option.content[keyName] +
					'" frameBorder=0 style="width:100%;height:'+params.height+'px" scrolling=yes ></IFRAME></div>'
				if(dx.html().length < 100){
					dx.html(tmp);
					dx.children('.lsd-iframe').fadeIn();
					l =  $.leeLoading({
						'text'	: '玩命加载中',
						'appendTo'	: dx
					});

				}

				$('.lsd-iframe').find('iframe').load(function(){
			 
					l.leeLoading('destory');
					$(window.frames["lsd-iframe-" + key].document).find('a').attr('target' , '_self');
					$('.lsd-iframe').find('iframe').contents().find('a').click(function(){
						//alert($(this).attr('target'));
					});
				});
			}
		}
	}
}
})(jQuery);

(function($){	
$.leeLoading = function(e){
	var appendTo 	= e['appendTo']?e['appendTo']:$('body');
	var text 	= e['text']?e['text']:'loading';
	var loading 	= '<div class="leeLoading">'+text+'<span></span></div>';

	appendTo.css({
		'position':'relative'
	}).append(loading);
	
	$this =  $('.leeLoading');
	$this.css({
		'left'	: $(window).width()/2-40,
		'top'	: $(window).height()/2-40
	});

	var go = setInterval(function(){
		if($this.find('span').html().length < 4){
			$this.find('span').append('.');
		} else {
			$this.find('span').html('');
		};
	},200);
	/*
	var go2 = setTimeout(function(){
			$this.remove();	
	},8000);*/
	return $this;
}
$.fn.leeLoading = function(e){
	$this = $(this);
	methods = {
		'destory'	: function(){
			$this.remove();
		}
	}

	methods[e]();
	return $this;
}
})(jQuery);
