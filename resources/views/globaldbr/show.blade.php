@extends('layouts.app')

@section('styles') 
    <link href="{{URL::asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
    <script src="{{URL::asset('assets/js/jquery-1.9.1.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/js/moment.js')}}"></script>
@endsection

@section('breadcrumb')					
<div class="left-content">
    <h4 class="content-title mb-1">DBR</h4>				
    <nav aria-label="breadcrumb">					
        <ol class="breadcrumb">				
            <li class="breadcrumb-item"><a href="#">DBR</a></li>					
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>					
    </nav>			
    <div class="pull-right mt-1">
        <a class="btn btn-sm btn-primary" href="{{ route('dbr.index') }}"> Back</a>
    </div>	
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
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <form action="{{ route('dbr.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body" style="font-size: smaller;">
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">NIK</label>
                            </div>
                            <div class="col-md-8 mg-t-3 mg-md-t-0">
                                <input type="hidden" class="form-control form-control-sm" required readonly value=" {{ session('nik') }}" style="background-color: white; border: none;" name="created_by">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $nik }}" style="background-color: white; border: none;" name="nik">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Token Registrasi</label>
                            </div>
                            <div class="col-md-8 mg-t-3 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $tokenreg }}" style="background-color: white; border: none;" name="tokenreg">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Reference Number</label>
                            </div>
                            <div class="col-md-8 mg-t-3 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $ref_no }}" style="background-color: white; border: none;" name="ref_no">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Nama Pemohon</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $namapemohon }}" style="background-color: white; border: none;" name="namapemohon">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Area Domisili</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $kabupatenkota }}" style="background-color: white; border: none;" name="kabupatenkota">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Pekerjaan</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $pekerjaan }}" style="background-color: white; border: none;" name="pekerjaan">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Penghasilan Perbulan</label>
                            </div>
                            <div class="col-md-8 mg-t-3 mg-md-t-0">
                                <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan }}" style="background-color: white; border: none;" name="penghasilan_perbulan">
                                {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Status BI Checking</label>
                            </div>
                            <div class="col-md-8 mg-t-3 mg-md-t-0">
                                <select class="form-control form-control-sm" style="width: 120;" name="status_bi_checking" id="status_bi_checking" required>
                                    <option value="" selected="true">- Pilih Opsi -</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                        <div id="forhonor">
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Last SLIK Position</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <input class="last_slik date form-control form-control-sm" id="last_slik" type="text" name="last_slik" required>		
                                    <input type="hidden" id="last_slik_hid" name="last_slik_hid" required>
                                    
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Nama Bank</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <select class="form-control form-control-sm" required style="width: 120;" name="nama_bank" id="nama_bank">
                                        <option value="0" selected="true">- Pilih Bank Penerbit -</option>
                                        @foreach($master_bank as $prod)
                                            @if($bank_penerbit == $prod->kode_bank)
                                                <option value="{{ $prod->kode_bank }}">{{ $prod->nama_bank }}</option>
                                            @else
                                                <option value="{{ $prod->kode_bank }}">{{ $prod->nama_bank }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Limit</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" id="limit" required name="limit" onblur="formatRupiahLimit()" onkeyup="formatnumberlimit(this)" onfocus="formatnumberlimit(this)">
                                    <input type="hidden" class="form-control form-control-sm" id="limit_number" required  name="limit_number">
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Balance</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" required name="balance" id="balance" onblur="formatRupiahBalance()" onkeyup="formatnumberbalance(this)" onfocus="formatnumberbalance(this)">
                                    <input type="hidden" class="form-control form-control-sm" required name="balance_number" id="balance_number">
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Fasilitas Pinjaman</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <select class="form-control form-control-sm" style="width: 120;" name="credit_facility" id="credit_facility" onchange="resetField()" required>
                                        <option value="0" selected="true">- Pilih Opsi -</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Personal Loan">Personal Loan</option>
                                        <option value="Invesment Loan">Invesment Loan</option>
                                        <option value="Housing Loan">Housing Loan</option>
                                        <option value="Car Loan">Car Loan</option>
                                        <option value="Working Capital">Working Capital</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Rate*</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <small style="font-weight: bolder; color: blue;">hanya inputkan angka, tanpa %</small>
                                    <input type="text" class="form-control form-control-sm" required  name="rate" id="rate">
                                    <input type="hidden" class="form-control form-control-sm" required  name="rate_number" id="rate_number">
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-7">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Maturity</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <input class="maturity date form-control form-control-sm" id="maturity" type="text" name="maturity" required>		
                                    <input type="hidden" id="maturity_hid" name="maturity_hid" required>
                                    
                                    
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Installment</label>
                                </div>
                                <div class="col-md-8 mg-t-3 mg-md-t-0">
                                    <input type="text" class="form-control form-control-sm" required  name="installment" id="installment" readonly>
                                    <input type="hidden" class="form-control form-control-sm" required  name="installment_number" id="installment_number">
                                    {{-- <input type="text" class="form-control form-control-sm" required readonly value="{{ $penghasilan_perbulan_number }}" style="background-color: white; border: none;" name="penghasilan_perbulan_number"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-7">
                            <button id="btncal" type="button" class="btn btn-sm btn-dark" onclick="calculateDBR()" style="float: left;"> Calculate DBR</button>
                        </div>
                        <button type="submit" class="btn btn-sm btn-danger" style="float: right;"> Proceed to Database</button>
                    </div>
                </div>     
            </form> 
        </div>
        {{-- form 1 to 3 --}}
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body" style="font-size: smaller;">
                    <u class="mb-3">Data DBR</u>
                    <table class="table table-bordered table-hover mb-0 text-md-nowrap border" style="font-size: smaller;">
                        <tr style="font-weight: bolder; background-color: rgb(160, 180, 237);">
                            <th>Last SLIK Position</th>
                            <th>Bank </th>
                            <th>Limit</th>
                            <th>Balance</th>
                            <th>Credit Facility</th>
                            {{-- <th>Rate</th> --}}
                            <th>Maturity</th>
                            <th>Installment</th>
                            <th>Created By</th>
                            <th width="150">Action</th>
                        </tr>
                        @foreach($dbr as $db)
                        <tr>
                            <td><input type="text" style="border: 0" name="tbl_last_slik" id="tbl_last_slik" value="{{ $db->last_slik }}"></td>
                            <td>{{ $db->nama_bank }}</td>
                            <td><input type="text" style="border: 0" name="tbl_limit_number" id="tbl_limit_number" value="{{ $db->limit }}"></td>
                            <td><input type="text" style="border: 0" name="tbl_balance_number" id="tbl_balance_number" value="{{ $db->balance }}"></td>
                            <td>{{ $db->credit_facility }}</td>
                            {{-- <td>{{ $db->rate }}</td> --}}
                            <td><input type="text" style="border: 0" name="tbl_maturity" id="tbl_maturity" value="{{ $db->maturity }}"></td>
                            <td><input type="text" style="border: 0" name="tbl_installment" id="tbl_installment" value="{{ $db->installment }}"><input type="hidden" style="border: 0" name="tbl_installment_number" id="tbl_installment_number" value="{{ $db->installment_number }}"></td>
                            <td>{{ $db->created_by }}</td>
                            <td>
                                <form action="{{ route('hapusdbr',$db->id ) }}" method="POST">
                                    <a class="btn btn-sm btn-warning" style="float: left;" href="{{ route('dbr.edit', $db->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-danger" style="float: right">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>    

@if($dbracc == 0)
    <form action="{{ route('storeacc') }}" method="POST">
        @csrf
@else
    <form action="{{ route('updateacc', $ref_no) }}" method="POST">
        {{-- @method('PUT') --}}
        @csrf
@endif
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body" style="font-size: smaller;">
                <div class="row row-xs align-items-center mg-b-7">
                    <button type="submit" class="btn btn-sm btn-danger mb-3"> Proceed Accumulation to Database</button>
                        <input type="hidden" class="form-control form-control-sm" required readonly value=" {{ session('nik') }}" style="background-color: white; border: none;" name="created_by">
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $nik }}" style="background-color: white; border: none;" name="nik">
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $tokenreg }}" style="background-color: white; border: none;" name="tokenreg">
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $ref_no }}" style="background-color: white; border: none;" name="ref_no">
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $namapemohon }}" style="background-color: white; border: none;" name="namapemohon">
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $kabupatenkota }}" style="background-color: white; border: none;" name="kabupatenkota">    
                        <input type="hidden" class="form-control form-control-sm" required readonly value="{{ $pekerjaan }}" style="background-color: white; border: none;" name="pekerjaan">
                <table class="table table-bordered table-hover" style="width: 100%; border-collapse: collapse;" border="0">
                    <tr style="background-color: rgb(248, 249, 232); font-weight: bolder;">
                        <td style="border: none;" colspan="8"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none;" >Total Installment</td>
                        <td>Rp <input type="text" style="background-color:rgb(248, 249, 232); border: none;" name="total_installment" value="{{ number_format($suminstallment) }}" required></td>
                    </tr>
                    <tr style="background-color: rgb(248, 249, 232); font-weight: bolder;">
                        <td style="border: none;" colspan="8"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none;">DBR Existing</td>
                        <td><input required type="text" style="background-color:rgb(248, 249, 232); border: none; width: 40px;" name="dbr_existing" value="{{ round(($suminstallment/$penghasilan_perbulan_number)*100, 2) }}">%</td>
                    </tr>
                    <tr style="background-color: rgb(248, 249, 232); font-weight: bolder;">
                        <td style="border: none;" colspan="8"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none">New KTA Installment</td>
                        <td><input type="text" style="background-color:rgb(248, 249, 232); border: none;" name="angsuran_kta" value="{{ $angsuran_perbulan }}" required></td>
                    </tr>
                    <tr style="background-color: rgb(248, 249, 232); font-weight: bolder;">
                        <td style="border: none;" colspan="8"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none;">New DBR</td>
                        <td><input required type="text" style="background-color:rgb(248, 249, 232); border: none; width: 40px;" name="new_dbr" value="{{ round(($suminstallment+$angsuran_perbulan_number)/($penghasilan_perbulan_number)*100, 2) }}">%</td>
                    </tr>
                    <tr style="background-color: rgb(248, 249, 232); font-weight: bolder;">
                        <td style="border: none;" colspan="8"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="border: none;"></td>
                        <td style="text-align: right; border: none;">DSR KTA</td>
                        <td><input required type="text" style="background-color:rgb(248, 249, 232); border: none; width: 40px;" name="dsr_kta" value="{{ round(($angsuran_perbulan_number/$penghasilan_perbulan_number)*100, 2) }}">%</td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
