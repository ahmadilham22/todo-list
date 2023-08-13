<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('nav-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @include('components.style')
</head>

<body>
    <div class="container">
        <div class="row history">
            <nav class="navbar bg-body-tertiary d-flex">
                <div class="container-fluid justify-content-end">
                    @if (Route::currentRouteName() == 'todolist.create')
                        <a class="btn btn-outline-success me-2" href="{{ route('todolist.history') }}">TODOLIST
                            HISTORY</a>
                        <a class="btn btn-outline-success me-2" href="{{ route('todolist.index') }}">TODOLIST
                        </a>
                    @endif
                    @if (Route::currentRouteName() == 'todolist.index')
                        <a href="{{ route('todolist.create') }}" class="btn btn-outline-primary me-2">CREATE TODOS</a>
                        <a class="btn btn-outline-success me-2" href="{{ route('todolist.history') }}">TODOLIST
                            HISTORY</a>
                    @elseif(Route::currentRouteName() == 'todolist.history')
                        <a class="btn btn-outline-success me-2" href="{{ route('todolist.index') }}">TODOLIST
                            TODOS</a>
                        <a href="{{ route('todolist.create') }}" class="btn btn-outline-primary me-2">CREATE
                        </a>
                    @endif
                    <a class="btn btn-outline-primary me-2">MY ACCOUNT</a>
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger me-2" type="submit">LOGOUT</a>
                </div>
            </nav>
        </div>
        <div class="row align-items-center">
            <section class="head mb-5">
                <div class="col-md-12 d-flex justify-content-center h-25 mt-5">
                    <div class="">
                        <span class="text-white title-primary">@yield('title')</span>
                        <span class="text-white title-primary">TODO</span>
                        <span class="text-primary title-primary"> LIST</span>
                    </div>
                </div>
            </section>
            @yield('content')
        </div>
    </div>
    {{-- @include('components.navbar')
    @yield('content') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
