<!doctype html>

<?php
	include "inc/fundamental_functions.php";
	include "inc/price_functions_template.php";
	include "inc/getStockData.php";


?>

	<html lang="" class="no-js">

<head>

	<meta charset="" />

	<meta http-equiv="x-ua-compatible" content="ie=edge" />

	<title>CMLviz.com</title>

	<meta name="description" content="" />

	<meta name="keywords" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="shortcut icon" href="assets/img/favicon.png" />

	<link rel="apple-touch-icon" href="assets/img/touch-icon.png" />

	<link type="text/css" href="assets/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="assets/css/print.css" rel="stylesheet" media="print" />

</head>

<body>

	<header id="" class="header" role="banner">

		<div class="wrap">

			<div id="" class="logo">

			<a href="index.php?ticker=AAPL">CMLviz.com</a>

			</div>

			<form class="search symbol-search" METHOD="GET" ACTION="index.php">

				<label for="symbol-search">Enter any Symbol</label>

				<input type="text" name="ticker"  value="Enter a Symbol" onfocus="this.value=''; this.onfocus=null;" >

				<button type="submit">Search</button>

			</form>

			<nav id="" class="nav primary-navigation" role="navigation">

				<div class="toggle">

					<span>Menu</span>

				</div>

				<div class="primary-navigation-container">

					<ul>

						<li>

							<a href="#">CMLviz Home</a>

						</li>

						<li>

							<a href="#">Original Research</a>

						</li>

						<li>

							<a href="http://pro.cmlviz.com/register/cml-pro-19-per-month-membership-promotion/?source=CMLviz">CML Pro</a>

						</li>

						<li>

							<a href="https://cmlviz.com/register/trademachine-cml-option-back-tester/?souce=CMLviz">CML Trade Machine</a>

						</li>

					</ul>

				</div>

			</nav>

		</div>

	</header>

	<div id="" class="market-summary">

		<div class="wrap">

			<ul>

				<li>

					<div class="name">

						<font color ="#0091f5">SPX</font>

					</div>

					<div class="meta">

						<!--<div class="price">2,432.21</div>-->

					<?php

						$fontColor = getFontColor($SPXPercentChange);
					?>

						<span class="percent"><font color ="000000"><b><?php echo $SPXPrice;?></b></font></span>

						<span class="percent"><font color ="<?php echo $fontColor;?>"><?php echo $SPXChange_text;?></font></span>
						<span class="percent"><font color ="<?php echo $fontColor;?>">(<?php echo $SPXPercentChange_text;?>%)</font></span>

					</div>

					<div class="chart">

							<?php

								if($SPXPercentChange > 0) $image = "http://www.cmlviz.com/cmld3b/images/up.gif";
								elseif($SPXPercentChange < 0) $image = "http://www.cmlviz.com/cmld3b/images/down.gif";
								else $image = "http://www.cmlviz.com/cmld3b/images/flat.gif";
							?>

							<img src ="<?php echo $image;?>" style ="max-width:30px;">

					</div>

				</li>

				<li>

					<div class="name">

						<font color ="#0091f5">Dow 30</font>

					</div>

					<div class="meta">

						<!--<div class="price">21,398.10</div>-->

						<!--<div class="change negative">-->

							<!--<span class="decimal">-69.04</span>-->

					<?php

						$fontColor = getFontColor($DIAPercentChange);
					?>

						<span class="percent"><font color ="<?php echo $fontColor;?>"><?php echo $DIAPercentChange_text;?>%</font></span>

					</div>

					<div class="chart">

							<?php

								if($DIAPercentChange > 0) $image = "http://www.cmlviz.com/cmld3b/images/up.gif";
								elseif($DIAPercentChange < 0) $image = "http://www.cmlviz.com/cmld3b/images/down.gif";
								else $image = "http://www.cmlviz.com/cmld3b/images/flat.gif";
							?>

							<img src ="<?php echo $image;?>" style = "max-width:30px;">

					</div>

				</li>

				<li>

					<div class="name">

						<font color ="#0091f5">Nasdaq 100</font>

					</div>

					<div class="meta">

						<!--<div class="price">21,398.10</div>-->

						<!--<div class="change negative">-->

							<!--<span class="decimal">-69.04</span>-->

					<?php

						$fontColor = getFontColor($QQQPercentChange);
					?>

						<span class="percent"><font color ="<?php echo $fontColor;?>"><?php echo $QQQPercentChange_text;?>%</font></span>

					</div>

					<div class="chart">

							<?php

								if($QQQPercentChange > 0) $image = "http://www.cmlviz.com/cmld3b/images/up.gif";
								elseif($QQQPercentChange < 0) $image = "http://www.cmlviz.com/cmld3b/images/down.gif";
								else $image = "http://www.cmlviz.com/cmld3b/images/flat.gif";
							?>

							<img src ="<?php echo $image;?>" style = "max-width:30px;">

					</div>

				</li>

