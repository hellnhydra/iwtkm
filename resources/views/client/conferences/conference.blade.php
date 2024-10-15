<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<form action="/client/register/{{ $conference['id'] }}" method="POST">
    @csrf
    <button type="submit">Registruotis</button>
</form>
