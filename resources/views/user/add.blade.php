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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h2 class="h3 mb-2 text-gray-800">User </h2> -->
                    <!-- <a href="{{'add_user'}}"><button class="btn btn-primary ml-50" style="margin-left:57em;">Create</button></a> -->
                    
                    <br><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
                        </div>
                        <div class="card-body">
<form action = "/create_user" method = "POST" class="form-group" style="width:70%; margin-left:15%;" enctype="multipart/form-data">
@csrf
  <div class="mt-4">
    <label class="form-group">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" required />
</div>

<div class="mt-4">
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" required />
</div>

<div class="mt-4">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" required />
</div>

<div class="mt-4">
<label>Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required />
</div>

    <div class="mt-4">
  <label>Role Name:</label>
  <select class="form-control" name="role2">
    <option value="Manager">Manager</option>
    <option value="TL">Team lead</option>
  </select>
</div>

  <div class="mt-4">
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
</div>
  </form>

<!-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
    <div class="mt-4">
        <x-jet-label for="terms">
            <div class="flex items-center">
                <x-jet-checkbox name="terms" id="terms"/>

                <div class="ml-2">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                    ]) !!}
                </div>
            </div>
        </x-jet-label>
    </div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-jet-button class="ml-4">
        {{ __('Register') }}
    </x-jet-button>
</div>
</form> -->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('include.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{'login'}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
 