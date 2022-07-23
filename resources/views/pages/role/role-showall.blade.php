@extends('layouts.app')

{{-- styles --}}
@section('styles')
@endsection

{{-- main content --}}
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Roles</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roles</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <div class="col-lg-6">
                        <h3 class="card-title">Roles</h3>
                    </div>
                    <div class="col-lg-6 text-end">
                        <button type="button" title="Add" id="btn-add" class="modal-effect btn btn-primary-gradient btn-pill"
                            data-bs-effect="effect-sign" data-bs-toggle="modal" data-bs-target="#modal_"><i
                                class="fe fe-plus me-2"></i>Add</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Role</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $role)
                                    <tr>
                                        <td>{{ $role['id'] }}</td>
                                        <td>{{ $role['role_name'] }}</td>
                                        <td>{{ $role['description'] }}</td>
                                        <td><button class="modal-effect btn btn-secondary-gradient btn-pill btn-edit" title="Edit"
                                                data-bs-effect="effect-sign" data-bs-toggle="modal"
                                                data-bs-target="#modal_" data-id="{{ $role['id'] }}"
                                                data-role="{{ $role['role_name'] }}"
                                                data-description="{{ $role['description'] }}"><i
                                                    class="fe fe-edit"></i></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection


{{-- modal section --}}
@section('modal')
    <div class="modal fade" id="modal_">
        <div class="modal-dialog modal-lg modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Role</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-start">
                    <form action="{{ route('role.addProcess') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="text" class="form-control" name="id" id="id" hidden>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" name="role_name"
                                placeholder="Enter role" required>
                            <div class="invalid-feedback">Please Enter the Role.</div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control mb-4" id="description" name="description" placeholder="Description" rows="3"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="reset" id="reset" class="btn btn-danger-gradient btn-pill mt-3">Reset</button>
                            <button type="submit" class="btn btn-primary-gradient btn-pill mt-3">Submit</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary">Save changes</button> 
                    <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection


{{-- scripts --}}
@section('scripts')
    <script>
        // backend error is true modal opened
        $(document).ready(function() {
            if (!@json($errors->isEmpty())) {
                $('#modal_').modal();
            }
        });

        // edit button click
        $('.btn-edit').click(function (e) { 
            e.preventDefault();

            // all value null
            $('#id').val('');
            $('#role').val('');
            $('#description').val('');

            // values get from attributes
            let id=$(this).attr("data-id");
            let role=$(this).attr("data-role");
            let description=$(this).attr("data-description");

            // all values set to modal
            $('#id').val(id);
            $('#role').val(role);
            $('#description').val(description);

            // reset button attributes set
            $('#reset').attr("data-id", id);
            $('#reset').attr("data-role", role);
            $('#reset').attr("data-description", description);
        });

        // add button click - all value null
        $('#btn-add').click(function (e) { 
            e.preventDefault();
            $('#id').val('');
            $('#role').val('');
            $('#description').val('');

            // reset button attributes set
            $('#reset').attr("data-id", '');
            $('#reset').attr("data-role", '');
            $('#reset').attr("data-description", '');
        });

        // reset button click - value set for edit time
        $('#reset').click(function (e) { 
            e.preventDefault();
            // values get from attributes
            let id=$(this).attr("data-id");
            let role=$(this).attr("data-role");
            let description=$(this).attr("data-description");

            // all values set to modal
            $('#id').val(id);
            $('#role').val(role);
            $('#description').val(description);
        });
    </script>



    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    {{-- <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> --}}

    <!-- SIDE-MENU JS-->
    {{-- <script src="../assets/plugins/sidemenu/sidemenu.js"></script> --}}

    <!-- Perfect SCROLLBAR JS-->
    {{-- <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="../assets/plugins/p-scroll/pscroll.js"></script> --}}

    <!-- SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- FORMVALIDATION JS -->
    <script src="../assets/js/form-validation.js"></script>

    <!-- STICKY JS -->
    {{-- <script src="../assets/js/sticky.js"></script> --}}

    <!-- COLOR THEME JS -->
    {{-- <script src="../assets/js/themeColors.js"></script> --}}

    <!-- CUSTOM JS -->
    {{-- <script src="../assets/js/custom.js"></script> --}}
@endsection