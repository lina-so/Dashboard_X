@extends('layouts.master3')

<title>Data tables</title>
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('content')


  
    <div class="col-md-12 col-lg-8 col-xl-12" >
        <div class="modal-body">
            <form action="/search" method="GET" enctype="multipart/form-data">
                @csrf
                <label for="datefrom">@lang('lang.Start Date')</label>
                <input class="form-control" type="date"  name="datefrom" > <br> 									
                <label for="dateTo">@lang('lang.End Date')</label>
                <input class="form-control" type="date"  name="dateTo" > <br> 
                <input type="submit" value="@lang('lang.Find')" class="btn ripple btn-primary">									
            </form>	
        </div>
    </div>

    @if ((!empty($margin) ))
    <div class="row row-sm mg-t-25">
        
        <div class="col-md-12 col-lg-8 col-xl-12">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">@lang('lang.Your Most Recent Earnings')</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">@lang('lang.most') </span>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                            <th class="wd-lg-25p tx-right">@lang('lang.Proccess ID') </th>
                                <th class="wd-lg-25p">@lang('lang.Margin')</th>
                                <th class="wd-lg-25p tx-right">@lang('lang.Margin')%</th>
                                <th class="wd-lg-25p tx-right">@lang('lang.pp') $</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($margin as $item)
                            <tr>
                            <td  class="tx-right tx-medium tx-inverse">{{$item->id}}</td>
                            <td  class="tx-right tx-medium tx-inverse">{{$item->margin}}</td>
                            <td  class="tx-right tx-medium tx-inverse">{{$item->marginPer}}</td>
                            <td  class="tx-right tx-medium tx-inverse">{{$item->pp}} $</td>
                            
                        @endforeach
            

                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
    <h4 class="modal-body">@lang('lang.There Is No Data Please Select Two Dates')</h4>
    @endif

    

@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}">//pdfff her</script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script> --}}
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script> --}}
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection