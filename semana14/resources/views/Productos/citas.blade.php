@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Citas</title>
</head>
<body>

@include('layouts.navbar')
    <div id="app" class="container">
        <citas-table></citas-table>
    </div>
</body>
</html>


