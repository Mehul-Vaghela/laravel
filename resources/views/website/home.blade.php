@extends('layouts.website')
@section('title')
    Mehul Vaghela
@endsection
@section('css')
@endsection
@section('content')
    <div class="header " style="background-image: url({{asset('/assets/img/bg3.jpeg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Basic Elements</h2>
                </div>

            </div>
        </div>
        <div class="section section-full-screen section-signup"
             style="background-image: url({{asset('/assets/img/city.jpg')}}); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="card card-signup">
                            <form class="form" method="" action="">
                                <div class="header header-primary text-center">
                                    <h4>GET IN TOUCH</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-divider">Or Be Classical</p>
                                <div class="content">

                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                    </div>

                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                        <input type="text" class="form-control" placeholder="Email...">
                                    </div>

                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">keyboard_arrow_right</i>
										</span>
                                        <textarea placeholder="Write Message..." class="form-control"></textarea>

                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Subscribe to newsletter
                                        </label>
                                    </div> -->
                                </div>
                                <div class="footer text-center">
                                    <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Send</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
@endsection