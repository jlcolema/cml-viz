<?php


	if (isset($_GET['ticker']))
		$ticker = htmlspecialchars($_GET["ticker"]);

	else
		$ticker = "AAPL";

	$ticker = strtoupper($ticker);

	// Fix the GOOG/GOOGL confusion
	if($ticker == "GOOG")
			$ticker = "GOOGL";

	// Index Data
	$SPXarray 				= getCurrentStockDataArray("\$SPX");
	$SPXPrice 				= $SPXarray[0];
	$SPXPrice				= number_format($SPXPrice, 2, '.', ',');
	$SPXChange 				= $SPXarray[1];
	if($SPXChange > 0) $SPXChange_text = "+".$SPXChange;
	else $SPXChange_text 	= 	number_format($SPXChange, 2, '.', ',');

	$SPXPercentChange		=  $SPXarray[2];
	$SPXPercentChange_text 	= number_format($SPXPercentChange, 2, '.', ',');
	if($SPXPercentChange_text < 0) $SPXPercentChange_text = $SPXPercentChange_text;
	else if($SPXPercentChange_text > 0) $SPXPercentChange_text = "+".$SPXPercentChange_text;

	$VIXarray 				= getCurrentStockDataArray("\$VIX");
	$VIXPrice 				= $VIXarray[0];
	$VIXChange 				= $VIXarray[1];
	if($VIXChange > 0) $VIXChange_text = "+".$VIXChange;
	else $VIXChange_text 	= 	number_format($VIXChange, 2, '.', ',');

	$VIXPercentChange		=  $VIXarray[2];
	$VIXPercentChange_text 	= number_format($VIXPercentChange, 2, '.', ',');
	if($VIXPercentChange_text < 0) $VIXPercentChange_text = $VIXPercentChange_text;
	else if($VIXPercentChange_text > 0) $VIXPercentChange_text = "+".$VIXPercentChange_text;

	$QQQPercentChange		= getCurrentStockData("QQQ", "StockPercentChange");
	$QQQPercentChange_text 	= number_format($QQQPercentChange, 2, '.', ',');
	if($QQQPercentChange_text < 0) $QQQPercentChange_text = $QQQPercentChange_text;
	else if($QQQPercentChange_text > 0) $QQQPercentChange_text = "+".$QQQPercentChange_text;

	$DIAPercentChange		= getCurrentStockData("DIA", "StockPercentChange");
	$DIAPercentChange_text 	= number_format($DIAPercentChange, 2, '.', ',');
	if($DIAPercentChange_text < 0) $DIAPercentChange_text = $DIAPercentChange_text;
	else if($DIAPercentChange_text > 0) $DIAPercentChange_text = "+".$DIAPercentChange_text;

	$IWMPercentChange		= getCurrentStockData("IWM", "StockPercentChange");
	$IWMPercentChange_text 	= number_format($IWMPercentChange, 2, '.', ',');
	if($IWMPercentChange_text < 0) $IWMPercentChange_text = "-".$IWMPercentChange_text;
	else if($IWMPercentChange_text > 0) $IWMPercentChange_text = "+".$IWMPercentChange_text;
	//End Index data


	// Uses inc/fundamental_functions.php
	$companyName 		= "No Company Name Found";
    $companyName 		= getCompanyName($ticker);

	$isETF = false;

	/***********************************************************

	   Special Handling for ETFs and wrong tickers

	************************************************************/

	$stockPrice 		= getCurrentStockData($ticker, "stockPrice");
	$stockPrice_text 	=  number_format($stockPrice, 2, '.', ',');

	// ticker not found --> make it Apple
	if($stockPrice == 0)
	{
		$ticker = "AAPL";
		$companyName 		= getCompanyName($ticker);
	}

	// We have an ETF
	elseif($companyName == -123456 && $stockPrice > 0)
	{
		$isETF = true;
		$companyName = $ticker;
	}

	/***********************************************************

						End Special Handling

	************************************************************/

	$sector = "No Sector Found";
	$sector = getSimpleData($ticker, "Sector", "cml_lite.mvLiteExtractEarningsPanelXY");


	$exchange 			= getExchange($ticker);
	if($exchange == "NSDQ") $exchange = "NASDAQ";
	elseif($exchange == -123456) $exchange = "";

	if(!$isETF)
	{
		$annualLow 			= getPrice52weeklow($ticker);
		$annualLow_text 	=  number_format($annualLow, 2, '.', ',');

		$annualHigh 		= getPrice52weekhigh($ticker);
		$annualHigh_text 	=  number_format($annualHigh, 2, '.', ',');
	}




	/*******************************************
		Getting stock data from Barchart API
		file: price_functions_template
		function: getCurrentStockDataArray()
	*********************************************/
	$stockArray = getCurrentStockDataArray($ticker);

	$stockPrice = $data[0] 	= $stockArray[0];

	$stockChange 			=  $stockArray[1];
	if($stockChange > 0) $stockChange_text = "+".$stockChange;
	else $stockChange_text 	= 	number_format($stockChange, 2, '.', ',');

	$stockPercentChange	=  $stockArray[2];
	$stockPercentChange = number_format($stockPercentChange, 2, '.', ',');
	if($stockPercentChange > 0) $stockPercentChange_text = "+".$stockPercentChange;
	else $stockPercentChange_text = $stockPercentChange;

	$stockHigh			= $stockArray[3];
	$stockHigh_text		= number_format($stockHigh, 2, '.', ',');

	$stockLow			= $stockArray[4];
	$stockLow_text		= number_format($stockLow, 2, '.', ',');

	$stockVolume		= $stockArray[5];
	$stockVolume		= formatNumber($stockVolume);

	$stockOpen			= $stockArray[6];
	$stockOpen_text		= number_format($stockOpen, 2, '.', ',');

	$name 				= $stockArray[7];
	// End getting stock data


	// Historical stock prices and moving averages
	$ThreeMoAgoPrice = getSimpleData($ticker, "m3Price", "cml_lite.mvCompanyHistoricalPricesSupport");
	$SixMoAgoPrice = getSimpleData($ticker, "m6Price", "cml_lite.mvCompanyHistoricalPricesSupport");
	$TwelveMoAgoPrice = getSimpleData($ticker, "m12Price", "cml_lite.mvCompanyHistoricalPricesSupport");

	if($ThreeMoAgoPrice == "") $ThreeMoAgoPrice = -123456;
	if($SixMoAgoPrice == "") $SixMoAgoPrice = -123456;
	if($TwelveMoAgoPrice == "") $TwelveMoAgoPrice = -123456;

	$ThreeMoAgoPriceReturn_text = "";
	$SixMoAgoPriceReturn_text ="";
	$TwelveMoAgoPriceReturn_text ="";

	$ThreeMoAgoPriceReturn = -123456;
	$SixMoAgoPriceReturn = -123456;
	$TwelveMoAgoPriceReturn = -123456;

	if($ThreeMoAgoPrice != -123456)
	{
		$ThreeMoAgoPriceReturn = ($stockPrice - $ThreeMoAgoPrice)/$ThreeMoAgoPrice;
		$ThreeMoAgoPriceReturn = number_format(100*$ThreeMoAgoPriceReturn, 2, '.', ',');
	}

	if($SixMoAgoPrice != -123456)
	{
		$SixMoAgoPriceReturn = ($stockPrice - $SixMoAgoPrice)/$SixMoAgoPrice;
		$SixMoAgoPriceReturn = number_format(100*$SixMoAgoPriceReturn, 2, '.', ',');
	}

	if($TwelveMoAgoPrice != -123456)
	{
		$TwelveMoAgoPriceReturn = ($stockPrice - $TwelveMoAgoPrice)/$TwelveMoAgoPrice;
		$TwelveMoAgoPriceReturn = number_format(100*$TwelveMoAgoPriceReturn, 2, '.', ',');
	}


	$tenDayMA = getSimpleData($ticker, "ma10", "cml_lite.mvCompanyHistoricalPricesSupport");
	$fiftyDayMA = getSimpleData($ticker, "ma50", "cml_lite.mvCompanyHistoricalPricesSupport");
	$twohundredDayMA = getSimpleData($ticker, "ma200", "cml_lite.mvCompanyHistoricalPricesSupport");


	// Format MAs
	$tenDayMA_format = number_format($tenDayMA, 2, '.', ','); //format
	$tenDayMA_text = "$".$tenDayMA_format."";
	$fiftyDayMA_format = number_format($fiftyDayMA, 2, '.', ','); //format
	$fiftyDayMA_text = "$".$fiftyDayMA_format."";
	$twohundredDayMA_format = number_format($twohundredDayMA, 2, '.', ','); //format
	$twohundredDayMA_text = "$".$twohundredDayMA_format."";



	$volume30dayAvg = getSimpleData($ticker, "vol30ma", "cml_lite.mvCompanyHistoricalPricesSupport");
	if($volume30dayAvg > 0) $volume30dayAvg_text = number_format($volume30dayAvg, 0, '.', ',');
	else $volume30dayAvg_text = "N/A";

	$volume10dayAvg = getSimpleData($ticker, "vol10ma", "cml_lite.mvCompanyHistoricalPricesSupport");
	if($volume10dayAvg > 0) $volume10dayAvg_text = number_format($volume10dayAvg, 0, '.', ',');
	else $volume10dayAvg_text = "N/A";


	/*******************************************
		Getting fundamnetal data
		file: fundamental_functions.php
		functions: getMetricData, formatNumbers
		tables: mvcompanymostrecentdata
	*********************************************/
	// ZACKS
	$numberOfShares =  getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "nbr_shares_out (QTR)");
	if($numberOfShares != -123456)	$numberOfShares_text = number_format($numberOfShares, 0, '.', ',');
	else $numberOfShares_text = "N/A";

	// Real-time market cap measure
	if($numberOfShares > 0)
	{
		$marketCap = $numberOfShares * $stockPrice;
		$marketCap_text 	= formatNumbers($marketCap/1000000);
	}

	else
	{
		$marketCap_text = "N/A";
		$marketCap = -123456;
	}

	$previousClose		= $stockPrice - $stockChange;
	$previousClose_text	= number_format($previousClose, 2, '.', ',');

	// Not an ETF
	if(!$isETF)
	{
		// Earnings dates and results
		// ZACKS
		/*

		ticker, estimateDate, periodEndDateAnnualLast, periodEndDateNext, periodEndDateNextEstimate, periodReportDateNext, periodReportDateNext2Quarters, periodReportDateAnnualNext, lateFlag, sourceFlag, timeOfDayCode, EPSActualMostRecentQuarter, EPSActualMostRecentDate, EPSActualOneYearPrior, EPSActualOneYearPriorDate
		*/

		$nextEarningsDate = getEarningsEstimates($ticker, "periodReportDateNext", "zacksearningsactual");
		if ($nextEarningsDate < 0) $nextEarningsDate = "N/A";

		// ZACKS
		$revenue 			= getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Revenue (TTM US$ Millions)");
		$revenue_1yr_ago 	= historical4QData($ticker, "Revenue (TTM US$ Millions)");


		if($revenue > 0 && $revenue_1yr_ago > 0)
		{
			$revenueGrowth	= 100*($revenue - $revenue_1yr_ago)/$revenue;
			$revenueGrowth_text	= number_format($revenueGrowth, 2, '.', ',');
		}

		else $revenueGrowth_text = "N/A";

		// ZACKS
		$revenuePerEmployee	= getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Revenue/Number of Employees (TTM US$ Millions)");

		if($revenuePerEmployee > 0)
		{
			$revenuePerEmployee_text = number_format($revenuePerEmployee, 2, '.', ',');
			$revenuePerEmployee_text = $revenuePerEmployee_text."M";
		}

		else $revenuePerEmployee_text = "N/A";

		if($revenue > 0) $revenue_text = formatNumbers($revenue);
		else $revenue_text = "N/A";

		// ZACKS
		$netIncome 	= getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (TTM US$ Millions)");
		if($netIncome != -123456)	$netIncome_text = formatNumbers($netIncome);
		else $netIncome_text = "N/A";

		if($marketCap != -123456 && $revenue != -123456)
		{
			$priceToSales = ($marketCap/1000000)/$revenue;
			$priceToSales_text = number_format($priceToSales, 2, '.', ',');
		}
		else $priceToSales_text = "N/A";

		if($marketCap != -123456 && $netIncome > 0)
		{
			$priceToEarnings = ($marketCap/1000000)/$netIncome;
			$priceToEarnings_text = number_format($priceToEarnings, 2, '.', ',');
		}
		else $priceToEarnings_text = "N/A";

		// Intrinio
		$cash = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cash And Equivalents (US$ Millions)");
		if($cash != -123456) $cash_text = number_format($cash, 0, '.', ',');
		else $cash_text = "N/A";

		// Intrinio
		$shortTermInvestments = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Investments (QTR)");
		if($shortTermInvestments != -123456)	$shortTermInvestments_text = formatNumbers($shortTermInvestments);
		else $shortTermInvestments_text = "N/A";

		if($shortTermInvestments >= 0 && $cash > 0)
		{
			$totalCash = $shortTermInvestments + $cash;
			$totalCash_text = formatNumbers($totalCash);
		}
		else
		{
			$totalCash = $cash;
			$totalCash_text = $cash_text;
		}

		// Intrinio
		$dividendPerShare = getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Dividend Per Share");
		if($dividendPerShare != -123456) $dividendPerShare_text = 100*number_format($dividendPerShare, 2, '.', ',');
		else $dividendPerShare_text = "N/A";

		if($stockPrice > 0)
		{
			$dividendYield = $dividendPerShare/$stockPrice;
			if($dividendPerShare != -123456) $dividendYield_text = 100*number_format($dividendPerShare, 2, '.', ',');
			else $dividendYield_text = "N/A";
		}
		else $dividendYield_text = "N/A";

		// ZACKS
		$EPS =  getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "eps_diluted_net (TTM)");
		if($EPS != -123456)	$EPS_text = number_format($EPS, 2, '.', ',');
		else $EPS_text = "N/A";

	}


	// We have an ETF
	if($isETF)
	{
		$revenue = "N/A";
		$revenue_text = "N/A";
		$grossProfit_text = "N/A";
		$grossMargin_text = "N/A";
		$revenuePerEmployee_text = "N/A";
		$netIncome_text = "N/A";
		$cashFromOperations = "N/A";
		$cashFromOperations_text = "N/A";
		$leveredFCF = "N/A";
		$leveredFCF_text = "N/A";
		$netIncomeMargin = "N/A";
		$netIncomeMargin_text = "N/A";
		$operatingMargin = "N/A";
		$operatingMargintext = "N/A";
		$marketCap = "N/A";
		$marketCap_text = "N/A";
		$price = "N/A";
		$price_text = "N/A";
		$bookValue_text = "N/A";
		$revenue_text = "N/A";
		$roe_text = "N/A";
		$roa_text = "N/A";
		$priceToEarnings_text = "N/A";
		$currentRatio_text = "N/A";
		$cash_text = "N/A";
		$dividendPerShare_text = "N/A";
		$dividendYield_text = "N/A";
		$priceToBook_text = "N/A";
		$annualLow 			= "";
		$annualLow_text 	= "";
		$annualHigh 		= "";
		$annualHigh_text 	= "";
		$EPS_text = "N/A";
		$nextEarningsDate = "N/A";
	}









