<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.includeCss')
</head>

<body class="animsition">

    <div class="page-wrapper">

        {{-- Mbolie Hamburger Menu --}}
        @include('components.mobileHeader')

        {{-- Sidebar --}}
        @include('components.includeSidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            @include('components.includeHeaderContent')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('main-content')
            </div>
            <!-- END MAIN CONTENT-->

        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    @include('components.includeJS')

    @yield('script')

</body>

</html>
<!-- end document-->
