@extends('admin.admin-master')

@section('title')
    Admin | Edit Department
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Department Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="active">
                                    <a href="{{ route('view_department') }}" class="btn btn-primary">View All Departments
                                    </a>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title pb-0">Edit Department</h1>
                        </div>
                        <div class="card-body">

                            {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> All categories must have subcategories before a department can be
                                properly uploaded. <br>
                                Click
                                <b>
                                    <a href="{{ url('admin/add/sub-category') }}" class="alert-link">here</a>
                                </b>
                                to add a Subcategory
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div> --}}

                            <form method="post" action="{{ route('update_department') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $department->id }}">

                                <div class="row mt-1">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">Department Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <input name="name" class="form-control" type="text"
                                                id="example-text-input" value="{{ $department->name }} ">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">Category <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <select name="category_id" class="form-select" id="changeCategory">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option
                                                        {{ $department->category_id == $category->id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-12 col-md-6 mb-2">
                                        <label for="example-text-input" class="form-label">Sub Category <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <select name="subcategory_id" id="getSubCategory" class="form-select"
                                                id="">
                                                <option value="">Select</option>
                                                @foreach ($getSubCategory as $subCategory)
                                                    <option
                                                        {{ $department->subcategory_id == $subCategory->id ? 'selected' : '' }}
                                                        value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('subbcategory_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                </div>

                                <div class="row mt-1">
                                    <div class="col-12 col-md-12">
                                        <label for="example-text-input" class="form-label">Department Image <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <div class="fallback">
                                                <input name="image" class="form-control" type="file" accept="image/*"
                                                    id="image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-12">
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ !empty($department->image) ? url($department->image) : url('upload/no_image.png') }}"
                                                alt="{{ $department->image }}">
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">HOD Image <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <div class="fallback">
                                                <input name="hod_image" class="form-control" type="file" accept="image/*"
                                                    id="hod_image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-12">
                                            <img id="showImage1" class="rounded avatar-lg"
                                                src="{{ !empty($department->hod_image) ? url($department->hod_image) : url('upload/no_image.png') }}"
                                                alt="{{ $department->hod_image }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">HOD Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <div class="fallback">
                                                <input name="hod_name" class="form-control" type="text"
                                                    value="{{ $department->hod_name }} ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">HOD DEGREES <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <div class="fallback">
                                                <input name="hod_degrees" class="form-control" type="text"
                                                    placeholder="MBBS, MPS, etc..."
                                                    value="{{ $department->hod_degrees }} ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">Team </label>
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Role</th>
                                                            <th>Image</th>
                                                            <th>Aciton</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody id="appendSize">
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @foreach ($department->getTeam as $size)
                                                            <tr id="deleteSize{{ $i }}">
                                                                <td>
                                                                    <input type="text" value="{{ $size->name }}"
                                                                        placeholder="Name"
                                                                        name="size[{{ $i }}][name]"
                                                                        class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="text" value="{{ $size->role }}"
                                                                        placeholder="role"
                                                                        name="size[{{ $i }}][role]"
                                                                        class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input
                                                                        type="file"name="size[{{ $i }}][image]"
                                                                        class="form-control">
                                                                    <img id="showImage1" class="rounded avatar-lg"
                                                                        src="{{ !empty($size->image) ? url($size->image) : url('upload/no_image.png') }}"
                                                                        alt="{{ $size->image }}"
                                                                        style="width: 50px;height:50px;">
                                                                        <input type="hidden" name="size[{{ $i }}][imageValue]" value="{{ $size->image }}">
                                                                </td>
                                                                <td >
                                                                    <button type="button" id="{{ $i }}"
                                                                        class="btn btn-danger deleteSize">Delete</button>
                                                                </td>
                                                            </tr>
                                                            @php
                                                                $i++;
                                                            @endphp
                                                        @endforeach
                                                        <tr>
                                                            <td>
                                                                <input type="text" placeholder="Name"
                                                                    name="size[100][name]" class="form-control">
                                                            </td>
                                                            <td>
                                                                <input type="text" placeholder="Role"
                                                                    name="size[100][role]" class="form-control">
                                                            </td>
                                                            <td>
                                                                <input type="file" placeholder="Role"
                                                                    name="size[100][image]" class="form-control">

                                                                    <input type="hidden" name="size[100][imageValue]">
                                                            </td>
                                                            <td >
                                                                <button type="button"
                                                                    class="btn btn-primary addSize">Add</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr> --}}

                                <div class="row mt-2">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">Short Description <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <textarea name="short_description" class="form-control" placeholder="short description" id="">{{ trim($department->short_description) }}</textarea>
                                        </div>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mt-2">
                                    <div class="col-12 col-md-12 mb-2">
                                        <label for="example-text-input" class="form-label">Description <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <textarea name="description" class="form-control" placeholder="" id="description">
                                            {{ $department->description }}
                                        </textarea>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update Department">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('backend/assets/js/jQuery_UI.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#hod_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage1').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $("#sortable").sortable({
                update: function(event, ui) {
                    var photo_id = [];

                    $('.sortable_image').each(function() {
                        var id = $(this).attr('id');
                        photo_id.push(id);
                    })

                    // alert(photo_id);

                    $.ajax({
                        url: "{{ url('admin/product_image_sort') }}",
                        type: 'POST',
                        data: {
                            photo_id: photo_id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {

                        },
                        error: function(error) {

                        }
                    });

                }
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {


            $('#changeCategory').change((e) => {
                let id = $('#changeCategory').val();
                $.ajax({
                    url: "{{ url('admin/get_SubCategory') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        $('#getSubCategory').show().html(data.html)
                    },
                    error: function(error) {

                    }
                });
            });

            // Add Size
            var i = 101;
            $('.addSize').click(() => {
                let html = `<tr id="deleteSize${i}">
                               <td>
                                   <input type="text" name="size[${i}][name]" placeholder="Name" class="form-control">
                                </td>
                                <td>
                                   <input type="text" name="size[${i}][role]" placeholder="Role"  class="form-control">
                                </td>
                                <td>
                                   <input type="file" name="size[${i}][image]"  class="form-control">
                                   <input type="hidden" name="size[${i}][imageValue]" class="form-control" >
                                </td>
                                <td>
                                    <button type="button" id="${i}" class="btn btn-danger deleteSize">Delete</button>
                                </td>
                            </tr>`;
                i++;
                $('#appendSize').append(html);
            })


            // Use event delegation to attach the click event handler to dynamically created elements
            $(document).on('click', '.deleteSize', function() {
                var id = $(this).attr('id');
                $(`#deleteSize${id}`).remove();
            });

        });
    </script>


    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("description"), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            placeholder: 'Description',
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents'
            ]
        });
    </script>

    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
@endsection
