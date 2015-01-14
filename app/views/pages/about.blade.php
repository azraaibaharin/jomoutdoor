@extends('layouts.base')

@section('content')
	<!-- <div class="fullscreen-bg" style="background-image: url('img/about.jpg')"></div> -->
	<div id="about">
		@include('layouts.partials.nav')
	
		<div class="page-banner" style="background-image: url('img/about.jpg')"></div>

		<div class="white-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					    <h2 class="hero">About us</h3>
						<p>Proin iaculis nisi dui, a blandit nulla vehicula elementum. Quisque volutpat arcu non molestie faucibus. Etiam a bibendum neque, ut laoreet tortor. Morbi dolor velit, interdum tincidunt tempus vitae, congue ut elit. Nulla nisl nunc, pellentesque id malesuada placerat, faucibus nec ipsum. Mauris vulputate tristique odio, in sollicitudin dui dignissim ut. Maecenas pretium mi et dictum feugiat. Nam elit nibh, dictum et nisl a, vulputate bibendum sem. Morbi congue eros iaculis turpis accumsan placerat. Nunc lobortis nibh quis ipsum pellentesque, ut hendrerit eros tempor. Fusce porta dolor in malesuada tempor. Duis vitae dictum lectus, a egestas erat.</p>
						<p>Nam lobortis nunc sit amet interdum dapibus. Sed hendrerit enim fermentum condimentum tincidunt. Donec ultricies neque ut mauris commodo condimentum. Quisque magna mauris, accumsan id nunc et, vestibulum elementum tellus. Phasellus facilisis convallis molestie. Maecenas sit amet mattis leo. Nulla ultrices nunc dui, ut placerat nisl cursus nec. Ut non odio nulla. Integer tincidunt accumsan orci non gravida. Nam commodo nisi non neque tempor, ut malesuada neque rutrum. Ut vel dictum mauris.</p>
						<p>Nunc posuere arcu varius, varius risus non, consectetur neque. Phasellus mollis massa et metus consequat, sed pretium purus tempus. Praesent ultrices sapien in risus blandit egestas nec at nunc. Phasellus eu adipiscing arcu, eget sagittis nisl. Donec rhoncus id purus eget commodo. Pellentesque lacinia ultricies rutrum. Nullam non faucibus metus. Maecenas feugiat rutrum metus. Quisque tristique ante a hendrerit volutpat. Nulla luctus bibendum dui quis sollicitudin. Suspendisse potenti. Vivamus cursus ante sapien, in condimentum sem tincidunt vitae. Duis non ante vulputate, pellentesque erat a, mattis augue.</p>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.partials.footer')
	</div>
@stop

@section('scripts')
	{{ HTML::script('js/vendor/slick.min.js'); }}
@stop