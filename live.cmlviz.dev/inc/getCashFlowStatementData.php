<?php	

	$depreciationTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (TTM)");
	if($depreciationTTMCF != -123456000 && $depreciationTTMCF != 0) $depreciationTTMCF_text = number_format($depreciationTTMCF, 0, '.', ',');
	else $depreciationTTMCF_text = "-";
	
	$depreciationQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (QTR)");
	if($depreciationQTRCF != -123456000 && $depreciationQTRCF != 0) $depreciationQTRCF_text = number_format($depreciationQTRCF, 0, '.', ',');
	else $depreciationQTRCF_text = "-";
	
	$amortizationTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (TTM)");
	if($amortizationTTMCF != -123456000 && $amortizationTTMCF != 0) $amortizationTTMCF_text = number_format($amortizationTTMCF, 0, '.', ',');
	else $amortizationTTMCF_text = "-";
	
	$amortizationQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (QTR)");
	if($amortizationQTRCF != -123456000 && $amortizationQTRCF != 0) $amortizationQTRCF_text = number_format($amortizationQTRCF, 0, '.', ',');
	else $amortizationQTRCF_text = "-";
	
	$nonCashAdjTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (TTM)");
	if($nonCashAdjTTMCF != -123456000 && $nonCashAdjTTMCF != 0) $nonCashAdjTTMCF_text = number_format($nonCashAdjTTMCF, 0, '.', ',');
	else $nonCashAdjTTMCF_text = "-";
	
	$nonCashAdjQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (QTR)");
	if($nonCashAdjQTRCF != -123456000 && $nonCashAdjQTRCF != 0) $nonCashAdjQTRCF_text = number_format($nonCashAdjQTRCF, 0, '.', ',');
	else $nonCashAdjQTRCF_text = "-";
	
	$changesInLiabilitiesTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (TTM)");
	if($changesInLiabilitiesTTMCF != -123456000 && $changesInLiabilitiesTTMCF != 0) $changesInLiabilitiesTTMCF_text = number_format($changesInLiabilitiesTTMCF, 0, '.', ',');
	else $changesInLiabilitiesTTMCF_text = "-";

	$changesInLiabilitiesQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (QTR)");
	if($changesInLiabilitiesQTRCF != -123456000 && $changesInLiabilitiesQTRCF != 0) $changesInLiabilitiesQTRCF_text = number_format($changesInLiabilitiesQTRCF, 0, '.', ',');
	else $changesInLiabilitiesQTRCF_text = "-";
	
	$cashFlowFromOperationsTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (TTM)");
	if($cashFlowFromOperationsTTMCF != -123456000 && $cashFlowFromOperationsTTMCF != 0) $cashFlowFromOperationsTTMCF_text = number_format($cashFlowFromOperationsTTMCF, 0, '.', ',');
	else $cashFlowFromOperationsTTMCF_text = "-";
	
	$cashFlowFromOperationsQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (QTR)");
	if($cashFlowFromOperationsQTRCF != -123456000 && $cashFlowFromOperationsQTRCF != 0) $cashFlowFromOperationsQTRCF_text = number_format($cashFlowFromOperationsQTRCF, 0, '.', ',');
	else $cashFlowFromOperationsQTRCF_text = "-";
	
	$capExTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (TTM)");
	if($capExTTMCF != -123456000 && $capExTTMCF != 0) $capExTTMCF_text = number_format($capExTTMCF, 0, '.', ',');
	else $capExTTMCF_text = "-";
	
	$capExQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (QTR)");
	if($capExQTRCF != -123456000 && $capExQTRCF != 0) $capExQTRCF_text = number_format($capExQTRCF, 0, '.', ',');
	else $capExQTRCF_text = "-";
	
	$purchaseOfInvestmentsTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (TTM)");
	if($purchaseOfInvestmentsTTMCF != -123456000 && $purchaseOfInvestmentsTTMCF != 0) $purchaseOfInvestmentsTTMCF_text = number_format($purchaseOfInvestmentsTTMCF, 0, '.', ',');
	else $purchaseOfInvestmentsTTMCF_text = "-";	
	
	$purchaseOfInvestmentsQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (QTR)");
	if($purchaseOfInvestmentsQTRCF != -123456000 && $purchaseOfInvestmentsQTRCF != 0) $purchaseOfInvestmentsQTRCF_text = number_format($purchaseOfInvestmentsQTRCF, 0, '.', ',');
	else $purchaseOfInvestmentsQTRCF_text = "-";	
	
	$saleOfInvestmentsTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (TTM)");
	if($saleOfInvestmentsTTMCF != -123456000 && $saleOfInvestmentsTTMCF != 0) $saleOfInvestmentsTTMCF_text = number_format($saleOfInvestmentsTTMCF, 0, '.', ',');
	else $saleOfInvestmentsTTMCF_text = "-";
	
	$saleOfInvestmentsQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (QTR)");
	if($saleOfInvestmentsQTRCF != -123456000 && $saleOfInvestmentsQTRCF != 0) $saleOfInvestmentsQTRCF_text = number_format($saleOfInvestmentsQTRCF, 0, '.', ',');
	else $saleOfInvestmentsQTRCF_text = "-";	
	
	$otherInvestingActTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (TTM)");
	if($otherInvestingActTTMCF != -123456000 && $otherInvestingActTTMCF != 0) $otherInvestingActTTMCF_text = number_format($otherInvestingActTTMCF, 0, '.', ',');
	else $otherInvestingActTTMCF_text = "-";
	
	$otherInvestingActQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (QTR)");
	if($otherInvestingActQTRCF != -123456000 && $otherInvestingActQTRCF != 0) $otherInvestingActQTRCF_text = number_format($otherInvestingActQTRCF, 0, '.', ',');
	else $otherInvestingActQTRCF_text = "-";
	
	$netCashFromInvTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (TTM)");
	if($netCashFromInvTTMCF != -123456000 && $netCashFromInvTTMCF != 0) $netCashFromInvTTMCF_text = number_format($netCashFromInvTTMCF, 0, '.', ',');
	else $netCashFromInvTTMCF_text = "-";
	
	$netCashFromInvQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (QTR)");
	if($netCashFromInvQTRCF != -123456000 && $netCashFromInvQTRCF != 0) $netCashFromInvQTRCF_text = number_format($netCashFromInvQTRCF, 0, '.', ',');
	else $netCashFromInvQTRCF_text = "-";
	
	$dividendsPaidTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (TTM)");
	if($dividendsPaidTTMCF != -123456000 && $dividendsPaidTTMCF != 0) $dividendsPaidTTMCF_text = number_format($dividendsPaidTTMCF, 0, '.', ',');
	else $dividendsPaidTTMCF_text = "-";	
	
	$dividendsPaidQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (QTR)");
	if($dividendsPaidQTRCF != -123456000 && $dividendsPaidQTRCF != 0) $dividendsPaidQTRCF_text = number_format($dividendsPaidQTRCF, 0, '.', ',');
	else $dividendsPaidQTRCF_text = "-";
	
	$stockRepurchasesTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (TTM US$ Millions)");
	if($stockRepurchasesTTMCF != -123456000 && $stockRepurchasesTTMCF != 0) $stockRepurchasesTTMCF_text = number_format($stockRepurchasesTTMCF, 0, '.', ',');
	else $stockRepurchasesTTMCF_text = "-";
	
	$stockRepurchasesQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (US$ Millions)");
	if($stockRepurchasesQTRCF != -123456000 && $stockRepurchasesQTRCF != 0) $stockRepurchasesQTRCF_text = number_format($stockRepurchasesQTRCF, 0, '.', ',');
	else $stockRepurchasesQTRCF_text = "-";
	
	$issuanceOfCommonEquityTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (TTM)");
	if($issuanceOfCommonEquityTTMCF != -123456000 && $issuanceOfCommonEquityTTMCF != 0) $issuanceOfCommonEquityTTMCF_text = number_format($issuanceOfCommonEquityTTMCF, 0, '.', ',');
	else $issuanceOfCommonEquityTTMCF_text = "-";
	
	$issuanceOfCommonEquityQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (QTR)");
	if($issuanceOfCommonEquityQTRCF != -123456000 && $issuanceOfCommonEquityQTRCF != 0) $issuanceOfCommonEquityQTRCF_text = number_format($issuanceOfCommonEquityQTRCF, 0, '.', ',');
	else $issuanceOfCommonEquityQTRCF_text = "-";	
	
	$issuanceOfDebtTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (TTM)");
	if($issuanceOfDebtTTMCF != -123456000 && $issuanceOfDebtTTMCF != 0) $issuanceOfDebtTTMCF_text = number_format($issuanceOfDebtTTMCF, 0, '.', ',');
	else $issuanceOfDebtTTMCF_text = "-";	
	
	$issuanceOfDebtQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (QTR)");
	if($issuanceOfDebtQTRCF != -123456000 && $issuanceOfDebtQTRCF != 0) $issuanceOfDebtQTRCF_text = number_format($issuanceOfDebtQTRCF, 0, '.', ',');
	else $issuanceOfDebtQTRCF_text = "-";		
	
	$repaymentOfDebtTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (TTM)");
	if($repaymentOfDebtTTMCF != -123456000 && $repaymentOfDebtTTMCF != 0) $repaymentOfDebtTTMCF_text = number_format($repaymentOfDebtTTMCF, 0, '.', ',');
	else $repaymentOfDebtTTMCF_text = "-";		
	
	$repaymentOfDebtQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (QTR)");
	if($repaymentOfDebtQTRCF != -123456000 && $repaymentOfDebtQTRCF != 0) $repaymentOfDebtQTRCF_text = number_format($repaymentOfDebtQTRCF, 0, '.', ',');
	else $repaymentOfDebtQTRCF_text = "-";		
	
	$otherFinancingActivityTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (TTM)");
	if($otherFinancingActivityTTMCF != -123456000 && $otherFinancingActivityTTMCF != 0) $otherFinancingActivityTTMCF_text = number_format($otherFinancingActivityTTMCF, 0, '.', ',');
	else $otherFinancingActivityTTMCF_text = "-";
	
	$otherFinancingActivityQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (QTR)");
	if($otherFinancingActivityQTRCF != -123456000 && $otherFinancingActivityQTRCF != 0) $otherFinancingActivityQTRCF_text = number_format($otherFinancingActivityQTRCF, 0, '.', ',');
	else $otherFinancingActivityQTRCF_text = "-";	
	
	$netCashFromFinancingTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (TTM)");
	if($netCashFromFinancingTTMCF != -123456000 && $netCashFromFinancingTTMCF != 0) $netCashFromFinancingTTMCF_text = number_format($netCashFromFinancingTTMCF, 0, '.', ',');
	else $netCashFromFinancingTTMCF_text = "-";
	
	$netCashFromFinancingQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (QTR)");
	if($netCashFromFinancingQTRCF != -123456000 && $netCashFromFinancingQTRCF != 0) $netCashFromFinancingQTRCF_text = number_format($netCashFromFinancingQTRCF, 0, '.', ',');
	else $netCashFromFinancingQTRCF_text = "-";
	
	$effectOfRateChangesTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (TTM)");
	if($effectOfRateChangesTTMCF != -123456000 && $effectOfRateChangesTTMCF != 0) $effectOfRateChangesTTMCF_text = number_format($effectOfRateChangesTTMCF, 0, '.', ',');
	else $effectOfRateChangesTTMCF_text = "-";
	
	$effectOfRateChangesQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (QTR)");
	if($effectOfRateChangesQTRCF != -123456000 && $effectOfRateChangesQTRCF != 0) $effectOfRateChangesQTRCF_text = number_format($effectOfRateChangesQTRCF, 0, '.', ',');
	else $effectOfRateChangesQTRCF_text = "-";

	
	$netChangeInCashTTMCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (TTM)");
	if($netChangeInCashTTMCF != -123456000 && $netChangeInCashTTMCF != 0) $netChangeInCashTTMCF_text = number_format($netChangeInCashTTMCF, 0, '.', ',');
	else $netChangeInCashTTMCF_text = "-";
	
	$netChangeInCashQTRCF = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (QTR)");
	if($netChangeInCashQTRCF != -123456000 && $netChangeInCashQTRCF != 0) $netChangeInCashQTRCF_text = number_format($netChangeInCashQTRCF, 0, '.', ',');
	else $netChangeInCashQTRCF_text = "-";
	
	// One-year back
	$depreciationTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (TTM 1Y)");
	if($depreciationTTMCF_1yr != -123456000 && $depreciationTTMCF_1yr != 0) $depreciationTTMCF_1yr_text = number_format($depreciationTTMCF_1yr, 0, '.', ',');
	else $depreciationTTMCF_1yr_text = "-";
	
	$depreciationQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (QTR 1Q)");
	if($depreciationQTRCF_1yr != -123456000 && $depreciationQTRCF_1yr != 0) $depreciationQTRCF_1yr_text = number_format($depreciationQTRCF_1yr, 0, '.', ',');
	else $depreciationQTRCF_1yr_text = "-";
	
	$amortizationTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (TTM 1Y)");
	if($amortizationTTMCF_1yr != -123456000 && $amortizationTTMCF_1yr != 0) $amortizationTTMCF_1yr_text = number_format($amortizationTTMCF_1yr, 0, '.', ',');
	else $amortizationTTMCF_1yr_text = "-";
	
	$amortizationQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (QTR 1Q)");
	if($amortizationQTRCF_1yr != -123456000 && $amortizationQTRCF_1yr != 0) $amortizationQTRCF_1yr_text = number_format($amortizationQTRCF_1yr, 0, '.', ',');
	else $amortizationQTRCF_1yr_text = "-";
	
	$nonCashAdjTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (TTM 1Y)");
	if($nonCashAdjTTMCF_1yr != -123456000 && $nonCashAdjTTMCF_1yr != 0) $nonCashAdjTTMCF_1yr_text = number_format($nonCashAdjTTMCF_1yr, 0, '.', ',');
	else $nonCashAdjTTMCF_1yr_text = "-";
	
	$nonCashAdjQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (QTR 1Q)");
	if($nonCashAdjQTRCF_1yr != -123456000 && $nonCashAdjQTRCF_1yr != 0) $nonCashAdjQTRCF_1yr_text = number_format($nonCashAdjQTRCF_1yr, 0, '.', ',');
	else $nonCashAdjQTRCF_1yr_text = "-";
	
	$changesInLiabilitiesTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (TTM 1Y)");
	if($changesInLiabilitiesTTMCF_1yr != -123456000 && $changesInLiabilitiesTTMCF_1yr != 0) $changesInLiabilitiesTTMCF_1yr_text = number_format($changesInLiabilitiesTTMCF_1yr, 0, '.', ',');
	else $changesInLiabilitiesTTMCF_1yr_text = "-";

	$changesInLiabilitiesQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (QTR 1Q)");
	if($changesInLiabilitiesQTRCF_1yr != -123456000 && $changesInLiabilitiesQTRCF_1yr != 0) $changesInLiabilitiesQTRCF_1yr_text = number_format($changesInLiabilitiesQTRCF_1yr, 0, '.', ',');
	else $changesInLiabilitiesQTRCF_1yr_text = "-";
	
	$cashFlowFromOperationsTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (TTM 1Y)");
	if($cashFlowFromOperationsTTMCF_1yr != -123456000 && $cashFlowFromOperationsTTMCF_1yr != 0) $cashFlowFromOperationsTTMCF_1yr_text = number_format($cashFlowFromOperationsTTMCF_1yr, 0, '.', ',');
	else $cashFlowFromOperationsTTMCF_1yr_text = "-";
	
	$cashFlowFromOperationsQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (QTR 1Q)");
	if($cashFlowFromOperationsQTRCF_1yr != -123456000 && $cashFlowFromOperationsQTRCF_1yr != 0) $cashFlowFromOperationsQTRCF_1yr_text = number_format($cashFlowFromOperationsQTRCF_1yr, 0, '.', ',');
	else $cashFlowFromOperationsQTRCF_1yr_text = "-";
	
	$capExTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (TTM 1Y)");
	if($capExTTMCF_1yr != -123456000 && $capExTTMCF_1yr != 0) $capExTTMCF_1yr_text = number_format($capExTTMCF_1yr, 0, '.', ',');
	else $capExTTMCF_1yr_text = "-";
	
	$capExQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (QTR 1Q)");
	if($capExQTRCF_1yr != -123456000 && $capExQTRCF_1yr != 0) $capExQTRCF_1yr_text = number_format($capExQTRCF_1yr, 0, '.', ',');
	else $capExQTRCF_1yr_text = "-";
	
	$purchaseOfInvestmentsTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (TTM 1Y)");
	if($purchaseOfInvestmentsTTMCF_1yr != -123456000 && $purchaseOfInvestmentsTTMCF_1yr != 0) $purchaseOfInvestmentsTTMCF_1yr_text = number_format($purchaseOfInvestmentsTTMCF_1yr, 0, '.', ',');
	else $purchaseOfInvestmentsTTMCF_1yr_text = "-";	
	
	$purchaseOfInvestmentsQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (QTR 1Q)");
	if($purchaseOfInvestmentsQTRCF_1yr != -123456000 && $purchaseOfInvestmentsQTRCF_1yr != 0) $purchaseOfInvestmentsQTRCF_1yr_text = number_format($purchaseOfInvestmentsQTRCF_1yr, 0, '.', ',');
	else $purchaseOfInvestmentsQTRCF_1yr_text = "-";	
	
	$saleOfInvestmentsTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (TTM 1Y)");
	if($saleOfInvestmentsTTMCF_1yr != -123456000 && $saleOfInvestmentsTTMCF_1yr != 0) $saleOfInvestmentsTTMCF_1yr_text = number_format($saleOfInvestmentsTTMCF_1yr, 0, '.', ',');
	else $saleOfInvestmentsTTMCF_1yr_text = "-";
	
	$saleOfInvestmentsQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (QTR 1Q)");
	if($saleOfInvestmentsQTRCF_1yr != -123456000 && $saleOfInvestmentsQTRCF_1yr != 0) $saleOfInvestmentsQTRCF_1yr_text = number_format($saleOfInvestmentsQTRCF_1yr, 0, '.', ',');
	else $saleOfInvestmentsQTRCF_1yr_text = "-";	
	
	$otherInvestingActTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (TTM 1Y)");
	if($otherInvestingActTTMCF_1yr != -123456000 && $otherInvestingActTTMCF_1yr != 0) $otherInvestingActTTMCF_1yr_text = number_format($otherInvestingActTTMCF_1yr, 0, '.', ',');
	else $otherInvestingActTTMCF_1yr_text = "-";
	
	$otherInvestingActQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (QTR 1Q)");
	if($otherInvestingActQTRCF_1yr != -123456000 && $otherInvestingActQTRCF_1yr != 0) $otherInvestingActQTRCF_1yr_text = number_format($otherInvestingActQTRCF_1yr, 0, '.', ',');
	else $otherInvestingActQTRCF_1yr_text = "-";
	
	$netCashFromInvTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (TTM 1Y)");
	if($netCashFromInvTTMCF_1yr != -123456000 && $netCashFromInvTTMCF_1yr != 0) $netCashFromInvTTMCF_1yr_text = number_format($netCashFromInvTTMCF_1yr, 0, '.', ',');
	else $netCashFromInvTTMCF_1yr_text = "-";
	
	$netCashFromInvQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (QTR 1Q)");
	if($netCashFromInvQTRCF_1yr != -123456000 && $netCashFromInvQTRCF_1yr != 0) $netCashFromInvQTRCF_1yr_text = number_format($netCashFromInvQTRCF_1yr, 0, '.', ',');
	else $netCashFromInvQTRCF_1yr_text = "-";
	
	$dividendsPaidTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (TTM 1Y)");
	if($dividendsPaidTTMCF_1yr != -123456000 && $dividendsPaidTTMCF_1yr != 0) $dividendsPaidTTMCF_1yr_text = number_format($dividendsPaidTTMCF_1yr, 0, '.', ',');
	else $dividendsPaidTTMCF_1yr_text = "-";	
	
	$dividendsPaidQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (QTR 1Q)");
	if($dividendsPaidQTRCF_1yr != -123456000 && $dividendsPaidQTRCF_1yr != 0) $dividendsPaidQTRCF_1yr_text = number_format($dividendsPaidQTRCF_1yr, 0, '.', ',');
	else $dividendsPaidQTRCF_1yr_text = "-";
	
	$stockRepurchasesTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (TTM US$ Millions) (TTM 1Y)");
	if($stockRepurchasesTTMCF_1yr != -123456000 && $stockRepurchasesTTMCF_1yr != 0) $stockRepurchasesTTMCF_1yr_text = number_format($stockRepurchasesTTMCF_1yr, 0, '.', ',');
	else $stockRepurchasesTTMCF_1yr_text = "-";
	
	$stockRepurchasesQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (US$ Millions) (QTR 1Q)");
	if($stockRepurchasesQTRCF_1yr != -123456000 && $stockRepurchasesQTRCF_1yr != 0) $stockRepurchasesQTRCF_1yr_text = number_format($stockRepurchasesQTRCF_1yr, 0, '.', ',');
	else $stockRepurchasesQTRCF_1yr_text = "-";
	
	$issuanceOfCommonEquityTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (TTM 1Y)");
	if($issuanceOfCommonEquityTTMCF_1yr != -123456000 && $issuanceOfCommonEquityTTMCF_1yr != 0) $issuanceOfCommonEquityTTMCF_1yr_text = number_format($issuanceOfCommonEquityTTMCF_1yr, 0, '.', ',');
	else $issuanceOfCommonEquityTTMCF_1yr_text = "-";
	
	$issuanceOfCommonEquityQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (QTR 1Q)");
	if($issuanceOfCommonEquityQTRCF_1yr != -123456000 && $issuanceOfCommonEquityQTRCF_1yr != 0) $issuanceOfCommonEquityQTRCF_1yr_text = number_format($issuanceOfCommonEquityQTRCF_1yr, 0, '.', ',');
	else $issuanceOfCommonEquityQTRCF_1yr_text = "-";	
	
	$issuanceOfDebtTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (TTM 1Y)");
	if($issuanceOfDebtTTMCF_1yr != -123456000 && $issuanceOfDebtTTMCF_1yr != 0) $issuanceOfDebtTTMCF_1yr_text = number_format($issuanceOfDebtTTMCF_1yr, 0, '.', ',');
	else $issuanceOfDebtTTMCF_1yr_text = "-";	
	
	$issuanceOfDebtQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (QTR 1Q)");
	if($issuanceOfDebtQTRCF_1yr != -123456000 && $issuanceOfDebtQTRCF_1yr != 0) $issuanceOfDebtQTRCF_1yr_text = number_format($issuanceOfDebtQTRCF_1yr, 0, '.', ',');
	else $issuanceOfDebtQTRCF_1yr_text = "-";		
	
	$repaymentOfDebtTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (TTM 1Y)");
	if($repaymentOfDebtTTMCF_1yr != -123456000 && $repaymentOfDebtTTMCF_1yr != 0) $repaymentOfDebtTTMCF_1yr_text = number_format($repaymentOfDebtTTMCF_1yr, 0, '.', ',');
	else $repaymentOfDebtTTMCF_1yr_text = "-";		
	
	$repaymentOfDebtQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (QTR 1Q)");
	if($repaymentOfDebtQTRCF_1yr != -123456000 && $repaymentOfDebtQTRCF_1yr != 0) $repaymentOfDebtQTRCF_1yr_text = number_format($repaymentOfDebtQTRCF_1yr, 0, '.', ',');
	else $repaymentOfDebtQTRCF_1yr_text = "-";		
	
	$otherFinancingActivityTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (TTM 1Y)");
	if($otherFinancingActivityTTMCF_1yr != -123456000 && $otherFinancingActivityTTMCF_1yr != 0) $otherFinancingActivityTTMCF_1yr_text = number_format($otherFinancingActivityTTMCF_1yr, 0, '.', ',');
	else $otherFinancingActivityTTMCF_1yr_text = "-";
	
	$otherFinancingActivityQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (QTR 1Q)");
	if($otherFinancingActivityQTRCF_1yr != -123456000 && $otherFinancingActivityQTRCF_1yr != 0) $otherFinancingActivityQTRCF_1yr_text = number_format($otherFinancingActivityQTRCF_1yr, 0, '.', ',');
	else $otherFinancingActivityQTRCF_1yr_text = "-";	
	
	$netCashFromFinancingTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (TTM 1Y)");
	if($netCashFromFinancingTTMCF_1yr != -123456000 && $netCashFromFinancingTTMCF_1yr != 0) $netCashFromFinancingTTMCF_1yr_text = number_format($netCashFromFinancingTTMCF_1yr, 0, '.', ',');
	else $netCashFromFinancingTTMCF_1yr_text = "-";
	
	$netCashFromFinancingQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (QTR 1Q)");
	if($netCashFromFinancingQTRCF_1yr != -123456000 && $netCashFromFinancingQTRCF_1yr != 0) $netCashFromFinancingQTRCF_1yr_text = number_format($netCashFromFinancingQTRCF_1yr, 0, '.', ',');
	else $netCashFromFinancingQTRCF_1yr_text = "-";
	
	$effectOfRateChangesTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (TTM 1Y)");
	if($effectOfRateChangesTTMCF_1yr != -123456000 && $effectOfRateChangesTTMCF_1yr != 0) $effectOfRateChangesTTMCF_1yr_text = number_format($effectOfRateChangesTTMCF_1yr, 0, '.', ',');
	else $effectOfRateChangesTTMCF_1yr_text = "-";
	
	$effectOfRateChangesQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (QTR 1Q)");
	if($effectOfRateChangesQTRCF_1yr != -123456000 && $effectOfRateChangesQTRCF_1yr != 0) $effectOfRateChangesQTRCF_1yr_text = number_format($effectOfRateChangesQTRCF_1yr, 0, '.', ',');
	else $effectOfRateChangesQTRCF_1yr_text = "-";

	
	$netChangeInCashTTMCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (TTM 1Y)");
	if($netChangeInCashTTMCF_1yr != -123456000 && $netChangeInCashTTMCF_1yr != 0) $netChangeInCashTTMCF_1yr_text = number_format($netChangeInCashTTMCF_1yr, 0, '.', ',');
	else $netChangeInCashTTMCF_1yr_text = "-";
	
	$netChangeInCashQTRCF_1yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (QTR 1Q)");
	if($netChangeInCashQTRCF_1yr != -123456000 && $netChangeInCashQTRCF_1yr != 0) $netChangeInCashQTRCF_1yr_text = number_format($netChangeInCashQTRCF_1yr, 0, '.', ',');
	else $netChangeInCashQTRCF_1yr_text = "-";
	
	// Two-years back
	$depreciationTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (TTM 2Y)");
	if($depreciationTTMCF_2yr != -123456000 && $depreciationTTMCF_2yr != 0) $depreciationTTMCF_2yr_text = number_format($depreciationTTMCF_2yr, 0, '.', ',');
	else $depreciationTTMCF_2yr_text = "-";
	
	$depreciationQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Depreciation Expense (QTR 2Q)");
	if($depreciationQTRCF_2yr != -123456000 && $depreciationQTRCF_2yr != 0) $depreciationQTRCF_2yr_text = number_format($depreciationQTRCF_2yr, 0, '.', ',');
	else $depreciationQTRCF_2yr_text = "-";
	
	$amortizationTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (TTM 2Y)");
	if($amortizationTTMCF_2yr != -123456000 && $amortizationTTMCF_2yr != 0) $amortizationTTMCF_2yr_text = number_format($amortizationTTMCF_2yr, 0, '.', ',');
	else $amortizationTTMCF_2yr_text = "-";
	
	$amortizationQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Amortization Expense (QTR 2Q)");
	if($amortizationQTRCF_2yr != -123456000 && $amortizationQTRCF_2yr != 0) $amortizationQTRCF_2yr_text = number_format($amortizationQTRCF_2yr, 0, '.', ',');
	else $amortizationQTRCF_2yr_text = "-";
	
	$nonCashAdjTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (TTM 2Y)");
	if($nonCashAdjTTMCF_2yr != -123456000 && $nonCashAdjTTMCF_2yr != 0) $nonCashAdjTTMCF_2yr_text = number_format($nonCashAdjTTMCF_2yr, 0, '.', ',');
	else $nonCashAdjTTMCF_2yr_text = "-";
	
	$nonCashAdjQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Non-Cash Adjustments To Reconcile Net Income (QTR 2Q)");
	if($nonCashAdjQTRCF_2yr != -123456000 && $nonCashAdjQTRCF_2yr != 0) $nonCashAdjQTRCF_2yr_text = number_format($nonCashAdjQTRCF_2yr, 0, '.', ',');
	else $nonCashAdjQTRCF_2yr_text = "-";
	
	$changesInLiabilitiesTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (TTM 2Y)");
	if($changesInLiabilitiesTTMCF_2yr != -123456000 && $changesInLiabilitiesTTMCF_2yr != 0) $changesInLiabilitiesTTMCF_2yr_text = number_format($changesInLiabilitiesTTMCF_2yr, 0, '.', ',');
	else $changesInLiabilitiesTTMCF_2yr_text = "-";

	$changesInLiabilitiesQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Changes in Operating Assets and Liabilities, net (QTR 2Q)");
	if($changesInLiabilitiesQTRCF_2yr != -123456000 && $changesInLiabilitiesQTRCF_2yr != 0) $changesInLiabilitiesQTRCF_2yr_text = number_format($changesInLiabilitiesQTRCF_2yr, 0, '.', ',');
	else $changesInLiabilitiesQTRCF_2yr_text = "-";
	
	$cashFlowFromOperationsTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (TTM 2Y)");
	if($cashFlowFromOperationsTTMCF_2yr != -123456000 && $cashFlowFromOperationsTTMCF_2yr != 0) $cashFlowFromOperationsTTMCF_2yr_text = number_format($cashFlowFromOperationsTTMCF_2yr, 0, '.', ',');
	else $cashFlowFromOperationsTTMCF_2yr_text = "-";
	
	$cashFlowFromOperationsQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Operating Activities (QTR 2Q)");
	if($cashFlowFromOperationsQTRCF_2yr != -123456000 && $cashFlowFromOperationsQTRCF_2yr != 0) $cashFlowFromOperationsQTRCF_2yr_text = number_format($cashFlowFromOperationsQTRCF_2yr, 0, '.', ',');
	else $cashFlowFromOperationsQTRCF_2yr_text = "-";
	
	$capExTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (TTM 2Y)");
	if($capExTTMCF_2yr != -123456000 && $capExTTMCF_2yr != 0) $capExTTMCF_2yr_text = number_format($capExTTMCF_2yr, 0, '.', ',');
	else $capExTTMCF_2yr_text = "-";
	
	$capExQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Capital Expenditures (CapEx) (QTR 2Q)");
	if($capExQTRCF_2yr != -123456000 && $capExQTRCF_2yr != 0) $capExQTRCF_2yr_text = number_format($capExQTRCF_2yr, 0, '.', ',');
	else $capExQTRCF_2yr_text = "-";
	
	$purchaseOfInvestmentsTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (TTM 2Y)");
	if($purchaseOfInvestmentsTTMCF_2yr != -123456000 && $purchaseOfInvestmentsTTMCF_2yr != 0) $purchaseOfInvestmentsTTMCF_2yr_text = number_format($purchaseOfInvestmentsTTMCF_2yr, 0, '.', ',');
	else $purchaseOfInvestmentsTTMCF_2yr_text = "-";	
	
	$purchaseOfInvestmentsQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Purchase of Investments (QTR 2Q)");
	if($purchaseOfInvestmentsQTRCF_2yr != -123456000 && $purchaseOfInvestmentsQTRCF_2yr != 0) $purchaseOfInvestmentsQTRCF_2yr_text = number_format($purchaseOfInvestmentsQTRCF_2yr, 0, '.', ',');
	else $purchaseOfInvestmentsQTRCF_2yr_text = "-";	
	
	$saleOfInvestmentsTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (TTM 2Y)");
	if($saleOfInvestmentsTTMCF_2yr != -123456000 && $saleOfInvestmentsTTMCF_2yr != 0) $saleOfInvestmentsTTMCF_2yr_text = number_format($saleOfInvestmentsTTMCF_2yr, 0, '.', ',');
	else $saleOfInvestmentsTTMCF_2yr_text = "-";
	
	$saleOfInvestmentsQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Sale and/or Maturity of Investments (QTR 2Q)");
	if($saleOfInvestmentsQTRCF_2yr != -123456000 && $saleOfInvestmentsQTRCF_2yr != 0) $saleOfInvestmentsQTRCF_2yr_text = number_format($saleOfInvestmentsQTRCF_2yr, 0, '.', ',');
	else $saleOfInvestmentsQTRCF_2yr_text = "-";	
	
	$otherInvestingActTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (TTM 2Y)");
	if($otherInvestingActTTMCF_2yr != -123456000 && $otherInvestingActTTMCF_2yr != 0) $otherInvestingActTTMCF_2yr_text = number_format($otherInvestingActTTMCF_2yr, 0, '.', ',');
	else $otherInvestingActTTMCF_2yr_text = "-";
	
	$otherInvestingActQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Investing Activities, net (QTR 2Q)");
	if($otherInvestingActQTRCF_2yr != -123456000 && $otherInvestingActQTRCF_2yr != 0) $otherInvestingActQTRCF_2yr_text = number_format($otherInvestingActQTRCF_2yr, 0, '.', ',');
	else $otherInvestingActQTRCF_2yr_text = "-";
	
	$netCashFromInvTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (TTM 2Y)");
	if($netCashFromInvTTMCF_2yr != -123456000 && $netCashFromInvTTMCF_2yr != 0) $netCashFromInvTTMCF_2yr_text = number_format($netCashFromInvTTMCF_2yr, 0, '.', ',');
	else $netCashFromInvTTMCF_2yr_text = "-";
	
	$netCashFromInvQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Investing Activities (QTR 2Q)");
	if($netCashFromInvQTRCF_2yr != -123456000 && $netCashFromInvQTRCF_2yr != 0) $netCashFromInvQTRCF_2yr_text = number_format($netCashFromInvQTRCF_2yr, 0, '.', ',');
	else $netCashFromInvQTRCF_2yr_text = "-";
	
	$dividendsPaidTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (TTM 2Y)");
	if($dividendsPaidTTMCF_2yr != -123456000 && $dividendsPaidTTMCF_2yr != 0) $dividendsPaidTTMCF_2yr_text = number_format($dividendsPaidTTMCF_2yr, 0, '.', ',');
	else $dividendsPaidTTMCF_2yr_text = "-";	
	
	$dividendsPaidQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Payment of Dividends (QTR 2Q)");
	if($dividendsPaidQTRCF_2yr != -123456000 && $dividendsPaidQTRCF_2yr != 0) $dividendsPaidQTRCF_2yr_text = number_format($dividendsPaidQTRCF_2yr, 0, '.', ',');
	else $dividendsPaidQTRCF_2yr_text = "-";
	
	$stockRepurchasesTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (TTM US$ Millions) (TTM 2Y)");
	if($stockRepurchasesTTMCF_2yr != -123456000 && $stockRepurchasesTTMCF_2yr != 0) $stockRepurchasesTTMCF_2yr_text = number_format($stockRepurchasesTTMCF_2yr, 0, '.', ',');
	else $stockRepurchasesTTMCF_2yr_text = "-";
	
	$stockRepurchasesQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Stock Repurchases (US$ Millions) (QTR 2Q)");
	if($stockRepurchasesQTRCF_2yr != -123456000 && $stockRepurchasesQTRCF_2yr != 0) $stockRepurchasesQTRCF_2yr_text = number_format($stockRepurchasesQTRCF_2yr, 0, '.', ',');
	else $stockRepurchasesQTRCF_2yr_text = "-";
	
	$issuanceOfCommonEquityTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (TTM 2Y)");
	if($issuanceOfCommonEquityTTMCF_2yr != -123456000 && $issuanceOfCommonEquityTTMCF_2yr != 0) $issuanceOfCommonEquityTTMCF_2yr_text = number_format($issuanceOfCommonEquityTTMCF_2yr, 0, '.', ',');
	else $issuanceOfCommonEquityTTMCF_2yr_text = "-";
	
	$issuanceOfCommonEquityQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Common Equity (QTR 2Q)");
	if($issuanceOfCommonEquityQTRCF_2yr != -123456000 && $issuanceOfCommonEquityQTRCF_2yr != 0) $issuanceOfCommonEquityQTRCF_2yr_text = number_format($issuanceOfCommonEquityQTRCF_2yr, 0, '.', ',');
	else $issuanceOfCommonEquityQTRCF_2yr_text = "-";	
	
	$issuanceOfDebtTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (TTM 2Y)");
	if($issuanceOfDebtTTMCF_2yr != -123456000 && $issuanceOfDebtTTMCF_2yr != 0) $issuanceOfDebtTTMCF_2yr_text = number_format($issuanceOfDebtTTMCF_2yr, 0, '.', ',');
	else $issuanceOfDebtTTMCF_2yr_text = "-";	
	
	$issuanceOfDebtQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Issuance of Debt (QTR 2Q)");
	if($issuanceOfDebtQTRCF_2yr != -123456000 && $issuanceOfDebtQTRCF_2yr != 0) $issuanceOfDebtQTRCF_2yr_text = number_format($issuanceOfDebtQTRCF_2yr, 0, '.', ',');
	else $issuanceOfDebtQTRCF_2yr_text = "-";		
	
	$repaymentOfDebtTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (TTM 2Y)");
	if($repaymentOfDebtTTMCF_2yr != -123456000 && $repaymentOfDebtTTMCF_2yr != 0) $repaymentOfDebtTTMCF_2yr_text = number_format($repaymentOfDebtTTMCF_2yr, 0, '.', ',');
	else $repaymentOfDebtTTMCF_2yr_text = "-";		
	
	$repaymentOfDebtQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Repayment of Debt (QTR 2Q)");
	if($repaymentOfDebtQTRCF_2yr != -123456000 && $repaymentOfDebtQTRCF_2yr != 0) $repaymentOfDebtQTRCF_2yr_text = number_format($repaymentOfDebtQTRCF_2yr, 0, '.', ',');
	else $repaymentOfDebtQTRCF_2yr_text = "-";		
	
	$otherFinancingActivityTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (TTM 2Y)");
	if($otherFinancingActivityTTMCF_2yr != -123456000 && $otherFinancingActivityTTMCF_2yr != 0) $otherFinancingActivityTTMCF_2yr_text = number_format($otherFinancingActivityTTMCF_2yr, 0, '.', ',');
	else $otherFinancingActivityTTMCF_2yr_text = "-";
	
	$otherFinancingActivityQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Other Financing Activities, net (QTR 2Q)");
	if($otherFinancingActivityQTRCF_2yr != -123456000 && $otherFinancingActivityQTRCF_2yr != 0) $otherFinancingActivityQTRCF_2yr_text = number_format($otherFinancingActivityQTRCF_2yr, 0, '.', ',');
	else $otherFinancingActivityQTRCF_2yr_text = "-";	
	
	$netCashFromFinancingTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (TTM 2Y)");
	if($netCashFromFinancingTTMCF_2yr != -123456000 && $netCashFromFinancingTTMCF_2yr != 0) $netCashFromFinancingTTMCF_2yr_text = number_format($netCashFromFinancingTTMCF_2yr, 0, '.', ',');
	else $netCashFromFinancingTTMCF_2yr_text = "-";
	
	$netCashFromFinancingQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Cash From Continuing Financing Activities (QTR 2Q)");
	if($netCashFromFinancingQTRCF_2yr != -123456000 && $netCashFromFinancingQTRCF_2yr != 0) $netCashFromFinancingQTRCF_2yr_text = number_format($netCashFromFinancingQTRCF_2yr, 0, '.', ',');
	else $netCashFromFinancingQTRCF_2yr_text = "-";
	
	$effectOfRateChangesTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (TTM 2Y)");
	if($effectOfRateChangesTTMCF_2yr != -123456000 && $effectOfRateChangesTTMCF_2yr != 0) $effectOfRateChangesTTMCF_2yr_text = number_format($effectOfRateChangesTTMCF_2yr, 0, '.', ',');
	else $effectOfRateChangesTTMCF_2yr_text = "-";
	
	$effectOfRateChangesQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Effect of Exchange Rate Changes (QTR 2Q)");
	if($effectOfRateChangesQTRCF_2yr != -123456000 && $effectOfRateChangesQTRCF_2yr != 0) $effectOfRateChangesQTRCF_2yr_text = number_format($effectOfRateChangesQTRCF_2yr, 0, '.', ',');
	else $effectOfRateChangesQTRCF_2yr_text = "-";

	
	$netChangeInCashTTMCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (TTM 2Y)");
	if($netChangeInCashTTMCF_2yr != -123456000 && $netChangeInCashTTMCF_2yr != 0) $netChangeInCashTTMCF_2yr_text = number_format($netChangeInCashTTMCF_2yr, 0, '.', ',');
	else $netChangeInCashTTMCF_2yr_text = "-";
	
	$netChangeInCashQTRCF_2yr = 1000*getMetricData($ticker, "metricValue", "mvcompanymostrecentdata", "Net Change in Cash & Equivalents (QTR 2Q)");
	if($netChangeInCashQTRCF_2yr != -123456000 && $netChangeInCashQTRCF_2yr != 0) $netChangeInCashQTRCF_2yr_text = number_format($netChangeInCashQTRCF_2yr, 0, '.', ',');
	else $netChangeInCashQTRCF_2yr_text = "-";
	
?>		