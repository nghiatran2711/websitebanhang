<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite('resources/js/app.css')
</head>
<body>
@extends('parent')
@section('nav22')
        day la cai nav
        <x-alert type="error" message="that bai"/>
        <x-alert type="success" message="thành công"/>
        <x-forms.input/>

        @php 
            session()->put('okeeeee', 'nghia');
        @endphp
        {{ session()->get('okeeeee') }}
@endsection   
</body>
</html>
<style>
    .p-4{
        padding:4px;
    }

    .font-bold {
        font-weight: bold;
    }

    .text-gray-500 {
        color: gray;
    }

    .bg-red {
        background-color: red;
    }
</style>
