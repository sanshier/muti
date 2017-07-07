$(function(){
	$(".service_list li").hover(function(){
		$(this).attr('style','border-radius:#ec6617 4px 2px 2px;');
	},function(){
		
	});
})

//注册
$(function(){
	$(".register_hd li").click(function(){
		var index=$(this).index();
		$(this).addClass("on").siblings("li").removeClass("on");
		$(".register_bd .register_list").eq(index).attr("style","display:block").addClass("a-fadeinR").siblings(".register_list").attr("style","display:none").removeClass("a-fadeinR");
	});
})


$(function(){
	$(".mission_list li").click(function(){
		$(this).addClass("on").siblings("li").removeClass("on").parents("ul").siblings("ul").find("li").removeClass("on");	
	});
	
	//木梯代展会信息
	$(".information_list table tr:odd").css("background","#e5e5e5");

})
//导航
$(function(){
	$(".nav>li").hover(function(){
		$(this).find(".nav_two").stop().slideDown();	
	},function(){
		$(this).find(".nav_two").stop().slideUp();
	});	
})


//发布任务
$(function(){
	$(".lookup_list li").click(function(){
		var val=$("#inp").val();
		var sum=parseInt($("#inp").val())+1
		$(this).addClass("active").siblings("li").removeClass("active");
		$(".first_steps").attr('style','display:none;');
		$(".second_steps").attr('style','display:block').addClass("a-fadeinR");
		$(".steps").attr('style','display:block');
		$(".step li").eq(1).addClass("on").siblings("li").removeClass("on");
		var id=$(".issue_tasks_right .a-fadeinR").attr("id");
		$("#inp").val(sum);
	});
	//下一步
	$(".next_step").click(function(){
		next();
	});

	//发布
	$(".releases").click(function(){
		next();
	});

	//上一步
	$(".prve_step").click(function(){
		prve();
	});
})


//下一步
function next(){
	var val=$("#inp").val();
	var sum=parseInt($("#inp").val())+1
	if(sum==5){
		return false
	}else{
		$("#inp").val(sum);
	}
	if(val==2){
		$(".steps .releases").attr('style','display:inline-block');
		$(".steps .next_step").attr('style','display:none');
	}
	if(val==3){
		$(".steps .payment").attr('style','display:inline-block');
		$(".steps .releases").attr('style','display:none');
		$(".steps .next_step").attr('style','display:none');
	}
	$("#"+val).next().attr('style','display:block').addClass("a-fadeinR").siblings(".progress").attr('style','display:none;').removeClass("a-fadeinR");
	$(".step li").eq(sum).addClass("on").siblings("li").removeClass("on");
}
//上一步
function prve(){
	var val=$("#inp").val();
	var sum=parseInt($("#inp").val())-1
	if(sum==0){
		$(".steps").attr('style','display:none');
	}
	if(sum==-1){
		$(".steps").attr('style','display:none');
		return false
	}else{
		$("#inp").val(sum);
	}
	if(val==3){
		$(".steps .next_step").attr('style','display:inline-block');
		$(".steps .releases").attr('style','display:none');
	}
	if(val==4){
		
		$(".steps .releases").attr('style','display:inline-block');
		$(".steps .payment").attr('style','display:none');
		$(".steps .next_step").attr('style','display:none');
	}
	$("#"+val).prev().attr('style','display:block').addClass("a-fadeinR").siblings(".progress").attr('style','display:none;').removeClass("a-fadeinR");
	$(".step li").eq(sum).addClass("on").siblings("li").removeClass("on");
}