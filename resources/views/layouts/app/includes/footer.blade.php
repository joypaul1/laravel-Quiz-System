<section class="wrapper__section p-0">
    <div class="wrapper__section__components">
        <!-- Footer -->
        <footer>
            {{-- <div class="wrapper__footer bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="wrapper__footer-logo text-center">
                                <a href="#">
                                    <figure class="mb-4">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/logo.jpg')}}" alt="" class="img-fluid logo-footer">
                                    </figure>
                                </a>

                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia,
                                    there live the blind texts.
                                </p>
                                <p class="mb-0">
                                    <button class="btn btn-social btn-social-o facebook mr-1">
                                        <i class="fa fa-facebook-f"></i>
                                    </button>
                                    <button class="btn btn-social btn-social-o twitter mr-1">
                                        <i class="fa fa-twitter"></i>
                                    </button>

                                    <button class="btn btn-social btn-social-o linkedin mr-1">
                                        <i class="fa fa-linkedin"></i>
                                    </button>
                                    <button class="btn btn-social btn-social-o instagram mr-1">
                                        <i class="fa fa-instagram"></i>
                                    </button>

                                    <button class="btn btn-social btn-social-o youtube mr-1">
                                        <i class="fa fa-youtube"></i>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Footer bottom -->
            <div class="bg__footer-bottom bg-light">
                <div class="container">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-6">
                            <span class="text-dark">
                                © {{ date('Y') }} {{config('app.company')}}
                            </span>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="{{route('home')}}" class="text-dark ">
                                        Home
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</section>
