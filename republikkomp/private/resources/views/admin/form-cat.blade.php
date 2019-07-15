<!doctype html>
<html lang="en">

@include('partial.head-admin')
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('partial.nav-admin')
        @yield('nav-admin')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
    </div>
        <!-- ============================================================== -->
        @include('partial.sidebar')
        @yield('sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                        <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block" id="basicform">
                                        <h3 class="section-title">Form</h3>
                                        <p>Tambah Produk</p>
                                    </div>
                                    <div class="card">
                                        <h5 class="card-header">Isi Form</h5>
                                        <div class="card-body">
                                            <form method="POST" action="{{ url('table-categorie', []) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nama Kategori</label>
                                                    <input id="inputText3" name="nama" type="text" class="form-control" required>
                                                </div>
                                                <div class="custom-file mb-3">
                                                    <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                                                    <label class="custom-file-label"  for="customFile">Logo Kategori</label>
                                                </div>
                                                
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <button class="btn btn-primary" type="submit">Tambah Kategori</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <script src="{{asset('public/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('public/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('public/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('public/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('public/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('public/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('public/assets/libs/js/dashboard-ecommerce.js')}}"></script>
</body>