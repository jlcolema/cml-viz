<?php		
	$revenueTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (TTM)");
	if($revenueTTM != -123456000 && $revenueTTM != 0) $revenueTTM_text = number_format($revenueTTM, 0, '.', ',');
	else $revenueTTM_text = "-";
	
	$revenueQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (QTR)");
	if($revenueQTR != -123456000 && $revenueQTR != 0) $revenueQTR_text = number_format($revenueQTR, 0, '.', ',');
	else $revenueQTR_text = "-";
	
	$COGSTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (TTM)");
	if($COGSTTM != -123456000 && $COGSTTM != 0) $COGSTTM_text = number_format($COGSTTM, 0, '.', ',');
	else $COGSTTM_text = "-";
	
	$COGSQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (QTR)");
	if($COGSQTR != -123456000 && $COGSQTR != 0) $COGSQTR_text = number_format($COGSQTR, 0, '.', ',');
	else $COGSQTR_text = "-";
	
	$grossProfitTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (TTM)");
	if($grossProfitTTM != -123456000 && $grossProfitTTM != 0) $grossProfitTTM_text = number_format($grossProfitTTM, 0, '.', ',');
	else $grossProfitTTM_text = "-";
	
	$grossProfitQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (QTR)");
	if($grossProfitQTR != -123456000 && $grossProfitQTR != 0) $grossProfitQTR_text = number_format($grossProfitQTR, 0, '.', ',');
	else $grossProfitQTR_text = "-";
	
	$RDTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research & Development (TTM US$ Millions)");
	if($RDTTM != -123456000 && $RDTTM != 0) $RDTTM_text = number_format($RDTTM, 0, '.', ',');
	else $RDTTM_text = "-";
	
	$RDQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research and Development (US$ Millions)");
	if($RDQTR != -123456000 && $RDQTR != 0) $RDQTR_text = number_format($RDQTR, 0, '.', ',');
	else $RDQTR_text = "-";
	
	$SGATTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SG&A (TTM US$ Millions)");
	if($SGATTM != -123456000 && $SGATTM != 0) $SGATTM_text = number_format($SGATTM, 0, '.', ',');
	else $SGATTM_text = "-";
	
	$SGAQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SGA (US$ Millions)");
	if($SGAQTR != -123456000 && $SGAQTR != 0) $SGAQTR_text = number_format($SGAQTR, 0, '.', ',');
	else $SGAQTR_text = "-";
	
	$otherOpExTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (TTM)");
	if($otherOpExTTM != -123456000 && $otherOpExTTM != 0) $otherOpExTTM_text = number_format($otherOpExTTM, 0, '.', ',');
	else $otherOpExTTM_text = "-";
	
	$otherOpExQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (QTR)");
	if($otherOpExQTR != -123456000 && $otherOpExQTR != 0) $otherOpExQTR_text = number_format($otherOpExQTR, 0, '.', ',');
	else $otherOpExQTR_text = "-";
	
	$OpExTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (TTM)");
	if($OpExTTM != -123456000 && $OpExTTM != 0) $OpExTTM_text = number_format($OpExTTM, 0, '.', ',');
	else $OpExTTM_text = "-";
	
	$OpExQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (QTR)");
	if($OpExQTR != -123456000 && $OpExQTR != 0) $OpExQTR_text = number_format($OpExQTR, 0, '.', ',');
	else $OpExQTR_text = "-";
	
	$totalOpIncTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (TTM)");
	if($totalOpIncTTM != -123456000 && $totalOpIncTTM != 0) $totalOpIncTTM_text = number_format($totalOpIncTTM, 0, '.', ',');
	else $totalOpIncTTM_text = "-";
	
	$totalOpIncQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (QTR)");
	if($totalOpIncQTR != -123456000 && $totalOpIncQTR != 0) $totalOpIncQTR_text = number_format($totalOpIncQTR, 0, '.', ',');
	else $totalOpIncQTR_text = "-";
	
	$otherIncExpTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (TTM)");
	if($otherIncExpTTM != -123456000 && $otherIncExpTTM != 0) $otherIncExpTTM_text = number_format($otherIncExpTTM, 0, '.', ',');
	else $otherIncExpTTM_text = "-";
	
	$otherIncExpQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (QTR)");
	if($otherIncExpQTR != -123456000 && $otherIncExpQTR != 0) $otherIncExpQTR_text = number_format($otherIncExpQTR, 0, '.', ',');
	else $otherIncExpQTR_text = "-";
	
	$EBITTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (TTM)");
	if($EBITTTM != -123456000 && $EBITTTM != 0) $EBITTTM_text = number_format($EBITTTM, 0, '.', ',');
	else $EBITTTM_text = "-";
	
	$EBITQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (QTR)");
	if($EBITQTR != -123456000 && $EBITQTR != 0) $EBITQTR_text = number_format($EBITQTR, 0, '.', ',');
	else $EBITQTR_text = "-";	

	$interestInvIncTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (TTM)");
	if($interestInvIncTTM != -123456000 && $interestInvIncTTM != 0) $interestInvIncTTM_text = number_format($interestInvIncTTM, 0, '.', ',');
	else $interestInvIncTTM_text = "-";
	
	$interestInvIncQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (QTR)");
	if($interestInvIncQTR != -123456000 && $interestInvIncQTR != 0) $interestInvIncQTR_text = number_format($interestInvIncQTR, 0, '.', ',');
	else $interestInvIncQTR_text = "-";
	
	$incomeTaxExpenseTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Income Tax Expense (TTM US$ Millions)");
	if($incomeTaxExpenseTTM != -123456000 && $incomeTaxExpenseTTM != 0) $incomeTaxExpenseTTM_text = number_format($incomeTaxExpenseTTM, 0, '.', ',');
	else $incomeTaxExpenseTTM_text = "-";
	
	$incomeTaxExpenseQTR_text = "-";
	
	$NNETTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (TTM)");
	if($NNETTM != -123456000 && $NNETTM != 0) $NNETTM_text = number_format($NNETTM, 0, '.', ',');
	else $NNETTM_text = "-";	

	$NNEQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (QTR)");
	if($NNEQTR != -123456000 && $NNEQTR != 0) $NNEQTR_text = number_format($NNEQTR, 0, '.', ',');
	else $NNEQTR_text = "-";	

	$netIncomeContOpsTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (TTM)");
	if($netIncomeContOpsTTM != -123456000 && $netIncomeContOpsTTM != 0) $netIncomeContOpsTTM_text = number_format($netIncomeContOpsTTM, 0, '.', ',');
	else $netIncomeContOpsTTM_text = "-";	

	$netIncomeContOpsQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (QTR)");
	if($netIncomeContOpsQTR != -123456000 && $netIncomeContOpsQTR != 0) $netIncomeContOpsQTR_text = number_format($netIncomeContOpsQTR, 0, '.', ',');
	else $netIncomeContOpsQTR_text = "-";			
	
	$extraordinaryTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (TTM)");
	if($extraordinaryTTM != -123456 && $extraordinaryTTM != 0) $extraordinaryTTM_text = number_format($extraordinaryTTM, 0, '.', ',');
	else $extraordinaryTTM_text = "-";	

	$extraordinaryQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (QTR)");
	if($extraordinaryQTR != -123456000 && $extraordinaryQTR != 0) $extraordinaryQTR_text = number_format($extraordinaryQTR, 0, '.', ',');
	else $extraordinaryQTR_text = "-";	

	$netIncomeTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Consolidated Net Income / (Loss) (TTM)");
	if($netIncomeTTM != -123456000 && $netIncomeTTM != 0) $netIncomeTTM_text = number_format($netIncomeTTM, 0, '.', ',');
	else $netIncomeTTM_text = "-";

	$netIncomeQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (US$ Millions)");
	if($netIncomeQTR != -123456000 && $netIncomeQTR != 0) $netIncomeQTR_text = number_format($netIncomeQTR, 0, '.', ',');
	else $netIncomeQTR_text = "-";
	
	// One-year back
	$revenueTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (TTM 1Y)");
	if($revenueTTM_1yr != -123456000 && $revenueTTM_1yr != 0) $revenueTTM_1yr_text = number_format($revenueTTM_1yr, 0, '.', ',');
	else $revenueTTM_1yr_text = "-";
	
	$revenueQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (QTR 1Q)");
	if($revenueQTR_1yr != -123456000 && $revenueQTR_1yr != 0) $revenueQTR_1yr_text = number_format($revenueQTR_1yr, 0, '.', ',');
	else $revenueQTR_1yr_text = "-";
	
	$COGSTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (TTM 1Y)");
	if($COGSTTM_1yr != -123456000 && $COGSTTM_1yr != 0) $COGSTTM_1yr_text = number_format($COGSTTM_1yr, 0, '.', ',');
	else $COGSTTM_1yr_text = "-";
	
	$COGSQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (QTR 1Q)");
	if($COGSQTR_1yr != -123456000 && $COGSQTR_1yr != 0) $COGSQTR_1yr_text = number_format($COGSQTR_1yr, 0, '.', ',');
	else $COGSQTR_1yr_text = "-";
	
	$grossProfitTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (TTM 1Y)");
	if($grossProfitTTM_1yr != -123456000 && $grossProfitTTM_1yr != 0) $grossProfitTTM_1yr_text = number_format($grossProfitTTM_1yr, 0, '.', ',');
	else $grossProfitTTM_1yr_text = "-";
	
	$grossProfitQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (QTR 1Q)");
	if($grossProfitQTR_1yr != -123456000 && $grossProfitQTR_1yr != 0) $grossProfitQTR_1yr_text = number_format($grossProfitQTR_1yr, 0, '.', ',');
	else $grossProfitQTR_1yr_text = "-";
	
	$RDTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research & Development (TTM US$ Millions) (TTM 1Y)");
	if($RDTTM_1yr != -123456000 && $RDTTM_1yr != 0) $RDTTM_1yr_text = number_format($RDTTM_1yr, 0, '.', ',');
	else $RDTTM_1yr_text = "-";
	
	$RDQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research and Development (US$ Millions) (QTR 1Q)");
	if($RDQTR_1yr != -123456000 && $RDQTR_1yr != 0) $RDQTR_1yr_text = number_format($RDQTR_1yr, 0, '.', ',');
	else $RDQTR_1yr_text = "-";
	
	$SGATTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SG&A (TTM US$ Millions) (TTM 1Y)");
	if($SGATTM_1yr != -123456000 && $SGATTM_1yr != 0) $SGATTM_1yr_text = number_format($SGATTM_1yr, 0, '.', ',');
	else $SGATTM_1yr_text = "-";
	
	$SGAQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SGA (US$ Millions) (QTR 1Q)");
	if($SGAQTR_1yr != -123456000 && $SGAQTR_1yr != 0) $SGAQTR_1yr_text = number_format($SGAQTR_1yr, 0, '.', ',');
	else $SGAQTR_1yr_text = "-";
	
	$otherOpExTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (TTM 1Y)");
	if($otherOpExTTM_1yr != -123456000 && $otherOpExTTM_1yr != 0) $otherOpExTTM_1yr_text = number_format($otherOpExTTM_1yr, 0, '.', ',');
	else $otherOpExTTM_1yr_text = "-";
	
	$otherOpExQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (QTR 1Q)");
	if($otherOpExQTR_1yr != -123456000 && $otherOpExQTR_1yr != 0) $otherOpExQTR_1yr_text = number_format($otherOpExQTR_1yr, 0, '.', ',');
	else $otherOpExQTR_1yr_text = "-";
	
	$OpExTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (TTM 1Y)");
	if($OpExTTM_1yr != -123456000 && $OpExTTM_1yr != 0) $OpExTTM_1yr_text = number_format($OpExTTM_1yr, 0, '.', ',');
	else $OpExTTM_1yr_text = "-";
	
	$OpExQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (QTR 1Q)");
	if($OpExQTR_1yr != -123456000 && $OpExQTR_1yr != 0) $OpExQTR_1yr_text = number_format($OpExQTR_1yr, 0, '.', ',');
	else $OpExQTR_1yr_text = "-";
	
	$totalOpIncTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (TTM 1Y)");
	if($totalOpIncTTM_1yr != -123456000 && $totalOpIncTTM_1yr != 0) $totalOpIncTTM_1yr_text = number_format($totalOpIncTTM_1yr, 0, '.', ',');
	else $totalOpIncTTM_1yr_text = "-";
	
	$totalOpIncQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (QTR 1Q)");
	if($totalOpIncQTR_1yr != -123456000 && $totalOpIncQTR_1yr != 0) $totalOpIncQTR_1yr_text = number_format($totalOpIncQTR_1yr, 0, '.', ',');
	else $totalOpIncQTR_1yr_text = "-";
	
	$otherIncExpTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (TTM 1Y)");
	if($otherIncExpTTM_1yr != -123456000 && $otherIncExpTTM_1yr != 0) $otherIncExpTTM_1yr_text = number_format($otherIncExpTTM_1yr, 0, '.', ',');
	else $otherIncExpTTM_1yr_text = "-";
	
	$otherIncExpQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (QTR) (QTR 1Q)");
	if($otherIncExpQTR_1yr != -123456000 && $otherIncExpQTR_1yr != 0) $otherIncExpQTR_1yr_text = number_format($otherIncExpQTR_1yr, 0, '.', ',');
	else $otherIncExpQTR_1yr_text = "-";
	
	$EBITTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (TTM 1Y)");
	if($EBITTTM_1yr != -123456000 && $EBITTTM_1yr != 0) $EBITTTM_1yr_text = number_format($EBITTTM_1yr, 0, '.', ',');
	else $EBITTTM_1yr_text = "-";
	
	$EBITQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (QTR 1Q)");
	if($EBITQTR_1yr != -123456000 && $EBITQTR_1yr != 0) $EBITQTR_1yr_text = number_format($EBITQTR_1yr, 0, '.', ',');
	else $EBITQTR_1yr_text = "-";	

	$interestInvIncTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (TTM 1Y)");
	if($interestInvIncTTM_1yr != -123456000 && $interestInvIncTTM_1yr != 0) $interestInvIncTTM_1yr_text = number_format($interestInvIncTTM_1yr, 0, '.', ',');
	else $interestInvIncTTM_1yr_text = "-";
	
	$interestInvIncQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (QTR 1Q)");
	if($interestInvIncQTR_1yr != -123456000 && $interestInvIncQTR_1yr != 0) $interestInvIncQTR_1yr_text = number_format($interestInvIncQTR_1yr, 0, '.', ',');
	else $interestInvIncQTR_1yr_text = "-";
	
	$incomeTaxExpenseTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Income Tax Expense (TTM US$ Millions) (TTM 1Y)");
	if($incomeTaxExpenseTTM_1yr != -123456000 && $incomeTaxExpenseTTM_1yr != 0) $incomeTaxExpenseTTM_1yr_text = number_format($incomeTaxExpenseTTM_1yr, 0, '.', ',');
	else $incomeTaxExpenseTTM_1yr_text = "-";
	
	$incomeTaxExpenseQTR_1yr_text = "-";
	
	$NNETTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (TTM 1Y)");
	if($NNETTM_1yr != -123456000 && $NNETTM_1yr != 0) $NNETTM_1yr_text = number_format($NNETTM_1yr, 0, '.', ',');
	else $NNETTM_1yr_text = "-";	

	$NNEQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (QTR 1Q)");
	if($NNEQTR_1yr != -123456000 && $NNEQTR_1yr != 0) $NNEQTR_1yr_text = number_format($NNEQTR_1yr, 0, '.', ',');
	else $NNEQTR_1yr_text = "-";	

	$netIncomeContOpsTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (TTM 1Y)");
	if($netIncomeContOpsTTM_1yr != -123456000 && $netIncomeContOpsTTM_1yr != 0) $netIncomeContOpsTTM_1yr_text = number_format($netIncomeContOpsTTM_1yr, 0, '.', ',');
	else $netIncomeContOpsTTM_1yr_text = "-";	

	$netIncomeContOpsQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (QTR 1Q)");
	if($netIncomeContOpsQTR_1yr != -123456000 && $netIncomeContOpsQTR_1yr != 0) $netIncomeContOpsQTR_1yr_text = number_format($netIncomeContOpsQTR_1yr, 0, '.', ',');
	else $netIncomeContOpsQTR_1yr_text = "-";			
	
	$extraordinaryTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (TTM 1Y)");
	if($extraordinaryTTM_1yr != -123456000 && $extraordinaryTTM_1yr != 0) $extraordinaryTTM_1yr_text = number_format($extraordinaryTTM_1yr, 0, '.', ',');
	else $extraordinaryTTM_1yr_text = "-";	

	$extraordinaryQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (QTR 1Q)");
	if($extraordinaryQTR_1yr != -123456000 && $extraordinaryQTR_1yr != 0) $extraordinaryQTR_1yr_text = number_format($extraordinaryQTR_1yr, 0, '.', ',');
	else $extraordinaryQTR_1yr_text = "-";	

	$netIncomeTTM_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Consolidated Net Income / (Loss) (TTM 1Y)");
	if($netIncomeTTM_1yr != -123456000 && $netIncomeTTM_1yr != 0) $netIncomeTTM_1yr_text = number_format($netIncomeTTM_1yr, 0, '.', ',');
	else $netIncomeTTM_1yr_text = "-";

	$netIncomeQTR_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (US$ Millions)");
	if($netIncomeQTR_1yr != -123456000 && $netIncomeQTR_1yr != 0) $netIncomeQTR_1yr_text = number_format($netIncomeQTR_1yr, 0, '.', ',');
	else $netIncomeQTR_1yr_text = "-";
	
	// Two-years
	$revenueTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (TTM 2Y)");
	if($revenueTTM_2yr != -123456000 && $revenueTTM_2yr != 0) $revenueTTM_2yr_text = number_format($revenueTTM_2yr, 0, '.', ',');
	else $revenueTTM_2yr_text = "-";
	
	$revenueQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Revenue (QTR 2Q)");
	if($revenueQTR_2yr != -123456000 && $revenueQTR_2yr != 0) $revenueQTR_2yr_text = number_format($revenueQTR_2yr, 0, '.', ',');
	else $revenueQTR_2yr_text = "-";
	
	$COGSTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (TTM 2Y)");
	if($COGSTTM_2yr != -123456000 && $COGSTTM_2yr != 0) $COGSTTM_2yr_text = number_format($COGSTTM_2yr, 0, '.', ',');
	else $COGSTTM_2yr_text = "-";
	
	$COGSQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Cost of Revenue (QTR 2Q)");
	if($COGSQTR_2yr != -123456000 && $COGSQTR_2yr != 0) $COGSQTR_2yr_text = number_format($COGSQTR_2yr, 0, '.', ',');
	else $COGSQTR_2yr_text = "-";
	
	$grossProfitTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (TTM 2Y)");
	if($grossProfitTTM_2yr != -123456000 && $grossProfitTTM_2yr != 0) $grossProfitTTM_2yr_text = number_format($grossProfitTTM_2yr, 0, '.', ',');
	else $grossProfitTTM_2yr_text = "-";
	
	$grossProfitQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Gross Profit (QTR 2Q)");
	if($grossProfitQTR_2yr != -123456000 && $grossProfitQTR_2yr != 0) $grossProfitQTR_2yr_text = number_format($grossProfitQTR_2yr, 0, '.', ',');
	else $grossProfitQTR_2yr_text = "-";
	
	$RDTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research & Development (TTM US$ Millions) (TTM 2Y)");
	if($RDTTM_2yr != -123456000 && $RDTTM_2yr != 0) $RDTTM_2yr_text = number_format($RDTTM_2yr, 0, '.', ',');
	else $RDTTM_2yr_text = "-";
	
	$RDQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research and Development (US$ Millions) (QTR 2Q)");
	if($RDQTR_2yr != -123456000 && $RDQTR_2yr != 0) $RDQTR_2yr_text = number_format($RDQTR_2yr, 0, '.', ',');
	else $RDQTR_2yr_text = "-";
	
	$SGATTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SG&A (TTM US$ Millions) (TTM 2Y)");
	if($SGATTM_2yr != -123456000 && $SGATTM_2yr != 0) $SGATTM_2yr_text = number_format($SGATTM_2yr, 0, '.', ',');
	else $SGATTM_2yr_text = "-";
	
	$SGAQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SGA (US$ Millions (QTR 2Q))");
	if($SGAQTR_2yr != -123456000 && $SGAQTR_2yr != 0) $SGAQTR_2yr_text = number_format($SGAQTR_2yr, 0, '.', ',');
	else $SGAQTR_2yr_text = "-";
	
	$otherOpExTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (TTM 2Y)");
	if($otherOpExTTM_2yr != -123456000 && $otherOpExTTM_2yr != 0) $otherOpExTTM_2yr_text = number_format($otherOpExTTM_2yr, 0, '.', ',');
	else $otherOpExTTM_2yr_text = "-";
	
	$otherOpExQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (QTR 2Q)");
	if($otherOpExQTR_2yr != -123456000 && $otherOpExQTR_2yr != 0) $otherOpExQTR_2yr_text = number_format($otherOpExQTR_2yr, 0, '.', ',');
	else $otherOpExQTR_2yr_text = "-";
	
	$OpExTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (TTM 2Y)");
	if($OpExTTM_2yr != -123456000 && $OpExTTM_2yr != 0) $OpExTTM_2yr_text = number_format($OpExTTM_2yr, 0, '.', ',');
	else $OpExTTM_2yr_text = "-";
	
	$OpExQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Expenses (QTR 2Q)");
	if($OpExQTR_2yr != -123456000 && $OpExQTR_2yr != 0) $OpExQTR_2yr_text = number_format($OpExQTR_2yr, 0, '.', ',');
	else $OpExQTR_2yr_text = "-";
	
	$totalOpIncTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (TTM 2Y)");
	if($totalOpIncTTM_2yr != -123456000 && $totalOpIncTTM_2yr != 0) $totalOpIncTTM_2yr_text = number_format($totalOpIncTTM_2yr, 0, '.', ',');
	else $totalOpIncTTM_2yr_text = "-";
	
	$totalOpIncQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (QTR 2Q)");
	if($totalOpIncQTR_2yr != -123456000 && $totalOpIncQTR_2yr != 0) $totalOpIncQTR_2yr_text = number_format($totalOpIncQTR_2yr, 0, '.', ',');
	else $totalOpIncQTR_2yr_text = "-";
	
	$otherIncExpTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (TTM 2Y)");
	if($otherIncExpTTM_2yr != -123456000 && $otherIncExpTTM_2yr != 0) $otherIncExpTTM_2yr_text = number_format($otherIncExpTTM_2yr, 0, '.', ',');
	else $otherIncExpTTM_2yr_text = "-";
	
	$otherIncExpQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (QTR) (QTR 2Q)");
	if($otherIncExpQTR_2yr != -123456000 && $otherIncExpQTR_2yr != 0) $otherIncExpQTR_2yr_text = number_format($otherIncExpQTR_2yr, 0, '.', ',');
	else $otherIncExpQTR_2yr_text = "-";
	
	$EBITTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (TTM 2Y)");
	if($EBITTTM_2yr != -123456000 && $EBITTTM_2yr != 0) $EBITTTM_2yr_text = number_format($EBITTTM_2yr, 0, '.', ',');
	else $EBITTTM_2yr_text = "-";
	
	$EBITQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (QTR 2Q)");
	if($EBITQTR_2yr != -123456000 && $EBITQTR_2yr != 0) $EBITQTR_2yr_text = number_format($EBITQTR_2yr, 0, '.', ',');
	else $EBITQTR_2yr_text = "-";	

	$interestInvIncTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (TTM 2Y)");
	if($interestInvIncTTM_2yr != -123456000 && $interestInvIncTTM_2yr != 0) $interestInvIncTTM_2yr_text = number_format($interestInvIncTTM_2yr, 0, '.', ',');
	else $interestInvIncTTM_2yr_text = "-";
	
	$interestInvIncQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (QTR 2Q)");
	if($interestInvIncQTR_2yr != -123456000 && $interestInvIncQTR_2yr != 0) $interestInvIncQTR_2yr_text = number_format($interestInvIncQTR_2yr, 0, '.', ',');
	else $interestInvIncQTR_2yr_text = "-";
	
	$incomeTaxExpenseTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Income Tax Expense (TTM US$ Millions) (TTM 2Y)");
	if($incomeTaxExpenseTTM_2yr != -123456000 && $incomeTaxExpenseTTM_2yr != 0) $incomeTaxExpenseTTM_2yr_text = number_format($incomeTaxExpenseTTM_2yr, 0, '.', ',');
	else $incomeTaxExpenseTTM_2yr_text = "-";
	
	$incomeTaxExpenseQTR_2yr_text = "-";
	
	$NNETTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (TTM 2Y)");
	if($NNETTM_2yr != -123456000 && $NNETTM_2yr != 0) $NNETTM_2yr_text = number_format($NNETTM_2yr, 0, '.', ',');
	else $NNETTM_2yr_text = "-";	

	$NNEQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (QTR 2Q)");
	if($NNEQTR_2yr != -123456000 && $NNEQTR_2yr != 0) $NNEQTR_2yr_text = number_format($NNEQTR_2yr, 0, '.', ',');
	else $NNEQTR_2yr_text = "-";	

	$netIncomeContOpsTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (TTM 2Y)");
	if($netIncomeContOpsTTM_2yr != -123456000 && $netIncomeContOpsTTM_2yr != 0) $netIncomeContOpsTTM_2yr_text = number_format($netIncomeContOpsTTM_2yr, 0, '.', ',');
	else $netIncomeContOpsTTM_2yr_text = "-";	

	$netIncomeContOpsQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income / (Loss) Continuing Operations (QTR 2Q)");
	if($netIncomeContOpsQTR_2yr != -123456000 && $netIncomeContOpsQTR_2yr != 0) $netIncomeContOpsQTR_2yr_text = number_format($netIncomeContOpsQTR_2yr, 0, '.', ',');
	else $netIncomeContOpsQTR_2yr_text = "-";			
	
	$extraordinaryTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (TTM 2Y)");
	if($extraordinaryTTM_2yr != -123456000 && $extraordinaryTTM_2yr != 0) $extraordinaryTTM_2yr_text = number_format($extraordinaryTTM_2yr, 0, '.', ',');
	else $extraordinaryTTM_2yr_text = "-";	

	$extraordinaryQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (QTR 2Q)");
	if($extraordinaryQTR_2yr != -123456000 && $extraordinaryQTR_2yr != 0) $extraordinaryQTR_2yr_text = number_format($extraordinaryQTR_2yr, 0, '.', ',');
	else $extraordinaryQTR_2yr_text = "-";	

	$netIncomeTTM_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Consolidated Net Income / (Loss) (TTM 2Y)");
	if($netIncomeTTM_2yr != -123456000 && $netIncomeTTM_2yr != 0) $netIncomeTTM_2yr_text = number_format($netIncomeTTM_2yr, 0, '.', ',');
	else $netIncomeTTM_2yr_text = "-";

	$netIncomeQTR_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (US$ Millions)");
	if($netIncomeQTR_2yr != -123456000 && $netIncomeQTR_2yr != 0) $netIncomeQTR_2yr_text = number_format($netIncomeQTR_2yr, 0, '.', ',');
	else $netIncomeQTR_2yr_text = "-";
	
	
?>		