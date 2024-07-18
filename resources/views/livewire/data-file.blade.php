<div>
    <table class="table table-hover mb-0 text-md-nowrap border">
    <thead>
        <tr>
            <th>Loan App No</th>
            <th>CIF</th>
            <th>KTP</th>
            <th>NAMA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datafiles as $datafile)
       
        <tr>
            <th scope="row">{{ $datafile->loan_app_no }}</th>
            <td>{{ $datafile->no_cif }}</td>
            <td>{{ $datafile->no_ktp }}</td>
            <td>{{ $datafile->nama_debitur }}</td>
        </tr>
        @endforeach
    
    </tbody>
</table>

    {{ $datafiles->links() }}
</div>