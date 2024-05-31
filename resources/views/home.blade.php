<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Datatables -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <style>
        .dot {
            display: inline-block;
            border-radius: 50%;
            background-color: #EEE;
            height: 15px;
            width: 15px;
            margin: 0 2px;
        }

        .dot.dot-success {
            background-color: #449D44;
        }

        .dot.dot-warning {
            background-color: #F0AD4E;
        }

        .dot.dot-danger {
            background-color: #D9534F;
        }

        .dot.dot-sm {
            height: 10px;
            width: 10px;
        }

        .dot.dot-lg {
            margin: 0 4px;
            height: 20px;
            width: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('rLogin') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>
            @if (Route::has('rRegister'))
            <a href="{{ route('rRegister') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
        </nav>
    </header>

    <div class="app-container" style="margin-top:60px;">
        <!-- begin container-fluid -->
        <div class="container-fluid py-4">

            <!-- MODAL add -->
            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <form enctype="multipart/form-data" method="post" action="{{ route('rHome.store') }}" onsubmit="return confirm('Do you really want to add this data?');">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="modal-loader-add" style="display: none; text-align: center;">
                                    <!-- <img src="ajax-loader.gif"> -->
                                </div>

                                <!-- DATA will be load here -->
                                <div id="dynamic-content-add"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- MODAL detail -->
            <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="detailModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp;Detail</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="modal-loader-detail" style="display: none; text-align: center;">
                                <!-- <img src="ajax-loader.gif"> -->
                            </div>

                            <!-- DATA will be load here -->
                            <div id="dynamic-content-detail"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL edit -->
            <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp;Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="modal-loader-edit" style="display: none; text-align: center;">
                                <!-- <img src="ajax-loader.gif"> -->
                            </div>

                            <!-- DATA will be load here -->
                            <div id="dynamic-content-edit"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header title">
                            <i class="fa fa-reorder"></i> <b>List Ticket</b>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd" onclick="btnAdd(1);">
                                    <i class="fa fa-plus"></i>
                                    New Ticket IT
                                </button>
                                <div class="table-responsive mt-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table" class="table table-striped" style="width: 100%; font-size: 12px; color: rgb(0, 0, 0);" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th style="text-align: center;">Number</th>
                                                        <th style="text-align: center;">Division</th>
                                                        <th style="text-align: center;">Name</th>
                                                        <th style="text-align: center;">Problem</th>
                                                        <th style="text-align: center;">Date Applied</th>
                                                        <th style="text-align: center;">Assign To</th>
                                                        <th style="text-align: center;">Status</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>

                                                @php
                                                $no=1;
                                                @endphp
                                                <tbody>
                                                    @foreach($problems as $problem)
                                                    <tr>
                                                        <td style="text-align: center;">{{ $no++ }}</td>
                                                        <td style="text-align: center;">{{ $problem->division }}</td>
                                                        <td style="text-align: center;">{{ $problem->user }}</td>
                                                        <td style="text-align: center;">{{ $problem->name }}</td>
                                                        <td style="text-align: center;">{{ $problem->created_at }}</td>
                                                        <td style="text-align: center;">{{ $problem->assignment }}</td>
                                                        <td style="text-align: center;"><i class="dot dot-lg dot-success"></i> {{ $problem->status }}</td>
                                                        <td style="text-align: center;">
                                                            <button type="button" class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="btnDetail('{{ $problem->id_problem }}')">
                                                                <i class="bi bi-search"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="btnEdit('{{ $problem->id_problem }}')">
                                                                Process
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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

    <script>
        $(document).ready(function() {
            // $('.select').select2({
            //     width: '100%'
            // });

            var table = $('#table').DataTable({});
        });

        // Add
        function btnAdd(id) {
            $('#dynamic-content-add').html(''); // leave it blank before ajax call
            $.ajax({
                    url: '{{route("rHome.create")}}',
                    type: 'GET',
                    data: "id=" + id,
                    dataType: 'html',
                    beforeSend: function() {
                        $(".spinner-border").show();
                        $(".btn").attr('disabled', true);
                    },
                })
                .done(function(data) {
                    $('.spinner-border').hide();
                    $(".btn").attr('disabled', false);
                    $('#dynamic-content-add').html(data); // load response
                })
                .fail(function() {
                    $('#dynamic-content-add').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader-add').hide();
                });
        }

        // Detail
        function btnDetail(id) {
            $('#dynamic-content-detail').html(''); // leave it blank before ajax call
            $.ajax({
                    url: '{{route("rHome.detail")}}',
                    type: 'GET',
                    data: "id=" + id,
                    dataType: 'html',
                    beforeSend: function() {
                        $(".spinner-border").show();
                        $(".btn").attr('disabled', true);
                    },
                })
                .done(function(data) {
                    $('.spinner-border').hide();
                    $(".btn").attr('disabled', false);
                    $('#dynamic-content-detail').html(data); // load response
                })
                .fail(function() {
                    $('#dynamic-content-detail').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader-detail').hide();
                });
        }

        // Edit
        function btnEdit(id) {
            $('#dynamic-content-edit').html(''); // leave it blank before ajax call
            $.ajax({
                    url: '{{route("rHome.edit")}}',
                    type: 'GET',
                    data: "id=" + id,
                    dataType: 'html',
                    beforeSend: function() {
                        $(".spinner-border").show();
                        $(".btn").attr('disabled', true);
                    },
                })
                .done(function(data) {
                    $('.spinner-border').hide();
                    $(".btn").attr('disabled', false);
                    $('#dynamic-content-edit').html(data); // load response
                })
                .fail(function() {
                    $('#dynamic-content-edit').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader-edit').hide();
                });
        }

        // Delete
        function btnDelete(id) {
            $('#dynamic-content-edit').html(''); // leave it blank before ajax call
            $.ajax({
                    url: '{{route("rHome.delete")}}',
                    type: 'GET',
                    data: "id=" + id,
                    dataType: 'html',
                    beforeSend: function() {
                        $(".spinner-border").show();
                        $(".btn").attr('disabled', true);
                    },
                })
                .done(function(data) {
                    $('.spinner-border').hide();
                    $(".btn").attr('disabled', false);
                    $('#dynamic-content-edit').html(data); // load response
                })
                .fail(function() {
                    $('#dynamic-content-edit').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader-edit').hide();
                });
        }
    </script>
</body>

</html>