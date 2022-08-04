<!DOCTYPE html>
<html lang="en">


@include('include.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{Auth::user()->name; }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @include('include.sidebar')

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        @include('include.navbar');

                    </ul>

                </nav>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
    </div>
    <div class="card-body">
<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$user['id']}}" />  
<div class="mt-4">
    <label class="form-group">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$user['name'] }}" required />
</div>

<div class="mt-4">
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{$user['email'] }}" required />
</div>

<div class="mt-4">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="{{$user['mobile'] }}" required />
</div>



    <div class="mt-4">
  <label>Role Name:</label>
  <select class="form-control" name="role2" value="{{$user['role'] }}">
    <option value="Manager">Manager</option>
    <option value="TL">Team lead</option>
  </select>
</div>

<div class="mt-4">
    <button type="submit"  value = "Add student" class="btn btn-primary">Update</button>
</div>

</form>

</div>
</div>

</div>
@include('include.footer')
</div>


<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assests/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assests/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assests/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assests/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assests/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assests/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assests/js/demo/datatables-demo.js')}}"></script>

</body>

</html>