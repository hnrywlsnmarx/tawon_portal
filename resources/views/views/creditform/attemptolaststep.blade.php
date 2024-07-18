@extends('layouts.apptopdf')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="bg-gray-100">
                        <p>
                            Data belum lengkap
                        </p>
                    </div>
                    
                    <a href="{{ url('/') }}" class="btn btn-warning" style="float: right;">Kembali ke Beranda </a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

@endsection