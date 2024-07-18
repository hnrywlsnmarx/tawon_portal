@extends('layouts.app')


<link href="{{URL::asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
<script src="{{URL::asset('assets/js/jquery-1.9.1.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/moment.js')}}"></script>

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
        /* animation: fadeOut 7s forwards; */
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
            {{-- <form action="{{ route('eform.store') }}" method="POST"> --}}
                <form id="apiForm" action="#" method="post">
                    @csrf  
                    <div class="row" style="font-size: smaller;" id="eformjob">
                        <div class="col-7">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="">
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">NIK</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="nik" id="nik" class="form-control form-control-sm" required placeholder="NIK"> 
                                                <input type="hidden" name="userAgent" id="userAgent" class="form-control form-control-sm" value="{{ session('nik') }}" required placeholder="NIK">  
                                                <input type="hidden" name="token" id="token" class="form-control form-control-sm" value="{{ $token }}" required placeholder="NIK">  
                                                <input type="hidden" name="auth" id="auth" class="form-control form-control-sm" value="{{ $auth }}" required placeholder="NIK">  
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Nomor Rekening</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="norek" id="norek" class="form-control form-control-sm" required placeholder="Nomor Rekening">   
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Status Karyawan</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control form-control-sm" required name="status_emp" id="status_emp">
                                                    <option value="">- Pilih -</option>
                                                    <option value="1">Permanent</option>      
                                                    <option value="2">Contract</option>      
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Industri Perusahaan</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control form-control-sm" required name="condition" id="condition">
                                                    <option value="">- Pilih Industri -</option>
                                                    @foreach($ind as $comp)
                                                        <option value="{{ $comp->kode_bidang_usaha }}">{{ $comp->nama_bidang_usaha }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Lama Bekerja</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="collateral_year" id="collateral_year" class="form-control form-control-sm" required placeholder="Tahun">
                                            </div>
                                            <div class="col-md-2">
                                                tahun
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="collateral_month" id="collateral_month" class="form-control form-control-sm" required placeholder="Bulan">
                                            </div>
                                            <div class="col-md-2">
                                                bulan
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Penghasilan Perbulan</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="capacity" id="capacity" class="form-control form-control-sm" required placeholder="Penghasilan Perbulan">
                                            </div>
                                            <input id="ip_address" type="hidden" class="form-control" name="ip_address" value="{{ Request::getClientIp(true) }}" required autocomplete="ip_address" autofocus>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Penghasilan di Luar Gaji</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="capital" id="capital" class="form-control form-control-sm" required placeholder="Penghasilan di Luar Gaji">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-2">
                                                <label class="form-label">Rekomendasi Perusahaan</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control form-control-sm" required name="character" id="character">
                                                    <option value="">- Pilih -</option>
                                                    <option value="1">Ya</option>      
                                                    <option value="2">Tidak</option>      
                                                </select>
                                            </div>
                                        </div>
                                        <div id="btnuhuydiv">
                                            <button type="button" class="btn btn-dark btn-sm" onclick="submitForm1()">Submit</button>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div id="loader" class="loader" style="display: none;"></div>    
                            <center><p id="dec" class="dec" style="display:none;">Sukses</p></center>
                            <center>
                                <p id="decis" style="background-color: darkcyan; color: #fff;"></p>
                                <p id="decisgagal" style="background-color: #9e0404; color: #fff;"></p>
                            </center>
                            {{-- <center> --}}
                                <pre id="decgagal" class="decgagal" style="display:none;"></pre>
                            {{-- </center> --}}
                            <div class="row">
                                <div class="col-6">
                                    <pre id="jsonreq" class="jsonreq" style="display: none; background-color: #fff; color: #000;">Request <br></pre>
                                </div>
                                <div class="col-6">
                                    <pre id="jsonres" class="jsonres" style="display: none; background-color: #fff; color: #000;">Response <br></pre>
                                </div>
                            </div>
                        </div>
                    </div>  
                </form>
<script>
        function submitForm1() {
            document.getElementById("loader").style.display = "block";
            document.getElementById("decis").style.display = "none";
            document.getElementById("decisgagal").style.display = "none";
            document.getElementById("decgagal").style.display = "none";

            var ua = document.getElementById("userAgent").value;
            var token = document.getElementById("token").value;
            var auth = document.getElementById("auth").value;

            var formData = {
                nik: $("#nik").val(),
                norek: $("#norek").val(),
                status_emp: $("#status_emp").val(),
                condition: $("#condition").val(),
                collateral_year: $("#collateral_year").val(),
                collateral_month: $("#collateral_month").val(),
                capacity: $("#capacity").val(),
                capital: $("#capital").val(),
                character: $("#character").val()
            };

            var xhr = new XMLHttpRequest();
            var apiUrl = "http://172.28.100.78:8181//tawon_api/servicestawon";

            xhr.open("POST", apiUrl, true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.setRequestHeader("User-Agent", ua);
            xhr.setRequestHeader("Authorization", auth);
            xhr.setRequestHeader("access_token", token);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    document.getElementById("loader").style.display = "none";

                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            console.log("cek respon: ", response);
                            if (response.rc && response.rc == "99") {
                                document.getElementById("decgagal").style.display = "block";
                                document.getElementById("decgagal").innerHTML = JSON.stringify(response, null, 2);
                            } else {
                                var logrequest = response.logrequest;
                                var responsescore = response.responsescore;
                                document.getElementById("jsonreq").style.display = "block";
                                document.getElementById("jsonreq").innerHTML = JSON.stringify(logrequest, null, 2);
                                document.getElementById("jsonres").style.display = "block";
                                document.getElementById("jsonres").innerHTML = JSON.stringify(responsescore, null, 2);

                                if (responsescore.stdCode == "00") {
                                    document.getElementById("decis").innerHTML = "Decision for Account Number: " + formData.norek + " and NIK " + formData.nik + " is " + responsescore.decision;
                                    document.getElementById("decis").style.display = "block";
                                } else {
                                    document.getElementById("decisgagal").innerHTML = "No Rekening: " + formData.norek + " <br> NIK: " + formData.nik + " <br> " + responsescore.decision;
                                    document.getElementById("decisgagal").style.display = "block";
                                }
                            }
                        } catch (e) {
                            console.error("Error Akses: ", "Tidak ada hak akses!");
                            // console.error("Error parsing JSON. Reason: ", e);
                            document.getElementById("decgagal").style.display = "block";
                            // document.getElementById("decgagal").innerHTML = "Error parsing JSON. Reason: " + e.message;
                            document.getElementById("decgagal").innerHTML = "Error Akses: Tidak ada hak akses!";
                            console.log("Response Text:", xhr.responseText);
                        }
                    } else {
                        console.error("Error:", xhr.status);
                        document.getElementById("decgagal").style.display = "block";
                        document.getElementById("decgagal").innerHTML = "Error: " + xhr.status;
                    }
                }
            };

            xhr.send(JSON.stringify(formData));
        }
