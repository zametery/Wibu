<!doctype html>
<html lang="en">
<head>
	@include('frontend/layouts/header')
</head>

<body class="landing-page">
    <nav class="navbar navbar-danger navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	@include('frontend/layouts/navbar')
    	</div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg1.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h1 class="title">Carousel 1</h1>
                                    <h4>Short Text 1</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg2.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <h1 class="title">Carousel 2</h1>
                                    <h4>Short Text 2</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg3.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-5 text-right">
                                    <h1 class="title">Carousel 3</h1>
                                    <h4>Short Text 3</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
    </div>

</div>

	<div class="main main-raised">
		<div class="container">
            <div class="section text-center">
                <h2 class="title">Popular Series</h2>

				<div class="features">
						<div class="row">
	    					<div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 1</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 2</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 3</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
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

            <div class="section text-center">
                <h2 class="title">Trending Series</h2>

				<div class="features">
						<div class="row">
	    					<div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 1</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 2</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 3</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
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
	    	<div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Latest Update</h2>
                        <h5 class="description">This is where all new chapter listed. Click button to read more !</h5>
                    </div>
                </div>

				<div class="features">
					<div class="row">
						<div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
	                </div>
				</div>
                <ul class="pagination pagination-primary justify-content-center">
                    <!--
                        color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                    -->
                        <li><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">...</a></li>
                        <li><a href="javascript:void(0);">5</a></li>
                        <li><a href="javascript:void(0);">6</a></li>
                        <li class="active"><a href="javascript:void(0);">7</a></li>
                        <li><a href="javascript:void(0);">8</a></li>
                        <li><a href="javascript:void(0);">9</a></li>
                        <li><a href="javascript:void(0);">...</a></li>
                        <li><a href="javascript:void(0);">12</a></li>
                </ul>
            </div>


        </div>
	</div>

    @include('frontend/layouts/footer')

</body>
	@include('frontend/layouts/js')
</html>