<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
</head>
<body>
    <div class="container">
        <div class="content">
            @if (count($errors) > 0)
                <div id="error-messages">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (isset($success))
                <h2><?php echo $success ?></h2>
            @endif
            <form method="post" action="{{ route('registrate') }}">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"/>
                <input type="password" name="password"/>
                <input type="password" name="re-password"/>
                <input type="text" name="email"/>
                <select name="race" id="race">
                    <option value="orc">Orc</option>
                    <option value="human">Human</option>
                    <option value="undead">Undead</option>
                    <option value="sziskal">Sziskal</option>
                    <option value="dwarf">Dwarf</option>
                    <option value="gnome">Gnome</option>
                    <option value="woodelf">Wood elf</option>
                </select>
                <input type="submit" value="Submit"/>
                <input type="hidden" value="{{ Session::token() }}" name="_token"/>
            </form>
        </div>
    </div>
</body>
</html>