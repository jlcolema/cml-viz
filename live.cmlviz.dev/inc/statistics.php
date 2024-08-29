<?php 

	if(!$isETF)
	{
		/* Already computed from getStockData.php		
			$revenue
			$revenueGrowth
			$revenuePerEmployee_text
			$revenue_text
			$netIncome_text
			$priceToSales_text
			$priceToEarnings_text
			$dividendYield_text
			$dividendPerShare_text
			$dividendYield_text
			$revenueGrowth
			$revenue_1yr_ago
			$numberOfShares
		*/
		
	/*******************************************
		Getting fundamnetal data
		file: fundamental_functions.php
		functions: getMetricData, formatNumbers
		tables: mvcompanymostrecentdata
	*********************************************/
				
		// Intrinio		
		$netIncomeMargin	= 100*$netIncome/$revenue;
		$netIncomeMargin_text	=  number_format($netIncomeMargin, 2, '.', ',');

		// Intrinio	
		$cashFromOperations	= getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cash from Operations (TTM US$ Millions)");
		if($cashFromOperations > 0) $cashFromOperations_text = formatNumbers($cashFromOperations);
		else $cashFromOperations_text = "N/A";
		
		// Intrinio
		$leveredFCF			= getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Levered Free Cash Flow (TTM US$ Millions)");
		if($leveredFCF != -123456) $leveredFCF_text = formatNumbers($leveredFCF);
		else $leveredFCF_text = "N/A";
		
		// ZACKS
		$grossMarginPercent = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Gross Margin %");
		if($grossMarginPercent != -123456)	$grossMarginPercent_text = number_format($grossMarginPercent, 2, '.', ',');
		else $grossMarginPercent_text = "N/A";
		
		// ZACKS
		$grossProfit = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Gross Profit (TTM)");
		if($grossProfit != -123456)	$grossProfit_text =formatNumbers($grossProfit);
		else $grossProfit_text = "N/A";
		
		// Intrinio
		$debt = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Debt (US$ Millions)");
		if($debt != -123456)	$debt_text = formatNumbers($debt);
		else $debt_text = "N/A";
		
		// ZACKS
		$roa = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Return on Assets (ROA)");
		if($roa != -123456)	$roa_text = 100*number_format($roa, 4, '.', ',');
		else $roa_text = "N/A";

		// ZACKS
		$roe = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Return on Equity (ROE)");
		if($roe != -123456)	$roe_text = 100*number_format($roe, 4, '.', ',');
		else $roe_text = "N/A";	
		
		// ZACKS
		$bookValue = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Book Value per Share (US$)");
		if($bookValue != -123456)	$bookValue_text = number_format($bookValue, 2, '.', ',');
		else $bookValue_text = "N/A";	
		
		if($bookValue != -123456 && $stockPrice != -123456) 
		{
			$priceToBook = $stockPrice/$bookValue;
			$priceToBook_text = number_format($priceToBook, 2, '.', ',');
		}
		else $priceToBook_text = "N/A";	
		
		// ZACKS
		$currentRatio = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Current Ratio");
		if($currentRatio != -123456)	$currentRatio_text = number_format($currentRatio, 2, '.', ',');
		else $currentRatio_text = "N/A";
		
		// ZACKS
		$EBITDA = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBITDA (TTM)");
		if($EBITDA != -123456)	$EBITDA_text = formatNumbers($EBITDA);
		else $EBITDA_text = "N/A";
		
		$cashPerShare_text = "N/A";
		if($numberOfShares > 0 && $totalCash > 0)
		{
			$cashPerShare = $totalCash*1000000/$numberOfShares;
			$cashPerShare_text = number_format($cashPerShare, 2, '.', ',');
			
		}
		
		// Intrinio
		$longTermInvestments = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Investments (QTR)");
		if($longTermInvestments != -123456)	$longTermInvestments_text = formatNumbers($longTermInvestments);
		else $longTermInvestments_text = "N/A";
		
		// Intrinio
		$operatingMargin = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Operating Margin (TTM)");
		if($operatingMargin != -123456)	$operatingMargin_text = number_format($operatingMargin, 2, '.', ',');
		else $operatingMargin_text = "N/A";		
		
	
		/*
			Stock Repurchases (TTM US$ Millions)
			Total Liabilities (QTR)
			Total Assets (QTR)
			EBIT (TTM)
			

		*/
		
		
	}	


