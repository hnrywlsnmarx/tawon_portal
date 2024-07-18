<div>
    <table class="table table-hover mb-0 text-md-nowrap border">
    <thead>
        <tr>
            <th>Loan App No</th>
            <th>File</th>
            <th>Branch</th>
            <th>Alias</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detailfiles as $detailfile)
       
        <tr>
            <th scope="row">{{ $detailfile->loan_app_no }}</th>
            <td>{{ $detailfile->file }}</td>
            <td>{{ $detailfile->branch_dir }}</td>
            <td>{{ $detailfile->alias }}</td>
        </tr>
        @endforeach
    
    </tbody>
</table>

    {{ $detailfiles->links() }}
</div>