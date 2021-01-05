<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search From Dusun/ English/ Malay Word</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="{{ url('fonts/fontawesome-all.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <br />
    <h2 align="center">Search From Dusun/ English/ Malay Word</h2>
    <br />
    <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="15%">Kadazan</th>
                <th width="15%">Dusun</th>
                <th width="30%">Malay</th>
                <th width="40%">English</th>
            </tr>
            </thead>
        </table>
    </div>
    <br />
    <br />
    <div class="row">
        <div class="col-xl-4 offset-xl-0">
            <a href="{{ route('home') }}" class="btn btn-info" role="button" aria-pressed="true"><i class="fas fa-home"></i>&nbsp;Back to Home</a>
        </div>
    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function(){

        $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('sample2.getdicdata') }}",
            },
            columns: [
                {
                    data: 'Kadazan',
                    name: 'Kadazan'
                },
                {
                    data: 'Dusun',
                    name: 'Dusun'
                },
                {
                    data: 'Malay',
                    name: 'Malay'
                },
                {
                    data: 'English',
                    name: 'English'
                }
            ]
        });
    });
</script>
