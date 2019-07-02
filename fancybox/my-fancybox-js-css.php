<!--FancyBOX START-->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://necom.at/fancybox/lib/jquery-1.10.1.min.js"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="http://necom.at/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="http://necom.at/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="http://necom.at/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="http://necom.at/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="http://necom.at/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="http://necom.at/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="http://necom.at/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="http://necom.at/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<!--email_form.php-->
<script type="text/javascript">
$(document).ready(function() {
	$(".email_form").fancybox({
		maxWidth	: 415,
		maxHeight	: 463,
		fitToView	: false,
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade',
		padding : 0,
	});
});
</script>

<!--referenzen_popup.php-->
<script type="text/javascript">
$(document).ready(function() {
	$("#referenzen").fancybox({
		maxWidth	: 1200,
			height	: 640,
		fitToView	: false,
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : true
	});
});
</script>

<!--adm--pages.php-->
<script type="text/javascript">
$(document).ready(function() {
	$("#adm_pages").fancybox({
		maxWidth	: 1200,
		maxHeight	: 920,
		fitToView	: false,
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : true
	});
});
</script>