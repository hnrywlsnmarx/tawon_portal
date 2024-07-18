@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')					
<div class="left-content">				
    <h5 class="content-title mb-1">Adjusment KTA By Reference Number</h5>			
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">					
            <li class="breadcrumb-item"><a href="#">Adjusment KTA By Reference Number</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Show</li>					
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('adjustment.index') }}"> Back</a>
    </div>
</div>
@endsection('breadcrumb')
@section('content')
@if($checkTableScoring == 0)
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
    <form action="{{ route('adjustment.store') }}" method="POST">
    @csrf
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body" style="font-size: smaller;">
                        <div class="row row-xs align-items-center">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">NIK</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="hidden" class="form-control form-control-sm" required readonly value=" {{ session('nik') }}" style="background-color: white; border: none;" name="created_by">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $nik }}" style="background-color: white; border: none;" name="nik">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Token Registrasi</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $tokenreg }}" style="background-color: white; border: none;" name="tokenreg">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Reference Number</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $ref_no }}" style="background-color: white; border: none;" name="ref_no">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Nama Pemohon</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $namapemohon }}" style="background-color: white; border: none;" name="namapemohon">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Area Domisili</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $kabupatenkota }}" style="background-color: white; border: none;" name="kabupatenkota">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Produk KTA</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $produk_pinjaman }}" style="background-color: white; border: none;" name="produkkta"> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Jumlah Pengajuan  Pinjaman</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $jumlah_pinjaman }}" style="background-color: white; border: none;" name="jumlah_pinjaman"> 
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Total Score</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $totalscore }}" style="background-color: white; border: none;" name="totalscore">
                            </div>
                            @if($totalscore >= 801)
                                <div class="rekom" style="float: right; color: red; font-weight: bolder;">
                                    contoh: Tidak ada Rekomendasi adjust Jumlah Pengajuan Pinjaman
                                </div>
                            @elseif($totalscore < 801 && $totalscore > 601) 
                                <div class="rekom" style="float: right; color: red; font-weight: bolder;">
                                    contoh: Rekomendasi adjust jumlah pengajuan (misal) 10%
                                </div>
                            @else
                                <div class="rekom" style="float: right; color: red; font-weight: bolder;">
                                    contoh: Rekomendasi adjust jumlah pengajuan (misal) 30% atau (misal) auto reject
                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Adjustment Jumlah Pinjaman</label>
                            </div>
                            @if($totalscore >= 801)
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" style="background-color: white;" value="{{ $jumlah_pinjaman }}" id="adjustment_pinjaman" name="adjustment_pinjaman" readonly required> 
                                    <input type="hidden" class="form-control form-control-sm" id="adjustment_pinjaman_number" value="{{ $jumlah_pinjaman_number }}" name="adjustment_pinjaman_number" required>
                                </div>
                            @elseif($totalscore < 801 && $totalscore > 601) 
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" style="background-color: white;" id="adjustment_pinjaman" name="adjustment_pinjaman" onblur="formatRupiahLimit();" onkeyup="formatnumberlimit(this)" onfocus="formatnumberlimit(this)" required> 
                                    <input type="hidden" class="form-control form-control-sm" id="adjustment_pinjaman_number" name="adjustment_pinjaman_number" required>
                                </div>
                            @else
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" style="background-color: white;" id="adjustment_pinjaman" name="adjustment_pinjaman" onblur="formatRupiahLimit()" onkeyup="formatnumberlimit(this)" onfocus="formatnumberlimit(this)" required> 
                                    <input type="hidden" class="form-control form-control-sm" id="adjustment_pinjaman_number" name="adjustment_pinjaman_number" required>
                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Angsuran Perbulan setelah Adjustment</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="hidden" class="form-control form-control-sm"  readonly style="background-color: white;" id="jangka_waktu" value="{{ $jangka_waktu }}" name="jangka_waktu">
                                <input type="hidden" class="form-control form-control-sm"  readonly style="background-color: white;" id="bunga" value="{{ $bunga }}" name="bunga">
                                <input type="text" class="form-control form-control-sm" style="background-color: white;" id="angsuran_adjustment" name="angsuran_adjustment" readonly required>
                                <input type="hidden" class="form-control form-control-sm"  readonly style="background-color: white;" name="angsuran_adjustment_number">
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center ">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Cabang yang ditunjuk</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                 <select class="form-control form-control-sm" style="width: 120;" name="desired_branch" id="desired_branch" onchange="countAngsuran()" required>
                                     <option value=""> - Pilih cabang yang ditunjuk -</option>
                                        @foreach($region as $prod)
                                            <option value="{{ $prod->nama_kc }}">{{ $prod->nama_kc }}</option>
                                        @endforeach
                                 </select>
                            </div>
                             <input id="region" type="hidden" class="form-control" placeholder="Enter Captcha" required name="region">
                        </div>
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_approval"> 
                        <input type="hidden" class="form-control form-control-sm" value="0" required readonly style="background-color: white; border: none;" name="flag_disbursement"> 
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success mb-3" style="float: right">Proceed to Database</button>
            </div>
            <br>
            <br>
            <br>
    </form>
