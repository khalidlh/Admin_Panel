<div class="container-fluid">
    <div class="table-responsive ">
        <div class="table-wrapper">
            <div class="border w-">
                <h3 class="text-center">Search Filter</h3>
                <div class="d-flex  bd-highlight ">
                    <div class="p-2 flex-grow-1 bd-highlight text-center">
                        <label for="role" style="font-size: 20px"> Role</label>
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight text-center">
                        <label for="status" style="font-size: 20px">Statut</label>
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight text-center">
                        <label for="date_created" style="font-size: 20px"> Date created</label>
                    </div>
                </div>
                <div class="d-flex  bd-highlight ">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <div class="input-group">
                            {{-- <label for="">Roles</label> --}}
                            <select id="role" class="form-control bg-light border" wire:model="RoleUser"
                                wire:change='selectrole($event.target.value)'>
                                <option value="all">all</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <div class="input-group">
                            {{-- <label for="">Roles</label> --}}
                            <select id="status" class="form-control bg-light border" wire:model="Statutuser"
                            wire:change='selectstatu($event.target.value)'>
                                <option value="all">all</option>
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <input type="date" id="date_created" class="form-control  bg-light border">
                    </div>
                </div>

            </div>
            <div class="d-flex bd-highlight m-2 border">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <div class="d-none d-inline-block form-inline  ml-md-3 my-2 my-md-0 mw-100 searchdata">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border border-info small"
                                placeholder="Search with First Name or last name or email" wire:model.debounce.300ms="search"
                                wire:change='searchwithNameorEmail()'>
                            {{-- <div class="input-group-append">
                                <button class="btn btn-warning" type="button"><i
                                        class="fas fa-search fa-sm"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modalId1">
                        <i class="fa-solid fa-user-plus"></i> </button>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalId">
                        <i class="fa-solid fa-download"></i> </button>
                </div>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data_users !== null)
                        @if (count($data_users) > 0)
                        @foreach ($data_users as $data_user)
                            <tr>
                                <td>{{ $data_user->id }}</td>
                                <td class="imgtd"><img src="{{ asset('assets/img/avatar.webp') }}" class="avatar mr-2"
                                        alt="Avatar"><a href="#">{{ $data_user->Last_name }}</a></td>
                                {{-- <td></td> --}}
                                <td>04/10/2013</td>
                                <td><i class="fa-solid fa-laptop-code mr-1"></i>{{ $data_user->role }}</td>
                                @if ($data_user->Activation == 1)
                                <td><span class="status text-success">&bull;</span> Active</td>
                                @else
                                <td><span class="status text-danger">&bull;</span> Inactive</td>
                                @endif
                                <td class="d-flex justify-content-around">
                                    <div class="dropdown">
                                        <button class="btn  dropdown-toggle" style="color:black" type="button"
                                            id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li> <a href="#" class="settings dropdown-item " title="Settings"
                                                    role="button" data-toggle="modal"
                                                    data-target="#modalIdE{{ $data_user->id }}"
                                                    wire:click='ed({{ $data_user->id }})'><i
                                                        class="fa-solid fa-file-pen mr-1"></i>Edit</a></li>
                                            <li> <a href="#" class="delete dropdown-item" title="Delete"
                                                    role="button" data-toggle="modal"
                                                    data-target="#modalIdS{{ $data_user->id }}"><i
                                                        class="fa-regular fa-trash-can mr-1"></i>Delete</a></li>
                                            <li><a href="#" class="greenfont dropdown-item" title="view"
                                                    role="button" data-toggle="modal" data-target="#modalId2"><i
                                                        class="fa-solid fa-eye mr-1"></i>view</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal trigger button -->

                            <!-- Modal Body -->

                            <div class="modal fade" id="modalIdS{{ $data_user->id }}" tabindex="-1"
                                data-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Modal title {{ $data_user->id }}
                                            </h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $data_user->Last_name }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal for delet --}}
                            <div class="modal fade" id="modalIdE{{ $data_user->id }}" tabindex="-1"
                                data-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form wire:submit.prevent = "edit_user">
                                                <div class="form-group row">
                                                    <div class="col-6 mb-3 mb-0">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="exampleFirstName" placeholder="First Name"
                                                            wire:model="First_name">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="exampleLastName" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user"
                                                        id="exampleInputEmail" placeholder="Email Address">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6 mb-3 mb-0">
                                                        <input type="password" class="form-control form-control-user"
                                                            id="exampleInputPassword" placeholder="Password">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="password" class="form-control form-control-user"
                                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{-- <div class="form-group">
                                <select wire:model="number_page" id="" class="form-control">
                                    <option value="{{$number_page}}">{{$number_page}}</option>
                                    <option value="8">8</option>
                                    <option value="15">15</option>
                                </select>
                            </div> --}}
                            {!! $data_users->links('vendor.pagination.bootstrap-5') !!}
                        </div>
                         @else
                    <tr>
                        <td colspan="6" class="text-center">No results found for your search</td>
                    </tr>
                    @endif 
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
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

<script>
    // const searchInput = document.getElementById('searchInput');
    // searchInput.addEventListener('keyup', () => {
    //     @this.searchTerm = searchInput.value;
    // });
    document.addEventListener('livewire:load', function() {
        Livewire.on('paginationUpdated', () => {
            window.scrollTo(0, 0); // Scroll to the top after changing the page
        });
    });
</script>
