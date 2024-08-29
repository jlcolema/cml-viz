
<?php
	$today = getdate();
	$dateString = "".$today['year']."-".date('m')."-".$today['mday'];
	$oneYearAgo= "".($today['year']-1)."-".date('m')."-".$today['mday'];
	$threeMonthsAgo= "".$today['year']."-".(date('m')-3)."-".$today['mday'];



	// This function returns all of the historyin the last year
	function getAllInsderData($ticker, $startDate) {

		include "connection.php";

		$select_query =
						"select
								ownername,
								officertitle,
								transactiondate,
								transactioncode,
								transactionshares,
								transactionpricepershare,
								sharesownedfollowingtransaction,
								securityadcode,
								isdirector,
								isofficer
						from    insidertrading
						where   ticker = '".$ticker."'
						and     transactioncode in ('P', 'S', 'M', 'I', 'A')
						and     transactiondate >= '".$startDate."'
						and     securityadcode in ('NA','ND')
						order by transactiondate desc";

		$sql_result = $conn->query($select_query);

		$counter = 0;

		echo'
			<table class="new-design responsive">

			<tbody>

				<tr>

					<th class="th-name">Name</th>
					<th class="th-position">Position</th>
					<th class="th-date">Date</th>
					<th class="th-transaction">Transaction</th>
					<th class="th-shares">#Shares</th>
					<th class="th-price">Price</th>
					<th class="th-value">Value</th>
					<th class="th-shares-after">#Shares After</th>

				</tr>
		';

		while($row = $sql_result->fetch_assoc())
		{

			$ownername 					= $row['ownername'];
			$officertitle 				= $row['officertitle'];
			$isdirector 				= $row['isdirector'];
			$isofficer 					= $row['isofficer'];
			$transactiondate 			= $row['transactiondate'];
			$transactiondate 			= str_replace(" 00:00:00","",$transactiondate);
 			$transactioncode 			= $row['transactioncode'];
			$securityadcode				= $row['securityadcode'];
			$transactionshares 			= $row['transactionshares'];
			$transactionpricepershare 	= $row['transactionpricepershare'];
			$sharesownedfollowingtransaction 	= $row['sharesownedfollowingtransaction'];
			if($transactionshares != "" && $transactionpricepershare != "00")
				$valueshares 	   = $transactionshares*$transactionpricepershare;

			else $valueshares = "";


			if($officertitle == "")
			{
				if($isdirector == "Y") $officertitle = "Director";
				else if($isofficer == "Y") $officertitle = "Officer";
			}

			if($securityadcode == "NA" || $securityadcode == "ND" || $securityadcode == "N")
			{
				if($transactioncode == 'S') $transactioncode = "Sale";
				else if($transactioncode == 'P') $transactioncode = "Buy";
			}

			if($transactioncode == 'M') $transactioncode = "Option Exercise";

			if($transactioncode == 'A') $transactioncode = "Grant, award or other acquisition";

			if($transactioncode == "I" && $transactionshares > 0) $transactioncode = "Buy (Non Open Market)";
			else if($transactioncode == "I" && $transactionshares < 0) $transactioncode = "Sale (Non Open Market)";

			$transactionshares = number_format($transactionshares, 0, '.', ',');

			if(abs($valueshares) > 0) $valueshares = number_format($valueshares, 0, '.', ',');
			else if($valueshares == 0) $valueshares = "";

			if($sharesownedfollowingtransaction > 0) $sharesownedfollowingtransaction = number_format($sharesownedfollowingtransaction, 0, '.', ',');

			if($transactionpricepershare > 0) $transactionpricepershare = "$".number_format($transactionpricepershare, 2, '.', ',');
			else $transactionpricepershare = "";



			echo "

				<tr>
					<td class=\"td-name\">".$ownername."</td>
					<td class =\"position\">".$officertitle."</td>
					<td class=\"td-date\">".$transactiondate."</td>
					<td class=\"td-transaction\">".$transactioncode."</td>
					<td class=\"td-shares\">".$transactionshares."</td>
					<td class=\"td-value\">".$transactionpricepershare."</td>
					<td class=\"td-price\">".$valueshares."</td>
					<td class=\"td-shares-after\">".$sharesownedfollowingtransaction."</td>
				</tr>
				";

		$counter++;
		}

		echo "</tbody></table>";
		mysqli_close($conn);

	}

	// Trades
	$numberSellsYear = -1*getNumberofTrades($ticker, "S','D", $oneYearAgo);
	$numberBuysYear = getNumberofTrades($ticker, "P','A", $oneYearAgo);
	$numberSellsQtr = -1*getNumberofTrades($ticker, "S','D", $threeMonthsAgo);
	$numberBuysQtr = getNumberofTrades($ticker, "P','A", $threeMonthsAgo);


	$total3mos = abs($numberSellsQtr) + abs($numberBuysQtr);
	$total12mos = abs($numberSellsYear) + abs($numberBuysYear);

	// Shares
	$numberSellsSharesYear = getNumberofShares($ticker, "S','D", $oneYearAgo);
	$numberBuysSharesYear = getNumberofShares($ticker, "P','A", $oneYearAgo);
	$numberSellsSharesQtr = getNumberofShares($ticker, "S','D", $threeMonthsAgo);
	$numberBuysSharesQtr = getNumberofShares($ticker, "P','A", $threeMonthsAgo);

	// Formatting negative values (sales) and checking for zero
	$numberSellsSharesYear_text = 0;
	if(abs($numberSellsSharesYear)  <= 0)
	{
		$numberSellsSharesYear = 0;
		$numberSellsSharesYear_text = $numberSellsSharesYear;
	}
	else $numberSellsSharesYear_text = formatNumber($numberSellsSharesYear);

	// Formatting negative values (sales) and checking for zero
	$numberSellsSharesQtr_text = 0;
	if(abs($numberSellsSharesQtr)  <= 0)
	{
		$numberSellsSharesQtr = 0;
		$numberSellsSharesQtr_text = $numberSellsSharesQtr_text;
	}
	else $numberSellsSharesQtr_text = formatNumber($numberSellsSharesQtr);

	// Formatting for zeros
	$numberBuysSharesYear_text = 0;
	if(abs($numberBuysSharesYear)  <= 0) $numberBuysSharesYear = 0;
	else $numberBuysSharesYear_text = formatNumber($numberBuysSharesYear);

	$numberBuysSharesQtr_text = 0;
	if(abs($numberBuysSharesQtr)  <= 0) $numberBuysSharesQtr = 0;
	else $numberBuysSharesQtr_text = formatNumber($numberBuysSharesQtr);

	$totalShares3mos = abs($numberSellsSharesQtr) + abs($numberBuysSharesQtr);
	$totalShares12mos = abs($numberSellsSharesYear) + abs($numberBuysSharesYear);

	if($totalShares3mos  <= 0) $totalShares3mos = 0;
	else $totalShares3mos =  formatNumber($totalShares3mos);

	if($totalShares12mos  <= 0) $totalShares12mos = 0;
	else $totalShares12mos =  formatNumber($totalShares12mos);

	$NetShares3mos = formatNumber($numberSellsSharesQtr + $numberBuysSharesQtr);
	$NetShares12mos = formatNumber($numberSellsSharesYear + $numberBuysSharesYear);


