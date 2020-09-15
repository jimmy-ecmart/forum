<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">

        <title>Document</title>
    </head>
    <body>
        <h1>
        {{ isset($post) ? $post->title : 'Post does not exist!' }}
        </h1>
        </p>put your content here!</p>
    </body>
    </html>