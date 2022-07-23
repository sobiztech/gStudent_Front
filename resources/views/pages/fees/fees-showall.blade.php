@extends('layouts.app')

{{-- styles --}}
@section('styles')
@endsection

{{-- main content --}}
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Fees</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Payments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fees</li>
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
                        <h3 class="card-title">Fees</h3>
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
                                    <th>Amount</th>
                                    <th>Class</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feeses as $fees)
                                    <tr>
                                        <td>{{ $fees['id'] }}</td>
                                        <td>{{ $fees['amount'] }}</td>
                                        <td>{{ $fees['class_name'] }}</td>
                                        <td>{{ $fees['description'] }}</td>
                                        <td>
                                            <button class="modal-effect btn btn-secondary-gradient btn-pill btn-edit" title="Edit"
                                                data-bs-effect="effect-sign" data-bs-toggle="modal"
                                                data-bs-target="#modal_" data-id="{{ $fees['id'] }}"
                                                data-amount="{{ $fees['amount'] }}" data-class_id="{{ $fees['class_id'] }}"
                                                data-description="{{ $fees['description'] }}">
                                                <i class="fe fe-edit"></i>
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
    <!-- End Row -->
@endsection


{{-- modal section --}}
@section('modal')
    <div class="modal fade" id="modal_">
        <div class="modal-dialog modal-lg modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Fees</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-start">
                    <form action="{{ route('fees.addProcess') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="text" class="form-control" name="id" id="id" hidden>
                        <div class="form-group">
                            <label for="role">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter Payment Amount" required>
                            <div class="invalid-feedback">Please Enter the Amount.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Class</label>
                            <select class="form-control select2-show-search form-select" data-placeholder="Choose Class"
                                name="class" id="class" required>
                                <option label="Choose Class"></option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class['id'] }}">{{ $class['class_name'] }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please Select the Class.</div>
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
            $('#amount').val('');
            $('#class').val('');
            $('#description').val('');

            // values get from attributes
            let id=$(this).attr("data-id");
            let amount=$(this).attr("data-amount");
            let class_id=$(this).attr("data-class_id");
            let description=$(this).attr("data-description");

            // all values set to modal
            $('#id').val(id);
            $('#amount').val(amount);
            $('#class').val(class_id);
            $('#description').val(description);

            // reset button attributes set
            $('#reset').attr("data-id", id);
            $('#reset').attr("data-amount", amount);
            $('#reset').attr("data-class_id", class_id);
            $('#reset').attr("data-description", description);
        });

        // add button click - all value null
        $('#btn-add').click(function (e) { 
            e.preventDefault();

            // all values null
            $('#id').val('');
            $('#amount').val('');
            $('#class').val('');
            $('#description').val('');

            // reset button attributes remove
            $('#reset').removeAttr("data-id");
            $('#reset').removeAttr("data-amount");
            $('#reset').removeAttr("data-class_id");
            $('#reset').removeAttr("data-description");

        });

        // reset button click - value set for edit time
        $('#reset').click(function (e) { 
            e.preventDefault();

            // all values null
            $('#id').val('');
            $('#amount').val('');
            $('#class').val('');
            $('#description').val('');

            // values get from attributes
            let id=$(this).attr("data-id");
            let amount=$(this).attr("data-amount");
            let class_id=$(this).attr("data-class_id");
            let description=$(this).attr("data-description");

            // all values set to modal
            $('#id').val(id);
            $('#amount').val(amount);
            $('#class').val(class_id);
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

    <!-- FORM ELEMENTS JS -->
    {{-- <script src="../assets/js/formelementadvnced.js"></script> --}}

    <!-- STICKY JS -->
    {{-- <script src="../assets/js/sticky.js"></script> --}}

    <!-- COLOR THEME JS -->
    {{-- <script src="../assets/js/themeColors.js"></script> --}}

    <!-- CUSTOM JS -->
    {{-- <script src="../assets/js/custom.js"></script> --}}
@endsection