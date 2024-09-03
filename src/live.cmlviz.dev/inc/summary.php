<div id="summary" class="panel">

	<div class="inner-wrap">

		<div class="summary-content">

			<div class="chart">

				<p>Chart</p>

			</div>

			<div class="table-data">

				<table>

					<tr>

						<td class="td-label">Previous Close</td>

						<td class="td-value"><?php echo $previousClose_text;?></td>

					</tr>

					<tr>

						<td class="td-label">Open</td>

						<td class="td-value"><?php echo $stockOpen_text;?></td>

					</tr>

					<tr>

						<td class="td-label">Day&rsquo;s Range</td>

						<td class="td-value"><?php echo $stockLow_text;?> &ndash; <?php echo $stockHigh_text;?></td>

					</tr>

					<tr>

						<td class="td-label">52 Week Range</td>

						<td class="td-value"><?php echo $annualLow_text;?> &ndash; <?php echo $annualHigh_text;?></td>

					</tr>

					<tr>

						<td class="td-label">Volume</td>

						<td class="td-value"><?php echo $stockVolume;?></td>

					</tr>

					<tr>

						<td class="td-label">Avg. Volume<br>(30 days)</td>

						<td class="td-value"><?php echo $volume30dayAvg_text;?></td>

					</tr>

				</table>

				<table>

					<tr>

						<td class="td-label">Market Cap (Intraday)</td>

						<td class="td-value"><?php echo $marketCap_text;?></td>

					</tr>

					<tr>

						<td class="td-label">PE Ratio (TTM)</td>

						<td class="td-value"><?php echo $priceToEarnings_text;?></td>

					</tr>

					<tr>

						<td class="td-label">EPS (TTM)</td>

						<td class="td-value"><?php echo $EPS_text?></td>

					</tr>

					<tr>

						<td class="td-label">Revenue (TTM)</td>

						<td class="td-value"><?php echo $revenue_text?></td>

					</tr>

					<tr>

						<td class="td-label">Earnings Date Estimate</td>

						<td class="td-value"><?php echo $nextEarningsDate;?></td>

					</tr>

					<tr>

						<td class="td-label">Dividend &amp; Yield</td>

						<td class="td-value"><?php echo $dividendPerShare_text;?> (<?php echo $dividendYield_text;?>%)</font></td>

					</tr>

				</table>

				<div class="note">Stock prices are delayed</div>

			</div>

		</div>
	</div>

<hr color="#cccccc" width="2" style="width:100%;">
<script type="text/javascript">
		document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');
	</script>

	<div style ="font-family:Helvetica; font-size:14px; line-height:175%; color:#0081f2;">
	<?php echo $ticker." News";?>
	<?php
		//echo "<b>".strtoUpper($ticker)." News</b> (provided by Yahoo! Finance RSS Feed)";
	?>
	</div>

<div id ="news"  style ="width:98%">
	<br>
	<script type="text/javascript">
		(function()
			{var params = {rssmikle_url: "http://finance.yahoo.com/rss/headline?s=<?php echo $ticker;?>",

			//rssmikle_frame_width: "20%",
			rssmikle_frame_height: "50000",
			frame_height_by_article: "20",
			rssmikle_target: "_top",
			rssmikle_font: "Helvetica",
			rssmikle_font_size: "17",
			rssmikle_border: "off",
			responsive: "on",
			rssmikle_css_url: "",
			text_align: "left",
			text_align2: "left",
			corner: "off",
			scrollbar: "off",
			autoscroll: "off",
			scrolldirection: "up",
			scrollstep: "3",
			mcspeed: "20",
			sort: "New",
			rssmikle_title: "off",
			rssmikle_title_sentence: "",
			rssmikle_title_link: "",
			rssmikle_title_bgcolor: "#000000",
			rssmikle_title_color: "#FFFFFF",
			rssmikle_title_bgimage: "",
			rssmikle_item_bgcolor: "#FFFFFF",
			rssmikle_item_bgimage: "",
			rssmikle_item_title_length: "70",
			rssmikle_item_title_color: "#2e7ec8",
			rssmikle_item_border_bottom: "off",
			rssmikle_item_description: "on",
			item_link: "off",
			rssmikle_item_description_length: "150",
			rssmikle_item_description_color: "#666666",
			rssmikle_item_date: "on",
			rssmikle_timezone: "America/Toronto",
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

</div>

