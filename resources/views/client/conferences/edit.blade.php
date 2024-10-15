<h1>Edit Conference</h1>

<form action="{{ route('conferences.update', $conference->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $conference->name }}"><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description">{{ $conference->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>