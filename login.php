<style>

	body#login {
		background: #000;
	}

	#login-form {
		padding: 0;
	}

	.login-logo .logo {
		height: auto;
		background: none;
		margin: 50px 0 20px;
	}

	.login-logo img {
		width: 100%;
		max-width: 270px;
	}

	.signin-checkbox {
		margin-top: 7px;
	}

	.banner-left {
		min-height: 100vh;
		background: #fff;
	}

	.banner-right {
		min-height: 100vh;
		color: #fff;
	}

	.banner-right .banner-title {
		color: #fff;
		margin-bottom: 15px;
		font-size: 2.0625rem;
		max-width: 555px;
		line-height: 45px;
	}

	.banner-right .list {
		margin-left: 16px;
		margin-bottom: 20px;
	}

	.banner-right .banner-text {
		max-width: 540px;
		margin-bottom: 5px;
	}

	.banner-slide {
		min-height: 100vh;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: 60% 0%;
		background-color: rgba(0, 0, 0, .2);
		flex-direction: column;
		justify-content: flex-end;
		padding-bottom: 30px;
	}

	.banner-content {
		padding-left: 7%;
		width: 97%;
	}

	.no-pad {
		padding: 0;
	}

	.fade {
		animation-duration: 2s;
		animation-name: slide-fade;
	}

	@keyframes slide-fade {
		from {
			opacity: .1
		}

		to {
			opacity: 1
		}
	}

	@media (max-width: 767px){
		.banner-right {
			display: none;
		}
	}

	@media (min-width: 768px){
		.banner-left,
		.banner-right {
			width: 50%;
		}
	}

	@media (min-width: 1024px){
		.banner-left {
			width: 38%;
		}
		.banner-right {
			width: 62%;
		}

		.banner-right .banner-title {
			font-size: 3.0625rem;
			line-height: 60px;
		}
	}

	@media (min-width: 1280px) {
		.banner-content {
			padding-left: 9%;
			width: 90%;
		}
	}

</style>

<div class="row">
	<div class="column banner-left">
		<div class="row login-logo">
			<div class="column small-12 text-center">
				<?php if ($_SERVER['HTTP_HOST'] == 'mobitrack.co.kr') { ?>
					<a href="http://mobidays.com/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dash.talkingdata.com') { ?>
					<a href="https://www.talkingdata.com" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dash.unity-attribution.com') { ?>
					<a href="https://www.unity.com" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dash.prioridata.com') { ?>
					<a href="https://www.prioridata.com" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dash.adgage.com') { ?>
					<a href="https://www.adgage.es/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dash.mcsaatchi.com') { ?>
					<a href="http://mcsaatchi.com/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'data.mofiler.io') { ?>
					<a href="https://www.mofiler.io/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'www.sitoaudience.com') { ?>
					<a href="https://www.sitomobile.com/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'dmp.memob.com') { ?>
					<a href="https://dmp.memob.com/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'livingaudience.gathrlab.io') { ?>
					<a href="https://livingaudience.gathrlab.io/" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'go.freeappanalytics.com') { ?>
					<a href="https://www.freeappanalytics.com" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } elseif ($_SERVER['HTTP_HOST'] == 'go.xchng.io') { ?>
					<a href="https://xchng.io" tabindex="1">
						<div class="logo"></div>
					</a>
				<?php } else { ?>
					<a href="http://www.kochava.com" tabindex="1">
						<div class="logo">
							<img src="http://assets.kochava.com/gokochavacom/static/dash-whitelabel-assets/kochava/login-logo-blk.png" alt="Kochava Logo" />
						</div>
					</a>
				<?php } ?>
			</div>
		</div>

		<div class="row">
			<div class="column small-11 medium-10 small-centered">
				<form id="login-form" action="javascript:void(0);" method="post">
					<div class="row">
						<div id="login-errors" class="column small-9 small-centered hide">
							<span class="error text-center"></span>
						</div>
					</div>
					<div class="row field-username">
						<div class="column small-centered">
							<label for="username">Username</label>
							<input id="username" type="text" tabindex="2"/>
						</div>
					</div>
					<div class="row field-password">
						<div class="column small-centered">
							<label for="password">Password</label>
							<input id="password" type="password" tabindex="3"/>
						</div>
					</div>
					<div class="row">
						<div class="column small-12 signin-checkbox">
							<input id="session-keep-alive" type="checkbox" tabindex="4"/> <label
								for="session-keep-alive"><span></span>Keep me signed in</label>
						</div>
					</div>
					<div class="row button-row">
						<div class="column small-12">
							<input type="submit" value="Log In" class="button primary expand" tabindex="5"/>
						</div>
					</div>
					<?php if (isset($_SERVER['HTTP_HOST']) && (\kochava\str_has_suffix($_SERVER['HTTP_HOST'], '.kochava.com') || $_SERVER['HTTP_HOST'] == 'kochava.com')) { ?>
						<br>
						<div class="row">
							<div class="column small-8 small-centered text-center">
								<p>Don't have an account yet?</p>
								<p><a href="https://www.kochava.com/sign-up/" target="_blank" tabindex="6">Create an Account</a></p>
							</div>
						</div>
					<?php } elseif ($_SERVER['HTTP_HOST'] == 'go.freeappanalytics.com') { ?>
						<br>
						<div class="row">
							<div class="column small-centered text-center">
								<p>Don't have an account yet?</p>
								<p><a href="https://www.freeappanalytics.com/sign-up/" target="_blank" tabindex="6">Create an
										Account</a></p>
							</div>
						</div>
					<?php } ?>

				</form>
			</div>
		</div>
	</div>

	<!-- populating slider div -->
	<div id="banner-right" class="no-pad column banner-right"></div>

