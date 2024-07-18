
@extends('layouts.apptopdf')
@section('content')

<center>
    <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
        <tr>
            <td width = '15'><img src="{{URL::asset('assets/img/logo.png')}}" alt="logo" width="150"></td>
            <td><h3 style="margin-left: 65px"><b>Formulir Permohonan Kredit Tanpa Agunan</b></h3></td>
        </tr>
    </table>
</center>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                {{-- <div class="card-body"> --}}
                    {{-- <div class="bg-gray-100"> --}}
                        <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="background-color: blue; padding: 5;"><center><label class="form-label mg-b-0" style="color: white;  font-weight: bolder;">Data Pribadi Pemohon</label></center></td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">NIK</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Token Registrasi</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->tokenreg }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Nama Sesuai KTP</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">NPWP</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->npwp_stone }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">No Handphone</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">No Telepon Rumah</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">________________</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Nama Gadis Ibu Kandung</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->mother_name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Tempat Lahir</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Tanggal Lahir</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Status Pernikahan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->marital_status }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Jumlah Tanggungan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->julah_tanggungan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Alamat</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">RT/RW</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">________________</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Desa</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->desa }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Kecamatan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Kabupaten/Kota</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->kabupatenkota }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Provinsi</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Kode Pos</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->kodepos }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Status Kepemilikan Hunian</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->housing }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Lama Kepemilikan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->los_year }} tahun {{ $data->los_month }} bulan</td>
                                </tr>
                            </tbody>
                        </table>
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
        <br>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                {{-- <div class="card-body"> --}}
                    {{-- <div class="bg-gray-100"> --}}
                        <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="background-color: blue; padding: 5"><center><label class="form-label mg-b-0" style="color: white;  font-weight: bolder;">Keluarga Tidak Serumah</label></center></td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Nama Saudara</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->nama_saudara }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Hubungan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->hubungan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">No Handphone Saudara</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->no_hp_saudara }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Alamat Saudara</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->alamat_saudara }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="background-color: blue; padding: 5"><center><label class="form-label mg-b-0" style="color: white;  font-weight: bolder;">Data Pekerjaan</label></center></td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Pekerjaan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->pekerjaan }}</td>
                                </tr>
                                @if($data->pekerjaan == 'Pengusaha')
                                    <tr>
                                        <td style="width: 33.3333%;">Bidang Usaha</td>
                                        <td style="width: 3.50874%;">:</td>
                                        <td style="width: 33.3333%;">{{ $data->bidang_usaha }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td style="width: 33.3333%;">Jabatan</td>
                                        <td style="width: 3.50874%;">:</td>
                                        <td style="width: 33.3333%;">{{ $data->jabatan }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td style="width: 33.3333%;">Nama Perusahaan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->nama_perusahaan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Lama Bekerja</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->lama_bekerja_tahun }} tahun {{ $data->lama_bekerja_bulan }} bulan</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Alamat Kantor</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->alamat_kantor }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Nomor Telepon Kantor</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->tel_kantor }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Sumber Penghasilan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->sumber_penghasilan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Penghasilan Perbulan</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->penghasilan_perbulan }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="background-color: blue; padding: 5"><center><label class="form-label mg-b-0" style="color: white;  font-weight: bolder;">Data Tambahan</label></center></td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Memiliki Kartu Kredit</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->creditcard }}</td>
                                </tr>
                                @if($data->creditcard == 'Tidak')
                                    <tr>
                                        <td style="width: 33.3333%;">Bank Penerbit</td>
                                        <td style="width: 3.50874%;">:</td>
                                        <td style="width: 33.3333%;"> - </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 33.3333%;">Lama Kepemilikan</td>
                                        <td style="width: 3.50874%;">:</td>
                                        <td style="width: 33.3333%;"> - </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 33.3333%;">Limit</td>
                                        <td style="width: 3.50874%;">:</td>
                                        <td style="width: 33.3333%;"> - </td>
                                    </tr>
                                @else
                                    @foreach($databank as $dat)
                                        <tr>
                                            <td style="width: 33.3333%;">Bank Penerbit</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 33.3333%;">{{ $dat->bank_penerbit }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 33.3333%;">Lama Kepemilikan</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 33.3333%;">{{ $dat->lama_kepemilikan_tahun }} tahun {{ $dat->lama_kepemilikan_bulan }} bulan</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 33.3333%;">Limit</td>
                                            <td style="width: 3.50874%;">:</td>
                                            <td style="width: 33.3333%;">{{ $dat->limit }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                        <br>
                        <table class="table" style="width: 100%; border-collapse: collapse;" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="background-color: blue; padding: 5"><center><label class="form-label mg-b-0" style="color: white;  font-weight: bolder;">Permohonan Pinjaman</label></center></td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">No Referensi Pinjaman</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->ref_no }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Produk Pinjaman</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->produk_pinjaman }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Jumlah Pinjaman</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->jumlah_pinjaman }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Jangka Waktu</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->jangka_waktu }} Bulan</td>
                                </tr>
                                <tr>
                                    <td style="width: 33.3333%;">Tujuan Pinjaman</td>
                                    <td style="width: 3.50874%;">:</td>
                                    <td style="width: 33.3333%;">{{ $data->tujuan_pinjaman }} </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <br>
                        <br>
                        
                                <p> Demikian permohonan ini saya ajukan, dengan ini saya menjamin semua informasi data dan dokumen yang 
                                    diberikan guna melengkapi permohonan ini adalah benar, oleh karenanya saya memberikan kuasa kepada 
                                    PT Bank Woori Saudara Indonesia 1906, Tbk untuk mendapatkan dan memeriksa seluruh informasi yang 
                                    diperlukan kepada siapapun dan pihak manapun. Apabila Permohonan ini ditolak,
                                    PT Bank Woori Saudara Indonesia 1906, Tbk tidak berkewajiban memberikan seluruh copy dokumen yang telah diberikan pemohon.
                                    Dengan ini saya menyatakan bersedia mematuhi segala ketentuan dan persyaratan yang telah/akan ditetapkan PT Bank Woori Saudara Indonesia 1906,Tbk berkenaan dengan permohonan pinjaman.
                                </p>

                                <br>
                                <br>
                                <br>

                                <table style="float: right;" border="0">
                                    <tbody>
                                        <tr>
                                            <td>_______________, _________________</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br />
                                <br>
                                    
                                <table style="width: 100%; float: right;" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 77.2589%;">Nama Petugas</td>
                                            <td style="width: 18.7411%; text-align: center;">Pemohon</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 77.2589%;">(__________)</td>
                                            <td style="width: 18.7411%; text-align: center;">(____________)</td>
                                        </tr>
                                    </tbody>
                                </table>
                       
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
