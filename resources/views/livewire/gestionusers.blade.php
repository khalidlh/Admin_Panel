<div class="container-fluid">
    <div class="table-responsive ">
        <div class="table-wrapper">
            <div class="border w-">
                <h3 class="text-center">Filtrage</h3>
                <div class="d-flex  bd-highlight ">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <div class="input-group">
                            {{-- <label for="">Roles</label> --}}
                            <select name="" id="" class="form-control bg-light border">
                                <option value="">Every roles</option>
                                <option value="">Admin</option>
                                <option value="">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <input type="date" name="" id="" class="form-control  bg-light border  " >
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <input type="date" name="" id="" class="form-control  bg-light border  ">
                    </div>
                </div>

            </div>
            <div class="d-flex bd-highlight m-2 border">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button"><i
                                        class="fas fa-search fa-sm"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#modalId1">
                        Add New User </button>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalId">
                        Export to </button>
                </div>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        {{-- <th>img</th> --}}
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="imgtd"><img src="{{ asset('assets/img/khalid.jpg') }}" class="avatar mr-2" alt="Avatar"><a href="#">Paula Wilson</a></td>
                        {{-- <td></td> --}}
                        <td>04/10/2013</td>
                        <td>Admin</td>
                        <td><span class="status text-success">&bull;</span> Active</td>
                        <td class="d-flex justify-content-around">
                            <a href="#" class="settings" title="Settings" role="button" data-toggle="modal" data-target="#modalId3"><i class="fa-solid fa-file-pen"></i></a>
                            <a href="#" class="delete" title="Delete" role="button" data-toggle="modal" data-target="#modalId2"><i class="fa-regular fa-trash-can"></i></a>
                            {{-- <button type="button" class="btn btn-primary btn-lg" >
                              Launch
                            </button> --}}

                        </td>
                    </tr>
                    <!-- Modal trigger button -->
                    
                    <!-- Modal Body -->
                   
                    <div class="modal fade" id="modalId2" tabindex="-1" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal for delet --}}
                    <div class="modal fade" id="modalId3" tabindex="-1" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="form-group row">
                                            <div class="col-6 mb-3 mb-0">
                                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-3 mb-0">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Password">
                                            </div>
                                            <div class="col-6">
                                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                                    placeholder="Repeat Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  
                </tbody>
            </table>
            {{-- <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="modalTitleId" style="color:white">Export to </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select name="" id="" class="form-control">
                    <option value="">PDF</option>
                    <option value="">CSV</option>
                    <option value="">XL</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Export</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade " id="modalId1" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-center" id="modalTitleId" style="color:white">Add new user</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form action="">
                    <div class="form-group row">
                        <div class="col-6 mb-3 mb-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="First Name">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Email Address">
                    </div>
                    <div class="form-group row">
                        <div class="col-6 mb-3 mb-0">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password">
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                placeholder="Repeat Password">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