</div>
</form>

<script type="text/javascript">
    $('#maturity').datepicker({  
       format: 'dd-mm-yyyy',
        todayHighlight: true
     });

    //  $('.to_date').datepicker({  
    //     format: 'dd-mm-yyyy',
    //     todayHighlight: true,
    //  });

     $('#maturity').on('changeDate', function(e){
        $(this).next('input[name=maturity_hid]').val(moment(e.date).format('YYYY-MM-DD'));
        
     });

    //  $('.to_date').on('changeDate', function(e){
    //     $(this).next('input[type=hidden]').val(moment(e.date).format('YYYYMMDD'));
    //  });

    $('#last_slik').datepicker({  
       format: 'dd-mm-yyyy',
        todayHighlight: true
     });

    //  $('.to_date').datepicker({  
    //     format: 'dd-mm-yyyy',
    //     todayHighlight: true,
    //  });

     $('#last_slik').on('changeDate', function(e){
        $(this).next('input[name=last_slik_hid]').val(moment(e.date).format('YYYY-MM-DD'));
        
     });

    //  $('.to_date').on('changeDate', function(e){
    //     $(this).next('input[type=hidden]').val(moment(e.date).format('YYYYMMDD'));
    //  });
     
</script>

<script>
    function formatRupiahLimit(){
        const valLimit = document.getElementById('limit').value;
        const asliLimit = document.getElementById('limit_number').value = valLimit;
        const formatterLimit = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(valLimit);
        var formLimit = formatterLimit;
        // console.log(form)
        $('[name="limit"]').val(formLimit);
}
</script>

