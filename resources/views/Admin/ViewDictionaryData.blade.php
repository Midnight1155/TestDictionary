@extends('layouts.app')

@section('content')
    <div class="container">
        <br />
        <h3 align="center">Dictionary Data</h3>
        <br />
        {{--<div align="right">
            <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
        </div>--}}
        <br />
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dictionary_table">
                <thead>
                <tr>
                    <th width="15%">Kadazan</th>
                    <th width="15%">Centre</th>
                    <th width="35%">Malay</th>
                    <th width="35%">English</th>
                </tr>
                </thead>
            </table>
        </div>
        <br />
        <br />
    </div>

<script>
    $(document).ready(function() {
        $('#dictionary_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('ViewData.getdata') }}",
            "columns":[
                { "data": "Kadazan" },
                { "data": "Centre" },
                { "data": "Malay" },
                { "data": "English" }
            ]
        });
    });
</script>

@endsection
