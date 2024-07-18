@extends('layouts.app')

@section('styles') 
<style>
    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        animation: spin 2s linear infinite;
        margin: 20px auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .form-container {
        /* max-width: 400px; */
        margin: 0 auto;
    }

    .dec{
        color:rgb(255, 255, 255);
        background-color: rgb(3, 74, 1);
        animation: fadeOut 7s forwards;
    }

    .decgagal{
        color:rgb(255, 255, 255);
        background-color: rgb(123, 0, 0);
        animation: fadeOut 7s forwards;
    }
    
    @keyframes fadeOut {
        0% { opacity: 1; } 
        100% { opacity: 0; display: none; }
    }

    @keyframes example {
        0%   {background-color:red; left:0px; top:0px;}
        25%  {background-color:yellow; left:200px; top:0px;}
        50%  {background-color:blue; left:200px; top:200px;}
        75%  {background-color:green; left:0px; top:200px;}
        100% {background-color:red; left:0px; top:0px;}
    }
    

</style>
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">Do Scoring</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">Do Scoring</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>					
    </nav>			
</div>

@endsection('breadcrumb')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @foreach($errors->all() as $error)
        <div>
            <font color='red' style="font-weight: bold;">{{$error}}</font>
        </div>
    @endforeach
    
    <div class="form-container">
        <form id="apiForm" action="#" method="post">
            @csrf
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="pd-10 pd-sm-40 bg-gray-100">
                            <div class="input-group">
                                <label class="form-label mg-b-0">Masukkan NIK: </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-sm" id="nik" name="nik" placeholder="NIK" required>
                                </div>
                                <label class="form-label mg-b-0">Masukkan No Rekening: </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-sm" id="norek" name="norek" placeholder="No Rekening" required>
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn ripple btn-sm btn-dark br-tl-0 br-bl-0" onclick="submitForm()">Submit</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="loader" class="loader" style="display: none;"></div>    
    <center><p id="dec" class="dec" style="display:none;">Sukses</p></center>
    {{-- <center> --}}
        
    {{-- </center> --}}
    <center>
       <p id="decis" style="background-color: darkcyan;color: rgb(255, 255, 255);"></p>
       <p id="decisgagal" style="background-color: rgb(158, 4, 4);color: rgb(255, 255, 255);"></p>
    </center>
    <pre id="json" class="json" style="display: none;background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">Loading...</pre>
    <center><p id="decgagal" class="decgagal" style="display:none;">Gagal</p></center>
    
    <script>
        function submitForm() {
            var norek = document.getElementById("norek").value;
            var nik = document.getElementById("nik").value;
    
            if (norek === '' && nik === '') {
                alert('nik dan norek tidak boleh kosong');
            } else if (norek !== '' && nik === '') {
                alert('nik tidak boleh kosong');
            } else if (norek === '' && nik !== '') {
                alert('norek tidak boleh kosong');
            } else {
                var apiUrl = "http://172.28.97.167:888//tawon_api/servicespayroll2/";
                var xhr = new XMLHttpRequest();
    
                document.getElementById("loader").style.display = "block";
                document.getElementById("decis").style.display = "none";
                document.getElementById("decisgagal").style.display = "none";
    
                xhr.open("POST", apiUrl, true);
                xhr.setRequestHeader("Content-Type", "application/json");
               
    
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        document.getElementById("loader").style.display = "none";
    
                        if (xhr.status === 200) {
                            try {
                                var response = JSON.parse(xhr.responseText);
                                // document.getElementById("dec").style.display = "block";
                                // document.getElementById("decis").style.display = "block";
                                // document.getElementById("decisgagal").style.display = "block";
                                document.getElementById("json").style.display = "block";
                                document.getElementById("json").innerHTML = JSON.stringify(response, null, 2);
    
                                // if (response.stdCode == "00") {
                                //     document.getElementById("decis").innerHTML = "Decision for Account Number: " + norek + " and NIK " + nik + " is " + response.decision;
                                //     document.getElementById("decisgagal").style.display = "none";
                                // } else if (response.stdCode == "01") {
                                //     document.getElementById("decisgagal").innerHTML = "Decision for Account Number: " + norek + " and NIK " + nik + " is " + response.decision;
                                //     document.getElementById("decis").style.display = "none";
                                // } else if (response.stdCode == "33") {
                                //     document.getElementById("decisgagal").innerHTML = "No Rekening: " + norek + " <br> NIK: " + nik + " <br> " + response.decision;
                                //     document.getElementById("decis").style.display = "none";
                                // } else if (response.stdCode == "55") {
                                //     document.getElementById("decisgagal").innerHTML = "No Rekening: " + norek + " <br> NIK: " + nik + " <br> " + response.decision;
                                //     document.getElementById("decis").style.display = "none";
                                // } else if (response.stdCode == "44") {
                                //     document.getElementById("decisgagal").innerHTML = "No Rekening: " + norek + " <br> NIK: " + nik + " <br> " + response.decision;
                                //     document.getElementById("decis").style.display = "none";
                                // } else if (response.stdCode == "66") {
                                //     document.getElementById("decisgagal").innerHTML = "No Rekening: " + norek + " <br> NIK: " + nik + " < br> " + response.decision;
                                //     document.getElementById("decis").style.display = "none";
                                // }
    
                                document.getElementById("decgagal").style.display = "none";
                            } catch (e) {
                                console.error("Error parsing JSON. Reason Why: ", e);
                                document.getElementById("decgagal").style.display = "block";
                                document.getElementById("dec").style.display = "none";
                                console.log("Response Text:", xhr.responseText);
                            }
                        } else {
                            console.error("Error:", xhr.status);
                        }
                    }
                };
    
                var data = JSON.stringify({ "norek": norek, "nik": nik });
                xhr.send(data);
            }
        }
    </script>
    
    
@endsection
