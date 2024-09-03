<?php

	/********************************************
	*	This file will cresate two vairables:	*
	*											*
	*	1. $ETF_specific (eg: XLK)				*
	*	2. $ETF_specific_name (eg: Technology)	*
	*											*
	*********************************************/
	
	$ETF_specific = "SPY";
	$ETF_specific_name = "S&P 500";
	
	if ($sector == "Paper and Forest Products" || $sector == "Metals and Mining" || $sector == "Construction Materials" 
			|| $sector == "Chemicals" || $sector == "Building Products")
	{
		$ETF_specific = "XLB";
		$ETF_specific_name = "Materials";
	}		
	
	else if ($sector == "Oil, Gas and Consumable Fuels" || $sector == "Energy Equipment and Services")
	{
		$ETF_specific = "XLE";
		$ETF_specific_name = "Energy";
	}
	
	else if ($sector == "Diversified Financials" || $sector == "Banks")
	{
		$ETF_specific = "XLF";
		$ETF_specific_name = "Financials";
	}	
	
	else if ($sector == "Aerospace and Defense")
	{
		$ETF_specific = "XAR";
		$ETF_specific_name = "Aerospace & Defense";
	}		
	
	else if ($sector == "Insurance")
	{
		$ETF_specific = "XLFS";
		$ETF_specific_name = "Insurance";
	}		
	
	else if ($sector == "Transportation")
	{
		$ETF_specific = "IYT";
		$ETF_specific_name = "Transportation";		
	}
		
	else if ($sector == "Trading Companies and Distributors" || $sector == "Machinery"
				|| $sector == "Industrial Conglomerates" || $sector == "Containers and Packaging"
				||  $sector == "Construction and Engineering") 
	{
		$ETF_specific = "XLI";
		$ETF_specific_name = "Industrials";
	}			
	
	else if ($sector == "Telecommunication Services" || $sector == "Information Technology" || $sector == "Electrical Equipment") 
	{
		$ETF_specific = "XLK";
		$ETF_specific_name = "Technology";
	}			
	 
 	else if ($sector == "Retailing"  || $sector == "Food, Beverage and Tobacco" || $sector == "Food and Staples Retailing") 
	{
		$ETF_specific = "XLP";
		$ETF_specific_name = "Consumer Staples";
	}		
 
 
  	else if ($sector == "Real Estate") 
	{
		$ETF_specific = "XLRE";
		$ETF_specific_name = "Real Estate";
	}		
	
  	else if ($sector == "Aerospace and Defense") 
	{
		$ETF_specific = "ITA";
		$ETF_specific_name = "Aerospace & Defense";
	}			
	
  	else if ($sector == "Commercial and Professional Services") 
	{
		$ETF_specific = "IYC";
		$ETF_specific_name = "Commercial & Professional Services";
	}		

  	else if ($sector == "Pharmaceuticals, Biotechnology and Life Sciences" || $sector == "Healthcare Equipment and Services") 
	{
		$ETF_specific = "XLV";
		$ETF_specific_name = "Health Care";
	}	

  	else if ($sector == "Media" || $sector == "Household and Personal Products" || $sector == "Consumer Services" 
			|| $sector == "Consumer Durables and App" || $sector == "Consumer Durables and Apparel"
			|| $sector == "Automobiles and Components")
	{
		$ETF_specific = "XLY";
		$ETF_specific_name = "Consumer Discretionary";
	}	
	
	// Catch a mistake
	if($ETF_specific == "SPY")
	{	
		$ETF_specific = "XLI";
		$ETF_specific_name = "Industrials";
	}
	
	
	// A function to get the ETF name and ticker in an array
	// if toggle is "name" this returns the name of the ETF, if toggle is "ticker" this returns the ticker of the ETF
	function getETF($sector, $toggle)
	{
		$ETF_specific = "";
		$ETF_specific_name = "";
		
		if ($sector == "Paper and Forest Products" || $sector == "Metals and Mining" || $sector == "Construction Materials" 
			|| $sector == "Chemicals" || $sector == "Building Products")
		{
			$ETF_specific = "XLB";
			$ETF_specific_name = "Materials";
		}		
		
		else if ($sector == "Oil, Gas and Consumable Fuels" || $sector == "Energy Equipment and Services")
		{
			$ETF_specific = "XLE";
			$ETF_specific_name = "Energy";
		}
		
		else if ($sector == "Diversified Financials" || $sector == "Banks")
		{
			$ETF_specific = "XLF";
			$ETF_specific_name = "Financials";
		}	
		
		else if ($sector == "Aerospace and Defense")
		{
			$ETF_specific = "XAR";
			$ETF_specific_name = "Aerospace & Defense";
		}		
		
		else if ($sector == "Insurance")
		{
			$ETF_specific = "XLFS";
			$ETF_specific_name = "Insurance";
		}		
		
		else if ($sector == "Transportation")
		{
			$ETF_specific = "IYT";
			$ETF_specific_name = "Transportation";		
		}
			
		else if ($sector == "Trading Companies and Distributors" || $sector == "Machinery"
					|| $sector == "Industrial Conglomerates" || $sector == "Containers and Packaging"
					||  $sector == "Construction and Engineering") 
		{
			$ETF_specific = "XLI";
			$ETF_specific_name = "Industrials";
		}			
		
		else if ($sector == "Telecommunication Services" || $sector == "Information Technology" || $sector == "Electrical Equipment") 
		{
			$ETF_specific = "XLK";
			$ETF_specific_name = "Technology";
		}			
		 
		else if ($sector == "Retailing"  || $sector == "Food, Beverage and Tobacco" || $sector == "Food and Staples Retailing") 
		{
			$ETF_specific = "XLP";
			$ETF_specific_name = "Consumer Staples";
		}		
	 
	 
		else if ($sector == "Real Estate") 
		{
			$ETF_specific = "XLRE";
			$ETF_specific_name = "Real Estate";
		}		
		
		else if ($sector == "Aerospace and Defense") 
		{
			$ETF_specific = "ITA";
			$ETF_specific_name = "Aerospace & Defense";
		}			
		
		else if ($sector == "Commercial and Professional Services") 
		{
			$ETF_specific = "IYC";
			$ETF_specific_name = "Commercial & Professional Services";
		}		

		else if ($sector == "Pharmaceuticals, Biotechnology and Life Sciences" || $sector == "Healthcare Equipment and Services") 
		{
			$ETF_specific = "XLV";
			$ETF_specific_name = "Health Care";
		}	

		else if ($sector == "Media" || $sector == "Household and Personal Products" || $sector == "Consumer Services" 
				|| $sector == "Consumer Durables and App" || $sector == "Consumer Durables and Apparel"
				|| $sector == "Automobiles and Components")
		{
			$ETF_specific = "XLY";
			$ETF_specific_name = "Consumer Discretionary";
		}	
		
		// Catch a mistake
		if($ETF_specific == "")
		{	
			$ETF_specific = "XLI";
			$ETF_specific_name = "Industrials";
		}

		if($toggle == "name")		
			return $ETF_specific_name;
		
		else 
			return $ETF_specific;
	}
	
	
?>