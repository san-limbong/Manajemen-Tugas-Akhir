<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>
<body>
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            @include('dashboard.layouts.header')
            <!--/Header-->
            <div class="flex flex-1">
                <!--Sidebar-->
                @include('dashboard.layouts.sidebar')
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                    @yield('container')
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            @include('dashboard.layouts.footer')
            <!--/footer-->
        </div>
    </div>



<script>
var sidebar = document.getElementById('sidebar');
function sidebarToggle() {
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
}
var profileDropdown = document.getElementById('ProfileDropDown');
function profileToggle() {
    if (profileDropdown.style.display === "block") {
        profileDropdown.style.display = "none";
    } else {
        profileDropdown.style.display = "block";
    }
}

</script>
</body>
</html>