@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/datatables.css')}}">
@endsection
@section('content')
<div class="main-content" id="miniaresult">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Transfers</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Transfers</li>
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
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary waves-effect waves-light btn-modal" data-href="{{route('transfers.create')}}" data-container=".transfers_modal"> Create
                            </button>
                        </div>
                    </div>
                        <!-- <div class="card-header">
                            <h4 class="card-title">Buttons example</h4>
                            <p class="card-title-desc">The Buttons extension for
                                DataTables
                                provides a common set of options, API methods and
                                styling to display
                                buttons on a page that will interact with a
                                DataTable. The core library
                                provides the based framework upon which plug-ins can
                                built.
                            </p>
                        </div> -->
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>

                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end cardaa -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg fade  transfers_modal" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel"
                                aria-hidden="true"></div>
@endsection
@section('js')
<script src="{{asset('js/datatables.js')}}"></script>
<script>
    $(document).ready(function() {
        $(document).on('click','.btn-modal',function(e){
            e.preventDefault();
            let container = $(this).data('container');
            $.ajax({
            url: $(this).data('href'),
            dataType: 'html',
            success: function(result) {
                $(container).html(result).modal('show');
            },
        });
        });
    });
</script>

@endsection