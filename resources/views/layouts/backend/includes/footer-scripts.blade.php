<!-- Bootstrap JS -->
<script src="{{URL::asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{URL::asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/js/index3.js')}}"></script>
{{-- <script>
    new PerfectScrollbar('.best-selling-products');
    new PerfectScrollbar('.recent-reviews');
    new PerfectScrollbar('.support-list');
</script> --}}

{{-- <script src="{{URL::asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
 --}}


<script src="{{URL::asset('backend/assets/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/datatable/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{URL::asset('backend/assets/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/toaster/toastr.min.js')}}"></script>


<!--app JS-->
<script src="{{URL::asset('backend/assets/js/app.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".alert").delay(1000).slideUp(300);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-view').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img-tag").change(function () {
        readURL(this);
    });

    toastr.options.preventDuplicates = true;
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('js')

{{-- sweet alert --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script> --}}

