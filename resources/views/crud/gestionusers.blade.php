@extends('layouts.app')
@section('style')
    <style>
        .avatar {
            padding: 0;
            margin: 0;
            width: 10%;
            height: 10%;
            border-radius: 50%;
        }

        .imgtd {
            width: 25%;
        }

        .delete {
            color: red;
        }
        @media (max-width: 767.98px) {
            .searchdata{
                width: 25%;
            }
        }
        /* Custom styles for Bootstrap 5 pagination */
        /* .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination>.page-item>.page-link {
            color: #0d6efd;
            border: 1px solid #0d6efd;
            margin: 0 2px;
        }

        .pagination>.page-item>.page-link:hover {
            background-color: #f0f0f0;
        }

        .pagination>.page-item.active>.page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
        } */
    </style>
@endsection
@section('content')
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.topbar')
            <div class="container-fluid">
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Session </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">21,459
                                            (+29%)</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Paid Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">4,567
                                            (+18%)</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Active Users
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">19,860
                                                    (-14%)</div>
                                            </div>
                                            {{-- <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pending Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">237(+42%)</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('gestionusers')
        </div>
    </div>
@endsection
@section('scripte')
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        const myModal = new bootstrap.Modal(document.getElementById('modalId1'), options)
        const myModal = new bootstrap.Modal(document.getElementById('modalId2'), options)
    </script>
@endsection
