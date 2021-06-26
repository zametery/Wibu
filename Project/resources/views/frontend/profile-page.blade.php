@extends('frontend/layouts.template-profile')

@section('header')
    Profile Page - Novel Inspiration
@endsection

@section('content')
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">

            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                   <div class="profile">
                        <div class="avatar">
                            <img src="{{ asset('frontend/assets/img/faces/christian.jpg') }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                        </div>
                        <div class="name">
                            <h3 class="title">Christian Louboutin</h3>
                            <br>
                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 follow">
                    <button class="btn btn-fab btn-primary" rel="tooltip" title="Add New Story">
                        <i class="material-icons">add</i>
                    </button>
                    <button class="btn btn-fab btn-primary" rel="tooltip" title="Edit Profile">
                        <i class="material-icons">build</i>
                    </button>
                </div>
            </div>


            <div class="description text-center">
                <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                <li class="active">
                                    <a href="#work" role="tab" data-toggle="tab">
                                        <i class="material-icons">palette</i>
                                        History
                                    </a>
                                </li>
                                <li>
                                    <a href="#connections" role="tab" data-toggle="tab">
                                        <i class="material-icons">people</i>
                                        Work
                                    </a>
                                </li>
                                <li>
                                    <a href="#media" role="tab" data-toggle="tab">
                                        <i class="material-icons">camera</i>
                                        Bookmark
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <!-- End Profile Tabs -->
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active work" id="work">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-1">
                            <h4 class="title">Latest Chapters</h4>
                            <div class="row collections">
                                <div class="col-md-6">
                                    <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                                        <a href="#pablo"></a>
                                        <div class="card-content">
                                            <label class="label label-primary">Romance</label>
                                            <a href="#pablo">
                                                <h2 class="card-title">Stilleto</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                                        <a href="#pablo"></a>
                                        <div class="card-content">
                                            <label class="label label-primary">Romance</label>
                                            <a href="#pablo">
                                                <h2 class="card-title">Stilleto</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                                        <a href="#pablo"></a>
                                        <div class="card-content">
                                            <label class="label label-primary">Romance</label>
                                            <a href="#pablo">
                                                <h2 class="card-title">Stilleto</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                                        <a href="#pablo"></a>
                                        <div class="card-content">
                                            <label class="label label-primary">Romance</label>
                                            <a href="#pablo">
                                                <h2 class="card-title">Stilleto</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1 stats">
                            <h4 class="title">Stats</h4>
                            <ul class="list-unstyled">
                                <li><b>60</b> Stories</li>
                                <li><b>4</b> Chapters</li>
                                <li><b>331</b> Viewers</li>
                                <li><b>1.2K</b> Likes</li>
                            </ul>
                            <hr />
                            <h4 class="title">About My Work</h4>
                            <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                            <hr />
                            <h4 class="title">Focus</h4>
                            <span class="label label-primary">Romance</span>
                            <span class="label label-rose">Slice of Life</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane connections" id="connections">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="media">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

                                <div class="card-content">
                                    <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">subject</i> Read Article
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-simple">
                                        <i class="material-icons">watch_later</i> Watch Later
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection