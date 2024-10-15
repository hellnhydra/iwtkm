<!-- resources/views/client/conferences/index.blade.php -->

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<h1>Konferenciju sarasas</h1>

@if(!empty($conferences))
    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference['name'] }} - {{ $conference['date'] }}
                <br>
                <a href="{{ url('/client/conference/' . $conference['id']) }}">Perziureti</a> | 
                <form action="{{ url('/client/conference/register/' . $conference['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Registracija</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>Nera konferenciju</p>
@endif