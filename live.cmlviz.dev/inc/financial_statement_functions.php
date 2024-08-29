<?php
	// This function returns all of the income statement data 
	function getIncomeStatementData($ticker)
	{
		$revenueTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Revenue (TTM US$ Millions)");
		if($revenueTTM != -123456 && $revenueTTM != 0) $revenueTTM_text = number_format($revenueTTM, 0, '.', ',');
		else $revenueTTM_text = "-";
		
		$revenueQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Revenue (US$ Millions)");
		if($revenueQTR != -123456 && $revenueQTR != 0) $revenueQTR_text = number_format($revenueQTR, 0, '.', ',');
		else $revenueQTR_text = "-";
		
		$COGSTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cost Of Goods Sold (TTM US$ Millions)");
		if($COGSTTM != -123456 && $COGSTTM != 0) $COGSTTM_text = number_format($COGSTTM, 0, '.', ',');
		else $COGSTTM_text = "-";
		
		$COGSQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Cost Of Goods Sold (QTR US$ Millions)");
		if($COGSQTR != -123456 && $COGSQTR != 0) $COGSQTR_text = number_format($COGSQTR, 0, '.', ',');
		else $COGSQTR_text = "-";
		
		$grossProfitTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Gross Profit (TTM)");
		if($grossProfitTTM != -123456 && $grossProfitTTM != 0) $grossProfitTTM_text = number_format($grossProfitTTM, 0, '.', ',');
		else $grossProfitTTM_text = "-";
		
		if($revenueQTR != -123456 && $COGSQTR != -123456)
		{
			$grossProfitQTR = $revenueQTR - $COGSQTR;
			$grossProfitQTR_text = number_format($grossProfitQTR, 0, '.', ',');
		}
		else $grossProfitQTR_text = "-";
		
		$RDTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research & Development (TTM US$ Millions)");
		if($RDTTM != -123456 && $RDTTM != 0) $RDTTM_text = number_format($RDTTM, 0, '.', ',');
		else $RDTTM_text = "-";
		
		$RDQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Research and Development (US$ Millions)");
		if($RDQTR != -123456 && $RDQTR != 0) $RDQTR_text = number_format($RDQTR, 0, '.', ',');
		else $RDQTR_text = "-";
		
		$SGATTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SG&A (TTM US$ Millions)");
		if($SGATTM != -123456 && $SGATTM != 0) $SGATTM_text = number_format($SGATTM, 0, '.', ',');
		else $SGATTM_text = "-";
		
		$SGAQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "SGA (US$ Millions)");
		if($SGAQTR != -123456 && $SGAQTR != 0) $SGAQTR_text = number_format($SGAQTR, 0, '.', ',');
		else $SGAQTR_text = "-";
		
		$otherOpExTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (TTM)");
		if($otherOpExTTM != -123456 && $otherOpExTTM != 0) $otherOpExTTM_text = number_format($otherOpExTTM, 0, '.', ',');
		else $otherOpExTTM_text = "-";
		
		$otherOpExQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Operating Expenses (QTR)");
		if($otherOpExQTR != -123456 && $otherOpExQTR != 0) $otherOpExQTR_text = number_format($otherOpExQTR, 0, '.', ',');
		else $otherOpExQTR_text = "-";
		
		$OpExTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Operating Expenses (TTM US$ Millions)");
		if($OpExTTM != -123456 && $OpExTTM != 0) $OpExTTM_text = number_format($OpExTTM, 0, '.', ',');
		else $OpExTTM_text = "-";
		
		$OpExQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Operating Expenses (QTR US$ Millions)");
		if($OpExQTR != -123456 && $OpExQTR != 0) $OpExQTR_text = number_format($OpExQTR, 0, '.', ',');
		else $OpExQTR_text = "-";
		
		$totalOpIncTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (TTM)");
		if($totalOpIncTTM != -123456 && $totalOpIncTTM != 0) $totalOpIncTTM_text = number_format($totalOpIncTTM, 0, '.', ',');
		else $totalOpIncTTM_text = "-";
		
		$totalOpIncQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Total Operating Income (QTR)");
		if($totalOpIncQTR != -123456 && $totalOpIncQTR != 0) $totalOpIncQTR_text = number_format($totalOpIncQTR, 0, '.', ',');
		else $totalOpIncQTR_text = "-";
		
		$otherIncExpTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (TTM)");
		if($otherIncExpTTM != -123456 && $otherIncExpTTM != 0) $otherIncExpTTM_text = number_format($otherIncExpTTM, 0, '.', ',');
		else $otherIncExpTTM_text = "-";
		
		$otherIncExpQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Income / (Expense), net (TTM)");
		if($otherIncExpQTR != -123456 && $otherIncExpQTR != 0) $otherIncExpQTR_text = number_format($otherIncExpQTR, 0, '.', ',');
		else $otherIncExpQTR_text = "-";
		
		$EBITTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (TTM)");
		if($EBITTTM != -123456 && $EBITTTM != 0) $EBITTTM_text = number_format($EBITTTM, 0, '.', ',');
		else $EBITTTM_text = "-";
		
		$EBITQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "EBIT (QTR)");
		if($EBITQTR != -123456 && $EBITQTR != 0) $EBITQTR_text = number_format($EBITQTR, 0, '.', ',');
		else $EBITQTR_text = "-";	

		$interestInvIncTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (TTM)");
		if($interestInvIncTTM != -123456 && $interestInvIncTTM != 0) $interestInvIncTTM_text = number_format($interestInvIncTTM, 0, '.', ',');
		else $interestInvIncTTM_text = "-";
		
		$interestInvIncQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Interest & Investment Income (QTR)");
		if($interestInvIncQTR != -123456 && $interestInvIncQTR != 0) $interestInvIncQTR_text = number_format($interestInvIncQTR, 0, '.', ',');
		else $interestInvIncQTR_text = "-";
		
		$incomeTaxExpenseTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Income Tax Expense (TTM US$ Millions)");
		if($incomeTaxExpenseTTM != -123456 && $incomeTaxExpenseTTM != 0) $incomeTaxExpenseTTM_text = number_format($incomeTaxExpenseTTM, 0, '.', ',');
		else $incomeTaxExpenseTTM_text = "-";
		
		$incomeTaxExpenseQTR_text = "-";
		
		$NNETTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (TTM)");
		if($NNETTM != -123456 && $NNETTM != 0) $NNETTM_text = number_format($NNETTM, 0, '.', ',');
		else $NNETTM_text = "-";	

		$NNEQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Nonoperating Expense (NNE) (QTR)");
		if($NNEQTR != -123456 && $NNEQTR != 0) $NNEQTR_text = number_format($NNEQTR, 0, '.', ',');
		else $NNEQTR_text = "-";	

		$netIncomeContOpsTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "income_cont_oper (TTM)");
		if($netIncomeContOpsTTM != -123456 && $netIncomeContOpsTTM != 0) $netIncomeContOpsTTM_text = number_format($netIncomeContOpsTTM, 0, '.', ',');
		else $netIncomeContOpsTTM_text = "-";	

		$netIncomeContOpsQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "income_cont_oper (QTR)");
		if($netIncomeContOpsQTR != -123456 && $netIncomeContOpsQTR != 0) $netIncomeContOpsQTR_text = number_format($netIncomeContOpsQTR, 0, '.', ',');
		else $netIncomeContOpsQTR_text = "-";			
		

		$extraordinaryTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (TTM)");
		if($extraordinaryTTM != -123456 && $extraordinaryTTM != 0) $extraordinaryTTM_text = number_format($extraordinaryTTM, 0, '.', ',');
		else $extraordinaryTTM_text = "-";	

		$extraordinaryQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Extraordinary Income / (Loss), net (QTR)");
		if($extraordinaryQTR != -123456 && $extraordinaryQTR != 0) $extraordinaryQTR_text = number_format($extraordinaryQTR, 0, '.', ',');
		else $extraordinaryQTR_text = "-";	

		$netIncomeTTM = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (TTM US$ Millions)");
		if($netIncomeTTM != -123456 && $netIncomeTTM != 0) $netIncomeTTM_text = number_format($netIncomeTTM, 0, '.', ',');
		else $netIncomeTTM_text = "-";

		$netIncomeQTR = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Income (US$ Millions)");
		if($netIncomeQTR != -123456 && $netIncomeQTR != 0) $netIncomeQTR_text = number_format($netIncomeQTR, 0, '.', ',');
		else $netIncomeQTR_text = "-";	

	}
		
?>