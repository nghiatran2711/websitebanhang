<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="antialiased">
            Noi dung cua cha
            @php
            $jobs = [
                [
                    'title' => 'Job 1',
                    'description' => 'This is job 1',
                    'salary' => 50000
                ],
                [
                    'title' => 'Job 2',
                    'description' => 'This is job 2',
                    'salary' => 60000
                ],
                [
                    'title' => 'Job 3',
                    'description' => 'This is job 3',
                    'salary' => 70000
                ]
            ];
            @endphp
            @sectionMissing('nav')
                @each('default-navigation', $jobs, 'job')
            @endif

            @yield('nav22')
    </body>
</html>
