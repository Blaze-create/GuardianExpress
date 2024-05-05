@extends('layouts.layout')
@section('content')
    <div class="container-fluid bg">

        <div class="table-container">
            <div class="table-header">
                Users Table
            </div>
            <table class="my-table">
                <thead>
                    <tr>
                        <th>USER</th>
                        <th>FUNCTION</th>
                        <th>STATUS</th>
                        <th>DATE JOIN</th>
                        <th></th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="user-row">
                                    <div class="user-profile-img">
                                        @if (isset($user->profile_path))
                                            <img src="{{ asset('img/profile/' . $user->profile_path) }}" alt="">
                                        @else
                                            <img src="{{ asset('img/pic.jpg') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="user-name">
                                        <div class="username">{{ $user->name }}</div>
                                        <div class="user-email">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="user-function">
                                    <div class="user-type">
                                        {{ $user->usertype }}
                                        @if ($user->usertype == 'admin')
                                            <i class="fa-solid fa-crown"></i>
                                        @endif
                                    </div>
                                    <div class="user-role">
                                        @if ($user->usertype == 'admin')
                                            Admin
                                        @else
                                            Simple
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="user-status active">
                                    active
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $user->created_at }}
                                </div>
                            </td>
                            <td>
                                <div class="dropdown dropdown-center">
                                    <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <!--  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#suspendModal"
                                            data-number="{{ $user->id }}" data-text="{{ $user->name }}">
                                            <li class="dropdown-item"><i class="fa-solid fa-pause"></i> Suspend</li>
                                        </a>
                                        <!--  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-number="{{ $user->id }}" data-text="{{ $user->name }}">
                                            <li class="dropdown-item"><i class="fa-solid fa-dumpster-fire"></i> Delete
                                            </li>
                                        </a>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!--  -->

                                        @if ($user->usertype == 'admin')
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#removeadminModal"
                                                data-number="{{ $user->id }}" data-text="{{ $user->name }}">
                                                <li class="dropdown-item"><i class="fa-solid fa-angles-up"></i> revoke Admin
                                                    access
                                                </li>
                                            </a>
                                        @else
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#makeadminModal"
                                                data-number="{{ $user->id }}" data-text="{{ $user->name }}">
                                                <li class="dropdown-item"><i class="fa-solid fa-angles-up"></i> make Admin
                                                </li>
                                            </a>
                                        @endif



                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- SUSPEND MODAL -->
    <div class="modal fade" id="suspendModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Suspend User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <p>Are you sure you want to suspend <span id="modalText"></span> account?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="" id="suspendLink">

                        <button type="submit" class="btn btn-danger">Yes, Suspend</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- DELETE MODAL -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" id="deleteLink" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <p>Are you sure you want to detele <span id="modalText"></span> account?</p>
                            <input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox">
                                Please check this to be able to delete this account!!
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-danger" id="deleteUserBtn" disabled>Yes, Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- MAKE ADMIN MODAL -->
    <div class="modal fade" id="makeadminModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" id="makeadmin" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Make User Admin</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <p>Are you sure you want to make <span id="modalText"></span> an admin?</p>
                            <ul>
                                <li>An admin account has access to sensitive information and controls</li>
                                <li>Admin accounts have elevated privileges and should be used responsibly. Make sure
                                    you trust the user before granting admin access.</li>
                                <li>Upgrading this account to admin level is irreversible. Are you sure you want to
                                    proceed?</li>
                            </ul>
                            <input class="form-check-input" type="checkbox" id="admincheckbox">
                            <label class="form-check-label" for="checkbox">
                                Please check to be able to proceed
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-primary" id="makeadminbtn" disabled>Upgrade to
                            Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- remove ADMIN MODAL -->
    <div class="modal fade" id="removeadminModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" id="removeadmin" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Make User Admin</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <p>Are you sure you want to revoke <span id="modalText"></span> admin access?</p>
                            <ul>
                                <li>An admin account has access to sensitive information and controls</li>
                                <li>Admin accounts have elevated privileges and should be used responsibly. Make sure
                                    you trust the user before granting admin access.</li>
                            </ul>
                            <input class="form-check-input" type="checkbox" id="removeadmincheckbox">
                            <label class="form-check-label" for="checkbox">
                                Please check to be able to proceed
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-primary" id="removeadminbtn" disabled>revoke to
                            Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $('#checkbox').change(function() {
            $('#deleteUserBtn').prop('disabled', !this.checked);
        });
        $('#suspendModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            modal.find('#suspendLink').attr('action', '/' + number);
        });

        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            url = "{{ route('destroyUser', ['id' => ':id']) }}";
            url = url.replace(':id', number);
            modal.find('#deleteLink').attr('action', url);
            console.log(url);
        });

        $('#checkbox').change(function() {
            $('#deleteUserBtn').prop('disabled', !this.checked);
        });

        $('#makeadminModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            url = "{{ route('makeadmin', ['id' => ':id']) }}";
            url = url.replace(':id', number);
            modal.find('#makeadmin').attr('action', url);
            console.log(url);
        });
        $('#admincheckbox').change(function() {
            $('#makeadminbtn').prop('disabled', !this.checked);
        });

        $('#removeadminModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            url = "{{ route('removeadmin', ['id' => ':id']) }}";
            url = url.replace(':id', number);
            modal.find('#removeadmin').attr('action', url);
            console.log(url);
        });
        $('#removeadmincheckbox').change(function() {
            $('#removeadminbtn').prop('disabled', !this.checked);
        });
    </script>














    <div class="container-fluid">
        <div class="table-container">
            <div class="table-header">
                Orders Table
            </div>
            <table class="my-table">
                <thead>
                    <tr>
                        <th>User Info</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Bundle</th>
                        <th>Order Date</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                <div class="user-row">
                                    <div class="user-profile-img">
                                        <img src="img/img (1).png" alt="">
                                    </div>
                                    <div class="user-name">
                                        <div class="username">{{ $order->firstname }} {{ $order->lastname }}</div>
                                        <div class="user-email">
                                            {{ $order->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $order->address }}
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $order->address2 }}
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $order->bundle_type }}
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $order->status }}
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $order->created_at }}
                                </div>
                            </td>
                            <td>
                                <div class="dropdown dropdown-center">
                                    <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <!--  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#suspendModal"
                                            data-number="1" data-text="John Michael">
                                            <li class="dropdown-item"><i class="fa-solid fa-ban"></i> Cancel</li>
                                        </a>
                                        <!--  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteorderModal"
                                            data-number="1" data-text="John Michael">
                                            <li class="dropdown-item"><i class="fa-solid fa-dumpster-fire"></i> Delete
                                            </li>
                                        </a>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!--  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#completeModal"
                                            data-number="{{ $order->id }}" data-text="{{ $order->firstname }}">
                                            <li class="dropdown-item"><i class="fa-solid fa-check"></i> Complete
                                            </li>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>










    <!-- MAKE COMplete MODAL -->
    <div class="modal fade" id="completeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" id="completeform" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Complete Order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <p>Are you sure you want to complete <span id="modalText"></span> order?</p>
                            <input class="form-check-input" type="checkbox" id="completecheckbox">
                            <label class="form-check-label" for="checkbox">
                                Please check to be able to proceed
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-primary" id="completebtn" disabled>Complete Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#completeModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            url = "{{ route('completeOrder', ['id' => ':id']) }}";
            url = url.replace(':id', number);
            modal.find('#completeform').attr('action', url);
            console.log(url);
        });
        $('#completecheckbox').change(function() {
            $('#completebtn').prop('disabled', !this.checked);
        });
    </script>









    <!-- DELETE MODAL -->
    <div class="modal fade" id="deleteorderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" id="deleteorderForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <p>Are you sure you want to detele <span id="modalText"></span> Order?</p>
                            <input class="form-check-input" type="checkbox" id="deleteordercheckbox">
                            <label class="form-check-label" for="checkbox">
                                Please check this to be able to delete this order!!
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-danger" id="deleteorderBtn" disabled>Yes, Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#deleteorderModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var number = button.data('number');
            var text = button.data('text');

            var modal = $(this);
            modal.find('#modalNumber').text(number);
            modal.find('#modalText').text(text);
            url = "{{ route('destroyOrder', ['id' => ':id']) }}";
            url = url.replace(':id', number);
            modal.find('#deleteorderForm').attr('action', url);
            console.log(url);
        });

        $('#deleteordercheckbox').change(function() {
            $('#deleteorderBtn').prop('disabled', !this.checked);
        });
    </script>















    <div class="container-fluid">
        <div class="table-container">
            <div class="table-header">
                Reports table
            </div>
            <table class="my-table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Report</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach ($reports as $report)
                        <tr>

                            <td>
                                <div class="user-joindate">
                                    {{ $report->from }}
                                </div>
                            </td>
                            <td>
                                <div class="user-joindate">
                                    {{ $report->report }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>










    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
        <div id="live-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                @guest
                @else
                    @if (Auth::user()->profile_path)
                        <img src="{{ asset('img/profile/' . Auth::user()->profile_path) }}"class="rounded me-2"
                            style="height: 25px;width: 25px;object-fit: cover;border-radius: 5px;">
                    @else
                        <img src="{{ asset('img/pic.jpg') }}" class="rounded me-2"
                            style="height: 25px;width: 25px;object-fit: cover;border-radius: 5px;">
                    @endif
                @endguest
                <strong class="me-auto">Success!</strong>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            const toastLiveExample = document.getElementById("live-toast");
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        </script>
    @endif
@endsection
