<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<h2>Uzsiregistrave dalyviai:</h2>
<ul>
    @foreach ($participants as $participant)
        <li>{{ $participant['name'] }}</li>
    @endforeach
</ul>
