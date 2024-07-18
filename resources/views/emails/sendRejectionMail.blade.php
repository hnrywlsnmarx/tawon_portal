
<!DOCTYPE html>
<html>
<head>
    <title>Bank Woori Saudara</title>
</head>
<body>
    <h3><u>{{ $details['title'] }}</u></h3>
    {{-- <h5>No KTP: {{ $details['nik'] }}</h5>
    <h5>Reference Number: {{ $details['ref_no'] }}</h5>
    <h5>Nama Nasabah: {{ $details['namapemohon'] }}</h5>
    <h5>Jumlah Pengajuan Pinjaman: {{ $details['jumlah_pinjaman'] }}</h5>
    <h5>Jumlah Penyesuaian Pinjaman: {{ $details['adjustment_pinjaman'] }}</h5>
    <h5>Jangka Waktu: {{ $details['jangka_waktu'] }}</h5>
    <h5>Angsuran Perbulan: {{ $details['angsuran_perbulan'] }}</h5> --}}

    <table style="width: 100%; height: 139px;" width="46" border="0">
        <tbody>
            <tr>
                <td style="width: 34%;">No KTP</td>
                <td style="width: 10%;">:</td>
                <td style="width: 59%;">{{ $details['nik'] }}</td>
            </tr>
            <tr>
                <td style="width: 34%;">Referensi Number</td>
                <td style="width: 10%;">:</td>
                <td style="width: 59%;">{{ $details['ref_no'] }}</td>
            </tr>
            <tr>
                <td style="width: 34%;">Nama Nasabah</td>
                <td style="width: 10%;">:</td>
                <td style="width: 59%;">{{ $details['namapemohon'] }}</td>
            </tr>
        </tbody>
    </table>
        <!-- DivTable.com -->
        <!-- DivTable.com -->

    <p>{{ $details['body'] }}</p>
    <br>
   
    <p>PT Bank Woori Saudara Indonesia 1906, Tbk</p>
</body>
</html>