<li>

					<div class="name">

						<font color ="#0091f5">VIX</font>

					</div>

					<div class="meta">

						<!--<div class="price">21,398.10</div>-->

						<!--<div class="change negative">-->

							<!--<span class="decimal">-69.04</span>-->

					<?php

						$fontColor = getFontColor($VIXPercentChange);
					?>

						<span class="percent"><font color ="<?php echo $fontColor;?>"><?php echo $VIXPrice?></font></span>
						<span class="percent"><font color ="<?php echo $fontColor;?>"><?php echo $VIXChange_text;?></font></span>
						<span class="percent"><font color ="<?php echo $fontColor;?>">(<?php echo $VIXPercentChange_text;?>%)</font></span>

					</div>

					<div class="chart">

							<?php

								if($VIXPercentChange > 0) $image = "http://www.cmlviz.com/cmld3b/images/up.gif";
								elseif($VIXPercentChange < 0) $image = "http://www.cmlviz.com/cmld3b/images/down.gif";
								else $image = "http://www.cmlviz.com/cmld3b/images/flat.gif";
							?>

							<img src ="<?php echo $image;?>" style = "max-width:30px;">

					</div>

				</li>



				<li>
				</li>

			</ul>

		</div>

	</div>

	<div id="" class="notifications">

		<div class="wrap">

			<!--<div class="message">-->

				<?php include 'inc/notifications.php'; ?>

			<!--</div>-->

		</div>

	</div>


	<?php

		// this is the text below the stock price like 'NASDAQ:AAPL'
		$exchangeText = $exchange.":".$ticker;

		/* If we have an ETF, we need to make the name the ticker
		   and remove the ':' in the variable $exchange_text
		*/
		if($isETF)
		{
			$companyName = $name;
			$exchangeText = $ticker;
		}

		// Sets oolor of the price text: (red is negative, green positive, black unched)
		$fontColor = getFontColor($stockChange);
	?>

	<main id="" class="content" role="main">

		<div class="wrap">

			<div class="quote">

				<div class="overview">

					<h1 class="name"><?php echo $companyName;?></h1>

					<div class="note"><?php echo $exchangeText?></div>

					<div class="meta">

						<div class="price"><?php echo $stockPrice_text;?></div>

						<div class="change positive">

							<span class="decimal"> <font color = "<?php echo $fontColor;?>"><?php echo $stockChange_text;?></font></span>

							<span class="percent"><font color = "<?php echo $fontColor;?>">(<?php echo $stockPercentChange_text;?>%)</font></span>

						</div>

						<div class="time"></div>

					</div>

					<form class="search quote-search">

						<label for="quote-search">Quote Lookup</label>

						<input type="text" name="ticker"  value="Quote Lookup" onfocus="this.value=''; this.onfocus=null;">

						<button type="submit">Search</button>

					</form>

					<?php

						$peer1 = getPeer($ticker, "peerTicker", "1", "mvCompanyPeers");
						if($peer1 == -123456) $peer1 = "";
						$peer2 = getPeer($ticker, "peerTicker", "2", "mvCompanyPeers");
						if($peer2 == -123456) $peer2 = "";
						$peer3 = getPeer($ticker, "peerTicker", "3", "mvCompanyPeers");
						if($peer3 == -123456) $peer3 = "";
						$peer4 = getPeer($ticker, "peerTicker", "4", "mvCompanyPeers");
						if($peer4 == -123456) $peer4 = "";
						$peer5 = getPeer($ticker, "peerTicker", "5", "mvCompanyPeers");
						if($peer5 == -123456) $peer5 = "";

					?>
					<div class="people-also-watch">

						<h3 class="title">People also watch</h3>

						<ul>

							<li>

								<a href="#" title="Google"><a href="index.php?ticker=<?php echo $peer1;?>"><?php echo $peer1;?></a>

							</li>

							<li>

								<a href="#" title="Facebook"><a href="index.php?ticker=<?php echo $peer2;?>"><?php echo $peer2;?></a>

							</li>

							<li>

								<a href="#" title="Amazon"><a href="index.php?ticker=<?php echo $peer3;?>"><?php echo $peer3;?></a>

							</li>

							<li>

								<a href="#" title="Netflix"><a href="index.php?ticker=<?php echo $peer4;?>"><?php echo $peer4;?></a>

							</li>

							<li>

								<a href="#" title="Tesla"><a href="index.php?ticker=<?php echo $peer5;?>"><?php echo $peer5;?></a>

							</li>

						</ul>

					</div>

				</div>

				<div class="details">

					<div class="details-navigation">

						<nav class="details-navigation-container transformer-tabs" role="navigation">

							<div class="toggle">

								<span>

									<b>Details:</b> <span class="active-panel">Summary</span>

								</span>

							</div>

							<ul>

								<li>

									<a href="inc/summary.php" class="active">Summary</a>

								</li>

								<?php if(!$isETF)
								{
								?>

									<li>

										<a href="inc/statistics.php">Stats</a>

									</li>

									<!--
									<li>

										<a href="inc/profile.php">Profile</a>

									</li>
									-->

									<?php }?>

									<li>

										<a href="inc/stock-chart.php">Stock Chart</a>

									</li>


									<li>

										<a href="inc/risk-chart.php">Risk Chart</a>

									</li>

									<?php if(!$isETF)
									{
									?>

										<li>

											<a href="inc/financial-charts.php">Financial Charts</a>

										</li>



										<li>

											<a href="inc/financials.php">Financials</a>

										</li>

										<li>

											<a href="inc/profile.php">Fundamentals</a>

										</li>

										<li>

											<a href="inc/holders.php">Insider Trading</a>

										</li>

										<li>

											<a href="inc/analysts.php">Analysts</a>

										</li>

								<?php
								}
								?>


								<li>

									<a href="inc/option-back-tester.php">Option Back-Tester</a>

								</li>

							</ul>

						</nav>

					</div>

					<div class="details-content">

						<div class="panels">

							<?php include 'inc/summary.php'; ?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</main>

	<footer id="" class="footer" role="contentinfo">

		<div class="wrap">

			<p class="copyright">Copyright 2017 CML Viz. All rights reserved.</p>

		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>

	<script>

		window.jQuery || document.write( '<script type="text/javascript" src="/assets/js/jquery.js"><\/script>' )

	</script>

	<script type="text/javascript" src="assets/js/global.js"></script>

</body>

</html>
