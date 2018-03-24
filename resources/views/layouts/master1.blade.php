<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        @include('partials.navbarhead')
        <!-- /.navbar-header -->
        @include('partials.navbarheader')
        <!-- /.navbar-top-links -->
        @include('partials.navbartoplink')
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">

            @yield('conteudo')
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
@include('partials.jqueris')

</body>

</html>