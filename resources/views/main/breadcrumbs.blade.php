<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>@yield('title')</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>@yield('title')</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
