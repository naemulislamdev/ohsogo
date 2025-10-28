@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Category'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ \App\CPU\translate('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ \App\CPU\translate('category') }}</li>
            </ol>
        </nav>


        <div class="row" style="margin-top: 1.25rem" id="cate-table">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row flex-between justify-content-between align-items-center flex-grow-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <h5>{{ \App\CPU\translate('category_table') }} <span
                                        style="color: red;">({{ $categories->total() }})</span></h5>
                                <div>
                                    <form action="{{ url()->current() }}" method="GET">
                                        <div class="input-group input-group-merge input-group-flush">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tio-search"></i>
                                                </div>
                                            </div>
                                            <input id="" type="search" name="search" class="form-control"
                                                placeholder="{{ \App\CPU\translate('search_here') }}"
                                                value="{{ $search }}" required>
                                            <button type="submit"
                                                class="btn btn-primary">{{ \App\CPU\translate('search') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4" style="width: 30vw">
                                <div class="text-right">
                                    <button data-toggle="modal" data-target="#addcategoryModal" class="btn btn-primary"><i
                                            class="tio-add    "></i> Add Category</button>
                                </div>
                                {{-- Add category Modal Body Start  --}}
                                <div class="modal fade" id="addcategoryModal" tabindex="-1"
                                    aria-labelledby="addcategoryModal" aria-hidden="true" static="backdrop">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="subcategoryModal">
                                                    {{ \App\CPU\translate('add_category') }}</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <form action="{{ route('admin.category.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group" id="name">
                                                            <label class="input-label" for="name">
                                                                {{ \App\CPU\translate('category_name') }}<span
                                                                    class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Enter Subcategory Name">
                                                            @error('name')
                                                                <div class="text-danger mt-2">{{ ucwords($message) }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="input-label"
                                                                for="priority">{{ \App\CPU\translate('choose_priority_number') }}
                                                                <span>
                                                                    <i class="tio-info-outined"
                                                                        title="{{ \App\CPU\translate('the_lowest_number_will_get_the_highest_priority') }}"></i>
                                                                </span>
                                                            </label>

                                                            <select class="form-control" name="priority" id=""
                                                                required>
                                                                @for ($i = 0; $i <= 10; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class=" from_part_2">
                                                            <label>{{ \App\CPU\translate('image') }}</label><small
                                                                style="color: red">*
                                                                ( {{ \App\CPU\translate('ratio') }} 1:1 )</small>
                                                            <div class="custom-file" style="text-align: left">
                                                                <input type="file" name="image" id="customFileEg1"
                                                                    class="custom-file-input"
                                                                    accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"
                                                                    required>
                                                                <label class="custom-file-label"
                                                                    for="customFileEg1">{{ \App\CPU\translate('choose') }}
                                                                    {{ \App\CPU\translate('file') }}</label>
                                                            </div>
                                                        </div>
                                                        <div class="from_part_2">
                                                            <div class="form-group">
                                                                <hr>
                                                                <center>
                                                                    <img style="width: 12.5rem;height:12.5rem;border: .0625rem solid; border-radius: .625rem;"
                                                                        id="viewer"
                                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                                        alt="image" />
                                                                </center>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer border-t-0">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ \App\CPU\translate('close') }}</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">{{ \App\CPU\translate('submit') }}
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- Add category Modal Body End  --}}
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

                                        <th>{{ \App\CPU\translate('name') }}</th>
                                        <th>{{ \App\CPU\translate('slug') }}</th>
                                        <th>{{ \App\CPU\translate('icon') }}</th>
                                        <th>{{ \App\CPU\translate('priority') }}</th>
                                        <th>{{ \App\CPU\translate('home_status') }}</th>
                                        <th style="width:15%;">{{ \App\CPU\translate('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ ++$key }}</td>

                                            <td>{{ $category['name'] }}</td>
                                            <td>{{ $category['slug'] }}</td>
                                            <td>
                                                <img class="rounded" width="64"
                                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                                    src="{{ asset('storage/category') }}/{{ $category['icon'] }}">
                                            </td>
                                            <td>
                                                {{ $category['priority'] }}
                                            </td>
                                            <td>

                                                <label class="switch switch-status">
                                                    <input type="checkbox" class="category-status"
                                                        id="{{ $category['id'] }}"
                                                        {{ $category->home_status == 1 ? 'checked' : '' }}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm edit" style="cursor: pointer;"
                                                    title="{{ \App\CPU\translate('Edit') }}" data-toggle="modal"
                                                    data-target="#exampleModal_{{ $category['id'] }}">

                                                    <i class="tio-edit"></i>
                                                </button>
                                                <a class="btn btn-danger btn-sm delete" style="cursor: pointer;"
                                                    title="{{ \App\CPU\translate('Delete') }}"
                                                    id="{{ $category['id'] }}">
                                                    <i class="tio-add-to-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Edit category Modal start-->
                                        <div class="modal fade" id="exampleModal_{{ $category['id'] }}" tabindex="-1"
                                            aria-labelledby="editCategoryModal{{ $category['id'] }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title"
                                                            id="editCategoryModal{{ $category['id'] }}">Edit Category
                                                        </h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <form action="{{ route('admin.category.update') }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $category['id'] }}">
                                                                <div class="form-group">
                                                                    <label>{{ \App\CPU\translate('category_name') }} <span
                                                                            class="text-danger">*</span></label>
                                                                    <input class="form-control" type="text"
                                                                        name="name" value="{{ $category['name'] }}">
                                                                </div>
                                                                {{-- category priority start --}}
                                                                <div class="form-group">
                                                                    <label class="input-label"
                                                                        for="priority">{{ \App\CPU\translate('choose_priority_number') }}
                                                                        <span>
                                                                            <i class="tio-info-outined"
                                                                                title="{{ \App\CPU\translate('the_lowest_number_will_get_the_highest_priority') }}"></i>
                                                                        </span>
                                                                    </label>

                                                                    <select class="form-control" name="priority"
                                                                        id="" required>
                                                                        @for ($i = 0; $i <= 10; $i++)
                                                                            <option
                                                                                {{ $category['priority'] == $i ? 'selected' : '' }}
                                                                                value="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                {{-- category priroty end --}}
                                                                <div class=" from_part_2">
                                                                    <label>{{ \App\CPU\translate('image') }}</label><small
                                                                        style="color: red">*
                                                                        ( {{ \App\CPU\translate('ratio') }} 1:1 )</small>
                                                                    <div class="custom-file" style="text-align: left">
                                                                        <input type="file" name="icon"
                                                                            id="customFileEg1" class="custom-file-input"
                                                                            accept="image/*"
                                                                            onchange="previewImage(event)">

                                                                        <label class="custom-file-label"
                                                                            for="customFileEg1">{{ \App\CPU\translate('choose') }}
                                                                            {{ \App\CPU\translate('file') }}</label>
                                                                    </div>
                                                                </div>
                                                                <div class=" from_part_2">
                                                                    <div class="form-group">
                                                                        <hr>
                                                                        <center>
                                                                            <img style="width: 12.5rem;height:12.5rem;border: .0625rem solid; border-radius: .625rem;"
                                                                                id="preview"
                                                                                src="{{ asset('storage/category') }}/{{ $category['icon'] }}"
                                                                                alt="image" />

                                                                        </center>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer border-t-0">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{ \App\CPU\translate('Close') }}</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">{{ \App\CPU\translate('Update') }}
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit category Modal End-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        {{ $categories->links() }}
                    </div>
                    @if (count($categories) == 0)
                        <div class="text-center p-4">
                            <img class="mb-3" src="{{ asset('assets/back-end') }}/svg/illustrations/sorry.svg"
                                alt="Image Description" style="width: 112px;">
                            <p class="mb-0">{{ \App\CPU\translate('no_data_found') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ \App\CPU\translate('Are_you_sure_to_delete_Category') }}?',
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
                        url: "{{ route('admin.category.delete') }}",
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
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <script>
        $(document).on('change', '.category-status', function() {
            var id = $(this).attr("id");
            if ($(this).prop("checked") == true) {
                var status = 1;
            } else if ($(this).prop("checked") == false) {
                var status = 0;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.category.status') }}",
                method: 'POST',
                data: {
                    id: id,
                    home_status: status
                },
                success: function(data) {
                    if (data.success == true) {
                        toastr.success('{{ \App\CPU\translate('Status updated successfully') }}');
                    }
                }
            });
        });
    </script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function() {
            readURL(this);
        });
    </script>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const preview = document.getElementById('preview');

            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
