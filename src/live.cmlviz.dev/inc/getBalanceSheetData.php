<?php		
	$cashBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cash And Equivalents (US$ Millions)");
	if($cashBS != -123456000 && $cashBS != 0) $cashBS_text = number_format($cashBS, 0, '.', ',');
	else $cashBS_text = "-";
	
	$shortTermInvBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Investments (QTR)");
	if($shortTermInvBS != -123456000 && $shortTermInvBS != 0) $shortTermInvBS_text = number_format($shortTermInvBS, 0, '.', ',');
	else $shortTermInvBS_text = "-";
	
	$receivablesBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Receivables (US$ Millions)");
	if($receivablesBS != -123456000 && $receivablesBS != 0) $receivablesBS_text = number_format($receivablesBS, 0, '.', ',');
	else $receivablesBS_text = "-";
	
	$inventoryBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Inventory (US$ Millions)");
	if($inventoryBS != -123456000 && $inventoryBS != 0) $inventoryBS_text = number_format($inventoryBS, 0, '.', ',');
	else $inventoryBS_text = "-";
	
	$otherCurrentAssetsBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Assets (QTR)");
	if($otherCurrentAssetsBS != -123456000 && $otherCurrentAssetsBS != 0) $otherCurrentAssetsBS_text = number_format($otherCurrentAssetsBS, 0, '.', ',');
	else $otherCurrentAssetsBS_text = "-";
	
	$totalCurrentAssetsBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Assets (QTR)");
	if($totalCurrentAssetsBS != -123456000 && $totalCurrentAssetsBS != 0) $totalCurrentAssetsBS_text = number_format($totalCurrentAssetsBS, 0, '.', ',');
	else $totalCurrentAssetsBS_text = "-";
	
	$longTermInvBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Investments (QTR)");
	if($longTermInvBS != -123456000 && $longTermInvBS != 0) $longTermInvBS_text = number_format($longTermInvBS, 0, '.', ',');
	else $longTermInvBS_text = "-";
	
	$PPEBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Plant, Property, & Equipment, net (QTR)");
	if($PPEBS != -123456000 && $PPEBS != 0) $PPEBS_text = number_format($PPEBS, 0, '.', ',');
	else $PPEBS_text = "-";
	
	$goodwillBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Goodwill (US$ Millions)");
	if($goodwillBS != -123456000 && $goodwillBS != 0) $goodwillBS_text = number_format($goodwillBS, 0, '.', ',');
	else $goodwillBS_text = "-";
	
	$intangiblesBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Intangible Assets (QTR)");
	if($intangiblesBS != -123456000 && $intangiblesBS != 0) $intangiblesBS_text = number_format($intangiblesBS, 0, '.', ',');
	else $intangiblesBS_text = "-";
	
	$depreciationBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accumulated Depreciation (QTR)");
	if($depreciationBS != -123456000 && $depreciationBS != 0) $depreciationBS_text = number_format($depreciationBS, 0, '.', ',');
	else $depreciationBS_text = "-";
	
	$totalAssetsBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Assets (QTR)");
	if($totalAssetsBS != -123456000 && $totalAssetsBS != 0) $totalAssetsBS_text = number_format($totalAssetsBS, 0, '.', ',');
	else $totalAssetsBS_text = "-";
	
	$accountsPayableBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accounts Payable (QTR)");
	if($accountsPayableBS != -123456000 && $accountsPayableBS != 0) $accountsPayableBS_text = number_format($accountsPayableBS, 0, '.', ',');
	else $accountsPayableBS_text = "-";
	
	$shortTermDebtBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Debt (QTR)");
	if($shortTermDebtBS != -123456000 && $shortTermDebtBS != 0) $shortTermDebtBS_text = number_format($shortTermDebtBS, 0, '.', ',');
	else $shortTermDebtBS_text = "-";
	
	$otherCurrentLiabilities = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Liabilities (QTR)");
	if($otherCurrentLiabilities != -123456000 && $otherCurrentLiabilities != 0) $otherCurrentLiabilities_text = number_format($otherCurrentLiabilities, 0, '.', ',');
	else $otherCurrentLiabilities_text = "-";
	
	$totalCurrentLiabilities = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Liabilities (QTR)");
	if($totalCurrentLiabilities != -123456000 && $totalCurrentLiabilities != 0) $totalCurrentLiabilities_text = number_format($totalCurrentLiabilities, 0, '.', ',');
	else $totalCurrentLiabilities_text = "-";

	$longTermDebtBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Debt (QTR)");
	if($longTermDebtBS != -123456000 && $longTermDebtBS != 0) $longTermDebtBS_text = number_format($longTermDebtBS, 0, '.', ',');
	else $longTermDebtBS_text = "-";
	
	$totalLiabilitiesBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Liabilities (QTR)");
	if($totalLiabilitiesBS != -123456000 && $totalLiabilitiesBS != 0) $totalLiabilitiesBS_text = number_format($totalLiabilitiesBS, 0, '.', ',');
	else $totalLiabilitiesBS_text = "-";
	
	$preferredStockBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Preferred Stock (QTR)");
	if($preferredStockBS != -123456000 && $preferredStockBS != 0) $preferredStockBS_text = number_format($preferredStockBS, 0, '.', ',');
	else $preferredStockBS_text = "-";
	
	$commonStock = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Common Stock (QTR)");
	if($commonStock != -123456000 && $commonStock != 0) $commonStock_text = number_format($commonStock, 0, '.', ',');
	else $commonStock_text = "-";	

	$retainedEarningsBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Retained Earnings (QTR)");
	if($retainedEarningsBS != -123456000 && $retainedEarningsBS != 0) $retainedEarningsBS_text = number_format($retainedEarningsBS, 0, '.', ',');
	else $retainedEarningsBS_text = "-";
	
	$treasuryStockBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Treasury Stock (QTR)");
	if($treasuryStockBS != -123456000 && $treasuryStockBS != 0) $treasuryStockBS_text = number_format($treasuryStockBS, 0, '.', ',');
	else $treasuryStockBS_text = "-";
	
	$otherEquityAdjBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Equity Adjustments (QTR)");
	if($otherEquityAdjBS != -123456000 && $otherEquityAdjBS != 0) $otherEquityAdjBS_text = number_format($otherEquityAdjBS, 0, '.', ',');
	else $otherEquityAdjBS_text = "-";
	
	$equityBS = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Preferred & Common Equity (QTR)");
	if($equityBS != -123456000 && $equityBS != 0) $equityBS_text = number_format($equityBS, 0, '.', ',');
	else $equityBS_text = "-";	

	$netTangibleAssets = max($totalAssetsBS,0) - max($totalLiabilitiesBS,0) - max($goodwillBS,0) - max($intangiblesBS,0);
	if($netTangibleAssets != 0) $netTangibleAssets_text = number_format($netTangibleAssets, 0, '.', ',');
	else $netTangibleAssets_text = "-";
	
	// One-year back
	$cashBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cash And Equivalents (US$ Millions) (QTR 1Q)");
	if($cashBS_1yr!= -123456000 && $cashBS_1yr!= 0) $cashBS_1yr_text = number_format($cashBS, 0, '.', ',');
	else $cashBS_1yr_text = "-";
	
	$shortTermInvBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Investments (QTR 1Q)");
	if($shortTermInvBS_1yr!= -123456000 && $shortTermInvBS_1yr!= 0) $shortTermInvBS_1yr_text = number_format($shortTermInvBS, 0, '.', ',');
	else $shortTermInvBS_1yr_text = "-";
	
	$receivablesBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Receivables (US$ Millions) (QTR 1Q)");
	if($receivablesBS_1yr!= -123456000 && $receivablesBS_1yr!= 0) $receivablesBS_1yr_text = number_format($receivablesBS, 0, '.', ',');
	else $receivablesBS_1yr_text = "-";
	
	$inventoryBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Inventory (US$ Millions) (QTR 1Q)");
	if($inventoryBS_1yr!= -123456000 && $inventoryBS_1yr!= 0) $inventoryBS_1yr_text = number_format($inventoryBS, 0, '.', ',');
	else $inventoryBS_1yr_text = "-";
	
	$otherCurrentAssetsBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Assets (QTR 1Q)");
	if($otherCurrentAssetsBS_1yr!= -123456000 && $otherCurrentAssetsBS_1yr!= 0) $otherCurrentAssetsBS_1yr_text = number_format($otherCurrentAssetsBS, 0, '.', ',');
	else $otherCurrentAssetsBS_1yr_text = "-";
	
	$totalCurrentAssetsBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Assets (QTR 1Q)");
	if($totalCurrentAssetsBS_1yr!= -123456000 && $totalCurrentAssetsBS_1yr!= 0) $totalCurrentAssetsBS_1yr_text = number_format($totalCurrentAssetsBS, 0, '.', ',');
	else $totalCurrentAssetsBS_1yr_text = "-";
	
	$longTermInvBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Investments (QTR 1Q)");
	if($longTermInvBS_1yr!= -123456000 && $longTermInvBS_1yr!= 0) $longTermInvBS_1yr_text = number_format($longTermInvBS, 0, '.', ',');
	else $longTermInvBS_1yr_text = "-";
	
	$PPEBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Plant, Property, & Equipment, net (QTR 1Q)");
	if($PPEBS_1yr!= -123456000 && $PPEBS_1yr!= 0) $PPEBS_1yr_text = number_format($PPEBS, 0, '.', ',');
	else $PPEBS_1yr_text = "-";
	
	$goodwillBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Goodwill (US$ Millions) (QTR 1Q)");
	if($goodwillBS_1yr!= -123456000 && $goodwillBS_1yr!= 0) $goodwillBS_1yr_text = number_format($goodwillBS, 0, '.', ',');
	else $goodwillBS_1yr_text = "-";
	
	$intangiblesBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Intangible Assets (QTR 1Q)");
	if($intangiblesBS_1yr!= -123456000 && $intangiblesBS_1yr!= 0) $intangiblesBS_1yr_text = number_format($intangiblesBS, 0, '.', ',');
	else $intangiblesBS_1yr_text = "-";
	
	$depreciationBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accumulated Depreciation (QTR 1Q)");
	if($depreciationBS_1yr!= -123456000 && $depreciationBS_1yr!= 0) $depreciationBS_1yr_text = number_format($depreciationBS, 0, '.', ',');
	else $depreciationBS_1yr_text = "-";
	
	$totalAssetsBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Assets (QTR 1Q)");
	if($totalAssetsBS_1yr!= -123456000 && $totalAssetsBS_1yr!= 0) $totalAssetsBS_1yr_text = number_format($totalAssetsBS, 0, '.', ',');
	else $totalAssetsBS_1yr_text = "-";
	
	$accountsPayableBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accounts Payable (QTR 1Q)");
	if($accountsPayableBS_1yr!= -123456000 && $accountsPayableBS_1yr!= 0) $accountsPayableBS_1yr_text = number_format($accountsPayableBS, 0, '.', ',');
	else $accountsPayableBS_1yr_text = "-";
	
	$shortTermDebtBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Debt (QTR 1Q)");
	if($shortTermDebtBS_1yr!= -123456000 && $shortTermDebtBS_1yr!= 0) $shortTermDebtBS_1yr_text = number_format($shortTermDebtBS, 0, '.', ',');
	else $shortTermDebtBS_1yr_text = "-";
	
	$otherCurrentLiabilities = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Liabilities (QTR 1Q)");
	if($otherCurrentLiabilities != -123456000 && $otherCurrentLiabilities != 0) $otherCurrentLiabilities_text = number_format($otherCurrentLiabilities, 0, '.', ',');
	else $otherCurrentLiabilities_text = "-";
	
	$totalCurrentLiabilities_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Liabilities (QTR 1Q)");
	if($totalCurrentLiabilities_1yr != -123456000 && $totalCurrentLiabilities_1yr != 0) $totalCurrentLiabilities_1yr_text  = number_format($totalCurrentLiabilities_1yr, 0, '.', ',');
	else $totalCurrentLiabilities_1yr_text  = "-";

	$longTermDebtBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Debt (QTR 1Q)");
	if($longTermDebtBS_1yr!= -123456000 && $longTermDebtBS_1yr!= 0) $longTermDebtBS_1yr_text = number_format($longTermDebtBS, 0, '.', ',');
	else $longTermDebtBS_1yr_text = "-";
	
	$totalLiabilitiesBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Liabilities (QTR 1Q)");
	if($totalLiabilitiesBS_1yr!= -123456000 && $totalLiabilitiesBS_1yr!= 0) $totalLiabilitiesBS_1yr_text = number_format($totalLiabilitiesBS, 0, '.', ',');
	else $totalLiabilitiesBS_1yr_text = "-";
	
	$preferredStockBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Preferred Stock (QTR 1Q)");
	if($preferredStockBS_1yr!= -123456000 && $preferredStockBS_1yr!= 0) $preferredStockBS_1yr_text = number_format($preferredStockBS, 0, '.', ',');
	else $preferredStockBS_1yr_text = "-";
	
	$commonStock_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Common Stock (QTR 1Q)");
	if($commonStock_1yr != -123456000 && $commonStock_1yr != 0) $commonStock_1yr_text = number_format($commonStock_1yr, 0, '.', ',');
	else $commonStock_1yr_text = "-";	

	$retainedEarningsBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Retained Earnings (QTR 1Q)");
	if($retainedEarningsBS_1yr!= -123456000 && $retainedEarningsBS_1yr!= 0) $retainedEarningsBS_1yr_text = number_format($retainedEarningsBS, 0, '.', ',');
	else $retainedEarningsBS_1yr_text = "-";
	
	$treasuryStockBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Treasury Stock (QTR 1Q)");
	if($treasuryStockBS_1yr!= -123456000 && $treasuryStockBS_1yr!= 0) $treasuryStockBS_1yr_text = number_format($treasuryStockBS, 0, '.', ',');
	else $treasuryStockBS_1yr_text = "-";
	
	$otherEquityAdjBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Equity Adjustments (QTR 1Q)");
	if($otherEquityAdjBS_1yr!= -123456000 && $otherEquityAdjBS_1yr!= 0) $otherEquityAdjBS_1yr_text = number_format($otherEquityAdjBS, 0, '.', ',');
	else $otherEquityAdjBS_1yr_text = "-";
	
	$equityBS_1yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Preferred & Common Equity (QTR 1Q)");
	if($equityBS_1yr!= -123456000 && $equityBS_1yr!= 0) $equityBS_1yr_text = number_format($equityBS, 0, '.', ',');
	else $equityBS_1yr_text = "-";	

	$netTangibleAssets_1yr = max($totalAssetsBS_1yr,0) - max($totalLiabilitiesBS_1yr,0) - max($goodwillBS_1yr,0) - max($intangiblesBS_1yr,0);
	if($netTangibleAssets_1yr != 0) $netTangibleAssets_1yr_text = number_format($netTangibleAssets_1yr, 0, '.', ',');
	else $netTangibleAssets_1yr_text = "-";
	
	// Two-years back
	$cashBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cash And Equivalents (US$ Millions) (QTR 2Q)");
	if($cashBS_2yr!= -123456000 && $cashBS_2yr!= 0) $cashBS_2yr_text = number_format($cashBS, 0, '.', ',');
	else $cashBS_2yr_text = "-";
	
	$shortTermInvBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Investments (QTR 2Q)");
	if($shortTermInvBS_2yr!= -123456000 && $shortTermInvBS_2yr!= 0) $shortTermInvBS_2yr_text = number_format($shortTermInvBS, 0, '.', ',');
	else $shortTermInvBS_2yr_text = "-";
	
	$receivablesBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Receivables (US$ Millions) (QTR 2Q)");
	if($receivablesBS_2yr!= -123456000 && $receivablesBS_2yr!= 0) $receivablesBS_2yr_text = number_format($receivablesBS, 0, '.', ',');
	else $receivablesBS_2yr_text = "-";
	
	$inventoryBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Inventory (US$ Millions) (QTR 2Q)");
	if($inventoryBS_2yr!= -123456000 && $inventoryBS_2yr!= 0) $inventoryBS_2yr_text = number_format($inventoryBS, 0, '.', ',');
	else $inventoryBS_2yr_text = "-";
	
	$otherCurrentAssetsBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Assets (QTR 2Q)");
	if($otherCurrentAssetsBS_2yr!= -123456000 && $otherCurrentAssetsBS_2yr!= 0) $otherCurrentAssetsBS_2yr_text = number_format($otherCurrentAssetsBS, 0, '.', ',');
	else $otherCurrentAssetsBS_2yr_text = "-";
	
	$totalCurrentAssetsBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Assets (QTR 2Q)");
	if($totalCurrentAssetsBS_2yr!= -123456000 && $totalCurrentAssetsBS_2yr!= 0) $totalCurrentAssetsBS_2yr_text = number_format($totalCurrentAssetsBS, 0, '.', ',');
	else $totalCurrentAssetsBS_2yr_text = "-";
	
	$longTermInvBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Investments (QTR 2Q)");
	if($longTermInvBS_2yr!= -123456000 && $longTermInvBS_2yr!= 0) $longTermInvBS_2yr_text = number_format($longTermInvBS, 0, '.', ',');
	else $longTermInvBS_2yr_text = "-";
	
	$PPEBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Plant, Property, & Equipment, net (QTR 2Q)");
	if($PPEBS_2yr!= -123456000 && $PPEBS_2yr!= 0) $PPEBS_2yr_text = number_format($PPEBS, 0, '.', ',');
	else $PPEBS_2yr_text = "-";
	
	$goodwillBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Goodwill (US$ Millions) (QTR 2Q)");
	
	if($goodwillBS_2yr!= -123456000 && $goodwillBS_2yr!= 0) $goodwillBS_2yr_text = number_format($goodwillBS, 0, '.', ',');
	else $goodwillBS_2yr_text = "-";
	
	$intangiblesBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Intangible Assets (QTR 2Q)");
	if($intangiblesBS_2yr!= -123456000 && $intangiblesBS_2yr!= 0) $intangiblesBS_2yr_text = number_format($intangiblesBS, 0, '.', ',');
	else $intangiblesBS_2yr_text = "-";
	
	$depreciationBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accumulated Depreciation (QTR 2Q)");
	if($depreciationBS_2yr!= -123456000 && $depreciationBS_2yr!= 0) $depreciationBS_2yr_text = number_format($depreciationBS, 0, '.', ',');
	else $depreciationBS_2yr_text = "-";
	
	$totalAssetsBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Assets (QTR 2Q)");
	if($totalAssetsBS_2yr!= -123456000 && $totalAssetsBS_2yr!= 0) $totalAssetsBS_2yr_text = number_format($totalAssetsBS, 0, '.', ',');
	else $totalAssetsBS_2yr_text = "-";
	
	$accountsPayableBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Accounts Payable (QTR 2Q)");
	if($accountsPayableBS_2yr!= -123456000 && $accountsPayableBS_2yr!= 0) $accountsPayableBS_2yr_text = number_format($accountsPayableBS, 0, '.', ',');
	else $accountsPayableBS_2yr_text = "-";
	
	$shortTermDebtBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Short-Term Debt (QTR 2Q)");
	if($shortTermDebtBS_2yr!= -123456000 && $shortTermDebtBS_2yr!= 0) $shortTermDebtBS_2yr_text = number_format($shortTermDebtBS, 0, '.', ',');
	else $shortTermDebtBS_2yr_text = "-";
	
	$otherCurrentLiabilities = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Current Liabilities (QTR 2Q)");
	if($otherCurrentLiabilities != -123456000 && $otherCurrentLiabilities != 0) $otherCurrentLiabilities_text = number_format($otherCurrentLiabilities, 0, '.', ',');
	else $otherCurrentLiabilities_text = "-";
	
	$totalCurrentLiabilities_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Current Liabilities (QTR 2Q)");
	if($totalCurrentLiabilities_2yr != -123456000 && $totalCurrentLiabilities_2yr != 0) $totalCurrentLiabilities_2yr_text  = number_format($totalCurrentLiabilities_2yr, 0, '.', ',');
	else $totalCurrentLiabilities_2yr_text  = "-";

	$longTermDebtBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Long-Term Debt (QTR 2Q)");
	if($longTermDebtBS_2yr!= -123456000 && $longTermDebtBS_2yr!= 0) $longTermDebtBS_2yr_text = number_format($longTermDebtBS, 0, '.', ',');
	else $longTermDebtBS_2yr_text = "-";
	
	$totalLiabilitiesBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Liabilities (QTR 2Q)");
	if($totalLiabilitiesBS_2yr!= -123456000 && $totalLiabilitiesBS_2yr!= 0) $totalLiabilitiesBS_2yr_text = number_format($totalLiabilitiesBS, 0, '.', ',');
	else $totalLiabilitiesBS_2yr_text = "-";
	
	$preferredStockBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Preferred Stock (QTR 2Q)");
	if($preferredStockBS_2yr!= -123456000 && $preferredStockBS_2yr!= 0) $preferredStockBS_2yr_text = number_format($preferredStockBS, 0, '.', ',');
	else $preferredStockBS_2yr_text = "-";
	
	$commonStock_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Common Stock (QTR 2Q)");
	if($commonStock_2yr != -123456000 && $commonStock_2yr != 0) $commonStock_2yr_text = number_format($commonStock_2yr, 0, '.', ',');
	else $commonStock_2yr_text = "-";		

	$retainedEarningsBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Retained Earnings (QTR 2Q)");
	if($retainedEarningsBS_2yr!= -123456000 && $retainedEarningsBS_2yr!= 0) $retainedEarningsBS_2yr_text = number_format($retainedEarningsBS, 0, '.', ',');
	else $retainedEarningsBS_2yr_text = "-";
	
	$treasuryStockBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Treasury Stock (QTR 2Q)");
	if($treasuryStockBS_2yr!= -123456000 && $treasuryStockBS_2yr!= 0) $treasuryStockBS_2yr_text = number_format($treasuryStockBS, 0, '.', ',');
	else $treasuryStockBS_2yr_text = "-";
	
	$otherEquityAdjBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Equity Adjustments (QTR 2Q)");
	if($otherEquityAdjBS_2yr!= -123456000 && $otherEquityAdjBS_2yr!= 0) $otherEquityAdjBS_2yr_text = number_format($otherEquityAdjBS, 0, '.', ',');
	else $otherEquityAdjBS_2yr_text = "-";
	
	$equityBS_2yr= 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Preferred & Common Equity (QTR 2Q)");
	if($equityBS_2yr!= -123456000 && $equityBS_2yr!= 0) $equityBS_2yr_text = number_format($equityBS, 0, '.', ',');
	else $equityBS_2yr_text = "-";	

	$netTangibleAssets_2yr = max($totalAssetsBS_2yr,0) - max($totalLiabilitiesBS_2yr,0) - max($goodwillBS_2yr,0) - max($intangiblesBS_2yr,0);
	if($netTangibleAssets_2yr != 0) $netTangibleAssets_2yr_text = number_format($netTangibleAssets_2yr, 0, '.', ',');
	else $netTangibleAssets_2yr_text = "-";
?>		