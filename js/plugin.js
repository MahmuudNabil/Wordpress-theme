
	/*$("button").hover(function()
	{
		$("button").css("color","blue");
		$("p").css("color","red");
	},
	function()
	{
		$(this).css("color","red")
		$("p").css("color","yellow");
	}
	);
	
	$("button").click(function()
	{
		$("span").hide(5000,function()
		{
			$("span").show();
		});
	});
	
	$("button").click(function()
	{
		$("span").hide("slow",alert("paragraph is hidden"));
	});
	
	$("button").click(function()
	{
		$("span").show(3000,function(){$("span".toggle();)});
	});
	
	$("button").click(function(){$("p").show(3000,function(){$("span").toggle();});});
	
	  $("button").click(function()
		{
			$("div").fadeToggle(2000,function()
					    {
						$("span").fadeToggle(2000);
						});
		});
	
	$("p").on({
		mouseenter:function(){
			$(this).css("background-color","lightgray");
		},
		mouseleave:function(){
			$(this).css("background-color","lightblue");
		},
		click:function(){
			$(this).css("background-color","yellow");
		}
		});
		
	$(".open").click(function()
			     {
				$(".box").slideToggle();
				});
	 
	$("button").click(function()
				{
					$("div").stop(false,true);
					});
	$("div").animate(
			     {
				top:'100px'
				},1000);
	$("div").animate(
			     {
				width:'600px'
				},1000);
	$("div").animate(
			     {
				height :'400px'
				},1000);
	$("div").animate(
			     {
				borderRadius:'20px'
				},1000);
	$("div").animate(
			     {
				fontSize:'40px'
				},1000);
	$("div").animate(
			     {
				fadeOut:'0px'
				},1000);
	
	$("div")
	.css({background:'red'})
	.slideUp(2000)   	//slide up in two second
	.slideDown(2000)	//slide down in two second
	.slideUp(2000)
	.fadeOut(2000)
	.fadeIn(2000);
	

	$("div").prepend("<p>hello world</p>");


	$("p").click(function()
					  {
						$(this).toggleClass("custom");
						});
							

	$("button").click(function(){
		var marg=$("input").val();
	$("p").css(
			   {
				 "color":"red",
				 "background":"yellow",
				 "padding":marg
				});
		});
		*/
$(document).ready(function()
{
	$(".cont").click(function(){
		$(this).width("+="+50);
		if($(this).width()==700)
		{
			$(this).css(
						{
							maxWidth:'700px'
							"width":"700px"
						}
						);
		}
		});
		
});