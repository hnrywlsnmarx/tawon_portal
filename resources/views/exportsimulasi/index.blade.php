@extends('layouts.app')

@section('styles') 
    <link href="{{URL::asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
    <script src="{{URL::asset('assets/js/jquery-1.9.1.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/js/moment.js')}}"></script>
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">Data Simulasi Global</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">Simulasi Global</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>					
    </nav>			
</div>

@endsection('breadcrumb')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Download Data Simulasi</h4>
            </div>
        </div>
    </div>
    <form action="{{ url()->current() }}" method="get" class='form-inline'>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- <center>Download Data berdasarkan Load Date</center><br> --}}
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <div class="input-group">                        
                            <div class="col-md-6">
                                From:&nbsp;<input class="from_date form-control" type="text" name="from_date" id="from_date" onfocus="disbut();" onblur="disbuton();">
                                <input type="hidden" id="from_date_hid" name='from_date_hid' value="{{ request('from_date_hid') }}">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                To:&nbsp;<input class="to_date form-control" type="text" name="to_date" id="to_date" onblur="disbut();">
                                <input type="hidden" id="to_date_hid" name='to_date_hid' value="{{ request('to_date_hid') }}">
                            </div>
                                <button type="submit" class="btn btn-sm btn-success mb-2" name="expex" value="expexcel" id="expex">Download Excel</button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-sm btn-primary mb-2" name="expcs" value="expcsv" id="expcs">Download CSV</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

    <script type="text/javascript">
		$('.from_date').datepicker({  
			format: 'dd-mm-yyyy',
			todayHighlight: true
		});

        $('.to_date').datepicker({  
			format: 'dd-mm-yyyy',
			todayHighlight: true,
		});

		$('.from_date').on('changeDate', function(e){
			$(this).next('input[type=hidden]').val(moment(e.date).format('YYYY-MM-DD'));
		});

		$('.to_date').on('changeDate', function(e){
			$(this).next('input[type=hidden]').val(moment(e.date).format('YYYY-MM-DD'));
		});
    </script> 

<script>
    function disbut(){
        var datehidfr = document.getElementById('from_date').value;
        var datehidto = document.getElementById('to_date').value;
        if(datehidto != '' && datehidfr != ''){
            document.getElementById("expex").disabled = false;
            document.getElementById("expcs").disabled = false;
        } else {
            document.getElementById("expex").disabled = true;
            document.getElementById("expcs").disabled = true;
        }
    }

    function disbuton(){
        var datehidfr = document.getElementById('from_date').value;
        if(datehidfr == ''){
            document.getElementById("expex").disabled = true;
            document.getElementById("expcs").disabled = true;
        }
    }
</script>

@endsection