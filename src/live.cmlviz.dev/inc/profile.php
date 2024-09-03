<?php

	$companyDescription = "";
	
	function getCompanyProfle($ticker)
	{
		include "connection.php";
		
		$select_query = 
			"SELECT	legal_name,
					business_address,
					inc_country,
					business_phone_no,
					employees,
					company_url,
					long_description

			FROM 	companyprofiles
			WHERE ticker ='".$ticker."'
		";

		
		//echo "<br><br>".$select_query."<br><br>";
		$sql_result = $conn->query($select_query); 
		
		
		
		while($row = $sql_result->fetch_assoc())
		{
			$companyData[0] = $row['legal_name'];
			$companyData[1] = $row['long_description'];
			$companyData[2] = $row['business_address'];
			$companyData[3] = $row['business_phone_no'];
			$companyData[4]  = $row['inc_country'];
			$companyData[5] = $row['company_url'];
			$companyData[6] = $row['employees'];
		}
		
		return $companyData;
	
		
	}
	
	$companyData = getCompanyProfle($ticker);
	

			
	$companyName = $companyData[0];
	if(strlen($companyName) > 2)
	{
		$companyDescription = $companyData[1];
		$companyAddress = $companyData[2];
		$companyphone = $companyData[3];
		$companyCountry  = $companyData[4];
		$companyURL = $companyData[5];
		$companyEmployess = $companyData[6];	
	}
	
	else
	{
		
		$companyName = "";
		$companyDescription = "";
		$companyAddress = "";
		$companyphone = "";
		$companyCountry  = "";
		$companyURL = "";
		$companyEmployess = "";
	}
		
		
	/*
		legal_name
		businss_address
		inc_country
		business_phone_no
		employees
		company_url
		long_decsription
	*/
	/*
	$companyName = $companyData['name'];
	$companyDescription = $companyData['long_description'];
	$companyAddress = $companyData['business_address'];
	$companyphone =  $companyData['business_phone_no'];
	$companyCountry  = $companyData['hq_country'];
	$companyURL =  $companyData['company_url'];
	$companyEmployess =  $companyData['employees'];
	$companyName = "helo";
	$companyDescription = "helo";
	$companyAddress = "helo";
	$companyphone = "helo";
	$companyCountry  = "helo";
	$companyURL = "helo";
	$companyEmployess = "helo";
	*/
	
	
?>
<div id="profile" class="panel">

	<div class="inner-wrap">
	
		<table>
		
			<tr>
			
				<td colspan = "5"><br></td>
				
			</tr>	
		
			<tr>
			
				<td><b>&nbsp; More Fundamentals: &nbsp;</b></td>
				
				<td><a href="#profile">Profile</a></td>
				
				<td><font color ="#cccccc"> | </font></td>
				
				<td><a href="http://www.cmlviz.com/cmld3b/lite.php?app=rc&ticker=<?php echo $ticker;?>&graph_only=1">Trade Card&reg;</a></td>
				
				<td><font color ="#cccccc"> | </font></td>
				
				<td><a href="http://www.cmlviz.com/cmld3b/lite.php?app=tt&tickers=<?php echo $ticker;?>|<?php echo $peer1;?>">Side-by-Side Compare</a></td>
			
			</tr>		
			
			<tr>
			
				<td colspan = "6" style="border-bottom: dotted 1px #CCCCCC;"></td>
			
			</tr>
				
		</table>
		
		<br>
				
		<div class="profile-content">

			<div class="h-card">

				<div class="p-name"><?php echo $companyName;?></div>

				<div class="p-adr">

					<div class="p-street-address"><?php echo $companyAddress;?></div>

					

					<div class="p-country-name"><?php echo $companyCountry;?></div>

				</div>

				<div class="p-tel">Phone: <?php echo $companyphone;?></div>
				
				<div class="p-tel">Number of Employees: <?php echo $companyEmployess;?></div>
				
				<div class="u-url">

					<a href="<?php echo "http://".$companyURL;?>"><?php echo $companyURL;?></a>

				</div>

			</div>

			<div class="description">

				<h3 class="">Description</h3>

				<p><?php echo $companyDescription;?></p>

			</div>

		</div>

	</div>

</div>
