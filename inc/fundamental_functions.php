<?php

	// This function returns the count of sells or buys in a certain time period
	function getNumberofTrades($ticker, $type, $startDate) {

		include "connection.php";

		$select_query =
						"select count(*)
						from insidertrading
						where ticker = '".$ticker."'
						and     transactioncode in ('".$type."')
						and     transactiondate >= '".$startDate."'
						and     securityadcode in ('NA','ND')
						and (isofficer = 'Y' or isdirector = 'Y')";

		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row['count(*)'];

		else
			$data = -123456;

		mysqli_close($conn);

		return $data;
	}

	// This function returns the sum of shares of buys or sells in a certain time period
	function getNumberofShares($ticker, $type, $startDate) {

		include "connection.php";

		$select_query =
						"Select sum(transactionshares)
						from insidertrading
						where ticker = '".$ticker."'
						and     transactioncode in ('".$type."')
						and     transactiondate >= '".$startDate."'
						and     securityadcode in ('NA','ND')
						and (isofficer = 'Y' or isdirector = 'Y')";

		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row['sum(transactionshares)'];

		else
			$data = -123456;

		mysqli_close($conn);

		return $data;
	}

	function getETFname($ticker)
	{
		$ETFname = "";
		$ETFname = getCurrentStockData($ticker, "name");
		return $ETFname;
	}


	// This function formats numbers based on size (millions or billions)
	function formatNumbers($metric_1_value)
	{
		$metric_1_value_text = number_format($metric_1_value, 0, '.', ','); //format

		if(abs($metric_1_value) > 1000)
		{
			$metric_1_value = $metric_1_value/1000;
			$metric_1_value_text = number_format($metric_1_value, 2, '.', ','); //format
			$metric_1_value_text = "".$metric_1_value_text."B";
		}

		else
		{
			$metric_1_value_text = number_format($metric_1_value, 2, '.', ','); //format
			$metric_1_value_text = "".$metric_1_value_text."M";
		}

		return $metric_1_value_text;
	}

	// This method can be called to write a text box and button in HTML for the user to get a new report.
	// The parameter writes the text on the button
	function writeGetSymbolTextBox ($buttontext)
	{
		echo
			'<div class ="toptable">
			<table align = "left">
				<tr>
					<td colspan ="2">
					</td>
				</tr>

				<tr>
					<!-- Enter a new symbol text box -->
					<td colspan = "2">
						<b>Enter Symbol</b>
					</td>
				</tr>

				<tr>
					<td>
						<FORM METHOD="GET" ACTION="lite.php?app=rc"><input type="text" name="ticker" value="" style="height: 32px; width: 102px;">
						<input type="hidden" name="app" value="rc" style="height: 32px; width: 102px;">
						<INPUT TYPE="submit" style="background-color:#000; color:#FFF; height: 32px; padding: 0px 10px;  font-size: 14px; font-family:\'Verdana\'"  VALUE="'.$buttontext.'"></FORM></td>
					</td>

					<td></td>
				</tr>

				<tr>
					<td><br><br></td>
				</tr>
			</table>
		</div>';
	}



	// These functions calculate the black scholes price for a call 'c' or a put 'p'
	// The cumulative normal distribution function
	function CND ($x)
	{
		$Pi = 3.141592653589793238;
		$a1 = 0.319381530;
		$a2 = -0.356563782;
		$a3 = 1.781477937;
		$a4 = -1.821255978;
		$a5 = 1.330274429;
		$L = abs($x);
		$k = 1 / ( 1 + 0.2316419 * $L);
		$p = 1 - 1 / pow(2 * $Pi, 0.5) * exp( -pow($L, 2) / 2 ) * ($a1 * $k + $a2 * pow($k, 2) + $a3 * pow($k, 3) + $a4 * pow($k, 4) + $a5 * pow($k, 5) );

		if ($x >= 0)
		{
			return $p;
		}

		else
		{
			return 1-$p;
		}
	}


	// The Black and Scholes formula
	function BlackScholes ($call_put_flag, $S, $X, $T, $r, $v)
	{
		$r= $r / 100;
		$v = $v / 100;
		$d1 = ( log($S / $X) + ($r + pow($v, 2) / 2) * $T ) / ( $v * pow($T, 0.5) );
		$d2 = $d1 - $v * pow($T, 0.5);

		if ($call_put_flag == 'c')
		{
			return $S * CND($d1) - $X * exp( -$r * $T ) * CND($d2);
			$nom = "Call Price";
		}

		else
		{
			return $X * exp( -$r * $T ) * CND(-$d2) - $S * CND(-$d1);
			$nom = 4;
			//"Put Price";
		}
	}


	// This function writes the summary table for each metric in the text of the article
	function printSummarytable($metric_name, $metric_value, $metric_value_text, $metric_one_year_ago,
										$metric_two_year_ago, $metric_one_year_ago_text, $metric_two_year_ago_text,
										$metric_direction)
	{
		$firstString ="";
		$firstString =
		'<table width ="830">
				<!-- Summary Table -->
				<tr>
					<td style ="padding: 4px;"><b>METRIC</b></td>
					<td align = "center"><b>CURRENT</b></td>
					<td align = "center"><b>1YR AGO</b></td>
					<td align = "center"><b>2YR AGO</b></td>
					<td align = "center"><b>DIRECTION</b></td>
				</tr>';

				if($metric_value != -123456)
				{
					$secondString = "";
					$secondString =

					'<tr>
						<td style ="padding: 4px;"><b>'.$metric_name.'</b></td>
						<td align = "center"><b>'.$metric_value_text.'</b></td>';
						if($metric_one_year_ago != -123456)
						{
							$thirdString ="";
							$thirdString =
							'<td align = "center">'.$metric_one_year_ago_text.'</td>';
						}

						else
						{
							$thirdString = "";
							$thirdString = "<td></td>";
						}

						if($metric_two_year_ago != -123456)
						{
							$fourthString =
							'<td align = "center">'.$metric_two_year_ago_text.'</td>';
						}
						else
							$fourthString = '<td></td>';

						if($metric_one_year_ago != -123456)
						{
							$fifthString = "";
							$fifthString =
							'<td align = "center"><b>'.$metric_direction.'</b></td>';
						}
						else
						{
							$fifthString = "";
							$fifthString = "<td></td>";
						}
				}

				$sixthString =

			'</table>';

			$finalString = $firstString."".$secondString."".$thirdString."".$fourthString."".$fifthString."".$sixthString;

		return $finalString;
	}



	// This function writes the summary table for each metric in the text of the article
	function printSummarytable_html($metric_name, $metric_value, $metric_value_text, $metric_one_year_ago,
										$metric_two_year_ago, $metric_one_year_ago_text, $metric_two_year_ago_text,
										$metric_direction)
	{
		$firstString ="";
		$firstString =
		'

			<table style ="border: 1px outset #000000;background: #004e75;">

				<tr>
					<td style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>METRIC</b></td>
					<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>CURRENT</b></td>
					<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>1YR AGO</b></td>
					<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>2YR AGO</b></td>
					<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>DIRECTION</b></td>
				</tr>';

				if($metric_value != -123456)
				{
					$secondString = "";
					$secondString =

					'<tr>
						<td style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>'.$metric_name.'</b></td>
						<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>'.$metric_value_text.'</b></td>';
						if($metric_one_year_ago != -123456)
						{
							$thirdString ="";
							$thirdString =
							'<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;">'.$metric_one_year_ago_text.'</td>';
						}

						else
						{
							$thirdString = "";
							$thirdString = '<td style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"></td>';
						}

						if($metric_two_year_ago != -123456)
						{
							$fourthString =
							'<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;">'.$metric_two_year_ago_text.'</td>';
						}
						else
							$fourthString = '<td style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"></td>';

						if($metric_one_year_ago != -123456)
						{
							$fifthString = "";
							$fifthString =
							'<td align = "center" style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"><b>'.$metric_direction.'</b></td>';
						}
						else
						{
							$fifthString = "";
							$fifthString = '<td style ="padding: 4px; font-family:verdana; font-size:12px; line-height:175%; color:#FFFFFF; background: #004e75;"></td>';
						}
				}

				$sixthString =

			'</table>';

			$finalString = $firstString."".$secondString."".$thirdString."".$fourthString."".$fifthString."".$sixthString;

		return $finalString;
	}


	// This function extracts stock price, change and other goodies from Yahoo!'s API
	function extractJSONValue($key, $jsonString)
	{
	   $extractedValue = "";

	   $simpleJson = str_replace("\"", '', $jsonString); // remove double quotes
	   $simpleJson = str_replace('}', ',', $simpleJson); // replace bracket with comma for simpler searching

	   $keyLength = strlen($key);
	   $keyPos = strpos($simpleJson, $key);

	   if( $keyPos !== false && $keyPos >= 0)
	   {
		   $valueStartPosition = $keyPos+$keyLength+1; // +1 to skip over ':'
		   $endOfToken = strpos($simpleJson, ",", $valueStartPosition);

		   $extractedValue = substr($simpleJson, $valueStartPosition, ($endOfToken - $valueStartPosition));
	   }

	   return $extractedValue;
	}


	// This function returns EARNINGS estimates data from ZACKS
	function getEarningsEstimates($ticker, $fieldName, $tableName) {

		include "connection.php";

		$select_query =
						"select ".$fieldName."
						from ".$tableName."
						where ticker = '".$ticker."'";


		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		else
			$data = -123456;

		mysqli_close($conn);

		return $data;
	}


	// This function returns REVENUE estimates data from ZACKS
	function getRevenueEstimates($ticker, $fieldName, $tableName) {

		include "connection.php";

		$select_query =
						"select ".$fieldName."
						from ".$tableName."
						where ticker = '".$ticker."'
						and periodType = 'Quarterly'
						and periodEndDate > lastRevenueDate
						order by periodEndDate asc limit 1";

		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		else
			$data = -123456;

		mysqli_close($conn);

		return $data;
	}


	// This function returns a single peer when given ticker, field name, table name and a peer rank (which is a string)
	function getPeer($ticker, $fieldName, $peerRank, $tableName) {

		include "connection.php";

		$select_query =
						"select ".$fieldName."
						from ".$tableName."
						where  peerRank = ".$peerRank."
						and tickerSymbol = '".$ticker."'";


		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		else
			$data = -123456;


		mysqli_close($conn);

		return $data;
	}


	// This function takes a ticker, a fieldName and a tableName, and returns a single value
	function getSimpleData($ticker, $fieldName, $tableName) {
		include "connection.php";

		$data = -123456;

		$select_query =
						"select ".$fieldName."
						FROM ".$tableName."
						where ticker = '".$ticker."' LIMIT 1";
		/*
		if($fieldName =="hv20")
			echo $select_query;
		*/
    //echo $select_query;

        $sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		mysqli_close($conn);

		return $data;
	}


	// This function returns a metric value when given a ticker, field name, table name and metric name
	function getMetricData($ticker, $fieldName, $tableName, $metricName) {
		include "connection.php";

			$select_query =
					" select ".$fieldName."
					FROM ".$tableName."
					where ticker = '".$ticker."'
					and financialRatio='".$metricName."'
					limit 1" ;


		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		else $data = -123456; // escape value

		mysqli_close($conn);

		/*
		if($metricName == 'Cash And Equivalents (US$ Millions)')
		{
			echo $select_query;
			echo $data;
		}
		*/
		return $data;
	}



	// This function returns a metric value when given a ticker, field name, table name and metric name
	function getMetricAverage($fieldName, $metric, $tableName, $sector) {
		include "connection.php";

			$select_query =
					"select avg(".$fieldName.") as average
					FROM ".$tableName."
					where sector = '".$sector."'
					and financialRatio='".$metric."'";

		$sql_result = $conn->query($select_query);
		if( $row = $sql_result->fetch_assoc() ) $data = $row["average"];

		else $data = -123456; // escape value

		mysqli_close($conn);

		return $data;
	}



	// This function takes a ticker, and a metric and returns the value 4 quarters ago
	function historical4QData($ticker, $metric) {

		include "connection.php";
		//$fieldName = "metricValue";

		$select_query =
						"SELECT DATE(quarterEndDate) AS quarterEndDate,
						metricValue,DATEDIFF(NOW(),quarterEndDate) as daysAgo
						FROM `top200kwithspecificcompany`
						WHERE ticker='" . $ticker . "'
						AND financialRatio='" . $metric . "'
						ORDER BY quarterEndDate DESC;";


		$sql_result = $conn->query($select_query);
		//if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		// ---------------  WRITE DATA into associate arrays ---------------------------------
		// when we're done we'll output in TSV
		$quartersAgo = 0;
		$index4QAgo = -1;
		$metricValue4QAgo = -0.0123456;
		$finalDaysAgo = 999999;
		$quarterEndDate4QAgo = "0000-00-00";
		$minDifference = 999999;

		while($row = $sql_result->fetch_assoc())
		{

			//echo ($quartersAgo+1) . ": " . $row['quarterEndDate'] . " " . $row['metricValue'] . "<br/>";


			if( $quartersAgo >= 4 &&
				abs($row['daysAgo']-365) < $minDifference && // This quarter is the closest fit so far
				$row['daysAgo'] > ( 180 + 5*30.5) && // Greater than half a year and 4 months ago
				$row['daysAgo'] < ( 365 + 3*30.5) ) // Less than one year 3 months ago
			{
				$finalDaysAgo = $row['daysAgo'];
				$minDifference = abs($row['daysAgo']-365);
				$index4QAgo = $quartersAgo;

				$quarterEndDate4QAgo = $row['quarterEndDate'];
				$metricValue4QAgo = $row['metricValue'];
			}
			$quartersAgo++;
		}

		$data = $metricValue4QAgo;

		// If we got a good result
		if($data !=  -0.0123456)
		{
			mysqli_close($conn);
			return $data;
		}



		// if we did not get a good result, we try again and make sure it's not just a late filer
				$select_query =
						"SELECT DATE(quarterEndDate) AS quarterEndDate,
						metricValue,DATEDIFF(NOW(),quarterEndDate) as daysAgo
						FROM `top200kwithspecificcompany`
						WHERE ticker='" . $ticker . "'
						AND financialRatio='" . $metric . "'
						ORDER BY quarterEndDate DESC;";


		$sql_result = $conn->query($select_query);
		//if( $row = $sql_result->fetch_assoc() ) $data = $row[$fieldName];

		// ---------------  WRITE DATA into associate arrays ---------------------------------
		// when we're done we'll output in TSV
		$quartersAgo = 0;
		$index4QAgo = -1;
		$metricValue4QAgo = -0.0123456;
		$finalDaysAgo = 999999;
		$quarterEndDate4QAgo = "0000-00-00";
		$minDifference = 999999;

		while($row = $sql_result->fetch_assoc())
		{

			//echo ($quartersAgo+1) . ": " . $row['quarterEndDate'] . " " . $row['metricValue'] . "<br/>";


			if( $quartersAgo >= 4 &&
				abs($row['daysAgo']-365) < $minDifference && // This quarter is the closest fit so far
				$row['daysAgo'] > ( 180 + 4*30.5) && // Greater than half a year and 4 months ago
				$row['daysAgo'] < ( 365 + 6*30.5) ) // Less than one year 3 months ago
			{
				$finalDaysAgo = $row['daysAgo'];
				$minDifference = abs($row['daysAgo']-365);
				$index4QAgo = $quartersAgo;

				$quarterEndDate4QAgo = $row['quarterEndDate'];
				$metricValue4QAgo = $row['metricValue'];
			}
			$quartersAgo++;
		}

		$data = $metricValue4QAgo;


		mysqli_close($conn);
		return $data;

	}


	// This function takes a ticker, and a metric and returns the value 8 quarters ago
	// It also generates a trend count (up or down consecutive quarters)
	function historical8QData($ticker, $metric) {

		include "connection.php";

		$sql_query =
					"SELECT DATE(quarterEndDate) AS quarterEndDate,
					metricValue,DATEDIFF(NOW(),quarterEndDate) as daysAgo
					FROM `top200kwithspecificcompany`
					WHERE ticker='" .$ticker. "'
					AND financialRatio='" .$metric. "' ORDER BY quarterEndDate DESC;";

		$sql_result = $conn->query($sql_query);



	// ---------------  WRITE DATA into associate arrays ---------------------------------
	// when we're done we'll output in TSV
	$quartersAgo = 0;
	$index8QAgo = -1;
	$metricValue8QAgo = -0.0123456;
	$finalDaysAgo = 999999;
	$quarterEndDate8QAgo = "0000-00-00";
	$minDifference = 999999;

	// Initialize the data needed to compute trends
	$upTicks = 0;
	$downTicks = 0;
	$quarter_back = 0;
	$quarter_ahead = getMetricData($ticker, "metricValue", "mvLiteExtractEarningsPanelXY", $metric);
	$counter = 0;
	$change = 0;
	$GLOBALS[2] = 0; // reset global value
	$GLOBALS[1] = 0; // reset global value

	while($row = $sql_result->fetch_assoc())
	{


		//echo ($quartersAgo+1) . ": " . $row['quarterEndDate'] . " " . $row['metricValue'] . "<br/>";
		$quarter_back = $row['metricValue'];
		$change = $quarter_ahead - $quarter_back;



		// This code alerts us if there is a five+ quarter trend
		if($counter <= 5)
		{
			$change = $quarter_ahead - $quarter_back;

			if($change > 0)
			{
				$upTicks = $upTicks + 1;
				if ($downTicks < 5)
					$downTicks = 0;

			}

			else if($change < 0)
			{
				$downTicks = $downTicks + 1;
				$upTicks = 0;
			}

			// Once we hit five straight quarters, we stop
			if($downTicks == 5)
				$GLOBALS[1] = 5;

			if($upTicks == 5)
				$GLOBALS[2] = 5;

			/*
			echo "Counter: ".$counter. "<br>";
			echo "Quarter Ahead ".$quarter_ahead."<br>";
			echo "Quarter Back ".$quarter_back."<br>";
			*/
			$quarter_ahead = $quarter_back;

			//echo "DownTicks: " .$downTicks. "<br>";
			//$GLOBALS[2] = $upTicks;
			//$GLOBALS[1] = $downTicks;

		}

		$counter = $counter + 1;

		if( $quartersAgo >= 8 &&
			abs($row['daysAgo']-730) < $minDifference && // This quarter is the closest fit so far
			$row['daysAgo'] > ( 365 + 7*30.5) && // Greater than a year and 8 months ago
			$row['daysAgo'] < ( 730 + 5*30.5) ) // Less than 2 years 4 months ago
		{
			$finalDaysAgo = $row['daysAgo'];
			$minDifference = abs($row['daysAgo']-700);
			$index8QAgo = $quartersAgo;

			$quarterEndDate8QAgo = $row['quarterEndDate'];
			$metricValue8QAgo = $row['metricValue'];
		}
		$quartersAgo++;

	}



		$data = $metricValue8QAgo;
		//echo "FINAL DOWN:".$metric."".$GLOBALS[1]."<br>";
		//echo "FINAL UP:".$metric."".$GLOBALS[2]."<br>";

		// If we got a good result
		if($data !=  -0.0123456)
		{
			mysqli_close($conn);
			return $data;
		}

		// if we did not get a good result, we try again and make sure it's not just a late filer
		// not necessary to calculate the trend again, so we skip that code
		else
		{
			$select_query =
						"SELECT DATE(quarterEndDate) AS quarterEndDate,
						metricValue,DATEDIFF(NOW(),quarterEndDate) as daysAgo
						FROM `top200kwithspecificcompany`
						WHERE ticker='" .$ticker. "'
						AND financialRatio='" .$metric. "'
						ORDER BY quarterEndDate DESC;";


			$sql_result = $conn->query($select_query);


			// ---------------  WRITE DATA into associate arrays ---------------------------------
			// when we're done we'll output in TSV
			$quartersAgo = 0;
			$index8QAgo = -1;
			$metricValue8QAgo = -0.0123456;
			$finalDaysAgo = 999999;
			$quarterEndDate8QAgo = "0000-00-00";
			$minDifference = 999999;

			while($row = $sql_result->fetch_assoc())
			{

			//echo ($quartersAgo+1) . ": " . $row['quarterEndDate'] . " " . $row['metricValue'] . "<br/>";

			if( $quartersAgo >= 8 &&
			abs($row['daysAgo']-730) < $minDifference && // This quarter is the closest fit so far
			$row['daysAgo'] > ( 365 + 8*30.5) && // Greater than a year and 8 months ago
			$row['daysAgo'] < ( 730 + 6*30.5) ) // Less than 2 years 6 months ago
			{
				$finalDaysAgo = $row['daysAgo'];
				$minDifference = abs($row['daysAgo']-730);
				$index8QAgo = $quartersAgo;

				$quarterEndDate8QAgo = $row['quarterEndDate'];
				$metricValue8QAgo = $row['metricValue'];
			}

			$quartersAgo++;

		}

		$data = $metricValue8QAgo;
		mysqli_close($conn);

		if($metricValue8QAgo == -0.0123456)
			$data = -123456;

		return $data;

		}

	}


	function getStar($ticker, $type)
	{
		include "connection.php";

		$select_query = "
						SELECT fundamentalRating
						FROM cml_lite.mvCompanyFundamentalRating
						WHERE  ticker = '".$ticker."'
						";

		$sql_result = $conn->query($select_query);
		$star_rating = 0;
		$rating_image = "";

		while($row = $sql_result->fetch_assoc())
		{
			$star_rating = $row['fundamentalRating'];
			$width = 108;


			if($star_rating >= 16.25)
			{
				$star_rating = 5.0;
				$rating_image = '<img src="images/five_stars_small.png" width = "'.$width.'">';
			}

			else if($star_rating >= 13.5)
			{
				$star_rating = 4.5;
				$rating_image = '<img src="images/four_and_a_half_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= 10.0 )
			{
				$star_rating = 4.0;
				$rating_image = '<img src="images/four_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= 7.5)
			{
				$star_rating = 3.5;
				$rating_image = '<img src="images/three_and_a_half_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= 2.5)
			{
				$star_rating = 3.0;
				$rating_image = '<img src="images/three_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= 1)
			{
				$star_rating = 2.5;
				$rating_image = '<img src="images/two_and_a_half_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= -3)
			{
				$star_rating = 2.0;
				$rating_image = '<img src="images/two_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= -6)
			{
				$star_rating = 1.5;
				$rating_image = '<img src="images/one_and_a_half_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= -8)
			{
				$star_rating = 1.0;
				$rating_image = '<img src="images/one_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating >= -11)
			{
				$star_rating = 0.5;
				$rating_image = '<img src="images/half_stars_small.png" width = "'.$width.'">';
			}


			else if($star_rating < -11)
			{
				$star_rating = 0;
				$rating_image = '<img src="images/zero_stars_small.png" width = "'.$width.'">';
			}

		}

		// Return an image
		if($type == "image")
		{
			return $rating_image;
		}

		// 	Return a rating (0-5)
		else
			return $star_rating;

	}


	function formatRevenueperEmployee($number)
	{

		if($number < 1)
		{
			$revenueperEmployee_adjusted = $number * 1000;
			$revenueperEmployee_text = "$".number_format($revenueperEmployee_adjusted, 0, '.', ',').",000";
		}

		else if($number > 1)
		{
			$revenueperEmployee_text = "$".number_format($number, 1, '.', ',')." million"; //format
		}

		return $revenueperEmployee_text;

	}

	function formatNumber($metric_1_value)
	{
		if(abs($metric_1_value) < 10)
			$metric_1_value = number_format($metric_1_value, 2, '.', ',');

		elseif(abs($metric_1_value) > 10 && abs($metric_1_value) < 100)
			$metric_1_value = number_format($metric_1_value, 1, '.', ',');

		elseif(abs($metric_1_value) > 100)
			$metric_1_value = number_format($metric_1_value, 0, '', ',');



		return 	$metric_1_value;
	}



	function getVolatilityRating($HV20, $HV30, $HV30_low, $HV30_high, $HV30percentile, $ThreeMoAgoPriceReturn, $SixMoAgoPriceReturn, $HV20_qqq, $HV20_spy, $stockPercentChange)
	{
		// Initialize
		$VolatilityRating = 1;

		// Stock returns over last 3-months
		if(abs($ThreeMoAgoPriceReturn) > .60)
			$VolatilityRating = $VolatilityRating + 4.5;

		else if(abs($ThreeMoAgoPriceReturn) > .40)
			$VolatilityRating = $VolatilityRating + 3.5;

		else if(abs($ThreeMoAgoPriceReturn) > .20)
			$VolatilityRating = $VolatilityRating + 2.0;

		else if(abs($ThreeMoAgoPriceReturn) > .10)
			$VolatilityRating = $VolatilityRating + 1.0;


		// Stock returns over last 6-months
		if(abs($SixMoAgoPriceReturn - $ThreeMoAgoPriceReturn) > .60)
			$VolatilityRating = $VolatilityRating + 4.5;

		else if(abs($SixMoAgoPriceReturn - $ThreeMoAgoPriceReturn) > .40)
			$VolatilityRating = $VolatilityRating + 3.5;

		else if(abs($SixMoAgoPriceReturn - $ThreeMoAgoPriceReturn) > .20)
			$VolatilityRating = $VolatilityRating + 1.5;

		else if(abs($SixMoAgoPriceReturn - $ThreeMoAgoPriceReturn) > .10)
			$VolatilityRating = $VolatilityRating + 0.5;

		// HV20
		if($HV20 > 175)
			$VolatilityRating = $VolatilityRating + 5.0;

		else if($HV20 > 125)
			$VolatilityRating = $VolatilityRating + 3.5;

		else if($HV20 > 80)
			$VolatilityRating = $VolatilityRating + 3.0;

		else if($HV20 > 60)
			$VolatilityRating = $VolatilityRating + 1.5;

		// HV30 percentile
		if($HV30percentile > 95)
			$VolatilityRating = $VolatilityRating + 3;

		else if($HV30percentile > 85)
			$VolatilityRating = $VolatilityRating + 2.5;

		else if($HV30percentile > 75)
			$VolatilityRating = $VolatilityRating + 2.0;

		else if($HV30percentile > 50)
			$VolatilityRating = $VolatilityRating + 1.0;

		//HV30 annual high
		if($HV30_high > 175)
			$VolatilityRating = $VolatilityRating + 1.0;

		else if($HV30_high > 100)
			$VolatilityRating = $VolatilityRating + 1.0;

		else if($HV30_high > 50)
			$VolatilityRating = $VolatilityRating + 0.5;

		// Comps to index
		if($HV20 > 1.5*$HV20_qqq && $HV20 > 1.5*$HV20_spy)
			$VolatilityRating = $VolatilityRating + 1;

		else if($HV20 > $HV20_qqq && $HV20 > $HV20_spy)
			$VolatilityRating = $VolatilityRating + 0.5;

		// Subtractions (HV20)
		if($HV20 < 10)
			$VolatilityRating = $VolatilityRating - 3.0;

		else if($HV20 < 20)
			$VolatilityRating = $VolatilityRating - 2.5;

		else if($HV20 < 30)
			$VolatilityRating = $VolatilityRating - 1.0;

		// Subtractions (HV30 percentile)
		if($HV30percentile < 20)
			$VolatilityRating = $VolatilityRating - 1.0;

		else if($HV30percentile < 30)
			$VolatilityRating = $VolatilityRating - 0.5;


		// Catch out of bounds ratings
		if($VolatilityRating > 5) $VolatilityRating = 5;

		else if($VolatilityRating < 1) $VolatilityRating = 1;


		// Intrday Stock Move Adjustments
		if(abs($stockPercentChange) >= 15)
			$VolatilityRating = $VolatilityRating + 1;

		else if(abs($stockPercentChange) >= 10)
			$VolatilityRating = $VolatilityRating + 0.5;

		// Manual adjustments
		if($VolatilityRating == 0 && $ThreeMoAgoPriceReturn < -0.10)
			$VolatilityRating = 1.5;

		else if($VolatilityRating == 0 && abs($ThreeMoAgoPriceReturn) > .10)
			$VolatilityRating = 1;

		else if($VolatilityRating >= 4.5 && $HV20 < 60)
			$VolatilityRating = $VolatilityRating - 0.5;

		else if($VolatilityRating == 5 && $HV30percentile < 65)
			$VolatilityRating = 4.5;

		else if($VolatilityRating <= 3 && $HV20 >= 70)
			$VolatilityRating = $VolatilityRating + 1;

		else if($VolatilityRating >= 4 && $HV30percentile <= 30)
			$VolatilityRating = $VolatilityRating - 0.5;

		if($HV20 < 40)
			$VolatilityRating = min($VolatilityRating, 4.0);

		else if($HV20 < 50)
			$VolatilityRating = min($VolatilityRating, 4.5);

		if(abs($stockPercentChange) >= 25)
			$VolatilityRating = max($VolatilityRating, 4.5);

		if(abs($stockPercentChange) >= 10)
			$VolatilityRating = max($VolatilityRating, 2.5);

		if($VolatilityRating > 5) $VolatilityRating = 5;

		else if($VolatilityRating <= 1) $VolatilityRating = 1;

		// Done
		return $VolatilityRating;
	}






	function getRiskRating($IV30, $HV20, $IV30percentile, $ThreeMoAgoPriceReturn, $stockPercentChange)
	{
		$riskRating = -123456;

		if($ThreeMoAgoPriceReturn != -123456 && $IV30 != -123456 && $HV20 != -123456 && $IV30percentile != -123456)
		{

			// 5: HIGHEST RISK
			if($IV30 > 1.5*$HV20 && $IV30percentile > 90 && $IV30 > 60)
				$riskRating = 5;

			elseif($IV30percentile > 90 && $IV30 > 100)
				$riskRating = 5;

			elseif($IV30 > $HV20 && $IV30percentile >= 97 && $IV30 > 60)
				$riskRating = 5;

			elseif($IV30 >= 100)
				$riskRating = 5;

			// 4.5: VERY HIGH RISK
			else if($IV30 > 80 && $IV30percentile > 96)
				$riskRating = 4.5;

			else if($IV30 > 1.5*$HV20 && $IV30percentile > 90 && $IV30 > 65)
				$riskRating = 4.5;

			else if($IV30percentile > 90 && $IV30 > 100)
				$riskRating = 4.5;

			else if($IV30 > $HV20 && $IV30percentile >= 97 && $IV30 > 65)
				$riskRating = 4.5;

			else if($IV30 > 85)
				$riskRating = 4.5;

			else if($IV30percentile > 95)
				$riskRating = 4.5;

			// 4: HIGH RISK
			else if($IV30 > 1.25*$HV20 && $IV30percentile > 90 && $IV30 > 48)
				$riskRating = 4;

			else if($IV30percentile > 90 && $IV30 > 48)
				$riskRating = 4;

			else if($IV30 > $HV20 && $IV30percentile >= 97 && $IV30 > 48)
				$riskRating = 4;

			else if($IV30 > 80)
				$riskRating = 4;

			else if($IV30percentile > 85)
				$riskRating = 4.5;

			// 3 or 3.5: MEDIUM RISK
			elseif($IV30 > 63)
				$riskRating = 3.5;

			else if($IV30 > 1.25*$HV20 && $IV30percentile > 65 && $IV30 > 35)
				$riskRating = 3.5;

			else if($IV30percentile > 80)
				$riskRating = 4.5;

			else if($IV30percentile > 75 && $IV30 > 30)
				$riskRating = 3;

			else if($IV30 > 45)
				$riskRating = 3;

			else if($IV30 > 40 && $IV30percentile > 35)
				$riskRating = 3;

			// 2.5 or 2: LOW RISK
			else if($IV30 > 35)
				$riskRating = 2.5;

			else if($IV30 < $HV20 && $IV30percentile < 50 && $IV30 < 40)
				$riskRating = 2;

			else if($IV30percentile < 40 && $IV30 < 40)
				$riskRating = 2;

			elseif($IV30 < 50 && $IV30 > 30)
				$riskRating = 2;

			// 1.5 or 1: LOWEST RISK
			elseif($IV30 < 20 && $IV30percentile <= 50)
				$riskRating = 1;

			else if($IV30 < 25 && $IV30percentile > 50)
				$riskRating = 1.5;

			// Adjusting risk for the 3-month stock move
			if($riskRating != 123456)
			{
				if(abs($ThreeMoAgoPriceReturn) > .2)
					$riskRating = $riskRating + 0.5;

				elseif(abs($ThreeMoAgoPriceReturn) > .10)
					$riskRating = $riskRating + 0.5;

				// Adjusting risk for HV20
				elseif($HV20 > 125)
					$riskRating = $riskRating + 1;

				elseif($HV20 > 100)
					$riskRating = $riskRating + 0.5;

				if($IV30 < 20)
					$riskRating = $riskRating - 1;
			}

			// Adjusting for stock change ON THE DAY
			if(abs($stockPercentChange) >= 25)
			$riskRating = max($riskRating,4);

			else if(abs($stockPercentChange) >= 15)
			$riskRating = $riskRating + 1;

			else if(abs($stockPercentChange) >= 10)
			$riskRating = $riskRating + 0.5;


			if($riskRating > 5) $riskRating = 5;

			if($riskRating < 1) $riskRating = 1;



		}

		else
			$riskRating = -123456;

		return $riskRating;
	}

	function getRiskRating_image($riskRating)
	{

		$fireImage = '';

		if($riskRating == 5) $fireImage = '<img class="rating_image_height_constraint" src="images/five_fire.png">';
		elseif($riskRating == 4.5) $fireImage = '<img class="rating_image_height_constraint" src="images/four_and_a_half_fire.png">';
		elseif($riskRating == 4) $fireImage = '<img class="rating_image_height_constraint" src="images/four_fire.png">';
		elseif($riskRating == 3.5) $fireImage = '<img class="rating_image_height_constraint" src="images/three_and_a_half_fire.png">';
		elseif($riskRating == 3) $fireImage = '<img class="rating_image_height_constraint" src="images/three_fire.png">';
		elseif($riskRating == 2.5) $fireImage = '<img class="rating_image_height_constraint" src="images/two_and_a_half_fire.png">';
		elseif($riskRating == 2) $fireImage = '<img class="rating_image_height_constraint" src="images/two_fire.png">';
		elseif($riskRating == 1.5) $fireImage = '<img class="rating_image_height_constraint" src="images/one_and_a_half_fire.png">';
		elseif($riskRating == 1) $fireImage = '<img class="rating_image_height_constraint" src="images/one_fire.png">';

		return $fireImage;
	}


	// this function returns the stock returns over 3, 6, or 12 months as formatted text.
	function getStockReturn($ticker, $time)
	{
		if($time == 3)
			$period = "m3Price";

		else if ($time == 6)
			$period = "m6Price";

		else if ($time == 12)
			$period = "m12Price";

		$oldPrice = getSimpleData($ticker, $period, "cml_lite.mvCompanyHistoricalPricesSupport");

		if($oldPrice == "") $oldPrice = -123456;

		// Get Stock price stuff from Yahoo! API
		$yahooURL='https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20csv%20where%20url%3D%27http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes.csv%3Fs%3D'.$ticker.'%26f%3Dsl1d1t1c1ohgv%26e%3D.csv%27%20and%20columns%3D%27symbol%2Cprice%2Cdate%2Ctime%2Cchange%2Ccol1%2Chigh%2Clow%2Ccol2%27&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';

		// Get Stock price stuff from Yahoo! API
		$yahooURL='https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20csv%20where%20url%3D%27http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes.csv%3Fs%3D'.$ticker.'%26f%3Dsl1d1t1c1ohgv%26e%3D.csv%27%20and%20columns%3D%27symbol%2Cprice%2Cdate%2Ctime%2Cchange%2Ccol1%2Chigh%2Clow%2Ccol2%27&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';

		$jsonString = file_get_contents($yahooURL);
		$extractedSymbol = extractJSONValue("symbol", $jsonString);
		$stockPrice = extractJSONValue("price", $jsonString);

		// Get stock percent change
		$PriceReturn = -123456;
		$stockCharttext ="";

		$PriceReturn_text = "";


		if($oldPrice != -123456)
		{
			$PriceReturn = ($stockPrice - $oldPrice)/$oldPrice;
			$PriceReturn_text = number_format(100*$PriceReturn, 1, '.', ','); //format

			if($PriceReturn > 0)
			{
				$PriceReturn_text = '<font color = "#009900">+'.$PriceReturn_text.'%</font>';
			}
			elseif	($PriceReturn < 0)
			{
				$PriceReturn_text = '<font color = "#cc0000">'.$PriceReturn_text.'%</font>';
			}

			elseif	($PriceReturn == 0)
			{
				$PriceReturn_text = '<font color = "#000000">'.$PriceReturn_text.'%</font>';
			}
		}

		return $PriceReturn_text;
	}


	function getFontColor($number)
	{
		$fontColor ="";
		if($number > 0)	$fontColor = "#009900";
		else if($number < 0)	$fontColor = "#cc0000";
		else $fontColor = "#000000";

		return $fontColor;
	}


?>
