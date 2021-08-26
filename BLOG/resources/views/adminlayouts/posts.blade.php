@extends('adminlayouts.layout.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>İsim-Soyisim</th>
                                <th>Email</th>
                                <th>Tür</th>
                                <th>Mesaj</th>
                                <th>Gönderim Tarihi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>İsim-Soyisim</th>
                                <th>Email</th>
                                <th>Tür</th>
                                <th>Mesaj</th>
                                <th>Gönderim Tarihi</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert" id="error_div">
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>


                    @endforeach
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
