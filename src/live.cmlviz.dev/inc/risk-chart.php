<style>

		.chart rect {
		  stroke: white;
		  fill-opacity: .6; 

		}
		.bar.positive {
		  fill: #014be1;
		}

		.bar.negative {
		  fill: #ff0000;
		}

		.axis text {
		  font: 12px georgia;
		  font-weight: bold;
		}

		.axis path, .axis line {
		  fill: none;
		  stroke: #666666;
		  shape-rendering: crispEdges;
		}


	</style>
<?php

	// This gives us $ETF_specific, $ETF_specific_name
	include "sector_ETF.php";
						
						
	// Get the data
	$IV30 = getSimpleData($ticker, "iv30", "cml_lite.iv30DataPlus");
	$IV30percentile = getSimpleData($ticker, "52w_iv30_percentile", "cml_lite.iv30DataPlus");
	$IV30percentile =  number_format($IV30percentile, 0, '.', ',');
	$HV20 = getSimpleData($ticker, "hv20", "cml_lite.iv30DataPlus");
	$IV30_low = getSimpleData($ticker, "52w_low_iv30", "cml_lite.iv30DataPlus");
	$IV30_high = getSimpleData($ticker, "52w_high_iv30", "cml_lite.iv30DataPlus");
	$HV30 = getSimpleData($ticker, "hv30", "cml_lite.iv30DataPlus");
	$HV30_low = getSimpleData($ticker, "52w_low_hv30", "cml_lite.iv30DataPlus");
	$HV30_high = getSimpleData($ticker, "52w_high_hv30", "cml_lite.iv30DataPlus");
	$HV30percentile = getSimpleData($ticker, "52w_hv30_percentile", "cml_lite.iv30DataPlus");
	
	if($IV30 < 0) $IV30 = "";
	if($IV30percentile < 0) $IV30percentile = "";
	if($IV30percentile < 0) $IV30percentile = "";
	if($IV30_low < 0) $IV30_low = "";
	if($IV30_high < 0) $IV30_high = "";
	if($HV30_low < 0) $HV30_low = "";
	if($HV30_high < 0) $HV30_high = "";
	if($HV30percentile < 0) $HV30percentile = "";
		
	// New
	$IV30_SPY = getSimpleData("SPY", "iv30", "cml_lite.iv30DataPlus");
	$IV30_QQQ = getSimpleData("QQQ", "iv30", "cml_lite.iv30DataPlus");
	$IV30_IBB = getSimpleData("IBB", "iv30", "cml_lite.iv30DataPlus");
	$IV30_XLF = getSimpleData("XLF", "iv30", "cml_lite.iv30DataPlus");
	
	if($IV30_SPY < 0) $IV30_SPY = "";
	if($IV30_QQQ < 0) $IV30_QQQ = "";
	if($IV30_IBB < 0) $IV30_IBB = "";
	if($IV30_XLF < 0) $IV30_XLF = "";
	
	$IV30_ETF_specific = getSimpleData($ETF_specific, "iv30", "cml_lite.iv30DataPlus");
	$IV30_ETF_specific_low = getSimpleData($ETF_specific, "52w_low_iv30", "cml_lite.iv30DataPlus");
	$IV30_ETF_specific_high = getSimpleData($ETF_specific, "52w_high_iv30", "cml_lite.iv30DataPlus");
	
	if($IV30_ETF_specific < 0) $IV30_ETF_specific = "";
	if($IV30_ETF_specific_low < 0) $IV30_ETF_specific_low = "";
	if($IV30_ETF_specific_high < 0) $IV30_ETF_specific_high = "";
	
	
	$chartmin = min(0.9*$IV30_low,0.9*$IV30_SPY,0.9*$IV30_QQQ, 0.9*$HV30);
	$chartmax = max(1.1*$IV30_high,1.1*$IV30_SPY,1.1*$IV30_QQQ, 1.1*$IV30_IBB, 1.1*$IV30_ETF_specific);
	
	$chartmin = max($chartmin, 0);

	
?>



