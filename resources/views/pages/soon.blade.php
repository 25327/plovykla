<h1>Jau greitai!</h1>

<p>Gauk pranesima, kai startuosim!</p>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

{{session('message')}}

<form action="{{ route('subscribe') }}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="submit" name="Pranesti">
</form>