/*
'Assets (US$ Millions)'
'Book Value per Share (US$)'
'Capital Expenditures (TTM US$ Millions)'
'Capital Expenditures (US$ Millions)'
'Cash from Operations (TTM US$ Millions)'
'Cash from Operations (US$ Millions)'
'Cash Ratio'
'Current Ratio'
'Debt (US$ Millions)'
'Debt/Equity'
'Earnings from Continuing Operations Margin %'
'EPS - Net(Diluted) TTM'
'Gross Margin %'
'Gross Profit (TTM)'
'Gross Profit/Revenue (TTM)'
'Inventory Turnover'
'Levered Free Cash Flow (TTM US$ Millions)'
'Levered Free Cash Flow per Share (TTM)'
'Market Cap at Period End (US$ Millions)'
'Market Cap-At Quarter End (US$ Millions)'
'Net Income (TTM US$ Millions)'
'Net Income (US$ Millions)'
'Net Income Margin %'
'Non-Performing Loans/Loans'
'Operating Revenues/Operating Expense'
'Price to Earnings (At Quarter End)'
'Price to Sales (at Quarter End)'
'Price to Sales (TTM) (Current)'
'Research & Development (TTM US$ Millions)'
'Research and Development (US$ Millions)'
'Research and Development Expense/Operating Expense'
'Research and Development Expense/Revenue'
'Return on Assets (ROA)'
'Return on Equity (ROE)'
'Revenue (TTM US$ Millions)'
'Revenue (US$ Millions)'
'Revenue/Number of Employees (TTM US$ Millions)'
'SGA (US$ Millions)'
'SGA Margin %'
'Stock Repurchases (US$ Millions)'
'Stock Repurchases/Assets'
'Unlevered Free Cash Flow (TTM US$ Millions)'
*/






?>
