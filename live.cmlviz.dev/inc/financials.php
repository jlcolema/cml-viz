<?php

	include "getIncomeStatementData.php";
	include "getBalanceSheetData.php";
	include "getCashFlowStatementData.php";
	
		


?>
<div id="financials" class="panel">

	<div class="inner-wrap">

		<div class="financials-content">

			<div class="financials-navigation">

				<div class="financials-primary-navigation">

					<ul>

						<li class="active">

							<a href="#financials-topic-income-statement">Income Statement</a>

						</li>

						<li>

							<a href="#financials-topic-balance-sheet">Balance Sheet</a>

						</li>

						<li>

							<a href="#financials-topic-cash-flow">Cash Flow</a>

						</li>

					</ul>

				</div>

				<div class="financials-secondary-navigation">

					<ul>

						<li class="view-by-annual active">

							<span>Annual</span>

						</li>

						<li class="view-by-quarterly">

							<span>Quarterly</span>

						</li>

					</ul>

				</div>

			</div>

			<div class="financials-topics">

				<!-- Income Statement -->

				<div id="financials-topic-income-statement" class="financials-topic financials-topic-income-statement financials-topic-active active">

					<div class="financials-topic-timeframe financials-topic-timeframe-annual financials-topic-timeframe-active">

						<div class="caption">

							<h3 class="">Income Statement (Annual)</h3>

							<div class="note">All numbers in thousands</div>

						</div>

						<table class="responsive">

							<tbody>

								<tr>

									<th class="">Revenue</th>
									<th class="th-date">Trailing Twelve Months (TTM)</th>
									<th class="th-date">TTM - One-Year Ago</th>
									<th class="th-date">TTM - Two-Years Ago</th>

								</tr>

								<tr>

									<td class="td-label">Total Revenue</td>
									<td class="td-value positive"><?php echo $revenueTTM_text;?></td>
									<td class="td-value positive"><?php echo $revenueTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $revenueTTM_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Cost of Revenue</td>
									<td class="td-value positive"><?php echo $COGSTTM_text;?></td>
									<td class="td-value positive"><?php echo $COGSTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $COGSTTM_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">

										<b>Gross Profit</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitTTM_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitTTM_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitTTM_2yr_text;?></b>

									</td>

								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Operating Expenses</th>

								</tr>

								<tr>

									<td class="td-label">Research Development</td>
									<td class="td-value positive"><?php echo $RDTTM_text;?></td>
									<td class="td-value positive"><?php echo $RDTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $RDTTM_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Selling General and Administrative</td>
									<td class="td-value positive"><?php echo $SGATTM_text;?></td>
									<td class="td-value positive"><?php echo $SGATTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $SGATTM_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Other Operating Expense</td>
									<td class="td-value positive"><?php echo $otherOpExTTM_text;?></td>
									<td class="td-value positive"><?php echo $otherOpExTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherOpExTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Total Operating Expenses</td>
									<td class="td-value positive"><?php echo $OpExTTM_text;?></td>
									<td class="td-value positive"><?php echo $OpExTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $OpExTTM_2yr_text;?></td>

								</tr>								

								
								<tr>

									<td class="td-label"><b>Total Operating Income or Loss</b></td>
									<td class="td-value positive"><b><?php echo $totalOpIncTTM_text;?></b></td>
									<td class="td-value positive"><?php echo $totalOpIncTTM_1yr_text;?></b></td>
									<td class="td-value positive"><?php echo $totalOpIncTTM_2yr_text;?></b></td>

								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Income from Continuing Operations</th>

								</tr>

								<tr>

									<td class="td-label">Total Other Income/Expenses Net</td>
									<td class="td-value positive"><?php echo $otherIncExpTTM_text;?></td>
									<td class="td-value positive"><?php echo $otherIncExpTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherIncExpTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Earnings Before Interest and Taxes</td>
									<td class="td-value positive"><?php echo $EBITTTM_text;?></td>
									<td class="td-value positive"><?php echo $EBITTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $EBITTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Interest Expense /Income</td>
									<td class="td-value positive"><?php echo $interestInvIncTTM_text;?></td>
									<td class="td-value positive"><?php echo $interestInvIncTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $interestInvIncTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Income Tax Expense</td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseTTM_text;?></td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Net Non Operating Expense</td>
									<td class="td-value positive"><?php echo $NNETTM_text;?></td>
									<td class="td-value positive"><?php echo $NNETTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $NNETTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label"><b>Net Income From Continuing Ops</b></td>
									<td class="td-value positive"><b><?php echo $netIncomeContOpsTTM_text;?></b></td>
									<td class="td-value positive"><?php echo $netIncomeContOpsTTM_1yr_text;?></b></td>
									<td class="td-value positive"><?php echo $netIncomeContOpsTTM_2yr_text;?></b></td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup"  style = "background-color:#cccccc;">Non-recurring Events</th>

								</tr>								
								
								<tr>

									<td class="td-label">Extraordinary Items</td>
									<td class="td-value positive"><?php echo $extraordinaryTTM_text;?></td>
									<td class="td-value positive"><?php echo $extraordinaryTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $extraordinaryTTM_2yr_text;?></td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Net Income</th>

								</tr>									
								
								<tr>

									<td class="td-label">Net Income</td>
									<td class="td-value positive"><?php echo $netIncomeTTM_text;?></td>
									<td class="td-value positive"><?php echo $netIncomeTTM_1yr_text;?></td>
									<td class="td-value positive"><?php echo $netIncomeTTM_2yr_text;?></td>

								</tr>
															
							</tbody>

						</table>

					</div>

					<div class="financials-topic-timeframe financials-topic-timeframe-quarterly">

						<div class="caption">

							<h3 class="">Income Statement (Quarterly)</h3>

							<div class="note">All numbers in thousands</div>

						</div>

					<table class="responsive">

							<tbody>

								<tr>

									<th class="">Revenue</th>
									<th class="th-date">Most Recent Quarter</th>
									<th class="th-date">One-Year Ago Quarter</th>
									<th class="th-date">Two-Years Ago Quarter</th>

								</tr>

								<tr>

									<td class="td-label">Total Revenue</td>
									<td class="td-value positive"><?php echo $revenueQTR_text;?></td>
									<td class="td-value positive"><?php echo $revenueQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $revenueQTR_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Cost of Revenue</td>
									<td class="td-value positive"><?php echo $COGSQTR_text;?></td>
									<td class="td-value positive"><?php echo $COGSQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $COGSQTR_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">

										<b>Gross Profit</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitQTR_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitQTR_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $grossProfitQTR_2yr_text;?></b>

									</td>

								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Operating Expenses</th>

								</tr>

								<tr>

									<td class="td-label">Research Development</td>
									<td class="td-value positive"><?php echo $RDQTR_text;?></td>
									<td class="td-value positive"><?php echo $RDQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $RDQTR_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Selling General and Administrative</td>
									<td class="td-value positive"><?php echo $SGAQTR_text;?></td>
									<td class="td-value positive"><?php echo $SGAQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $SGAQTR_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Other Operating Expense</td>
									<td class="td-value positive"><?php echo $otherOpExQTR_text;?></td>
									<td class="td-value positive"><?php echo $otherOpExQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherOpExQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Total Operating Expenses</td>
									<td class="td-value positive"><?php echo $OpExQTR_text;?></td>
									<td class="td-value positive"><?php echo $OpExQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $OpExQTR_2yr_text;?></td>

								</tr>								

								
								<tr>

									<td class="td-label"><b>Total Operating Income or Loss</b></td>
									<td class="td-value positive"><b><?php echo $totalOpIncQTR_text;?></b></td>
									<td class="td-value positive"><?php echo $totalOpIncQTR_1yr_text;?></b></td>
									<td class="td-value positive"><?php echo $totalOpIncQTR_2yr_text;?></b></td>

								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Income from Continuing Operations</th>

								</tr>

								<tr>

									<td class="td-label">Total Other Income/Expenses Net</td>
									<td class="td-value positive"><?php echo $otherIncExpQTR_text;?></td>
									<td class="td-value positive"><?php echo $otherIncExpQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherIncExpQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Earnings Before Interest and Taxes</td>
									<td class="td-value positive"><?php echo $EBITQTR_text;?></td>
									<td class="td-value positive"><?php echo $EBITQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $EBITQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Interest Expense /Income</td>
									<td class="td-value positive"><?php echo $interestInvIncQTR_text;?></td>
									<td class="td-value positive"><?php echo $interestInvIncQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $interestInvIncQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Income Tax Expense</td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseQTR_text;?></td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $incomeTaxExpenseQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Net Non Operating Expense</td>
									<td class="td-value positive"><?php echo $NNEQTR_text;?></td>
									<td class="td-value positive"><?php echo $NNEQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $NNEQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label"><b>Net Income From Continuing Ops</b></td>
									<td class="td-value positive"><b><?php echo $netIncomeContOpsQTR_text;?></b></td>
									<td class="td-value positive"><?php echo $netIncomeContOpsQTR_1yr_text;?></b></td>
									<td class="td-value positive"><?php echo $netIncomeContOpsQTR_2yr_text;?></b></td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup"  style = "background-color:#cccccc;">Non-recurring Events</th>

								</tr>								
								
								<tr>

									<td class="td-label">Extraordinary Items</td>
									<td class="td-value positive"><?php echo $extraordinaryQTR_text;?></td>
									<td class="td-value positive"><?php echo $extraordinaryQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $extraordinaryQTR_2yr_text;?></td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Net Income</th>

								</tr>									
								
								<tr>

									<td class="td-label">Net Income</td>
									<td class="td-value positive"><?php echo $netIncomeQTR_text;?></td>
									<td class="td-value positive"><?php echo $netIncomeQTR_1yr_text;?></td>
									<td class="td-value positive"><?php echo $netIncomeQTR_2yr_text;?></td>

								</tr>
															
							</tbody>

						</table>

					</div>

				</div>

				<!-- Balance Sheet -->

				<div id="financials-topic-balance-sheet" class="financials-topic financials-topic-balance-sheet">

					<div class="financials-topic-timeframe financials-topic-timeframe-annual financials-topic-timeframe-active">

						<div class="caption">

							<h3 class="">Balance Sheet (Annual)</h3>

							<div class="note">All numbers in thousands</div>

						</div>

						<table class="responsive">

							<tbody>

								<tr>

									<th class="">Period</th>
									<th class="th-date">Current</th>
									<th class="th-date">One-Year Ago</th>
									<th class="th-date">Two-Years Ago</th>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Current Assets</th>

								</tr>										

								<tr>

									<td class="td-label">Cash And Cash Equivalents</td>
									<td class="td-value positive"><?php echo $cashBS_text;?></td>
									<td class="td-value positive"><?php echo $cashBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $cashBS_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Short-term Investments</td>
									<td class="td-value positive"><?php echo $shortTermInvBS_text;?></td>
									<td class="td-value positive"><?php echo $shortTermInvBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $shortTermInvBS_2yr_text;?></td>

								</tr>
								
								<tr>
								
									<td class="td-label">Net Receivables</td>
									<td class="td-value positive"><?php echo $receivablesBS_text;?></td>
									<td class="td-value positive"><?php echo $receivablesBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $receivablesBS_2yr_text;?></td>

								</tr>
								
								<tr>
								
									<td class="td-label">Other Current Assets</td>
									<td class="td-value positive"><?php echo $otherCurrentAssetsBS_text;?></td>
									<td class="td-value positive"><?php echo $otherCurrentAssetsBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherCurrentAssetsBS_2yr_text;?></td>

								</tr>								

								<tr>

									<td class="td-label">

										<b>Total Current Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentAssetsBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentAssetsBS_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentAssetsBS_2yr_text;?></b>

									</td>

								</tr>
								
								<tr>
								
									<td class="td-label">Long Term Investments</td>
									<td class="td-value positive"><?php echo $longTermInvBS_text;?></td>
									<td class="td-value positive"><?php echo $longTermInvBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $longTermInvBS_2yr_text;?></td>

								</tr>		

								<tr>
								
									<td class="td-label">Property Plant and Equipment</td>
									<td class="td-value positive"><?php echo $PPEBS_text;?></td>
									<td class="td-value positive"><?php echo $PPEBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $PPEBS_2yr_text;?></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Goodwill</td>
									<td class="td-value positive"><?php echo $goodwillBS_text;?></td>
									<td class="td-value positive"><?php echo $goodwillBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $goodwillBS_2yr_text;?></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Intangible Assets</td>
									<td class="td-value positive"><?php echo $intangiblesBS_text;?></td>
									<td class="td-value positive"><?php echo $intangiblesBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $intangiblesBS_2yr_text;?></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Accumulated Depreciation</td>
									<td class="td-value positive"><?php echo $depreciationBS_text;?></td>
									<td class="td-value positive"><?php echo $depreciationBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $depreciationBS_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">

										<b>Total Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalAssetsBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalAssetsBS_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalAssetsBS_2yr_text;?></b>

									</td>

								</tr>
								

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Current Liabilities</th>

								</tr>

								<tr>

									<td class="td-label">Accounts Payable</td>
									<td class="td-value positive"><?php echo $accountsPayableBS_text;?></td>
									<td class="td-value positive"><?php echo $accountsPayableBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $accountsPayableBS_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Short/Current Long Term Debt</td>
									<td class="td-value positive"><?php echo $shortTermDebtBS_text;?></td>
									<td class="td-value positive"><?php echo $shortTermDebtBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $shortTermDebtBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Current Liabilities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentLiabilities_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentLiabilities_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentLiabilities_2yr_text;?></b>

									</td>

								</tr>
								
								<tr>

									<td class="td-label">Long Term Debt</td>
									<td class="td-value positive"><?php echo $longTermDebtBS_text;?></td>
									<td class="td-value positive"><?php echo $longTermDebtBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $longTermDebtBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Liabilities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalLiabilitiesBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalLiabilitiesBS_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalLiabilitiesBS_2yr_text;?></b>

									</td>

								</tr>	

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Stockholders' Equity</th>

								</tr>

								<tr>

									<td class="td-label">Preferred Stock</td>
									<td class="td-value positive"><?php echo $preferredStockBS_text;?></td>
									<td class="td-value positive"><?php echo $totalLiabilitiesBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $totalLiabilitiesBS_2yr_text;?></td>

								</tr>		
								
								<tr>

									<td class="td-label">Common Stock</td>
									<td class="td-value positive"><?php echo $commonStock_text;?></td>
									<td class="td-value positive"><?php echo $commonStock_1yr_text;?></td>
									<td class="td-value positive"><?php echo $commonStock_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Retained Earnings</td>
									<td class="td-value positive"><?php echo $retainedEarningsBS_text;?></td>
									<td class="td-value positive"><?php echo $retainedEarningsBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $retainedEarningsBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Treasury Stock</td>
									<td class="td-value positive"><?php echo $treasuryStockBS_text;?></td>
									<td class="td-value positive"><?php echo $treasuryStockBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $treasuryStockBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Other Stockholder Equity</td>
									<td class="td-value positive"><?php echo $otherEquityAdjBS_text;?></td>
									<td class="td-value positive"><?php echo $otherEquityAdjBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherEquityAdjBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Total Stockholder Equity</td>
									<td class="td-value positive"><?php echo $equityBS_text;?></td>
									<td class="td-value positive"><?php echo $equityBS_1yr_text;?></td>
									<td class="td-value positive"><?php echo $equityBS_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Net Tangible Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netTangibleAssets_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netTangibleAssets_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netTangibleAssets_2yr_text;?></b>

									</td>

								</tr>	

							</tbody>

						</table>

					</div>

					<div class="financials-topic-timeframe financials-topic-timeframe-quarterly">

						<div class="caption">

							<h3 class="">Balance Sheet (Quarterly)</h3>

							<div class="note">All numbers in thousands<br>(the balance sheet is a snapshot financial statement, so quarterly and annual are the same) </div>

						</div>

						<table class="responsive">

							<tbody>

								<tr>

									<th class="">Period</th>
									<th class="th-date">Current</th>
									<th class="th-date">One-Year Ago</th>
									<th class="th-date">Two-Years Ago</th>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Current Assets</th>

								</tr>										

								<tr>

									<td class="td-label">Cash And Cash Equivalents</td>
									<td class="td-value positive"><?php echo $cashBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>

								<tr>

									<td class="td-label">Short-term Investments</td>
									<td class="td-value positive"><?php echo $shortTermInvBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>
								
									<td class="td-label">Net Receivables</td>
									<td class="td-value positive"><?php echo $receivablesBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>
								
									<td class="td-label">Other Current Assets</td>
									<td class="td-value positive"><?php echo $otherCurrentAssetsBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>								

								<tr>

									<td class="td-label">

										<b>Total Current Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentAssetsBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

								</tr>
								
								<tr>
								
									<td class="td-label">Long Term Investments</td>
									<td class="td-value positive"><?php echo $longTermInvBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>		

								<tr>
								
									<td class="td-label">Property Plant and Equipment</td>
									<td class="td-value positive"><?php echo $PPEBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Goodwill</td>
									<td class="td-value positive"><?php echo $goodwillBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Intangible Assets</td>
									<td class="td-value positive"><?php echo $intangiblesBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>	
								
								<tr>
								
									<td class="td-label">Accumulated Depreciation</td>
									<td class="td-value positive"><?php echo $depreciationBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>	
								
								<tr>

									<td class="td-label">

										<b>Total Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalAssetsBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

								</tr>
								

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Current Liabilities</th>

								</tr>

								<tr>

									<td class="td-label">Accounts Payable</td>
									<td class="td-value positive"><?php echo $accountsPayableBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>

								<tr>

									<td class="td-label">Short/Current Long Term Debt</td>
									<td class="td-value positive"><?php echo $shortTermDebtBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Current Liabilities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalCurrentLiabilities_text;?></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

								</tr>
								
								<tr>

									<td class="td-label">Long Term Debt</td>
									<td class="td-value positive"><?php echo $longTermDebtBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Liabilities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $totalLiabilitiesBS_text;?></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

								</tr>	

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Stockholders' Equity</th>

								</tr>

								<tr>

									<td class="td-label">Preferred Stock</td>
									<td class="td-value positive"><?php echo $preferredStockBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>		
								
								<tr>

									<td class="td-label">Common Stock</td>
									<td class="td-value positive"><?php echo $commonStock_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">Retained Earnings</td>
									<td class="td-value positive"><?php echo $retainedEarningsBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">Treasury Stock</td>
									<td class="td-value positive"><?php echo $treasuryStockBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">Other Stockholder Equity</td>
									<td class="td-value positive"><?php echo $otherEquityAdjBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">Total Stockholder Equity</td>
									<td class="td-value positive"><?php echo $equityBS_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Net Tangible Assets</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netTangibleAssets_text;?></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

									<td class="td-value positive">

										<b></b>

									</td>

								</tr>	

							</tbody>

						</table>

					</div>

				</div>

				<!-- Cash Flow -->

				<div id="financials-topic-cash-flow" class="financials-topic financials-topic-cash-flow">

					<div class="financials-topic-timeframe financials-topic-timeframe-annual financials-topic-timeframe-active">

						<div class="caption">

							<h3 class="">Cash Flow (Annual)</h3>

							<div class="note">All numbers in thousands</div>

						</div>

						<table class="responsive">

							<tbody>

								<tr>

									<th class="">Period</th>
									<th class="th-date">Current (TTM)</th>
									<th class="th-date">One-Year Ago (TTM)</th>
									<th class="th-date">Two-Years Ago (TTM)</th>

								</tr>
								
								<tr>

									<td class="td-label">Net Income</td>
									<td class="td-value positive"><?php echo $netIncomeTTM_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>
									
								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Operating Activities, Cash Flows</th>

								</tr>

								<tr>

									<td class="td-label">Depreciation</td>
									<td class="td-value positive"><?php echo $depreciationTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $depreciationTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $depreciationTTMCF_2yr_text;?></td>

								</tr>	

								<tr>

									<td class="td-label">Amortization</td>
									<td class="td-value positive"><?php echo $amortizationTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $amortizationTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $amortizationTTMCF_2yr_text;?></td>

								</tr>	

								<tr>

									<td class="td-label">Non Cash Adjustments To Reconcile Net Income</td>
									<td class="td-value positive"><?php echo $nonCashAdjTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $nonCashAdjTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $nonCashAdjTTMCF_2yr_text;?></td>

								</tr>										
								
								<tr>

									<td class="td-label">Changes in Operating Assets and Liabilities</td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesTTMCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flow From Operating Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsTTMCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsTTMCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsTTMCF_2yr_text;?></b>

									</td>

								</tr>	
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Investing Activities, Cash Flows</th>

								</tr>
								
								<tr>

									<td class="td-label">Capital Expenditures</td>
									<td class="td-value positive"><?php echo $capExTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $capExTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $capExTTMCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">Purchase of Investments</td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsTTMCF_2yr_text;?></td>

								</tr>		
								
								<tr>

									<td class="td-label">Sale and / or Maturity of Investments</td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsTTMCF_2yr_text;?></td>

								</tr>	
															
								<tr>

									<td class="td-label">Other Cash flows from Investing Activities</td>
									<td class="td-value positive"><?php echo $otherInvestingActTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $otherInvestingActTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherInvestingActTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flows From Investing Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvTTMCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvTTMCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvTTMCF_2yr_text;?></b>

									</td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Investing Activities, Cash Flows</th>

								</tr>
								
								<tr>

									<td class="td-label">Dividends Paid</td>
									<td class="td-value positive"><?php echo $dividendsPaidTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $dividendsPaidTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $dividendsPaidTTMCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">Stock Repurchases</td>
									<td class="td-value positive"><?php echo $stockRepurchasesTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $stockRepurchasesTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $stockRepurchasesTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Issuance of Common Equity</td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Issuance of Debt</td>
									<td class="td-value positive"><?php echo $issuanceOfDebtTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfDebtTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfDebtTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Repayment of Debt</td>
									<td class="td-value positive"><?php echo $repaymentOfDebtTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $repaymentOfDebtTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $repaymentOfDebtTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Other Cash Flows from Financing Activities</td>
									<td class="td-value positive"><?php echo $otherFinancingActivityTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $otherFinancingActivityTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherFinancingActivityTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flows From Financing Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingTTMCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingTTMCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingTTMCF_2yr_text;?></b>

									</td>

								</tr>
								
								<tr>

									<td class="td-label">Effect Of Exchange Rate Changes</td>
									<td class="td-value positive"><?php echo $effectOfRateChangesTTMCF_text;?></td>
									<td class="td-value positive"><?php echo $effectOfRateChangesTTMCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $effectOfRateChangesTTMCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Change In Cash and Cash Equivalents</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashTTMCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashTTMCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashTTMCF_2yr_text;?></b>

									</td>

								</tr>


							</tbody>

						</table>

					</div>

					<div class="financials-topic-timeframe financials-topic-timeframe-quarterly">

						<div class="caption">

							<h3 class="">Cash Flow (Quarterly)</h3>

							<div class="note">All numbers in thousands</div>

						</div>

						<table class="responsive">

							<tbody>

								<tr>

									<th class="">Period</th>
									<th class="th-date">Current Quarter</th>
									<th class="th-date">One-Year Ago Quarter</th>
									<th class="th-date">Two-Years Ago Quarter</th>

								</tr>
								
								<tr>

									<td class="td-label">Net Income</td>
									<td class="td-value positive"><?php echo $netIncomeQTR_text;?></td>
									<td class="td-value positive"></td>
									<td class="td-value positive"></td>

								</tr>

								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Operating Activities, Cash Flows</th>

								</tr>

								<tr>

									<td class="td-label">Depreciation</td>
									<td class="td-value positive"><?php echo $depreciationQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $depreciationQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $depreciationQTRCF_2yr_text;?></td>
									

								</tr>	

								<tr>

									<td class="td-label">Amortization</td>
									<td class="td-value positive"><?php echo $amortizationQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $amortizationQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $amortizationQTRCF_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Non Cash Adjustments To Reconcile Net Income</td>
									<td class="td-value positive"><?php echo $nonCashAdjQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $nonCashAdjQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $nonCashAdjQTRCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">Changes in Operating Assets and Liabilities</td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $changesInLiabilitiesQTRCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flow From Operating Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsQTRCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsQTRCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $cashFlowFromOperationsQTRCF_2yr_text;?></b>

									</td>

								</tr>	
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Investing Activities, Cash Flows</th>

								</tr>
								
								<tr>

									<td class="td-label">Capital Expenditures</td>
									<td class="td-value positive"><?php echo $capExQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $capExQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $capExQTRCF_2yr_text;?></td>

								</tr>	
																
								<tr>

									<td class="td-label">Purchase of Investments</td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $purchaseOfInvestmentsQTRCF_2yr_text;?></td>

								</tr>

								<tr>

									<td class="td-label">Sale and / or Maturity of Investments</td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $saleOfInvestmentsQTRCF_2yr_text;?></td>

								</tr>
																
								<tr>

									<td class="td-label">Other Cash flows from Investing Activities</td>
									<td class="td-value positive"><?php echo $otherInvestingActQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $otherInvestingActQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherInvestingActQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flows From Investing Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvQTRCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvQTRCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromInvQTRCF_2yr_text;?></b>
									</td>

								</tr>
								
								<tr>

									<th class="" colspan="4" scope="colgroup" style = "background-color:#cccccc;">Investing Activities, Cash Flows</th>

								</tr>
								
								<tr>

									<td class="td-label">Dividends Paid</td>
									<td class="td-value positive"><?php echo $dividendsPaidQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $dividendsPaidQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $dividendsPaidQTRCF_2yr_text;?></td>

								</tr>	
								
								<tr>

									<td class="td-label">Stock Repurchases</td>
									<td class="td-value positive"><?php echo $stockRepurchasesQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $stockRepurchasesQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $stockRepurchasesQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Issuance of Common Equity</td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfCommonEquityQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Issuance of Debt</td>
									<td class="td-value positive"><?php echo $issuanceOfDebtQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfDebtQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $issuanceOfDebtQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Repayment of Debt</td>
									<td class="td-value positive"><?php echo $repaymentOfDebtQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $repaymentOfDebtQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $repaymentOfDebtQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">Other Cash Flows from Financing Activities</td>
									<td class="td-value positive"><?php echo $otherFinancingActivityQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $otherFinancingActivityQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $otherFinancingActivityQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Total Cash Flows From Financing Activities</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingQTRCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingQTRCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netCashFromFinancingQTRCF_2yr_text;?></b>

									</td>

								</tr>
								
								<tr>

									<td class="td-label">Effect Of Exchange Rate Changes</td>
									<td class="td-value positive"><?php echo $effectOfRateChangesQTRCF_text;?></td>
									<td class="td-value positive"><?php echo $effectOfRateChangesQTRCF_1yr_text;?></td>
									<td class="td-value positive"><?php echo $effectOfRateChangesQTRCF_2yr_text;?></td>

								</tr>
								
								<tr>

									<td class="td-label">

										<b>Change In Cash and Cash Equivalents</b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashQTRCF_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashQTRCF_1yr_text;?></b>

									</td>

									<td class="td-value positive">

										<b><?php echo $netChangeInCashQTRCF_2yr_text;?></b>

									</td>

								</tr>


							</tbody>

						</table>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>
