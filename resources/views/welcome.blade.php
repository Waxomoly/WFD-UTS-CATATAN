<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <title>Laravel</title>
        
    
        @yield('header')
        
        
    </head>
    <body>

        @if (session('error'))
        <script>
            //  document.addEventListener('DOMContentLoaded', function () {
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Oops...',
            //         text: "{{ session('error') }}",
            //     });
            // });
            alert("{{ session('error') }}")
        </script>
    @elseif (session('success'))
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Hooray!',
        //         text: '{{ session('success') }}',
        //     })
        // });
        alert("{{ session('success') }}")
    </script>
    @endif

        @yield('content')
        
        @yield('script')
    </body>
</html>
