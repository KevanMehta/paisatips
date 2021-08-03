<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Assets/CSS/marketstyle.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/0f1f570846.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>PaisaTips | Market Analysis</title>

</head>

<style>
	.back-to-top {
		position: fixed;
		bottom: 25px;
		right: 25px;

	}

	.main-content {
		background-color: #f1f5f8;

	}

	.blue-block {
		background-color: #f1f5f8;
		padding: 5px 0px 5px 0px;
	}

	.graph-container {
		margin-top: 5%;
		margin-bottom: 3%;
	}

	.form {
		width: 100%;
		padding: 0px 0px 30px 20px;
	}

	.form input {
		margin: 10px;
		width: 100%;
	}

	.w3-display-topright {
		position: absolute;
		right: 10px;
		top: 3px;
		font-size: 30px;
	}

	.w3-button:hover {
		color: #000 !important;
		background-color: #1e90ff !important;
	}
</style>

<body>
	<div class="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<ul class="left-info">
						<li><a href="#" style="text-decoration: none; pointer-events: none;"><i class="fa fa-clock-o font-awesome"></i>Mon-Sat 09:00-19:00</a></li>
						<li><a href="#" style="text-decoration: none; pointer-events: none;"><i class="fa fa-phone font-awesome"></i>097900-30919</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="right-icons">
						<li><a href="https://www.facebook.com/abcinfomediapvtltd/"><i class="fa fa-facebook font-awesome"></i></a>
						</li>
						<li><a href="https://twitter.com/abc_infomedia"><i class="fa fa-twitter font-awesome"></i></a></li>
						<li><a href="https://www.linkedin.com/in/abcinfomedia/"><i class="fa fa-linkedin font-awesome"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCa5hWmytEVKaeyqI_jpgAlw?view_as=subscriber"><i class="fa fa-youtube font-awesome"></i></a></li>
						<li><a href="https://in.pinterest.com/abcinfomediapvtltd/?autologin=true"><i class="fa fa-pinterest font-awesome"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<header class="">
		<nav class="navbar navbar-expand-lg sticky-top ">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<h2>Paisa <span style="color: dodgerblue;">Tips</span></h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./About Us/about-us.html">About Us</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="./Services/ABC infomedia/Servies.html">Our Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="clear"></div>



	<div class="market-info">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<img class="img-responsive" src="./Assets/Images/market-analysis.jpg" alt="market analysis">
				</div>

				<div class="col-md-6">
					<h2 class="first-content">Simple and smart way to start investing idea in PaisaTips</h2>
					<h3 class="mySlides-text">Stocks</h3>
					<h3 class="mySlides-text">Share Market</h3>
					<h3 class="mySlides-text">Mutual Funds</h3><br>
					<div class="contain">
						<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" style="border-radius: 8px; font-size: 20px; ">Start Investing</button>

					</div>
				</div>
				<div id="id01" class="w3-modal">
					<div class="w3-modal-content w3-animate-top w3-card-4" style="margin-top:50px; width:50%; border-radius:20px; box-shadow: 3px 15px 50px 14px black;">

						<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
						<h2 style="text-align:center; padding-top: 60px;">Consult our Expert</h2>
						</header>
						<div class="w3-container">
							<p>
							<div class="container">
								<div class="row">
									<div class="form">
										<form action="send-query.php" method="POST" id="contacts" autocomplete="off">
											<div class="form-group mt-4">

												<input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="Enter Full name">
											</div>
											<div class="form-group">

												<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Email">

											</div>
											<div class="form-group">

												<input type="text" name="subject" class="form-control" id="exampleInputsubject" aria-describedby="emailHelp" required placeholder="Enter Query Topic">
											</div>
											<div class="form-group">

												<input type="text" name="message" class="form-control" id="exampleInputmessage" aria-describedby="emailHelp" required placeholder="Enter your Query">
											</div>

											<center><button type="submit" name="submit" class="btn btn-outline-info text-center">Send Query</button></center>
										</form>
									</div>
								</div>
							</div>
						</div>
						</p>

					</div>

				</div>
			</div>


			<div class="col-md-12">
				<div class="indian-stock">
					<h3 class="about">About Indian stock market</h3>
					<p style="font-size: 18px;">The Indian stock market is dominated by the Bombay Stock Exchange (BSE) and the National Stock Exchange (NSE) which are the world's 11th & 12th largest exchange, having a market capitalization of 1.83 Trillion Dollars & 1.41 Trillion Dollars respectively. Akin to Wall Street, the Bombay Stock Exchange located at Dalal Street never sleeps. NSE's flagship index, the NIFTY 50, is used extensively by investors in India and around the world as a barometer of the Indian capital markets.</p>
				</div>
			</div>

		</div>
	</div>
	</div>

	<div class="main-content">
		<div class="container">

			<div class="share-tips">
				<h3 class="share-heading" style="color:#314259">Share Market Tips</h3>
			</div>

			<div data-aos="fade-right">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>1</span>Understand Your Investor Profile</h4>
						<p>Every investor is unique and has a specific investment requirement to fulfill his/her financial goals.</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-left">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>2</span>Avoid Emotion-Driven Investment Decisions</h4>
						<p>Stock markets are volatile by nature. Hence, if you keep making investment decisions based on market volatility, you will always be exposed to the risk of buying/selling at the wrong time. So, a more prudent approach is to create an investment plan and stick to it while making minor changes based on data-driven analysis. Emotion-based decisions are usually counterproductive.</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-right">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>3</span>Diversify</h4>
						<p>Your investment portfolio must be diversified across various asset classes like equities, debt, gold, commodities, real estate, etc. Within each asset class, you need to ensure maximum diversification too. There are many ways to diversify your stock investments: 1. Across market capitalization 2. Across sectors</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-left">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>4</span>Be Careful Before Using Borrowed Money to Invest</h4>
						<p>Most first-time investors open a margin trading account where the brokerage firm lends money to invest in stocks, This is usually around 50 percent of the purchase value of the stocks. While this seems like a great way to invest, the risks are far greater than the benefits of using this facility. Here is an example to help you understand.</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-right">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>5</span>Don’t Follow Market Trends or Experts Blindly</h4>
						<p>If you follow advice or trends without thinking, then you will often find yourself selling stocks that you wanted to keep or buying ones that you didn’t want. Hence, ensure that you make decisions without being influenced by these factors.</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-left">
				<div class="container mt-3">
					<div class="market-tips">
						<h4><span>6</span>Avoid Trying to Time or Predict the Market</h4>
						<p>Most new investors look at stocks with a simple perspective of buying low and selling high. This ensures profit and saves them the effort of researching the company or going through pages of financial statements, etc.
							However, this is a dangerous approach since it forces them to guess the lows and the highs. While you can get lucky once or twice, this cannot be an investment strategy over the long-term.</p>
					</div>

				</div>

				<div data-aos="fade-right">
					<div class="container mt-3">
						<div class="market-tips">
							<h4><span>7</span>Monitor Your Investments Regularly</h4>
							<p>A stock market is a volatile place. Every major event happening in any part of the world impacts the performance of stocks in all countries.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="conatiner text-center graph-container">
		<h1 style="margin-top:30px;color:#314259"><u><b>Stock information of the compaines</b></u></h1>
	</div>

	<?php
	include './searchstocks.php';
	?>

	<div class="container-fluid blue-block">
		<div class="container mutual-container">
			<div class="main-funds">
				<h3 class="about">What are Mutual Funds?</h3>
				<p style="font-size: 18px;">Mutual funds are one of the most popular investment options these days. A mutual fund is an investment vehicle formed when an asset management company (AMC) or fund house pools investments from several individuals and institutional investors with common investment objectives. A fund manager, who is a finance professional, manages the pooled investment. The fund manager purchases securities such as stocks and bonds that are in line with the investment mandate.</p>

				<h3 class="types">Types of Mutual Funds</h3>
				<p style="font-size: 18px;">1. Equity funds</p>
				<p style="font-size: 18px;">2. Debt Mutual Funds</p>
				<p style="font-size: 18px;">3. Balanced or Hybrid Mutual Funds</p>
			</div>
		</div>

		<div class="container mt-3">
			<div class="type-funds">
				<center>
					<h2>Top Mutual Funds to Invest</h2>
					<center>
						<table id="funds">
							<tr>
								<th>Best Funds</th>
								<th>5-Year Returns</th>
								<th>3-Year Returns</th>
							</tr>

							<tr>
								<td>Aditya Birla Sun Life India Opportunities Fund</td>
								<td>26.88 %</td>
								<td>14.7 %</td>
							</tr>

							<tr>
								<td>Edelweiss Greater China Equity Off-shore Fund</td>
								<td>25.23 %</td>
								<td>22.67 %</td>
							</tr>

							<tr>
								<td>TATA Digital India Fund DIRECT Plan Growth</td>
								<td>23.85 %</td>
								<td>27.31 %</td>
							</tr>

							<tr>
								<td>SBI Small Cap Fund - Direct Plan - Growth</td>
								<td>23.74 %</td>
								<td>17.99 %</td>
							</tr>

							<tr>
								<td>ICICI Prudential Technology Fund</td>
								<td>22.94 %</td>
								<td>29.09 %</td>
							</tr>

							<tr>
								<td>HDFC Balanced Fund</td>
								<td>18.7 %</td>
								<td>10.83 %</td>
							</tr>

							<tr>
								<td>ICICI Prudential Multicap Fund - Dividend</td>
								<td>13.35 %</td>
								<td>11.62 %</td>
							</tr>

							<tr>
								<td>DSP Equity & Bond Fund - Direct Plan - Growth</td>
								<td>15.26 %</td>
								<td>14.41 %</td>
							</tr>

							<tr>
								<td>Principal Hybrid Equity Fund - Direct Plan Growth</td>
								<td>15.33 %</td>
								<td>10.31 %</td>
							</tr>

							<tr>
								<td>Mirae Asset Emerging Bluechip Fund - Direct Plan - Growth</td>
								<td>22.69 %</td>
								<td>21.07 %</td>
							</tr>

						</table>
			</div>
		</div>
	</div>
	<div class="container mt-3">
		<div class="why-mutual-funds">
			<center>
				<h2>Why Should You Invest in Mutual Funds?</h2>
			</center>
		</div>

		<div class="why">
			<p><span>1. </span>Investment Handled by Experts ( Fund Managers )</p>
			<p><span>2. </span>No Lock-in Period</p>
			<p><span>3. </span>Low Cost</p>
			<p><span>4. </span>SIP ( Systematic Investment Plan )</p>
			<p><span>5. </span>Switch Fund Option</p>
			<p><span>6. </span>Goal-Based Funds</p>
			<p><span>7. </span>Diversification</p>
			<p><span>8. </span>Flexibility</p>
			<p><span>9. </span>Liquidity</p>
			<p><span>10. </span>Seamless Process</p>
			<p><span>11. </span>Tax-Saving</p>
			<p><span>12. </span>No Need to Time Markets</p>
		</div>


	</div>
	</div>

	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 50) {
					$('#back-to-top').fadeIn();
				} else {
					$('#back-to-top').fadeOut();
				}
			});
			// scroll body to 0px on click
			$('#back-to-top').click(function() {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});
	</script>
	<!--footers-->
	<footer class="footer">
		<div class="container">
			<div class="row footer-row">
				<div class="footer-col">
					<h4>PAISA TIPS</h4>
					<ul>
						<li>
							<style font-color:white;></style>You can find us here!</style>
						</li><br>
					</ul>
					<div class="social-icons">
						<a href="https://www.facebook.com/abcinfomediapvtltd/"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/abc_infomedia"><i class="fab fa-twitter"></i></a>
						<a href="https://www.linkedin.com/in/abcinfomedia/"><i class="fab fa-linkedin"></i></a>
						<a href="https://www.youtube.com/channel/UCa5hWmytEVKaeyqI_jpgAlw?view_as=subscriber"><i class="fab fa-youtube"></i></a>
						<a href="https://in.pinterest.com/abcinfomediapvtltd/?autologin=true"><i class="fab fa-pinterest"></i></a><br><br>

					</div>
				</div>
				<div class="footer-col">
					<h4>Services</h4>
					<ul>
						<li><a href="./market.php">Market Analysis</a></li><br>
						<li><a href="./finance.html">Financial Data</a></li><br>
						<li><a href="./cryptocurrency.php">Cryptocurrency</a></li><br>

						<li><a href="./Services/ABC infomedia/accounting.html">Accounting Services</a></li><br>
						<li><a href="./taxation.html">Taxation</a></li><br>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="./index.php">Home</a></li><br>
						<li><a href="./About Us/about-us.html">About Us</a></li><br>
						<li><a href="./Services/ABC infomedia/Servies.html">Our Services</a></li><br>
						<li><a href="./contact.html">Contact Us</a></li><br>
						<li><a href="./blog.html">Blogs</a></li><br>

					</ul>
				</div>
				<div class="footer-col">
					<h4>FAQ</h4>
					<ul>
						<li><a href="./Services/ABC infomedia/FAQ.html">Best ways to separate business & personal finances?</a></li>
						<br>
						<li><a href="./Services/ABC infomedia/FAQ.html">What makes you different than others?</a></li><br>
						<li><a href="./Services/ABC infomedia/FAQ.html">What does the monthly accounting process look like?</a></li>
						<br>
						<li><a href="./Services/ABC infomedia/FAQ.html">What accounting system do you use?</a></li><br>
					</ul>
				</div>
			</div>
		</div>
		<center>
			<p class="white-text" style="color: white;">Copyright © 2021 ABC INFOMEDIA -</p>
			<a href="./team.html" style="text-decoration:none;color:white">MEET THE DEVELOPERS TEAM!!</a>
		</center>
	</footer>
	<!--footers ends here-->





</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init({
		duration: 1300,
	});
</script>


<script>
	var slideIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides-text");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > x.length) {
			slideIndex = 1
		}
		x[slideIndex - 1].style.display = "block";
		setTimeout(carousel, 2000);
	}
</script>


</html>