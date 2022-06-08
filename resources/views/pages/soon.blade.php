<h1>Jau greitai!</h1>

<p>Gauk pranesima, kai startuosim!</p>

<form action="{{ route('subscribe') }}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="submit" name="Pranesti">
</form>
