// JavaScript Document
$(function(){
	
	function sizeChange(){
		var bodyobj = $(".js-bodyHeight");
		
		var topHeight = $(".js-topHeight").height();//top  顶部高度
		var bodyHeight = bodyobj.height();//main 主要内容高度
		var mainHeight = $(window).height();//浏览器可是高度
		var footHeight = $(".foot").height();//foot 底部高度
		
		var leftobj = $(".js-mainleft");//左侧导航
		var rightobj = $(".js-mainright");//右侧导航
		var rightBox = $(".main_content");
		var leftHeight = leftobj.height(); //main_left 左侧高度
		var rightHeight = rightobj.height(); //main_right 右侧高度
		var rightBoxHeight = rightBox.height()
				
		
		var offsetHeight = (mainHeight-footHeight-topHeight+40);//中间高度差，使得foot一直处于底部
		var visivleHeight = offsetHeight-($(".main_site").height()+$(".banner_position").height()+60); 
		 
		bodyobj.css("height",offsetHeight+"px");
		leftobj.css("height",offsetHeight-60+"px");
		rightBox.css("height",visivleHeight+"px");


		
	}	
	
	sizeChange();
	
	
	$(window).resize(function(){
		sizeChange();
		})
		
	function showDOM(){
		var parentBox = $(".fenlan");
		
		var i=0;
		parentBox.each(function(){
			var childBox = $(".fenlan_content ul",$(parentBox[i]));
			var clickBox = $(".fenlan_title span a",$(parentBox[i]));
			//hideChild(this);
			//showChild(this);
			childBox.show();//显示第i个;
			clickBox.text("-");
			i++;
			})
		
		function hideChild(obj){
			var box = $(obj);
			var childs = $(".fenlan_content ul",box);
			childs.hide();	
		}
		function showChild(obj){
			var box = $(obj);
			var childs = $(".fenlan_content ul",box);
			childs.show();	
		}
		
	}	
	showDOM();
})