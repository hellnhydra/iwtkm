<!-- admin/conferences/edit.blade.php -->

<h1>Edit Conference</h1>

<form method="POST" action="{{ route('conferences.update', $conference->id) }}">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $conference->name }}"><br><br>

    <label for="description">Description:</label>
    <textarea name="description">{{ $conference->description }}</textarea><br><br>

    <input type="submit" value="Update Conference">
</form>