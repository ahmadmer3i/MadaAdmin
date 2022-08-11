@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="row mb-3 mt-5">
                                     <label for="title" class="col-sm-2 col-form-label">Title</label>
                                     <div class="col-sm-10">
                                         <textarea class="form-control" type="text" id="elm1"
                                                   name="title"></textarea>
                                     </div>
                                 </div>--}}

                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Core Values</h4>
                                            <div class="page-title-right">
                                                <a href="{{ route('about.core-values.add') }}"
                                                   class="btn btn-dark">
                                                    Add Value
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatable"
                                                       class="table table-bordered dt-responsive wrap"
                                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Value Title</th>
                                                        <th>Value Description</th>
                                                        <th>Value Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($values as $value)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{$value->title}}</td>
                                                            <td style="width: 200px">{{ $value->description }}</td>
                                                            <td><img
                                                                    src="{{!empty($value->image) ? url($value->image) : ''}}"
                                                                    alt="" width="100">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('about.core-values.edit', $value->id)}}"
                                                                   class="btn btn-info" title="Edit">
                                                                    <i class="ri-pencil-fill"></i>
                                                                </a>
                                                                <a href="{{ route('about.core-values.delete', $value->id) }}"
                                                                   class="btn btn-danger"
                                                                   title="Delete">
                                                                    <i class="ri-delete-bin-2-fill"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                                <!-- end row -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#category_image').change(function (e) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
@endsection
