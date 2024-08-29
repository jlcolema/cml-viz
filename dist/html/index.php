<!doctype html>

<html lang="" class="no-js">

<head>

	<meta charset="" />

	<meta http-equiv="x-ua-compatible" content="ie=edge" />

	<title>Project Title</title>

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

				<a href="/">Logo</a>

			</div>

			<form class="search symbol-search">

				<label for="symbol-search">Enter any Symbol</label>

				<input type="text" name="" id="symbol-search" class="" placeholder="Enter any Symbol" />

				<button type="submit">Search</button>

			</form>

			<nav id="" class="nav primary-navigation" role="navigation">

				<div class="toggle">

					<span>Menu</span>

				</div>

				<div class="primary-navigation-container">

					<ul>

						<li>

							<a href="#">Finance Home</a>

						</li>

						<li>

							<a href="#">Originals</a>

						</li>

						<li>

							<a href="#">CML Pro</a>

						</li>

						<li>

							<a href="#">CML Trade Machine</a>

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

						<a href="#">S&amp;P 500</a>

					</div>

					<div class="meta">

						<div class="price">2,432.21</div>

						<div class="change negative">

							<span class="decimal">-4.82</span>

							<span class="percent">(-0.20%)</span>

						</div>

					</div>

					<div class="chart">

						<a href="#">

							Chart

						</a>

					</div>

				</li>

				<li>

					<div class="name">

						<a href="#">Dow 30</a>

					</div>

					<div class="meta">

						<div class="price">21,398.10</div>

						<div class="change negative">

							<span class="decimal">-69.04</span>

							<span class="percent">(-0.32%)</span>

						</div>

					</div>

					<div class="chart">

						<a href="#">

							Chart

						</a>

					</div>

				</li>

				<li>

					<div class="name">

						<a href="#">Nasdaq</a>

					</div>

					<div class="meta">

						<div class="price">6,220.41</div>

						<div class="change positive">

							<span class="decimal">+32.38</span>

							<span class="percent">(+0.52%)</span>

						</div>

					</div>

					<div class="chart">

						<a href="#">

							Chart

						</a>

					</div>

				</li>

			</ul>

		</div>

	</div>

	<div id="" class="notifications">

		<div class="wrap">

			<div class="message">

				<?php include 'inc/notifications.php'; ?>

			</div>

		</div>

	</div>

	<main id="" class="content" role="main">

		<div class="wrap">

			<div class="quote">

				<div class="overview">

					<h1 class="name">Apple Inc. (AAPL)</h1>

					<div class="note">NasdaqGS &ndash; NasdaqGS Real Time Price. Current in USD</div>

					<div class="meta">

						<div class="price">145.43</div>

						<div class="change positive">

							<span class="decimal">+0.42</span>

							<span class="percent">(+0.29%)</span>

						</div>

						<div class="time">As of 2:08PM EDT. Market open.</div>

					</div>

					<form class="search quote-search">

						<label for="quote-search">Quote Lookup</label>

						<input type="text" name="" id="quote-search" class="" placeholder="Quote Lookup" />

						<button type="submit">Search</button>

					</form>

					<div class="people-also-watch">

						<h3 class="title">People also watch</h3>

						<ul>

							<li>

								<a href="#" title="Google">GOOG</a>

							</li>

							<li>

								<a href="#" title="Facebook">FB</a>

							</li>

							<li>

								<a href="#" title="Amazon">AMZN</a>

							</li>

							<li>

								<a href="#" title="Netflix">NFLX</a>

							</li>

							<li>

								<a href="#" title="Tesla">TSLA</a>

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

								<li>

									<a href="inc/statistics.php">Statistics</a>

								</li>

								<li>

									<a href="inc/profile.php">Profile</a>

								</li>

								<li>

									<a href="inc/stock-chart.php">Stock Chart</a>

								</li>

								<li>

									<a href="inc/risk-chart.php">Risk Chart</a>

								</li>

								<li>

									<a href="inc/financials.php">Financials</a>

								</li>

								<li>

									<a href="inc/financial-charts.php">Financial Charts</a>

								</li>

								<li>

									<a href="inc/holders.php">Holders</a>

								</li>

								<li>

									<a href="inc/analysts.php">Analysts</a>

								</li>

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

	<script type="text/javascript" src="assets/js/canvas.js"></script>

	<script type="text/javascript" src="assets/js/global.js"></script>

</body>

</html>
