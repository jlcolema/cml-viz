<?php

		// Get Company name
		function getCompanyName($ticker)
		{
			$companyName = "No Company Name Found"; // initialize
			$companyName = getSimpleData($ticker, "companyName", "cml_lite.mvLiteExtractEarningsPanelXY");
			$companyName = str_replace(", Inc."," Inc", $companyName);
			$companyName = str_replace("Inc.","Inc", $companyName);

			return $companyName;
		}

		// Get Exchange
		function getExchange($ticker)
		{
			$exchange = getSimpleData($ticker, "exchangeSymbol", "cml_lite.distinc_company");
			$exchange = trim($exchange);
                if($exchange === "NasdaqGS")
                    $exchange = "NASDAQ";
                else if(strpos($exchange, "Nasdaq") >= 0 && strpos($exchange, "Nasdaq") !== false)
                    $exchange = "NASDAQ";

			return $exchange;
		}

		// Get Stock Low and High
		function getPrice52weeklow($ticker)
		{
			$price52weeklow = "";
			$price52weeklow = getSimpleData($ticker, "price52weeklow", "cml_lite.mvCompanyHistoricalPricesSupport");

			return $price52weeklow;
		}

		function getPrice52weekhigh($ticker)
		{
			$price52weekhigh = "";
			$price52weekhigh = getSimpleData($ticker, "price52weekhigh", "cml_lite.mvCompanyHistoricalPricesSupport");

			return $price52weekhigh;
		}

		// $time in [m3Price, m6Price, m12Price]
		function getHistoricalStockPrices($ticker, $time)
		{
			$HistoricalPrice = getSimpleData($ticker, $time, "cml_lite.mvCompanyHistoricalPricesSupport");
			if($HistoricalPrice == "") $HistoricalPrice = -123456;

			return $HistoricalPrice;
		}

		// metric in {stockPrice, stockChange, StockPercentChange, stockHigh, stockLow, stockVolume, stockOpen}
		function getCurrentStockData($ticker, $metric)
		{

			$url = "http://ondemand.websol.barchart.com/getQuote.json?apikey=adcd20ff53ec1e3154994414bee0398d&symbols=".$ticker;
			$json = @file_get_contents($url);
			$stockData = json_decode($json, true);

			$stockPrice = $stockData['results'][0]['lastPrice'];
			$stockChange = $stockData['results'][0]['netChange'];
			$StockPercentChange = $stockData['results'][0]['percentChange'];
			$stockHigh = $stockData['results'][0]['high'];
			$stockLow = $stockData['results'][0]['low'];
			$stockVolume = $stockData['results'][0]['volume'];
			$stockOpen = $stockData['results'][0]['open'];
			$name = $stockData['results'][0]['name'];

			if ($metric == "stockPrice")
				return $stockPrice;

			else if($metric == "stockChange")
				return $stockChange;

			else if($metric == "percentChange")
				return $percentChange;


			else if($metric == "stockHigh")
				return $stockHigh;

			else if($metric == "stockLow")
				return $stockLow;

			else if($metric == "StockPercentChange")
				return $StockPercentChange;

			else if($metric == "stockVolume")
				return $stockVolume;

			else if($metric == "stockOpen")
				return $stockOpen;

			else if($metric == "name")
				return $name;
		}

		// metric in {stockPrice, stockChange, StockPercentChange, stockHigh, stockLow, stockVolume, stockOpen}

		function getCurrentStockDataArrayIntrinio($ticker)
		{

			$url = "https://a8d78b052e6cd4594697792c8615a62b:99d235e47e0297343a7686b919f7fc76@api.intrinio.com/data_point?ticker=".$ticker."&item=last_price,change,high_price,low_price,volume,open_price";

			$json = @file_get_contents($url);
			$stockData = json_decode($json, true);

			$data[0] = $stockData['data'][0]['value'];  // last_price
			$data[1] = $stockData['data'][1]['value'];	// change

			$data[2] = ($data[1]/$data[0])*100;			// change %

			$data[3] = $stockData['data'][2]['value'];	// high_price
			$data[4] = $stockData['data'][3]['value'];	// low_price
			$data[5] = $stockData['data'][4]['value'];	// volume
			$data[6] = $stockData['data'][5]['value'];	// open_price


			return $data;
		}
		function getCurrentStockDataArray($ticker)
		{

			$url = "http://ondemand.websol.barchart.com/getQuote.json?apikey=adcd20ff53ec1e3154994414bee0398d&symbols=".$ticker;
			$json = @file_get_contents($url);
			$stockData = json_decode($json, true);

			$data[0] = $stockData['results'][0]['lastPrice'];
			$data[1] = $stockData['results'][0]['netChange'];
			$data[2] = $stockData['results'][0]['percentChange'];
			$data[3] = $stockData['results'][0]['high'];
			$data[4] = $stockData['results'][0]['low'];
			$data[5] = $stockData['results'][0]['volume'];
			$data[6] = $stockData['results'][0]['open'];
			$data[7] = $stockData['results'][0]['name'];

			return $data;
		}


		// Get current stock price
		function getCurrentStockPrice($ticker)
		{

			$url = "http://ondemand.websol.barchart.com/getQuote.json?apikey=adcd20ff53ec1e3154994414bee0398d&symbols=".$ticker;
			$json = file_get_contents($url);
			$stockData = json_decode($json, true);

			$stockPrice = $stockData['results'][0]['lastPrice'];

			return $stockPrice;
		}

		// Get an historical price return
		function getPriceReturn($ticker, $stockPrice, $oldPrice)
		{
			$PriceReturn = -123456;
			$PriceReturn = ($stockPrice - $oldPrice)/$oldPrice;

			return $PriceReturn;
		}


		// Get an historical price return
		// $time in [ma10, ma50, ma200]
		function getMovingAverage($ticker, $time)
		{
			$MovingAverage = -123456;
			$MovingAverage = getSimpleData($ticker, $time, "cml_lite.mvCompanyHistoricalPricesSupport");

			return $MovingAverage;
		}







?>