function submitForm2() {
    document.getElementById("loader").style.display = "block";
    document.getElementById("decis").style.display = "none";
    document.getElementById("decisgagal").style.display = "none";

        var formData = {
            nik: $("#nik").val(),
            norek: $("#norek").val(),
            status_emp: $("#status_emp").val(),
            condition: $("#condition").val(),
            collateral_year: $("#collateral_year").val(),
            collateral_month: $("#collateral_month").val(),
            capacity: $("#capacity").val(),
            capital: $("#capital").val(),
            character: $("#character").val()
        };

            // Fetch token data
        $.ajax({
            url: 'http://172.28.97.167:888/token/get_token_data/some_client_id',
            method: 'GET',
            success: function (tokenData) {
                var xhr = new XMLHttpRequest();
                var apiUrl = "http://172.28.97.167:888//tawon_api/servicestawon/";

                xhr.open("POST", apiUrl, true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.setRequestHeader("User-Agent", tokenData.client_id);
                xhr.setRequestHeader("Authorization", tokenData.client_key);
                xhr.setRequestHeader("access_token", tokenData.access_token);

                xhr.onreadystatechange = function () {    
                    if (xhr.readyState === 4) {    
                        document.getElementById("loader").style.display = "none";    
                        if (xhr.status === 200) {    
                            try {    
                                var response = JSON.parse(xhr.responseText);
                                var logrequest = response.logrequest;
                                var responsescore = response.responsescore;
                                document.getElementById("jsonreq").style.display = "block";
                                document.getElementById("jsonreq").innerHTML = JSON.stringify(logrequest, null, 2);
                                document.getElementById("jsonres").style.display = "block";
                                document.getElementById("jsonres").innerHTML = JSON.stringify(responsescore, null, 2);

                                if (responsescore.stdCode == "00") {
                                    document.getElementById("decis").innerHTML = "Decision for Account Number: " + formData.norek + " and NIK " + formData.nik + " is " + responsescore.decision;    
                                    document.getElementById("decis").style.display = "block";    
                                } else {    
                                    document.getElementById("decisgagal").innerHTML = "No Rekening: " + formData.norek + " <br> NIK: " + formData.nik + " <br> " + responsescore.decision;
                                    document.getElementById("decisgagal").style.display = "block";    
                                }                                    
                            } catch (e) {
                                console.error("Error parsing JSON. Reason: ", e);
                                document.getElementById("decgagal").style.display = "block";
                                console.log("Response Text:", xhr.responseText);   
                            }
                        } else {
                            console.error("Error:", xhr.status);
                        }   
                    }    
                };    
                xhr.send(JSON.stringify(formData));  
            },
            error: function (xhr, status, error) {
                console.error("Failed to fetch token data:", error);    
            }        
        });            
    }


</script>    

@endsection

 