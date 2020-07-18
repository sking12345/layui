


var plt = {
	vue_option:function(el,data)
	{
		this.el = el;
		this.data = data;
		var $ = layui.jquery;
		$(el).addClass("hide");
		new Vue({
	            el: el,
	            data: data,
	    });
	    $(el).removeClass("hide");
	},
};

window.onload = function()
{
	var $ = layui.jquery;
	$("body").removeClass("hide");
}
