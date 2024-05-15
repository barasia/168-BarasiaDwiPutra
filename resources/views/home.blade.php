<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <nav class="-mx-3 flex flex-1 justify-end">
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
        </nav>
    </header>

    <div class="app-container" style="margin-top:60px;">
        <!-- begin container-fluid -->
        <div class="container-fluid py-4">

            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header title">
                            <i class="fa fa-reorder"></i> <b>List Ticket</b>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    New Ticket IT</a>
                                <div class="table-responsive mt-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table" class="table table-striped" style="width: 100%; font-size: 12px; color: rgb(0, 0, 0);" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th>Number</th>
                                                        <th>Division</th>
                                                        <th>Name</th>
                                                        <th>Problem</th>
                                                        <th>Date Applied</th>
                                                        <th>Assign To</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>1</td>
                                                        <td>Marketing</td>
                                                        <td>Yami Yugi</td>
                                                        <td>Printer rusak</td>
                                                        <td>2024-05-15 18:32:29</td>
                                                        <td>-</td>
                                                        <td>Open</td>
                                                        <td><a href="#">Process</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>2</td>
                                                        <td>Finance</td>
                                                        <td>Exodia</td>
                                                        <td>Email tidak terkirim</td>
                                                        <td>2024-05-15 18:32:29</td>
                                                        <td>Coro</td>
                                                        <td>Waiting</td>
                                                        <td><a href="#">Process</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) ©2024
    </footer>
</body>

</html>