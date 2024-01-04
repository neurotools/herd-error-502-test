<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST</title>
    </head>
    <body>
        <form action="/" method="POST">
            @csrf

            @if($errors->any())
                <ul>
                {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif
            
            <p><input type="text" name="email"></p>
            <p><button type="submit">Submit</button></p>
        </form>
    </body>
</html>
