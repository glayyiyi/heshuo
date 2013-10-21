$(function(){
	   function nav(obj,childUl,childBox){
        var box = $(obj);
        var oLi = $("li",childUl);
        var oDiv = $(childBox);
        function showDiv(){
            oLi.each(function(i){
                if($(oLi[i]).hasClass("hover"))
                {
                    oDiv.addClass("hide")
                    $(oDiv[i]).removeClass("hide");
                }
            })
        }
        oLi.mouseenter(function(){
            var index = oLi.index(this);
            $(oLi[index]).addClass("hover2").siblings().removeClass("hover2");
            oDiv.addClass("hide");
            $(oDiv[index]).removeClass("hide");
        })
        box.mouseleave(function(){
            oLi.removeClass("hover2");
            showDiv();
        })
    }
	
	function slideLeft(obj,slideTimer,showTimer){
        var box = $(obj);
        var Timer;
        box.hover(function(){
            clearInterval(Timer)
        },function(){
            Timer = setInterval(function(){
                scrollNew(box,showTimer);
            },slideTimer)
        }).trigger("mouseleave");
        function scrollNew(obj,showTimer){
            var scrollBox = obj.find("ul:first");
            var liHeight = scrollBox.find("li:first").width();
            scrollBox.animate({"marginLeft":-liHeight+"px"},showTimer,function(){
                scrollBox.css("marginLeft",0).find("li:first").appendTo(scrollBox);
            })
        }
    }
	


    nav(".nav",".navul",".navlist");
slideLeft(".cgal_itam",3000,1000);		
	$(".slidebox .JQ-slide").Slide({
		effect:"scroolX",
		speed:"normal",
		timer:2000
	});
	
	
	})