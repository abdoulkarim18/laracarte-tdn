<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        {{-- fontawesome cdn --}}
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
         {{-- bootstrapp cdn --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>{{ page_title($title ?? '') }}</title> 
        {{-- IL FAUT AUTOLODE LE FICHIER HELPERS.PHP --}}
        {{-- <title>{{ isset($title) ? $title . ' | ' :  '' }} Laracarte - List of artisans</title> --}}
       
        
        <style>
            body{
                font-family: 'Open Sans', sans-serif,Helvetica,Arial;
            }
            footer{
                margin-top: 4em;
                margin-bottom: 4em;
                margin: 4em 0;
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
       @include('layouts/partials/_nav')

       @yield('content')

       @include('layouts/partials/_footer')

        {{-- <script src="//code.jquery.com/jquery.min.js"></script> --}}

         {{-- js cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