?>

<div id="statistics" class="panel">

	<div class="inner-wrap">

		<div class="statistics-content">

			<div class="note">Currency in USD</div>

			<div class="table-data">

				<div class="table-group">

					<table class="">

						<caption>Valuation Measures</caption>

						<tbody>

							<tr>

								<td class="td-label">Market Cap (Intraday)</td>

								<td class="td-value"><?php echo $marketCap_text;?></font></td>

							</tr>
							<!--
							<tr>

								<td class="td-label">Enterprise Value</td>

								<td class="td-value">N/A</td>

							</tr>
							-->
							
							<tr>

								<td class="td-label">Price to Earnings (TTM)</td>

								<td class="td-value"><?php echo $priceToEarnings_text;?></font></td>

							</tr>
							<!--
							<tr>

								<td class="td-label">Forward P/E</td>

								<td class="td-value"><font color = "#cccccc">5%</font></td>

							</tr>

							<tr>

								<td class="td-label">PEG Ratio (5 yr. expected)</td>

								<td class="td-value"><font color = "#cccccc">5%</font></td>

							</tr>
							-->
							<tr>

								<td class="td-label">Price to Sales (TTM)</td>

								<td class="td-value"><?php echo $priceToSales_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Price to Book</td>

								<td class="td-value"><?php echo $priceToBook_text;?></td>

							</tr>
							
							<tr>

								<td class="td-label">EPS (Net Diluted)</td>

								<td class="td-value"><?php echo $EPS_text;?></td>

							</tr>							
							<!--
							<tr>

								<td class="td-label">Enterprise Value/Revenue</td>

								<td class="td-value">N/A</td>

							</tr>

							<tr>

								<td class="td-label">Enterprise Value/EBITDA</td>

								<td class="td-value">N/A</td>

							</tr>
							-->
						</tbody>

					</table>

					<table class="">

						<caption>Financial Snapshot</caption>
						
						<thead>

							<tr>

								<th colspan="2">Profitablity Measures</th>

							</tr>

						</thead>
						
						<tbody>
						
							<tr>

								<td class="td-label">Net Income Margin %</td>

								<td class="td-value"><?php echo $netIncomeMargin_text;?>%</td>

							</tr>

							<tr>

								<td class="td-label">Operating Margin %</td>

								<td class="td-value"><?php echo $operatingMargin_text;?>%</td>

							</tr>
							
							<tr>
								<td class="td-label">Gross Margin (TTM)</td>

								<td class="td-value"><?php echo $grossMarginPercent_text;?>%</td>

							</tr>	

							<tr>

								<td class="td-label">Return on Assets (TTM)</td>

								<td class="td-value"><?php echo $roa_text;?>%</td>

							</tr>

							<tr>

								<td class="td-label">Return on Equity (TTM)</td>

								<td class="td-value"><?php echo $roe_text;?>%</td>

							</tr>	
							
						<thead>

							<tr>

								<th colspan="2">Income Statement Highlights</th>

							</tr>

						</thead>							

							<tr>

								<td class="td-label">Revenue (TTM)</td>

								<td class="td-value"><?php echo $revenue_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Revene per Employee (TTM)</td>

								<td class="td-value"><?php echo $revenuePerEmployee_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Annual Revenue Growth</td>

								<td class="td-value"><?php echo $revenueGrowth_text;?>%</td>

							</tr>
							
							<tr>

								<td class="td-label">Net Income (TTM)</td>

								<td class="td-value"><?php echo $netIncome_text;?></td>

							</tr>						
							
							
							<tr>
								<td class="td-label">Gross Profit (TTM)</td>

								<td class="td-value"><?php echo $grossProfit_text;?></td>

							</tr>	
							
							<tr>
								<td class="td-label">EBITDA</td>

								<td class="td-value"><?php echo $EBITDA_text;?></td>

							</tr>								
							
						<thead>

							<tr>

								<th colspan="2">Balance Sheet Highlights</th>

							</tr>

						</thead>							

							<tr>

								<td class="td-label">Total Cash, Equivalents, Short Term Investments</td>

								<td class="td-value"><?php echo $totalCash_text;?></font></td>

							</tr>
							
							<tr>

								<td class="td-label">Total Long Term Investments</td>

								<td class="td-value"><?php echo $longTermInvestments_text;?></font></td>

							</tr>							
							
							
							<tr>

								<td class="td-label">Total Cash and Equivalents per Share</td>

								<td class="td-value"><?php echo $cashPerShare_text;?></font></td>

							</tr>							
							
							
							

							<tr>

								<td class="td-label">Total Debt</td>

								<td class="td-value"><?php echo $debt_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Current Ratio</td>

								<td class="td-value"><?php echo $currentRatio_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Book Value Per Share</td>

								<td class="td-value"><?php echo $bookValue_text;?></td>

							</tr>								
							
						<thead>

							<tr>

								<th colspan="2">Cashflow Statement Highlights</th>

							</tr>

						</thead>							

							<tr>

								<td class="td-label">Cash from Operations (TTM)</td>

								<td class="td-value"><?php echo $cashFromOperations_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Levered Free Cash Flow (TTM)</td>

								<td class="td-value"><?php echo $leveredFCF_text;?></td>

							</tr>
							
						</tbody>

					</table>

				</div>

				<div class="table-group">

				<?php
					$fontColor = "#000000";
				?>
					<table class="">

						<caption>Trading Information</caption>

						<tbody>

							<tr>

								<th colspan="2" scope="colgroup">Stock Price History</th>

							</tr>

							<tr>
							<?php
								$fontColor = getFontColor($TwelveMoAgoPriceReturn);
							?>
								<td class="td-label">1-Year Change</td>

								<td class="td-value"><font color ="<?php echo $fontColor;?>"><?php echo $TwelveMoAgoPriceReturn;?>%</font></td>

							</tr>
							
							<?php
								$fontColor = getFontColor($SixMoAgoPriceReturn);
							?>
							<tr>

								<td class="td-label">6-Month Change</td>

								<td class="td-value"><font color ="<?php echo $fontColor;?>"><?php echo $SixMoAgoPriceReturn;?>%</font></td>

							</tr>	
							
							<?php
								$fontColor = getFontColor($ThreeMoAgoPriceReturn);
							?>
							<tr>

								<td class="td-label">3-Month Change</td>

								<td class="td-value"><font color ="<?php echo $fontColor;?>"><?php echo $ThreeMoAgoPriceReturn;?>%</font></td>

							</tr>		

							<?php
								$fontColor = getFontColor($stockPercentChange);
							?>
							<tr>

								<td class="td-label">Day Change</td>

								<td class="td-value"><font color ="<?php echo $fontColor;?>"><?php echo $stockPercentChange;?>%</font></td>

							</tr>			

							<tr>

								<td class="td-label">52 Week High</td>

								<td class="td-value">$<?php echo $annualHigh;?></td>

							</tr>

							<tr>

								<td class="td-label">52 Week Low</td>

								<td class="td-value">$<?php echo $annualLow;?></td>

							</tr>							

							<!--
							<tr>

								<td class="td-label">S&amp;P500 52-Week Change</td>

								<td class="td-value"><font color = "#cccccc">5%</font></td>

							</tr>
							-->
							<tr>

								<th colspan="2" scope="colgroup">Simple Moving Averages</th>

							</tr>
							
							<tr>

								<td class="td-label">200-Day Moving Average</td>

								<td class="td-value">$<?php echo $twohundredDayMA_format;?></td>

							</tr>
							
							<tr>

								<td class="td-label">50-Day Moving Average</td>

								<td class="td-value">$<?php echo $fiftyDayMA_format;?></td>

							</tr>							

							<tr>

								<td class="td-label">10-Day Moving Average</td>

								<td class="td-value">$<?php echo $tenDayMA_format;?></td>

							</tr>								

							<tr>

								<th colspan="2" scope="colgroup">Share Statistics</th>

							</tr>

							<tr>

								<td class="td-label">Avg Volume (3 month)</td>

								<td class="td-value"><?php echo $volume30dayAvg_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Avg Volume (10 day)</td>

								<td class="td-value"><?php echo $volume10dayAvg_text;?></td>

							</tr>

							<tr>

								<td class="td-label">Shares Outstanding</td>

								<td class="td-value"><?php echo $numberOfShares_text;?></font></td>

							</tr>

							<tr>

								<td class="td-label">% Held by Insiders</td>

								<td class="td-value"><font color = "#cccccc">5%</font></td>

							</tr>

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</div>
