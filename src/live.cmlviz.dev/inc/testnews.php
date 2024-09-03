<?php $ticker ="AAPL"; ?>
<script type="text/javascript">
		document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');
	</script>
	<br>
	<div style ="font-family:Georgia; font-size:18px; line-height:175%; color:#333333;">
	<?php
		echo "<b>".strtoUpper($ticker)." News</b> (provided by Yahoo! Finance RSS Feed)";
	?>
	</div>
	
<div id ="news">
	<br>
	<script type="text/javascript">
		(function() 
			{var params = {rssmikle_url: "http://finance.yahoo.com/rss/headline?s=<?php echo $ticker;?>",
		
			rssmikle_frame_width: "100%",

			
			rssmikle_frame_height: "10000",
			frame_height_by_article: "20",
			rssmikle_target: "_top",
			rssmikle_font: "Georgia",
			rssmikle_font_size: "15",
			rssmikle_border: "off",
			responsive: "off",
			rssmikle_css_url: "",
			text_align: "left",
			text_align2: "left",
			corner: "off",
			scrollbar: "on",
			autoscroll: "off",
			scrolldirection: "up",
			scrollstep: "3",
			mcspeed: "20",
			sort: "New",
			rssmikle_title: "off",
			rssmikle_title_sentence: "",
			rssmikle_title_link: "",
			rssmikle_title_bgcolor: "#0066FF",
			rssmikle_title_color: "#FFFFFF",
			rssmikle_title_bgimage: "",
			rssmikle_item_bgcolor: "#FFFFFF",
			rssmikle_item_bgimage: "",
			rssmikle_item_title_length: "70",
			rssmikle_item_title_color: "#0066FF",
			rssmikle_item_border_bottom: "on",
			rssmikle_item_description: "on",
			item_link: "off",
			rssmikle_item_description_length: "150",
			rssmikle_item_description_color: "#666666",
			rssmikle_item_date: "on",
			rssmikle_timezone: 
			"America/Toronto",
			datetime_format: "%b %e, %Y %l:%M %p %Z",
			item_description_style: "text",
			item_thumbnail: "full",
			item_thumbnail_selection: "enclosure",
			article_num: "300",
			rssmikle_item_podcast: "off",
			keyword_inc: "",keyword_exc: ""};
			feedwind_show_widget_iframe(params);})();
	</script>
	
	<div style="font-size:10px; text-align:center; width:600px;">
		<a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a>
	</div>
</div>		