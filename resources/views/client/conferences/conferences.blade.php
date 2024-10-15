<h1>Visos konferencijos</h1>
<ul>
    @foreach ($conferences as $conference)
        <li>
            <a href="/client/conference/{{ $conference['id'] }}">{{ $conference['name'] }}</a>
            <p>{{ $conference['description'] }}</p>
        </li>
    @endforeach
</ul>
