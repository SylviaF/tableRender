var $example = $('.csvTable'),
	$nav = $('#nav li');
$(function(){
	$("#navContent-0").show().siblings().hide();
	$nav.click(function(){
		var $this = $(this),
			tabContent = '#navContent-' + $this.data("tab");
		$this.addClass("active").siblings().removeClass("active");
		$(tabContent).show().siblings().hide();
	});
	$example.DataTable({
		dom: 'Bfrtip',
	    buttons: [
	        'csv', 'excel', 'pdf'
	    ]
	});
});


