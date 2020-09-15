<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">

        <title>Document</title>
    </head>
    <body>
        <h1>Here are the Posts:</h1>
        <ul>
        @foreach ($posts as $post)
            <li>{{ $post -> title }}</li>
        @endforeach
        </ul>  
    </body>
    </html>