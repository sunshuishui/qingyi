	$(function(){
		$(".nyMainProDetailCH1 a").click(function(){
			var id2=$(this).attr("id");
			if(id2 && id2.indexOf("btn_")==0)
				mainHotSaleShow2(id2.replace("btn_",""));
		})
	});
	function mainHotSaleShow2(_id2){
		$(".nyMainProDContact").not("#"+_id2).hide();
		$("#"+_id2).show();
		$("#btn_main4LBtn1").removeClass("nyMainProDTA");
		$("#btn_main4LBtn2").removeClass("nyMainProDTA");
		$("#btn_main4LBtn3").removeClass("nyMainProDTA");
		$("#btn_main4LBtn4").removeClass("nyMainProDTA");
		$("#btn_"+_id2).addClass("nyMainProDTA");
	}