<div id="risk-chart" class="panel">

	<div class="inner-wrap">

		<div class="risk-chart-content">

			<div class="content-group">

				
				<div class="table-data">
				
					<table>

						<caption>Snapshot Summary</caption>

						<tbody>

							<tr>

								<th colspan="3" scope="colgroup">Context: The Indices</th>

							</tr>

							<tr>

								<td class="td-label">S&amp;P 500 (SPY)</td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30_SPY?>%</td>

							</tr>

							<tr>

								<td class="td-label">Nasdaq 100 (QQQ)</td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30_QQQ?>%</td>

							</tr>

							<tr>

								<td class="td-label"><?php echo $ETF_specific_name." (".$ETF_specific.")";?></td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30_ETF_specific?>%</td>

							</tr>

							<tr>

								<th colspan="3" scope="colgroup">Context: <?php echo $companyName;?></th>

							</tr>

							<tr>

								<td class="td-label"><?php echo $ticker;?> 52 Week Low</td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30_low;?>%</td>

							</tr>

							<tr>

								<td class="td-label"><?php echo $ticker;?> Current</td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30;?>%</td>

							</tr>

							<tr>

								<td class="td-label"><?php echo $ticker;?> 52 Week High</td>

								<td class="td-code">IV30</td>

								<td class="td-value"><?php echo $IV30_high;?>%</td>

							</tr>
							
							<tr>

								<td class="td-label"><?php echo $ticker;?> Percentile</td>

								<td class="td-code">IV30 Percentile (Rank out of 100)</td>

								<td class="td-value"><?php echo $IV30percentile;?></td>

							</tr>
							
							<tr>
								
								<td class="td-label"><?php echo $ticker;?> Current</td>

								<td class="td-code">HV30</td>

								<td class="td-value"><?php echo $HV30;?>%</td>

							</tr>
							
							<tr>

								<th colspan="3" scope="colgroup">Context: Definitions and Ranges</th>

							</tr>
							
							<?php
							$stockRange_text = "";
							// Get stradle values 
							if($IV30 != -123456 && $IV30 != 0)
							{
								$straddle = -123456;
								$strikeprice = $stockPrice;
								$T = 30/365;
								$call 	= BlackScholes("c", $stockPrice, $strikeprice, $T, 0.5, $IV30);
								$put 	= BlackScholes("p", $stockPrice, $strikeprice, $T, 0.5, $IV30);
								$straddle = $call + $put;
								$stockRange_low = $stockPrice - $straddle;
								$stockRange_high = $stockPrice + $straddle;
								$stockRange_low_text = number_format($stockRange_low, 1, '.', ','); //format
								$stockRange_high_text = number_format($stockRange_high, 1, '.', ','); //format
								$stockRange_text = "($".$stockRange_low_text."0, $".$stockRange_high_text."0)";
							}
							
							$IV30commentary = "";
							
							if($IV30percentile >= 90)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is quite <font color = \"#cc0000\">elevated</font>. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";
							
							else if($IV30percentile >= 70)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is <font color = \"#cc0000\">elevated</font>. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";
							
							else if($IV30percentile >= 50)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is slightly elevated. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";	

							else if($IV30percentile >= 30)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is slightly depressed. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";		

							else if($IV30percentile >= 11)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is depressed. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";	

							else if($IV30percentile <= 10)
								$IV30commentary = "The current IV30 for ".$companyName." relative to its own past is quite depressed. The IV30 rank, which is measured against its own history and not other stocks, is ".$IV30percentile." out of 100.";								
							?>
							
							<tr>

								<td class="td-label" colspan = "2">
									<span style ="font-size:14px; line-height:175%;">
										The IV30&reg; is the implied price movement reflected by the option market in the 
										stock price for the next 30 <i>calendar</i> days -- it is forward looking.
										<br><br>
										Currently the option market reflects a 95% confidence interval stock price range for <?php echo $ticker;?> of <?php echo $stockRange_text;?> within the next 30 calendar days.
										<br><br>
										<?php echo $IV30commentary;?>
									</span>
								</td>
								
								<td></td>

							</tr>							
							
							
							

						</tbody>

					</table>

				</div>

				<div class="chart">

					<h3 class="">

						<?php echo $companyName;?> Implied Risk Scatter Plot

						<span>(a new risk chart, built for option traders)</span>

					</h3>
					
					
					<!--<div class="scatter-plot">-->
			
						<div id="scatterPlot"></div>
						
					<!--</div>-->
					
					
					<div class="legend">

						<h4 class="">Scatter Plot Risk Legend</h4>

						<ul>

							<li>The <span class="blue">blue</span> point is the current 30-day implied volatility for <?php echo $companyName;?></li>

							<li>The <span class="black">black</span> point is the current 30-day implied volatility for the <?php echo $ETF_specific_name;?> ETF (<?php echo $ETF_specific;?>).</li>

							<li>The <span class="red">red</span> point is the 52 week low in IV30&reg; for <?php echo $companyName;?></li>

							<li>The <span class="green">green</span> point is the 52 week high in IV30&reg; <?php echo $companyName;?></li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>


		<!--<div align ="center">
			<div id="scatterPlot" style = "max-width:500px; width:100%;"></div>
		</div>-->

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>	
<script type="text/javascript">
	var pivot = ['IV30<br>Low', 'S&P<br>500', 'NASDAQ<br>100', '<?php echo $ETF_specific;?>', '<b><?php echo $ticker;?><br>IV30</b>', 'IV30<br>High'];

	var highLow = [<?php echo $IV30_low;?>, <?php echo $IV30_SPY;?>, <?php echo $IV30_QQQ;?>,
					<?php echo $IV30_ETF_specific;?>,<?php echo $IV30;?>,<?php echo $IV30_high;?>];

	var trace1 = {
	  mode: 'markers+text',	
	  type: 'scatter',
	  x: pivot,
	  line: {
		  color: 'rgb(156, 165, 196)',
		  width: 1,
		},
	  y: highLow,
	  mode: 'markers+text',
	  name: 'Pivot Points',
	  textposition: 'bottom center',
	  text:['<?php echo $ticker;?><br>Low','SPY','QQQ','<?php echo $ETF_specific;?>','<b><?php echo $ticker;?><br>Current<br>(IV Rank: <?php echo $IV30percentile;?>)</b>','<?php echo $ticker;?><br>High'],
	  textfont: { 
      family: 'Helvetica',
	  size: '10px'
	},
	  marker: {
		color: [
		'rgb(255, 0, 0)',
		'rgb(208, 187, 255)',
		'rgb(208, 187, 255)',
		'rgb(0, 0, 0)',
		'rgb(0, 0, 255)',
		'rgb(51, 255, 0)'],
		line: {
		  color: 'rgb(240,240,240)',
		  width: 1,
		},
		symbol: 'circle',
		size: 14
	  }
	};



	var data = [trace1];

	var layout = {
		images: [
    {
      x: 0.45,
      y: 0.865,
      sizex: 0.45,
      sizey: 0.2,
      source: "http://www.cmlviz.com/cmld3b/images/cml_logo_160_75_opague.png",
      xanchor: "right",
      xref: "paper",
      yanchor: "bottom",
      yref: "paper"
    }
  ],
	  yaxis: {
		showgrid: 	true,
		showline: 	true,
		autoscale:	true,
		range:[0, <?php echo $chartmax;?>],
		linecolor: 'rgb(0, 0, 0)',
		color:'#000000',	
		titlefont: {
		  font: {
			color: 'rgb(0, 0, 0)'
		  }
		},
		tickfont: {
		  font: {
			color: 'rgb(0, 0, 0)'
		  }
		},
		autotick: true,
		dtick: 10,
		ticks: 'outside',
		tickcolor: 'rgb(0, 0, 0)'
	  },
	  margin: {
		l: 30,
		r: 20,
		b: 40,
		t: 20
	  },
	  legend: {
		font: {
		  size: 10,
		},
		xanchor: 'middle',
		yanchor: 'right'
	  },
	  xaxis: {
	  color:'#000000',
	  linecolor: 'rgb(0, 0, 0)',
	  color:'#000000'
	  },
		width: 375,
		height: 365,
	  paper_bgcolor: 'rgb(240, 240, 240)',
	  plot_bgcolor: 'rgb(255, 255, 255)',
	  //bordercolorsrc: 'rgb(0, 0, 0)',
	  borderwidth: 2,
	  
	  //hovermode: 'closest'
	};

	Plotly.newPlot('scatterPlot', data, layout);
	
</script>


		