?>





<div id="holders" class="panel">

	<div class="table-data">

		<table>


			<tr>

				<td align = "center" style = "background-color:#000f5e; height:50px;
				border-radius:10px; background:#000a3e;"><font color ="ffffff">Number of Insider Trades</font></td>

			</tr>

			<tr>

				<td>

					<div id="chartContainer1" style="height:220px; width:350px;"></div>
					<!--background-image:url('http://www.cmlviz.com/cmld3b/images/logochartbg_350_220.png');-->

				</td>

				<td>

					<div class="table-data" style = "line-height:200%; padding:8px;">

						<table>

							<tr>

								<td></td>

								<td><b><font color ="#666666">3 MO</font></b></td>

								<td><b><font color ="#666666">12 MO</font></b></td>

							</tr>

							<tr>

								<td font color ="#009900"><font color ="#009900"># Stock Buys</font></td>

								<td align ="center"><font color ="#009900"><?php echo $numberBuysQtr;?></font></td>

								<td align ="center"><font color ="#009900"><?php echo $numberBuysYear;?></td>

							</tr>

							<tr>

								<td><font color ="#cc0000"># Stock Sells</font></td>

								<td align ="center"><font color ="#cc0000"><?php echo abs($numberSellsQtr);?></font></td>

								<td align ="center"><font color ="#cc0000"><?php echo abs($numberSellsYear);?></font></td>

							</tr>

							<tr>

								<td colspan = "3"><hr></td>

							</tr>

							<tr>
								<td><font color ="#666666">Total Insider Open Market Trades</font></td>

								<td align ="center"><font color ="#666666"><?php echo $total3mos;?></font></td>

								<td align ="center"><font color ="#666666"><?php echo $total12mos;?></font></td>

							</tr>

						</table>
					</div>
				</td>

			</tr>

		</table>


		<br><br>


		<div class="table-data">

		<table>


			<tr>

				<td align = "center" style = "background-color:#000f5e; height:50px;
				border-radius:10px; background:#000a3e;"><font color ="ffffff">Number of Insider Shares Traded</font></td>

			</tr>

			<tr>

				<td >

					<div id="chartContainer2" style="height:220px; width:350px;"></div>

				</td>

				<td>

					<div class="table-data" style = "line-height:200%; padding:8px;">

						<table>

							<tr>

								<td></td>

								<td><b><font color ="#666666">3 MO</font></b></td>

								<td><b><font color ="#666666">12 MO</font></b></td>

							</tr>

							<tr>

								<td font color ="#009900"><font color ="#009900"># of Shares Bought	</font></td>

								<td align ="center"><font color ="#009900"><?php echo $numberBuysSharesQtr_text;?></font></td>

								<td align ="center"><font color ="#009900"><?php echo $numberBuysSharesYear_text;?></td>

							</tr>

							<tr>

								<td><font color ="#cc0000"># of Shares Sold</font></td>

								<td align ="center"><font color ="#cc0000"><?php echo $numberSellsSharesQtr_text;?></font></td>

								<td align ="center"><font color ="#cc0000"><?php echo $numberSellsSharesYear_text;?></font></td>

							</tr>

							<tr>

								<td colspan = "3"><hr></td>

							</tr>

							<tr>
								<td><font color ="#666666">Total Shares Traded</font></td>

								<td align ="center"><font color ="#666666"><?php echo $totalShares3mos;?></font></td>

								<td align ="center"><font color ="#666666"><?php echo $totalShares12mos;?></font></td>

							</tr>

							<tr>
								<td><font color ="#666666">Net Shares Traded</font></td>

								<td align ="center"><font color ="#666666"><?php echo $NetShares3mos;?></font></td>

								<td align ="center"><font color ="#666666"><?php echo $NetShares12mos;?></font></td>

							</tr>

						</table>
					</div>
				</td>

			</tr>

		</table>

	</div>


	<div class="inner-wrap">

		<div class="holders-content">

			<?php

				getAllInsderData($ticker, $oneYearAgo);

			?>

		</div>

	</div>

