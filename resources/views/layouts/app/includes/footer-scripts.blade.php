
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <script type="text/javascript" src="{{URL::asset('frontend/assets/js/index.bundle.js?537a1bbd0e5129401d28')}}"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $(".alert").delay(5000).slideUp(300);
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

    </script>

    {{-- sweet alert --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script> --}}

    @stack('js')
