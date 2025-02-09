@extends('layouts.app')
@section('style')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" />
    <style>
        /* body {
                margin-top: 20px;
                background: #f7f8fa
            } */

        .avatar-xxl {
            height: 7rem;
            width: 7rem;
        }

        .card {
            margin-bottom: 20px;
            -webkit-box-shadow: 0 2px 3px #eaedf2;
            box-shadow: 0 2px 3px #eaedf2;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .font-size-16 {
            font-size: 16px !important;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #038edc;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .bg-soft-primary {
            background-color: rgba(3, 142, 220, .15) !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }

        .nav-tabs-custom .nav-item .nav-link {
            border: none;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 12px;
        }

        .border-end {
            border-right: 1px solid #eff0f2 !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .badge-soft-danger {
            color: #f34e4e;
            background-color: rgba(243, 78, 78, .1);
        }

        .badge-soft-warning {
            color: #f7cc53;
            background-color: rgba(247, 204, 83, .1);
        }

        .badge-soft-success {
            color: #51d28c;
            background-color: rgba(81, 210, 140, .1);
        }

        .avatar-group .avatar-group-item {
            margin-left: -14px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .nav-tabs-custom .nav-item {
            position: relative;
            color: #343a40;
        }

        .nav-tabs-custom .nav-item .nav-link.active:after {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .nav-tabs-custom .nav-item .nav-link::after {
            content: "";
            background: #038edc;
            height: 2px;
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -2px;
            -webkit-transition: all 250ms ease 0s;
            transition: all 250ms ease 0s;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .badge-soft-secondary {
            color: #74788d;
            background-color: rgba(116, 120, 141, .1);
        }

        .badge-soft-secondary {
            color: #74788d;
        }

        .work-activity {
            position: relative;
            color: #74788d;
            padding-left: 5.5rem
        }

        .work-activity::before {
            content: "";
            position: absolute;
            height: 100%;
            top: 0;
            left: 66px;
            border-left: 1px solid rgba(3, 142, 220, .25)
        }

        .work-activity .work-item {
            position: relative;
            border-bottom: 2px dashed #eff0f2;
            margin-bottom: 14px
        }

        .work-activity .work-item:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
            border: none
        }

        .work-activity .work-item::after,
        .work-activity .work-item::before {
            position: absolute;
            display: block
        }

        .work-activity .work-item::before {
            content: attr(data-date);
            left: -157px;
            top: -3px;
            text-align: right;
            font-weight: 500;
            color: #74788d;
            font-size: 12px;
            min-width: 120px
        }

        .work-activity .work-item::after {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 50%;
            left: -26px;
            top: 3px;
            background-color: #fff;
            border: 2px solid #038edc
        }
    </style>
@endsection
{{-- @include('layouts.sidebar') --}}
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate My cv</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->



                    <!-- Content Row -->
                    <div class="row">



                        <div class="col-lg mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">For me</h6>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-3">
                                                            <div class="text-center border-end">
                                                                <img src="{{ asset('assets/img/khalid.jpg') }}"
                                                                    class="img-fluid avatar-xxl rounded-circle"
                                                                    alt="">
                                                                <h4 class="text-primary font-size-20 mt-3 mb-2">KHALID
                                                                    LAHMIDI
                                                                </h4>
                                                                <h5 class="text-muted font-size-13 mb-0">Full stack
                                                                    developer</h5>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-md-9">
                                                            <div class="ms-3">
                                                                <div>
                                                                    <h4 class="card-title mb-2">About me</h4>
                                                                    <p class="mb-0 text-muted">I am a skilled and passionate
                                                                        web developer with a strong background in designing
                                                                        and developing innovative websites and web
                                                                        applications. With 2 years of experience in the
                                                                        field, I possess a deep understanding of web
                                                                        technologies and coding languages. My expertise lies
                                                                        in creating responsive and user-friendly interfaces
                                                                        while ensuring high performance and scalability. I
                                                                        am a creative problem-solver and a dedicated
                                                                        professional, committed to delivering exceptional
                                                                        results.</p>
                                                                </div>
                                                                <div class="row my-4">
                                                                    <div class="col-md-12">
                                                                        <div>
                                                                            <p class="text-muted mb-2 fw-medium"><i
                                                                                    class="mdi mdi-email-outline me-2"></i>khalid.lahmidi2001@gmail.com
                                                                            </p>
                                                                            <p class="text-muted fw-medium mb-0"><i
                                                                                    class="mdi mdi-phone-in-talk-outline me-2"></i>+212643020788
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- end col -->
                                                                </div><!-- end row -->

                                                                <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                                                                    role="tablist">
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="nav-link px-4 active" data-bs-toggle="tab"
                                                                            href="#projects-tab" role="tab"
                                                                            aria-selected="false" tabindex="-1">
                                                                            <span class="d-block d-sm-none"><i
                                                                                    class="fas fa-home"></i></span>
                                                                            <span class="d-none d-sm-block">Projects</span>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="nav-link px-4"
                                                                            href="https://portfoliokhalidlh.000webhostapp.com/"
                                                                            target="__blank">
                                                                            <span class="d-block d-sm-none"><i
                                                                                    class="mdi mdi-menu-open"></i></span>
                                                                            <span
                                                                                class="d-none d-sm-block">Portfolio</span>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="nav-link px-4 "
                                                                            href="https://portfoliokhalidlh.000webhostapp.com/"
                                                                            target="__blank">
                                                                            <span class="d-block d-sm-none"><i
                                                                                    class="mdi mdi-account-group-outline"></i></span>
                                                                            <span class="d-none d-sm-block">Github</span>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                </ul><!-- end ul -->
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div><!-- end card body -->
                                            </div><!-- end card -->

                                            <div class="card">
                                                <div class="tab-content p-4">
                                                    <div class="tab-pane active show" id="projects-tab" role="tabpanel">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-1">
                                                                <h4 class="card-title mb-4">Projects</h4>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="all-projects">
                                                            <div class="col-md-6" id="project-items-1">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex mb-3">
                                                                            <div class="flex-grow-1 align-items-start">
                                                                                <div>
                                                                                    <h6 class="mb-0 text-muted">
                                                                                        <i
                                                                                            class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                                        <span class="team-date">21 Jun,
                                                                                            2021</span>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown ms-2">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle font-size-16 text-muted"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>

                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bs-example-new-project"
                                                                                        onclick="editProjects('project-items-1')">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);">Share</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item delete-item"
                                                                                        onclick="deleteProjects('project-items-1')"
                                                                                        data-id="project-items-1"
                                                                                        href="javascript: void(0);">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <h5 class="mb-1 font-size-17 team-title">
                                                                                Platforme FSSM</h5>
                                                                            <p class="text-muted mb-0 team-description">
                                                                                Platform for managing fssm registration
                                                                                requests
                                                                                (international students, civil servants,
                                                                                equivalence, new baccalaureate)</p>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="avatar-group float-start flex-grow-1 task-assigne">
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-6"
                                                                                        aria-label="Terrell Soto"
                                                                                        data-bs-original-title="Terrell Soto">
                                                                                        <img src="{{ asset('assets/img/fssm.png') }}"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-1"
                                                                                        aria-label="Ruhi Shah"
                                                                                        data-bs-original-title="Ruhi Shah">
                                                                                        <img src="{{ asset('assets/img/khalid.jpg') }}"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-15"
                                                                                        data-bs-original-title="Denny Silva">
                                                                                        <div class="avatar-sm">
                                                                                            <div
                                                                                                class="avatar-title rounded-circle bg-primary">
                                                                                                KD
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div><!-- end avatar group -->
                                                                            <div class="align-self-end">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end cardbody -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->

                                                            <div class="col-md-6" id="project-items-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex mb-3">
                                                                            <div class="flex-grow-1 align-items-start">
                                                                                <div>
                                                                                    <h6 class="mb-0 text-muted">
                                                                                        <i
                                                                                            class="mdi mdi-circle-medium text-success fs-3 align-middle"></i>
                                                                                        <span class="team-date">13 Aug,
                                                                                            2021</span>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown ms-2">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle font-size-16 text-muted"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bs-example-new-project"
                                                                                        onclick="editProjects('project-items-2')">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);">Share</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item delete-item"
                                                                                        href="javascript:void(0);"
                                                                                        onclick="deleteProjects('project-items-2')"
                                                                                        data-id="project-items-2">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <h5 class="mb-1 font-size-17 team-title">
                                                                                Authentification with livewire(laravel)</h5>
                                                                            <p class="text-muted mb-0 team-description">
                                                                                Authentification with livewire (login,
                                                                                register, forget password, ...)</p>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="avatar-group float-start flex-grow-1 task-assigne">
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-10"
                                                                                        aria-label="Kelly Osborn"
                                                                                        data-bs-original-title="Kelly Osborn">
                                                                                        <img src="{{ asset('assets/img/khalid.jpg') }}"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-2"
                                                                                        aria-label="John Page"
                                                                                        data-bs-original-title="John Page">
                                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                            </div><!-- end avatar group -->
                                                                            <div class="align-self-end">
                                                                                <span
                                                                                    class="badge badge-soft-success p-2 team-status">Completed</span>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end cad-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->

                                                            <div class="col-md-6" id="project-items-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex mb-3">
                                                                            <div class="flex-grow-1 align-items-start">
                                                                                <div>
                                                                                    <h6 class="mb-0 text-muted">
                                                                                        <i
                                                                                            class="mdi mdi-circle-medium text-warning fs-3 align-middle"></i>
                                                                                        <span class="team-date">08 Sep,
                                                                                            2021</span>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown ms-2">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle font-size-16 text-muted"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>

                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bs-example-new-project"
                                                                                        onclick="editProjects('project-items-3')">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);">Share</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item delete-item"
                                                                                        href="javascript: void(0);"
                                                                                        data-id="project-items-3"
                                                                                        onclick="deleteProjects('project-items-3')">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <h5 class="mb-1 font-size-17 team-title">
                                                                                Project for detecting the behavior of an
                                                                                object in video</h5>
                                                                            <p class="text-muted mb-0 team-description">
                                                                                Plan and onduct user
                                                                                research and analysis</p>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="avatar-group float-start flex-grow-1 task-assigne">
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-3"
                                                                                        aria-label="Judy Newland"
                                                                                        data-bs-original-title="Judy Newland">
                                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-5"
                                                                                        aria-label="Jeffery Legette"
                                                                                        data-bs-original-title="Jeffery Legette">
                                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                                {{-- <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-6"
                                                                                        aria-label="Jose Rosborough"
                                                                                        data-bs-original-title="Jose Rosborough">
                                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div> --}}
                                                                            </div><!-- end avatar group -->
                                                                            <div class="align-self-end">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->

                                                            <div class="col-md-6" id="project-items-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex mb-3">
                                                                            <div class="flex-grow-1 align-items-start">
                                                                                <div>
                                                                                    <h6 class="mb-0 text-muted">
                                                                                        <i
                                                                                            class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                                        <span class="team-date">20 Sep,
                                                                                            2021</span>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown ms-2">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle font-size-16 text-muted"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>

                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bs-example-new-project"
                                                                                        onclick="editProjects('project-items-4')">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="javascript: void(0);">Share</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item delete-item"
                                                                                        href="javascript:void(0);"
                                                                                        data-id="project-items-4"
                                                                                        onclick="deleteProjects('project-items-4')">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <h5 class="mb-1 font-size-17 team-title">
                                                                                Admin panel</h5>
                                                                            <p class="text-muted mb-0 team-description">The
                                                                                A panel for administrators and developers
                                                                                with laravel, livewire</p>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="avatar-group float-start flex-grow-1 task-assigne">
                                                                                <div class="avatar-group-item">
                                                                                    <a href="javascript: void(0);"
                                                                                        class="d-inline-block"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        value="member-10"
                                                                                        aria-label="Jansh Wells"
                                                                                        data-bs-original-title="Jansh Wells">
                                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                                            alt=""
                                                                                            class="rounded-circle avatar-sm">
                                                                                    </a>
                                                                                </div>
                                                                            </div><!-- end avatar group -->
                                                                            <div class="align-self-end">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->


                                                        </div><!-- end row -->
                                                    </div><!-- end tab pane -->

                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="pb-2">
                                                        <h4 class="card-title mb-3">Biographie</h4>
                                                        <h5>Khalid: Educator, Mathematician, and Web Developer</h5>
                                                        <p>
                                                            I was born on May 7, 2001. Khaled is a multi-talented individual
                                                            The passion for mathematics and technology has shaped its diversity
                                                            Professional trip.

                                                            My academic pursuit has seen me excel in the field of computers
                                                            Sciences, culminating in obtaining a bachelor's degree in
                                                            Field at Cadi Ayyad University in Marrakesh. Armed with a deep understanding of technology
                                                        </p>
                                                        {{-- <ul class="ps-3 mb-0">
                                                            <li>it will seem like simplified.</li>
                                                            <li>To achieve this, it would be necessary to have uniform
                                                                pronunciation</li>
                                                        </ul> --}}
                                                        <!-- end ul -->
                                                    </div>
                                                    <hr>
                                                    <div class="pt-2">
                                                        <h4 class="card-title mb-4">My Skill</h4>
                                                        <div class="d-flex gap-2 flex-wrap">
                                                            <span class="badge badge-soft-secondary p-2">HTML</span>
                                                            <span class="badge badge-soft-secondary p-2">Bootstrap</span>
                                                            <span class="badge badge-soft-secondary p-2">Jquery</span>
                                                            <span class="badge badge-soft-secondary p-2">Javascript</span>
                                                            <span class="badge badge-soft-secondary p-2">Mysql</span>
                                                            <span class="badge badge-soft-secondary p-2">PHP</span>
                                                            <span class="badge badge-soft-secondary p-2">Laravel</span>
                                                            <span class="badge badge-soft-secondary p-2">Livewire</span>
                                                        </div>
                                                    </div>
                                                </div><!-- end cardbody -->
                                            </div><!-- end card -->

                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <h4 class="card-title mb-4">Personal Details</h4>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Name</th>
                                                                        <td>KHALID LAHMIDI</td>
                                                                    </tr><!-- end tr -->
                                                                    <tr>
                                                                        <th scope="row">Location</th>
                                                                        <td>Kelaa des srghna, Morocco</td>
                                                                    </tr><!-- end tr -->
                                                                    <tr>
                                                                        <th scope="row">Language</th>
                                                                        <td>Arabic, English, Frensh</td>
                                                                    </tr><!-- end tr -->
                                                                    <tr>
                                                                        <th scope="row">portfolio</th>
                                                                        <td><a href="http://portfoliokhalidlh.000webhostapp.com"
                                                                                target="_blank"
                                                                                rel="noopener noreferrer">https://portfoliokhalidlh.000webhostapp.com</a>
                                                                        </td>
                                                                    </tr><!-- end tr -->
                                                                </tbody><!-- end tbody -->
                                                            </table><!-- end table -->
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->

                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <h4 class="card-title mb-4">Work Experince</h4>
                                                        <ul class="list-unstyled work-activity mb-0">
                                                            <li class="work-item" data-date="2022-23">
                                                                <h6 class="lh-base mb-0">Platforme FSSM </h6>
                                                                <p class="font-size-13 mb-2">Full stack developer</p>
                                                                <p>Platform for managing fssm registration requests
                                                                    (international students, civil servants, equivalence,
                                                                    new baccalaureate)</p>
                                                            </li>
                                                            <li class="work-item" data-date="2023-24">
                                                                <h6 class="lh-base mb-0">Project for detecting the behavior
                                                                    of an object in video</h6>
                                                                <p class="font-size-13 mb-2">Full stack developer</p>
                                                                <p class="mb-0">It will be as simple as occidental in
                                                                    fact, it will be
                                                                    Occidental person, it will seem like simplified.</p>
                                                            </li>
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div>
                                </div>
                            </div>

                            <!-- Approach -->
                            {{-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; khalid lahmidi</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