<script>
    function formatRupiahBalance(){
        const valBalance = document.getElementById('balance').value;
        const asliBalance = document.getElementById('balance_number').value = valBalance;
        const formatterBalance = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(valBalance);
        var formBalance = formatterBalance;
        // console.log(form)
        $('[name="balance"]').val(formBalance);
}
</script>

<script>
    function formatnumberlimit(objek) {
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
    }
</script>

<script>
    function formatnumberbalance(objek) {
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
    }
</script>

<script>
    function calculateDBR(){
        var valFacility = document.getElementById('credit_facility').value;
        const valBalance = document.getElementById('balance_number').value;
        const valLimit = document.getElementById('limit_number').value;
        const baseBalance = 0.1;
        const baseLimit = 0.01;
        const valSlik = document.getElementById('last_slik').value;
        const valBan = document.getElementById('nama_bank').value;
        const valLim = document.getElementById('limit').value;
        const valBal = document.getElementById('balance').value;
        const valCred = document.getElementById('credit_facility').value;
        const valRat = document.getElementById('rate').value;
        const valMat = document.getElementById('maturity').value;

        if(valSlik == ''){
            alert('Isi Posisi Terakhir SLIK');
        } else if(valBan == ''){
            alert('Isi Nama Bank');
        } else if(valLim == ''){
            alert('Isi Limit');
        } else if(valBal == ''){
            alert('Isi Balance');
        } else if(valCred == ''){
            alert('Isi Fasilitas Pinjaman')
        } else if(valRat == ''){
            alert('Isi Rate');
        } else if(valMat == ''){
            alert('Isi Maturity');
        } else {
            if(valFacility == 'Credit Card'){
                const installment = valBalance*baseBalance;
                $('[name="installment_number"]').val(installment);
                const formatterBalance = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(installment);
                $('[name="installment"]').val(formatterBalance);

            } else if(valFacility == 'Working Capital'){
                const installment = valLimit*baseLimit;
                $('[name="installment_number"]').val(installment);
                const formatterLimit = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(installment);
                $('[name="installment"]').val(formatterLimit);
            } else {
                const valLastSlik = document.getElementById('last_slik_hid').value;
                const dateSlik = new Date(valLastSlik);
                const valMaturity = document.getElementById('maturity_hid').value;
                const dateMaturity = new Date(valMaturity);

                const tglSlik = dateSlik.getDate();
                const tglMaturity = dateMaturity.getDate();

                const valBalance = document.getElementById('balance_number').value;
                const futureValue = 0;
                const valRate = document.getElementById('rate').value;
                const realRate = (valRate/100)/12;
                $('[name="rate_number"]').val(realRate);

                if(tglSlik < 15){
                    const datediff = Math.floor((dateMaturity - dateSlik)/2628000000)+2;
                    const pmt = ((valBalance - futureValue) * realRate / (1 - Math.pow((1 + realRate), -datediff)));
                    // const toLocalePmt = pmt.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    const toLocalePmt = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(pmt);
                    $('[name="installment"]').val(toLocalePmt);
                    $('[name="installment_number"]').val(pmt);

                } else {
                    const datediff = Math.floor((dateMaturity - dateSlik)/2628000000)+1;
                    const pmt = ((valBalance - futureValue) * realRate / (1 - Math.pow((1 + realRate), -datediff)));
                    // const toLocalePmt = pmt.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    const toLocalePmt = new Intl.NumberFormat('id-ID', { style: 'decimal' }).format(pmt);
                    $('[name="installment"]').val(toLocalePmt);
                    $('[name="installment_number"]').val(pmt);
                }
            }  
        }   
    }
