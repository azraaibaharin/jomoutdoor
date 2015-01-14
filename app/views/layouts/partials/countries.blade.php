<ul id="country-list" class="list-inline">
@foreach ($countries as $country)
	<li>
		<a href="{{ route('country.show', ['name' => $country->name]) }}" title="Go to {{ $country->name }}!">
			<img src="{{ asset('img/flags/'.$country->flag_name) }}" alt="{{ $country->name }}" height="20">
		</a>
	</li>
@endforeach
</ul>