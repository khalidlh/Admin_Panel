<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-info text-white mailbox-widget pb-0">
                    <h3 class="text-white pb-1">Your Mailbox</h3>
                    <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox"
                                href="#inbox" role="tab" aria-selected="true">
                                <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                <span class="d-none d-md-block">INBOX</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent"
                                href="#sent" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                <span class="d-none d-md-block">SENT</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="spam-tab" data-toggle="tab" aria-controls="spam"
                                href="#spam" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                <span class="d-none d-md-block">SPAM</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete"
                                href="#delete" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                <span class="d-none d-md-block">DELETED</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab"
                        role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>4 Unread emails
                                    </h3>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-info mr-3">
                                            <a href="#">
                                                <button class="btn btn-circle btn-success text-white" data-toggle="modal" data-target="#modalId"
                                                    href="javascript:void(0)">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <!-- Modal trigger button -->

                                                <span class="ml-2 font-normal text-dark">Compose</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item text-danger">
                                            <a href="#">
                                                <button class="btn btn-circle btn-danger text-white"
                                                    href="javascript:void(0)">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <span class="ml-2 font-normal text-dark">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive mb-2">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>
                                        <!-- row -->
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="cst1" />
                                                    <label class="custom-control-label"
                                                        for="cst1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <td>
                                                <span class="mb-0 text-muted">Hritik Roshan</span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)" >
                                                    <span
                                                        class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span>
                                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted">May 13</td>
                                        </tr>
                                        <!-- row -->
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="cst2" />
                                                    <label class="custom-control-label"
                                                        for="cst2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star"></i></td>
                                            <!-- User -->
                                            <td>
                                                <span class="mb-0 text-muted">Genelia Roshan</span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span
                                                        class="badge badge-pill text-white font-medium badge-info mr-2">Business</span>
                                                    <span class="text-dark">Inquiry about license for Admin
                                                    </span>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted">May 13</td>
                                        </tr>
                                        <!-- row -->
                                        <tr class="">
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="cst6" />
                                                    <label class="custom-control-label"
                                                        for="cst6">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <!-- User -->
                                            <td>
                                                <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span
                                                        class="badge badge-pill text-white font-medium badge-success mr-2">Work</span>
                                                    <span class="font-light text-dark">Lorem ipsum perspiciatis
                                                        - unde</span>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted font-light">Mar 09</td>
                                        </tr>
                                        <!-- row -->
                                        <tr class="">
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="cst7" />
                                                    <label class="custom-control-label"
                                                        for="cst7">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <!-- User -->
                                            <td>
                                                <span class="mb-0 text-muted font-light">Hanna Gover</span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span
                                                        class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span><span
                                                        class="font-light text-dark"> Unde omnis Lorem ipsum
                                                        perspiciatis</span>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted font-light">Mar 09</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Lets check profile</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                    justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Come on you have a lot message</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                    justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Just do Settings</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                    justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">New Message</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <main>
                    {{-- <p class="text-center"></p> --}}
                    <form>
                        <div class="form-row mb-3">
                            <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                            <div class="col-10 col-sm-11">
                                <input type="email" class="form-control" id="to" placeholder="Type email">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <label for="cc" class="col-2 col-sm-1 col-form-label">CC:</label>
                            <div class="col-10 col-sm-11">
                                <input type="email" class="form-control" id="cc" placeholder="Type email">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <label for="bcc" class="col-2 col-sm-1 col-form-label">BCC:</label>
                            <div class="col-10 col-sm-11">
                                <input type="email" class="form-control" id="bcc" placeholder="Type email">
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-11 ml-auto">
                            <div class="toolbar" role="toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-bold"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-italic"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-underline"></span>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-align-left"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-align-right"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-align-center"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-align-justify"></span>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-indent"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-outdent"></span>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-list-ul"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-list-ol"></span>
                                    </button>
                                </div>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-trash-o"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-paperclip"></span>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                        <span class="fa fa-tags"></span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Send</button>
                                <button type="submit" class="btn btn-light">Draft</button>
                                <button type="submit" class="btn btn-danger">Discard</button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>