</script>

<script>
    function resetField(){
        $('[name="installment"]').val(0);
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#status_bi_checking").change(function(){
            if($(this).val() == "Ada"){
                document.getElementById("forhonor").style.display = "block";
                $('[name="last_slik"]').val("");
                document.getElementById("nama_bank").value = "";
                $('[name="limit"]').val("");
                $('[name="balance"]').val("");
                document.getElementById("credit_facility").value = "";
                $('[name="rate"]').val("");
                $('[name="maturity"]').val("");
                $('[name="installment"]').val("");

                document.getElementById("last_slik").readOnly = false;
                // document.getElementById("nama_bank").disabled = false;
                document.getElementById("limit").readOnly = false;
                document.getElementById("balance").readOnly = false;
                // document.getElementById("credit_facility").disabled = false;
                document.getElementById("rate").readOnly = false;
                document.getElementById("maturity").readOnly = false;
                document.getElementById("installment").readOnly = false;
                document.getElementById("btncal").disabled = false;
                
            } else if($(this).val() == "Tidak Ada"){
                document.getElementById("forhonor").style.display = "none";
                $('[name="last_slik"]').val(0);
                $('[name="last_slik_hid"]').val(0);
                document.getElementById("nama_bank").value = 0;
                $('[name="limit"]').val(0);
                $('[name="limit_number"]').val(0);
                $('[name="balance"]').val(0);
                $('[name="balance_number"]').val(0);
                document.getElementById("credit_facility").value = 0;
                $('[name="rate"]').val(0);
                $('[name="maturity"]').val(0);
                $('[name="maturity_hid"]').val(0);
                $('[name="installment"]').val(0);
                $('[name="installment_number"]').val(0);

                document.getElementById("last_slik").readOnly = true;
                // document.getElementById("nama_bank").disabled = true;
                document.getElementById("limit").readOnly = true;
                document.getElementById("balance").readOnly = true;
                // document.getElementById("credit_facility").disabled = true;
                document.getElementById("rate").readOnly = true;
                document.getElementById("maturity").readOnly = true;
                document.getElementById("installment").readOnly = true;
                document.getElementById("btncal").disabled = true;
            }
            
        });
    });
</script>

@endsection