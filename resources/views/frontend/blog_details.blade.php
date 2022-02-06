@extends('layouts.app')
@section('title') Blog Details @endsection
@section('content')

<section class="pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- breaddcrumb -->
                <!-- Breadcrumb -->
                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="index.html" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{route('blog')}}" class="breadcrumbs__url">Blog</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__url">Blog Details</a>
                    </li>
                </ul>
                <!-- end breadcrumb -->
            </div>
            <div class="col-md-8">
                <!-- content article detail -->
                <!-- Article Detail -->
                <div class="wrap__article-detail">
                    <div class="wrap__article-detail-title">
                        <h1>
                            These Are the 5 Big Tech Stories to Watch in 2017
                        </h1>
                        <h3>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, hic.
                        </h3>
                    </div>
                    <hr>
                    <div class="wrap__article-detail-info">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <figure class="image-profile">
                                    <img src="{{URL::asset('frontend/assets/images/placeholder/logo.jpg')}}" alt="">
                                </figure>
                            </li>
                            <li class="list-inline-item">

                                <span>
                                    by
                                </span>
                                <a href="#">
                                    john doe,
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize ml-1">
                                    descember 09, 2016
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize">
                                    in
                                </span>
                                <a href="#">
                                    business
                                </a>


                            </li>
                        </ul>
                    </div>

                    <div class="wrap__article-detail-image mt-4">
                        <figure>
                            <img src="{{URL::asset('frontend/assets/images/placeholder/800x500.jpg')}}" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="wrap__article-detail-content">
                        <div class="total-views">
                            <div class="total-views-read">
                                15.k
                                <span>
                                    views
                                </span>
                            </div>


                            <ul class="list-inline">
                                <span class="share">share on:</span>
                                <li class="list-inline-item">
                                    <a class="btn btn-social-o facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                        <span>facebook</span>
                                    </a>

                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-social-o twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                        <span>twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-social-o whatsapp" href="#">
                                        <i class="fa fa-whatsapp"></i>
                                        <span>whatsapp</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-social-o telegram" href="#">
                                        <i class="fa fa-telegram"></i>
                                        <span>telegram</span>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a class="btn btn-linkedin-o linkedin" href="#">
                                        <i class="fa fa-linkedin"></i>
                                        <span>linkedin</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <p class="has-drop-cap-fluid">
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One
                            day however a small line of blind text by the name of Lorem Ipsum decided to leave for
                            the far World of
                            Grammar.

                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language
                            ocean. A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <br>
                            <br>
                            The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                            Question Marks and
                            devious Semikoli, but the Little Blind Text didn’t listen. On her way she met a copy.
                            The copy warned the
                            Little Blind Text, that where it came from it would have been rewritten a thousand times
                            and everything that
                            was left from its origin would be the word “and” and the Little Blind Text should turn
                            around and return to
                            its own, safe country.

                            <br>
                            The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                            Question Marks and
                            devious Semikoli, but the Little Blind Text didn’t listen. On her way she met a copy.
                            The copy warned the
                            Little Blind Text, that where it came from it would have been rewritten a thousand times
                            and everything that
                            was left from its origin would be the word “and” and the Little Blind Text should turn
                            around and return to
                            its own, safe country.
                        </p>

                        <!-- Blockquote  -->
                        <blockquote class="block-quote">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at
                                its layout.
                            </p>
                            <cite>
                                Tom Cruise
                            </cite>
                        </blockquote>
                        <!-- Blockquote -->


                        <h5>How Tech Startup Survive Without Funding</h5>
                        <p>
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language
                            ocean. A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                        </p>
                    </div>


                </div>
                <!-- end content article detail -->

                <!-- tags -->
                <!-- News Tags -->
                <div class="blog-tags">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-tags">
                            </i>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                #property
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                #sea
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                #programming
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                #sea
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                #property
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end tags-->

                <!-- authors-->
                <!-- Profile author -->
                <div class="wrap__profile">
                    <div class="wrap__profile-author">
                        <figure>
                            <img src="{{URL::asset('frontend/assets/images/placeholder/80x80.jpg')}}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <div class="wrap__profile-author-detail">
                            <div class="wrap__profile-author-detail-name">author</div>
                            <h4>jhon doe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laboriosam ad
                                beatae itaque ea non
                                placeat officia ipsum praesentium! Ullam?</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social btn-social-o facebook ">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social btn-social-o twitter ">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social btn-social-o instagram ">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social btn-social-o telegram ">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social btn-social-o linkedin ">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end author-->

                <!-- comment -->
                <!-- Comment  -->
                <div id="comments" class="comments-area">
                    <h3 class="comments-title">2 Comments:</h3>

                    <ol class="comment-list">
                        <li class="comment">
                            <aside class="comment-body">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/80x80.jpg')}}" class="avatar" alt="image">
                                        <b class="fn">Sinmun</b>
                                        <span class="says">says:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <a href="#">
                                            <span>April 24, 2019 at 10:59 am</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="comment-content">
                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                        when an unknown
                                        printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>

                                <div class="reply">
                                    <a href="#" class="comment-reply-link">Reply</a>
                                </div>
                            </aside>

                            <ol class="children">
                                <li class="comment">
                                    <aside class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{URL::asset('frontend/assets/images/placeholder/80x80.jpg')}}" class="avatar" alt="image">
                                                <b class="fn">Sinmun</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>April 24, 2019 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since
                                                the 1500s, when an
                                                unknown printer took a galley of type and scrambled it to make a
                                                type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </aside>
                                </li>
                            </ol>
                        </li>

                        <li class="comment">
                            <aside class="comment-body">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/80x80.jpg')}}" class="avatar" alt="image">
                                        <b class="fn">Sinmun</b>
                                        <span class="says">says:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <a href="#">
                                            <span>April 24, 2019 at 10:59 am</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="comment-content">
                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                        when an unknown
                                        printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>

                                <div class="reply">
                                    <a href="#" class="comment-reply-link">Reply</a>
                                </div>
                            </aside>
                        </li>
                    </ol>

                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply</h3>

                        <form class="comment-form">
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span>
                                Required fields are marked
                                <span class="required">*</span>
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                    required="required"></textarea>
                            </p>
                            <p class="comment-form-author">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" id="author" name="name" required="required">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" id="email" name="email" required="required">
                            </p>
                            <p class="comment-form-url">
                                <label for="url">Website</label>
                                <input type="url" id="url" name="url">
                            </p>
                            <p class="comment-form-cookies-consent">
                                <input type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                    id="wp-comment-cookies-consent">
                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                    browser for the next
                                    span I comment.</label>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                            </p>
                        </form>
                    </div>
                </div>
                <!-- Comment -->
                <!-- end comment -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="single_navigation-prev">
                            <a href="#">
                                <span>previous post</span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single_navigation-next text-left text-md-right">
                            <a href="#">
                                <span>next post</span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="related-article">
                    <h4>
                        you may also like
                    </h4>

                    <div class="article__entry-carousel-three">
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Maecenas accumsan tortor ut velit pharetra mollis.
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Maecenas accumsan tortor ut velit pharetra mollis.
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Maecenas accumsan tortor ut velit pharetra mollis.
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Maecenas accumsan tortor ut velit pharetra mollis.
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Maecenas accumsan tortor ut velit pharetra mollis.
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="sticky-top">
                    <aside class="wrapper__list__article ">
                        <!-- <h4 class="border_section">Sidebar</h4> -->
                        <div class="mb-4">
                            <div class="widget__form-search-bar  ">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                            placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper__list__article-small">
                            <div class="mb-3">
                                <!-- Post Article -->
                                <div class="card__post card__post-list">
                                    <div class="image-sm">
                                        <a href="./card-article-detail-v1.html">
                                            <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" class="img-fluid" alt="">
                                        </a>
                                    </div>


                                    <div class="card__post__body ">
                                        <div class="card__post__content">

                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                            by david hall
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-dark text-capitalize">
                                                            descember 09, 2016
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h6>
                                                    <a href="./card-article-detail-v1.html">
                                                        6 Best Tips for Building a Good Shipping Boat
                                                    </a>
                                                </h6>
                                                <!-- <p class="d-none d-lg-block d-xl-block">
                Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                sollicitudin ut est. In fringilla dui dui.
            </p> -->

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <!-- Post Article -->
                                <div class="card__post card__post-list">
                                    <div class="image-sm">
                                        <a href="./card-article-detail-v1.html">
                                            <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" class="img-fluid" alt="">
                                        </a>
                                    </div>


                                    <div class="card__post__body ">
                                        <div class="card__post__content">

                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                            by david hall
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-dark text-capitalize">
                                                            descember 09, 2016
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h6>
                                                    <a href="./card-article-detail-v1.html">
                                                        6 Best Tips for Building a Good Shipping Boat
                                                    </a>
                                                </h6>
                                                <!-- <p class="d-none d-lg-block d-xl-block">
                Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                sollicitudin ut est. In fringilla dui dui.
            </p> -->

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <!-- Post Article -->
                                <div class="card__post card__post-list">
                                    <div class="image-sm">
                                        <a href="./card-article-detail-v1.html">
                                            <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" class="img-fluid" alt="">
                                        </a>
                                    </div>


                                    <div class="card__post__body ">
                                        <div class="card__post__content">

                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                            by david hall
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-dark text-capitalize">
                                                            descember 09, 2016
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h6>
                                                    <a href="./card-article-detail-v1.html">
                                                        6 Best Tips for Building a Good Shipping Boat
                                                    </a>
                                                </h6>
                                                <!-- <p class="d-none d-lg-block d-xl-block">
                Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                sollicitudin ut est. In fringilla dui dui.
            </p> -->

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <div class="article__category">
                                        travel
                                    </div>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu
                                        iaculis placerat sollicitudin ut
                                        est. In fringilla dui dui.
                                    </p>
                                    <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- social media -->
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">stay conected</h4>
                        <!-- widget Social media -->
                        <div class="wrap__social__media">
                            <a href="#" target="_blank">
                                <div class="social__media__widget facebook">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        19,243 fans
                                    </span>
                                    <span class="social__media__widget-name">
                                        like
                                    </span>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class="social__media__widget twitter">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        2.076 followers
                                    </span>
                                    <span class="social__media__widget-name">
                                        follow
                                    </span>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class="social__media__widget youtube">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-youtube"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        15,200 followers
                                    </span>
                                    <span class="social__media__widget-name">
                                        subscribe
                                    </span>
                                </div>
                            </a>

                        </div>
                    </aside>
                    <!-- End social media -->

                    <aside class="wrapper__list__article">
                        <h4 class="border_section">tags</h4>
                        <div class="blog-tags p-0">
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#">
                                        #property
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sea
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #programming
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sea
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #property
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #life style
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #technology
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #framework
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sport
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #game
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #wfh
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sport
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #game
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #wfh
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #framework
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </aside>

                    <aside class="wrapper__list__article">
                        <h4 class="border_section">newsletter</h4>
                        <!-- Form Subscribe -->
                        <div class="widget__form-subscribe bg__card-shadow">
                            <h6>
                                The most important world news and events of the day.
                            </h6>
                            <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Your email address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">sign up</button>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Advertise</h4>
                        <a href="#">
                            <figure>
                                <img src="{{URL::asset('frontend/assets/images/placeholder/500x400.jpg')}}" alt="" class="img-fluid">
                            </figure>
                        </a>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
