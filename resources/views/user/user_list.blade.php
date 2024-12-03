<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .page-title-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .table thead th {
            background-color: #f1f1f1;
            text-align: left;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-light container">
    <div id="layout-wrapper">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header  d-flex justify-content-between">
                                <h5 class="mb-0 text-black">User List</h5>
                                <a href="{{route('users.create')}}" class="mb-0 btn btn-secondary ">Add User</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 100px; font-size: 1rem;">SL</th>
                                                <th scope="col" style="font-size: 1rem;">Username</th>
                                                <th scope="col" style="font-size: 1rem;">Email</th>
                                                <th scope="col" style="font-size: 1rem;">Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index => $user)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <span class="font-weight-bold">{{ $user->name }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $user->email }}</span>
                                                    </td>
                                                    <td>
                                                        <span>••••••••</span> <!-- To keep password hidden -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <small class="text-muted">Last updated: {{ \Carbon\Carbon::now()->toFormattedDateString() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