</div>

<script>

	/** Update slides here or add new objects with same type of model */
	let loginAds = [
		{
			bgImage: 'http://assets.kochava.com/gokochavacom/static/dash-whitelabel-assets/kochava/login-ad-engagement-v1.jpg',
			title: 'Send Push Messages directly from Kochava',
			text: 'Send contextually-relevant relevant push messages based on the rich analytics data tracked from your app. ',
			adLink: 'https://www.kochava.com/kochava-collective?int-link=login_slide_1'
		},
		{
			bgImage: 'http://assets.kochava.com/gokochavacom/static/dash-whitelabel-assets/kochava/login-ad-collective-v1.jpg',
			title: 'Harness Your Data for Growth',
			text: 'Access the world\'s largest independent data marketplace to grow your audience. ',
			adLink: 'https://www.kochava.com/engagement?int-link=login_slide_2',
			bullets: [
				'Enrich Your First-Party Data', 'Analyze competitor\'s Audiences', 'Create Lookalike Audiences', 'Define Custom Audiences'
			]
		}
	]


	/** Loop through data to print out slides */
	loginAds.forEach(function(slide, i) {

		let isList = false
		let titleLength = false

		/** account for wrapping of title text */
		if(slide.title.length < 30){
			titleLength = true
		}

		if (slide.hasOwnProperty('bullets')) {
			isList = true

			function renderList(bullets){
				let listItem = bullets.map((bullet)=> {
					return `<li class="column no-pad small-6">${bullet}</li>`
				})
				listItem = listItem.join('')

				return `<ul class="row list">
									${listItem}
								</ul>`
			}
		}

		let newDiv = document.createElement('div')
		newDiv.setAttribute('class', `banner-slide fade`)
		newDiv.setAttribute('style', `background-image: url('${slide.bgImage}')`)

		let slideHtml = `<div class="banner-content column">
						<h1 class="banner-title" style="max-width: ${titleLength ? '500px' : '100%'}">${slide.title}</h1>
						<p class="banner-text">
							${slide.text}
							${isList ? `` : `<a href="${slide.adLink}" target="_blank">Learn More</a>`}
											${isList ? `${renderList(slide.bullets)}` : ``}
							${isList ? `<a href="${slide.adLink}" target="_blank">Learn More</a>` : ``}
						</p>
					</div>
				</div>`


		let bannerRight = document.querySelector('#banner-right')
		newDiv.innerHTML = slideHtml
		bannerRight.appendChild(newDiv)

	})

	/** functionality for slideshow */
	let slideIndex = 0
	showSlides()

	function showSlides() {
		let slides = document.getElementsByClassName('banner-slide')

		Array.from(slides).forEach((slide)=>{
			slide.style.display = 'none'
		})
		slideIndex++

		if (slideIndex > slides.length) {slideIndex = 1}

		slides[slideIndex - 1].style.display = 'flex'

		setTimeout(showSlides, 7000)
	}

</script>
