@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Sub Sub Category'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ \App\CPU\translate('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ \App\CPU\translate('sub-sub-category') }}</li>
            </ol>
        </nav>

        <div class="row" style="margin-top: 20px" id="cate-table">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row flex-between justify-content-between align-items-center flex-grow-1">
                            <div class="col-12 col-md-6">
                                <h5>{{ \App\CPU\translate('sub_sub_category_table') }} <span
                                        style="color: red;">({{ 3 }})</span></h5>
                                <!-- Search -->
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="search" class="form-control"
                                            placeholder="{{ \App\CPU\translate('Search_by_Sub_Sub_Category') }}"
                                            aria-label="Search orders" value="{{ $search }}" required>
                                        <button type="submit"
                                            class="btn btn-primary">{{ \App\CPU\translate('search') }}</button>
                                    </div>
                                </form>
                                <!-- End Search -->
                            </div>
                            <div class="col-12 col-md-6 text-right" style="width: 40vw">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#subcategoryModal"><i
                                        class="tio tio-add"></i>Add Sub-sub Category</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};"
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SL#</th>
                                        <th scope="col" style="width: 120px">{{ \App\CPU\translate('category') }}
                                            {{ \App\CPU\translate('main ') }} <i class="tio-arrow-long-left"></i>
                                        </th>
                                        <th scope="col" style="width: 120px">{{ \App\CPU\translate('sub-category') }}
                                            {{ \App\CPU\translate('name') }} <i class="tio-arrow-long-left"></i></th>

                                        <th scope="col">{{ \App\CPU\translate('sub_sub_category_name') }}</th>
                                        <th scope="col">{{ \App\CPU\translate('slug') }}</th>

                                        <th scope="col" class="text-center" style="width: 120px">
                                            {{ \App\CPU\translate('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_sub_categories as $key => $subsubcat)
                                        {{-- @dd($subsubcat->category->name) --}}
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $subsubcat->category->name }}</td>
                                            <td>{{ $subsubcat->subcategory->name }}</td>

                                            <td>{{ $subsubcat['name'] }}</td>
                                            <td>{{ $subsubcat['slug'] }}</td>

                                            <td>
                                                <a class="btn btn-primary btn-sm" title="{{ \App\CPU\translate('Edit') }}"
                                                    href="#" data-toggle="modal"
                                                    data-target="#exampleModal_{{ $subsubcat->id }}"><i
                                                        class=" tio tio-edit"></i></a>
                                                <a class="btn btn-danger btn-sm delete" style="cursor: pointer;"
                                                    title="{{ \App\CPU\translate('Delete') }}"
                                                    id="{{ $subsubcat['id'] }}">
                                                    <i class="tio-add-to-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Edit Sub-sub-category Modal start-->
                                        <div class="modal fade" id="exampleModal_{{ $subsubcat->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel">Edit Sub sub-category
                                                        </h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div>
                                                                <form action="{{ route('admin.sub-sub-category.update') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="row">


                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="input-label">{{ \App\CPU\translate('main') }}
                                                                                    {{ \App\CPU\translate('category') }}
                                                                                    <span
                                                                                        class="input-label-secondary">*</span></label>
                                                                                <select name="category_id" id="cat_id2"
                                                                                    class="form-control" required>

                                                                                    @foreach (\App\Model\Category::all() as $category)
                                                                                        <option
                                                                                            {{ $subsubcat->category->id == $category['id'] ? 'selected' : '' }}
                                                                                            value="{{ $category['id'] }}">
                                                                                            {{ $category['name'] }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $subsubcat->id }}">
                                                                        <div class="col-12">
                                                                            <label
                                                                                for="name">{{ \App\CPU\translate('sub_category') }}
                                                                                {{ \App\CPU\translate('name') }}</label>
                                                                            <select name="subcategory_id" id="parent_id2"
                                                                                class="form-control">
                                                                                <option value="">select</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group lang_form"
                                                                                id="">
                                                                                <label
                                                                                    class="input-label">{{ \App\CPU\translate('Sub_sub_category') }}
                                                                                    {{ \App\CPU\translate('name') }}
                                                                                </label>
                                                                                <input type="text"
                                                                                    value="{{ $subsubcat->name }}"
                                                                                    name="name" class="form-control"
                                                                                    placeholder="{{ \App\CPU\translate('New_Sub_Category') }}"
                                                                                    required>
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer border-t-0">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ \App\CPU\translate('close') }}</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary px-5">{{ \App\CPU\translate('Update') }}
                                                                            </button>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Subcategory Modal End-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $all_sub_categories->links() }}
                    </div>
                    @if (count($all_sub_categories) == 0)
                        <div class="text-center p-4">
                            <img class="mb-3" src="{{ asset('assets/back-end') }}/svg/illustrations/sorry.svg"
                                alt="Image Description" style="width: 7rem;">
                            <p class="mb-0">{{ \App\CPU\translate('No_data_to_show') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Add sub-sub-category Modal Body Start  --}}
    <div class="modal fade" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModal" aria-hidden="true"
        static="backdrop">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="subcategoryModal">{{ \App\CPU\translate('add_subcategory') }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <form id="sub-sub-categoryAddForm" action="{{ route('admin.sub-sub-category.store') }}"
                            method="POST">
                            @csrf
                            <div class="row">


                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="input-label">{{ \App\CPU\translate('main') }}
                                            {{ \App\CPU\translate('category') }}
                                            <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control" id="cat_id" required>
                                            <option value="" disabled selected>------</option>
                                            @foreach (\App\Model\Category::all() as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="name">{{ \App\CPU\translate('sub_category') }}
                                        {{ \App\CPU\translate('name') }} <span class="text-danger">*</span></label>
                                    <select name="subcategory_id" id="parent_id" class="form-control">
                                        <option value="" selected disabled>-------</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-group lang_form" id="">
                                        <label class="input-label">{{ \App\CPU\translate('Sub_sub_category') }}
                                            {{ \App\CPU\translate('name') }} <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ \App\CPU\translate('New_Sub_Category') }}" required>
                                    </div>

                                </div>

                                <div class="modal-footer border-t-0">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ \App\CPU\translate('close') }}</button>
                                    <button type="submit"
                                        class="btn btn-primary px-5">{{ \App\CPU\translate('Submit') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Add sub-sub-category Modal Body End  --}}
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('assets/back-end') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/back-end') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        // script for add sub-sub-category select
        $(function() {
            function loadSubCategory(id) {
                if (!id) return;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.sub-sub-category.getSubCategory') }}',
                    data: {
                        id: id
                    },
                    success: function(result) {
                        $('#parent_id').html(result);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            // load on page load
            loadSubCategory($('#cat_id').val());

            // load on change
            $(document).on('change', '#cat_id', function() {
                loadSubCategory($(this).val());
            });
        });
    </script>
    <script>
        // script for edit sub-sub-category select
        $(function() {
            function loadSubCategory(id) {
                if (!id) return;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.sub-sub-category.getSubCategory') }}',
                    data: {
                        id: id
                    },
                    success: function(result) {
                        $('#parent_id2').html(result);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            // load on page load
            loadSubCategory($('#cat_id2').val());

            // load on change
            $(document).on('change', '#cat_id2', function() {
                loadSubCategory($(this).val());
            });
        });
    </script>
    {{-- script for delete --}}
    <script>
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ \App\CPU\translate('Are_you_sure_to_delete_this?') }}',
                text: "{{ \App\CPU\translate('You_wont_be_able_to_revert_this!') }}",
                showCancelButton: true,
                type: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ \App\CPU\translate('Yes') }}, {{ \App\CPU\translate('delete_it') }}!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('admin.sub-sub-category.delete') }}",
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function() {
                            toastr.success(
                                '{{ \App\CPU\translate('Sub_Sub_Category_Deleted_Successfully') }}.'
                            );
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@endpush
