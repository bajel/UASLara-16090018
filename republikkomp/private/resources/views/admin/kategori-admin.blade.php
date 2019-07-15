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
        <!-- ============================================================== -->
    </div>
     @include('partial.sidebar')
     @yield('sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
 <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Kategori</h2>
                            <p class="pageheader-text">Tambah Kategori</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Kategori</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nama</th>   
                                                <th>foto</th>
                                                <th>aksi</th>
                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)

                                            <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->foto}}</td>
                                                    <td><a onClick="confirm('Delete entry?')" href="{{ url('cat-del', [$item->id]) }}"><button class="btn btn-primary" type="button" style="background-color:darkred">Hapus</button>
                                                        <a href="{{ url('table-categorie'.'/'.$item->id.'/edit', []) }} "> <button class="btn btn-primary" type="button" style="background-color:darkgreen">Update</button></a></td>      
                                                </tr>
                                              
                                            @endforeach
                                            
                                        </tbody>
                                            
                                        </tfoot>
                                    </table>
                                <br>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <a href="{{ url('table-categorie', ['create']) }}"><button class="btn btn-primary" type="submit">Tambah Kategori</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
            
  
                <!-- ============================================================== -->
                <!-- footer -->
                @include('partial.foot')
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
          <script src="{{asset('public/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('public/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/assets/libs/js/main-js.js')}}"></script>
 
</html>