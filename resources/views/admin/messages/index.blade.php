@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Messages</h4>
                                            <div class="page-title-right">
                                                <div class="page-title-right">
                                                    <a href="{{ route('messages.new-message') }}"
                                                       class="btn btn-dark">Send Message</a>
                                                </div>
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
                                                        <th>Mobile #</th>
                                                        <th>Text</th>
                                                        <th>Sent Date</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($message_sent as $message)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                {{$message->mobile}}
                                                            </td>
                                                            <td>{{ $message->message }}</td>
                                                            <td>
                                                                {{ $message->created_at->format('Y M d h:m a') }}
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
@endsection
