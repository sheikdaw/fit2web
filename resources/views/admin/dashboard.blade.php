@extends('admin.layout')
@section('content')
    <div class="pb-0 card-header">
        <div class="header-top">
            <h4>E-Sevai. இனிய சேவை இணைய சேவை </h4>

        </div><br>
        <div class="col-md-12 project-list">
            <div class="card">
                <div class="row">
                    <div class="p-0 col-md-12">

                        <ul class="nav nav-tabs border-tab d-flex" id="top-tab" role="tablist">


                            <a href="pen.php">
                                <button class="btn btn-danger" type="button" style="padding:20px 50px">0

                                    Pending</span></button></a>


                            <a href="pen.php">
                                <button class="btn btn-warning" type="button" style="padding:20px 50px">
                                    0
                                    Processing</span></button></a>


                            <a href="pen.php">
                                <button class="btn btn-success" type="button" style="padding:20px 50px">
                                    0
                                    Approved</span></button></a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
