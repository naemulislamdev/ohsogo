@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Sub Category'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ \App\CPU\translate('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ \App\CPU\translate('subcategory') }}</li>
            </ol>
        </nav>
        <!-- Breadcrumb end-->
        <!-- content row start-->
        <div class="row" style="margin-top: 20px" id="cate-table">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" row flex-between justify-content-between align-items-center flex-grow-1">
                            <div class="col-12 col-mrchd-7">
                                <h5>{{ \App\CPU\translate('sub_category_table') }} <span
                                        style="color: red;">({{ $subCategories->count() }})</span></h5>
                            </div>
                            <div class="col-12 col-md-5" style="width: 40vw">
                                <!-- Search start-->
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="search" class="form-control"
                                            placeholder="{{ \App\CPU\translate('Search_by_Sub_Category') }}"
                                            aria-label="Search orders" value="{{ $search }}" required>
                                        <button type="submit"
                                            class="btn btn-primary">{{ \App\CPU\translate('search') }}</button>
                                    </div>
                                </form>
                                <!-- End Search -->
                            </div>
                        </div>
                        <!-- add Subcategory Modal start-->
                        <div>
                            <button data-toggle="modal" data-target="#subcategoryModal" class="btn btn-primary"><i
                                    class="tio tio-add"></i> Add
                                Subcategory</button>

                        </div>
                        <!-- add Subcategory Modal start-->
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};"
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SL#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">SubCategory {{ \App\CPU\translate('name') }}</th>
                                        <th scope="col">SubCategory {{ \App\CPU\translate('slug') }}</th>

                                        <th scope="col" class="text-center" style="width: 80px">
                                            {{ \App\CPU\translate('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($subCategories as $key => $subCategory)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td> {{ $subCategory->category->name }}</td>
                                            <td> {{ $subCategory['name'] }}</td>
                                            <td>{{ $subCategory['slug'] }}</td>

                                            <td>
                                                <a class="btn btn-primary btn-sm" title="{{ \App\CPU\translate('Edit') }}"
                                                    href="#" data-toggle="modal"
                                                    data-target="#exampleModal_{{ $subCategory['id'] }}">
                                                    <i class="tio-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm delete" style="cursor: pointer;"
                                                    title="{{ \App\CPU\translate('Delete') }}"
                                                    id="{{ $subCategory['id'] }}">
                                                    <i class="tio-add-to-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Edit Subcategory Modal start-->
                                        <div class="modal fade" id="exampleModal_{{ $subCategory['id'] }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel">Edit Subcategory
                                                        </h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <form action="{{ route('admin.subcategory.update') }}"
                                                                method="POST">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $subCategory->id }}">

                                                                {{-- category --}}
                                                                <div class="form-group">
                                                                    <label class="input-label"
                                                                        for="exampleFormControlSelect1">{{ \App\CPU\translate('main') }}
                                                                        {{ \App\CPU\translate('category') }}
                                                                        <span class="input-label-danger">*</span></label>
                                                                    <select name="category_id" class="form-control"
                                                                        required>
                                                                        @foreach (\App\Model\Category::all() as $category)
                                                                            <option value="{{ $category['id'] }}"
                                                                                {{ $category['id'] == $subCategory['category_id'] ? 'selected' : '' }}>
                                                                                {{ $category['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sub-category Name <span
                                                                            class="text-danger">*</span></label>
                                                                    <input class="form-control" type="text"
                                                                        name="name" value="{{ $subCategory->name }}">
                                                                </div>
                                                                <div class="modal-footer border-t-0">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                    </button>
                                                                </div>
                                                            </form>
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
                        {{ $subCategories->links() }}
                    </div>
                    @if (count($subCategories) == 0)
                        <div class="text-center p-4">
                            <img class="mb-3" src="{{ asset('assets/back-end') }}/svg/illustrations/sorry.svg"
                                alt="Image Description" style="width: 7rem;">
                            <p class="mb-0">{{ \App\CPU\translate('No_data_to_show<') }}/p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- content row end -->
    </div>
    {{-- Add subcategory Modal Body Start  --}}
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
                        <form action="{{ route('admin.subcategory.store') }}" method="POST">
                            @csrf

                            {{-- category --}}
                            <div class="form-group">
                                <label class="input-label"
                                    for="exampleFormControlSelect1">{{ \App\CPU\translate('main') }}
                                    {{ \App\CPU\translate('category') }}
                                    <span class="input-label-danger">*</span></label>
                                <select name="category_id" class="form-control" required>
                                    <option selected disabled value="">------</option>
                                    @foreach (\App\Model\Category::all() as $category)
                                        <option value="{{ $category['id'] }}">
                                            {{ $category['name'] }}

                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="name">
                                <label class="input-label" for="name">
                                    {{ \App\CPU\translate('subcategory_name') }}<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter Subcategory Name">
                                @error('name')
                                    <div class="text-danger mt-2">{{ ucwords($message) }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer border-t-0">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{ \App\CPU\translate('close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ \App\CPU\translate('submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Add subcategory Modal Body End  --}}

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <script>
        $(document).on('submit', '#subSubCategoryAddForm', function(e) {
            e.preventDefault();
            // $('.error-text').text('');

            $.ajax({
                url: "{{ route('admin.subcategory.store') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(res) {
                    if (res.success) {
                        $('#addSubCategoryModal').modal('hide');
                        toastr.success(res.message);
                        location.reload(); // or dynamically append new row
                    }
                },
                error: function(err) {
                    if (err.status === 422) {
                        let errors = err.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('.' + key + '_error').text(value[0]);
                        });
                    }
                }

            });
        });
    </script>

    <script>
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ \App\CPU\translate('Are_you_sure_to_delete_subCategory') }}?',
                text: "{{ \App\CPU\translate('You_will_not_be_able_to_revert_this') }}!",
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
                        url: "{{ route('admin.subcategory.delete') }}",
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function() {
                            toastr.success(
                                '{{ \App\CPU\translate('SubCategory_deleted_Successfully.') }}'
                            );
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@endpush
