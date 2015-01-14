
<div class="slides">
	<section style="background-image: url('img/slide1.jpg')">
		<div class="container">
			<h1>Adventure for Everyone</h1>
		</div>
	</section>
	<section style="background-image: url('img/slide2.jpg')">
		<div class="container">
			<h1>Adventure for Everyone</h1>
		</div>
	</section>
	<section style="background-image: url('img/slide3.jpg')">
		<div class="container">
			<h1>Adventure for Everyone</h1>
		</div>
	</section>
	<!-- <section style="background-image: url('img/slide4.jpg')">
		<div class="container">
			<h1>Adventure for Everyone</h1>
		</div>
	</section>
	<section style="background-image: url('img/slide5.jpg')">
		<div class="container">
			<h1>Adventure for Everyone</h1>
		</div>
	</section> -->
</div>	

{{ HTML::script('js/vendor/slick.min.js'); }}
<script type="text/javascript">
    $(document).ready(function(){
		$('.slides').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			fade: true,
			arrows: false,
			speed: 500,
			slide: 'section'
		});
	});
</script>