</div>
 @else
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body" style="font-weight: bolder;">
                <center>Sudah dilakukan Adjusment Oleh {{ $created_by }}</center>
            </div>
        </div>
    </div>
</div>
@endif
    <!-- /row -->

<script>
    function formatnumberlimit(objek) {

        const iddes = document.getElementById("desired_branch");
        const valdes = iddes.options[iddes.selectedIndex].value;
        a = objek.value;
        b = a.replace(/[^\d]/g,'');
        c = '';
        panjang = b.length;
        j = 0;
            
        for (i = panjang; i > 0; i--) {
            j = j + 1;
            if (((j % 3) == 1) && (j != 1)) {
                c = b.substr(i-1,1) + '' + c;
            } else {
                c = b.substr(i-1,1) + c; 
            }
            
        }        
        objek.value = c;    

        $('#desired_branch').prop('selectedIndex', valdes);
        // $('[name="adjustment_pinjaman"]').val(formLimit);
        $('[name="angsuran_adjustment"]').val("");
        // alert(valdes);
    }
</script>

<script>
    function formatRupiahLimit(){
        const valLimit = document.getElementById('adjustment_pinjaman').value;
        // alert(valLimit);
        const asliLimit = document.getElementById('adjustment_pinjaman_number').value = valLimit;
        const formatterLimit = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(valLimit);
        const iddes = document.getElementById("desired_branch");
        const valdes = iddes.options[iddes.selectedIndex].value = "";
        const formLimit = formatterLimit;
        // console.log(form)
        $('[name="adjustment_pinjaman"]').val(formLimit);
        // alert(valdes);
        
    }
</script>

<script type="text/javascript">
    function countAngsuran(){
        var bunga = document.getElementById("bunga").value;
        var perbunga = bunga/100;
        var bungaRate = perbunga/12;
        var idJangka = document.getElementById("jangka_waktu").value;
        // var valJangka = idJangka.options[idJangka.selectedIndex].value;
        var jml_pinjaman = document.getElementById("adjustment_pinjaman_number").value;
        var futureValue = 0;

        // alert(valJangka);

        // if(valJangka == '- Pilih Jangka Waktu -'){
        //     alert('- Pilih Jangka Waktu -');
        // } else {
            var pmt = ((jml_pinjaman - futureValue) * bungaRate / (1 - Math.pow((1+bungaRate), -idJangka)));
        // var angsuranFixed = 1000000;
            var toLocalePMT = pmt.toLocaleString("id-ID", {style:"decimal"});
            // new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(val);
            // console.log(toLocalePMT)
            $('[name="angsuran_adjustment"]').val(toLocalePMT);
            $('[name="angsuran_adjustment_number"]').val(pmt);
            
        // }
    }
</script>

@endsection