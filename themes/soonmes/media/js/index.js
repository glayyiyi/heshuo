jQuery(function(){	
	function nav(obj,childUl,childBox){
        var box = $(obj);
        var oLi = $("li",childUl);
        var oDiv = $(childBox);
		function showTab(){
			oLi.each(function(i){
				if($(oLi[i]).hasClass("hover2"))
					{
						
						oDiv.addClass("hide");
            			$(oDiv[i]).removeClass("hide");
					}
				})
			}
		showTab();
        oLi.mouseenter(function(){
            var index = oLi.index(this);
            $(oLi[index]).addClass("hover").siblings().removeClass("hover");
            oDiv.addClass("hide");
            $(oDiv[index]).removeClass("hide");
        })
		box.mouseleave(function(){
			oLi.removeClass("hover");
			showTab()
			})
    }
    nav(".nav",".navul",".navlist");
	
	function headshow(){
		var box = $(".tb-list");
		var oUl = $(".tb-listul",box);
		box.hover(function(){
			box.addClass("hover");
			oUl.show();
			},function(){
				box.removeClass("hover");
				oUl.hide();
				})
		}
	headshow();
	
	function slideTop(id,n){
		var $this = $(id);
		if($this.find("ul:first").find("li").length<n){
			return;
		}
		$this.hover(function(){clearInterval(scrollTimer)},function(){
				scrollTimer = setInterval(function(){
					scrollNews($this);
					},3000)
			});
			var scrollTimer = setInterval(function(){
				scrollNews($this);
				},3000);		
			
			function scrollNews(obj){
				var $self = obj.find("ul:first");
				var heights = $self.find("li:first").height();
				$self.animate({"marginTop":-heights+"px"},800,function(){
						$self.css({marginTop:0}).find("li:first").appendTo($self);
					})
				}
		}
		//slideTop(".sucbox");
		slideTop("#success_borrow", 5);
		
		function Tab(obj,childLi,childBox){
        var box = $(obj);
        var oLi = $(childLi,box);
        var oDiv = $(childBox , box);
        oLi.mouseenter(function(){
            var index = oLi.index(this);
            $(oLi[index]).addClass("hover").siblings().removeClass("hover");
            oDiv.hide();
            $(oDiv[index]).show();
        })
    }
   	 Tab(".lz-tab","li",".lz-tabtxt");

})		

 $(function(){
           
           $("[onclick='change_picktime()']").each(function(){
        this.className = "js-datetime";
                })
                $(".js-datetime").datepicker({ buttonText: "Choose" , changeMonth: true,  changeYear: true, dateFormat: "yy-mm-dd",currentText: 'Now', showOtherMonths: true,gotoCurrent: true,yearRange:"1900:2020"});
           })
           
           
        jQuery(function(){  
    $.datepicker.regional['zh-CN'] = {  
      clearText: '清除',  
      clearStatus: '清除已选日期',  
      closeText: '关闭',  
      closeStatus: '不改变当前选择',  
      prevText: '<上月',  
      prevStatus: '显示上月',  
      prevBigText: '<<',  
      prevBigStatus: '显示上一年',  
      nextText: '下月>',  
      nextStatus: '显示下月',  
      nextBigText: '>>',  
      nextBigStatus: '显示下一年',  
      currentText: '今天',  
      currentStatus: '显示本月',  
      monthNames: ['一月','二月','三月','四月','五月','六月', '七月','八月','九月','十月','十一月','十二月'],  
      monthNamesShort: ['一','二','三','四','五','六', '七','八','九','十','十一','十二'],  
      monthStatus: '选择月份',  
      yearStatus: '选择年份',  
      weekHeader: '周',  
      weekStatus: '年内周次',  
      dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
      dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
      dayNamesMin: ['日','一','二','三','四','五','六'],  
      dayStatus: '设置 DD 为一周起始',  
      dateStatus: '选择 m月 d日, DD',  
      dateFormat: 'yy-mm-dd',  
      firstDay: 1,  
      initStatus: '请选择日期',  
      isRTL: false  
    };  
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);  
 
  });  