</div>


  <script type="text/javascript">

  window.onload = function () {
	  CanvasJS.addColorSet("greenShades",
            [
                "#009900",
                "#cc0000"
            ]);
    var chart1 = new CanvasJS.Chart("chartContainer1",
    {

		 backgroundColor: "transparent",
		 //width: 320,
		 dataPointMaxWidth: 70,

		 axisX:{
            labelFontColor: "#000000",
			lineThickness: 1,
			lineColor: "#000000",
      },

		axisY:{
			 gridThickness: 1,
			 labelFontColor: "#000000",
			 lineThickness: 1,
			 lineColor: "#000000",
		},

		  animationEnabled: true,
		  animationDuration: 2000,
		  colorSet: "greenShades",
		  title:{
		  //text: "Number of Insider Trades"
		  },
			data: [
		  {
			type: "stackedColumn",
			dataPoints: [
			{  y: <?php echo $numberBuysQtr;?> , label: "3-months"},
			{  y: <?php echo $numberBuysYear;?>, label: "One-Year" },
			]
		  },  {
			type: "stackedColumn",
			 dataPoints: [
			{  y: <?php echo $numberSellsQtr;?>, label: "3-months"},
			{  y: <?php echo $numberSellsYear;?>, label: "One-Year" },
			 ]
		  }
		  ]
		});

		chart1.render();
		chart1 = {};

	  CanvasJS.addColorSet("greenShades",
            [
                "#009900",
                "#cc0000"
            ]);
    var chart2 = new CanvasJS.Chart("chartContainer2",
    {
		backgroundColor: "transparent",
		 //width: 320,
		 dataPointMaxWidth: 70,

		 axisX:{
            labelFontColor: "#000000",
			lineThickness: 1,
			lineColor: "#000000",
      },

		axisY:{
			 gridThickness: 1,
			 labelFontColor: "#000000",
			 lineThickness: 1,
			 lineColor: "#000000",
		},

		  animationEnabled: true,
		  animationDuration: 2000,
		  colorSet: "greenShades",
		  title:{
		  //text: "Number of Insider Trades"
		  },
			data: [
		  {
			type: "stackedColumn",
			dataPoints: [
			{  y: <?php echo $numberBuysSharesQtr;?> , label: "3-months"},
			{  y: <?php echo $numberBuysSharesYear;?>, label: "One-Year" },
			]
		  },  {
			type: "stackedColumn",
			 dataPoints: [
			{  y: <?php echo $numberSellsSharesQtr;?>, label: "3-months"},
			{  y: <?php echo $numberSellsSharesYear;?>, label: "One-Year" },
			 ]
		  }
		  ]
		});

		chart2.render();
		chart2 = {};
  }
  </script>

 <script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
