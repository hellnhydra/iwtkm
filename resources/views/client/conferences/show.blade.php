<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<h1>{{ $conference['name'] }}</h1>

<p><strong>Data:</strong> {{ $conference['date'] }}</p>
<p><strong>Aprasymas:</strong> {{ $conference['description'] }}</p>
<p><strong>Vieta:</strong> {{ $conference['location'] }}</p>

<a href="{{ url('/client') }}">Grizti i konferenciju sarasa</a>
