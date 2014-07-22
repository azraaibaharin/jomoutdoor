@extends('layouts.base')

@section('main')
<div class="contain-to-grid">
	<nav class="top-bar" data-topbar> 
		<ul class="title-area">
			<li class="name"></li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		 	<li class="toggle-topbar menu-icon">
		 		<a href="#"><span></span></a>
		 	</li> 
		</ul> 

		<section class="top-bar-section"> 
			<ul class="left">
				<li><a href="#">Logo</a></li> 
			</ul>
			<!-- Right Nav Section --> 
			<ul class="right">
				<li><a href="#">About Us</a></li> 
			</ul>
		</section> 
	</nav>
</div>

<div id="hero" class="row">
	<div class="small-12 columns">
		<div class="slides">
			<div>
				<section style="background-image: url('img/slide1.jpg')">
					<h1>Adventure for Everyone</h1>
				</section>
			</div>
			<div>
				<section style="background-image: url('img/slide2.jpg')">
					<h1>Adventure for Everyone</h1>
				</section>
			</div>
			<div>
				<section style="background-image: url('img/slide3.jpg')">
					<h1>Adventure for Everyone</h1>
				</section>
			</div>
			<div>
				<section style="background-image: url('img/slide4.jpg')">
					<h1>Adventure for Everyone</h1>
				</section>
			</div>
			<div>
				<section style="background-image: url('img/slide5.jpg')">
					<h1>Adventure for Everyone</h1>
				</section>
			</div>
		</div>	
	</div>
</div>

<div id="countries" class="row">
	<ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4">
		<li class="country">
			<a href="" style="background-image: url('img/flag_malaysia.gif')" class="avatar"></a>		
		</li> 
		<li class="country">
			<a href="" style="background-image: url('img/flag_indonesia.gif')" class="avatar"></a>		
		</li> 
		<li class="country">
			<a href="" style="background-image: url('img/flag_vietnam.gif')" class="avatar"></a>		
		</li> 
		<li class="country">
			<a href="" style="background-image: url('img/flag_nepal.gif')" class="avatar"></a>		
		</li> 
	</ul>
</div>

<!-- <div id="countries" class="row">
	<div class="small-12 medium-3 large-3 large-centerd columns">
		<div class="country">
			<a href="" style="background-image: url('img/flag_malaysia.gif')" class="avatar"></a>			
		</div>
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<div class="country">
			<a href="" style="background-image: url('img/flag_indonesia.gif')" class="avatar"></a>
		</div>
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<div class="country">
			<a href="" style="background-image: url('img/flag_vietnam.gif')" class="avatar"></a>
		</div>
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<div class="country">
			<a href="" style="background-image: url('img/flag_nepal.gif')" class="avatar"></a>
		</div>
	</div>
</div> -->

<div id="footer" class="row">
	<div class="small-12 columns">
		<label>Copyright © 2014 JomOutdoor. All rights reserved. Terms of Use | Privacy Policy</label>
	</div>
</div>

@stop