@extends('layouts.frontend.app')
@section('title') - {{ __('MD SAMI &amp; Tech Lead & Tech Enthusiast') }} @endsection

@section('content')

    <style type="text/css">
        /* .disabled{
            pointer-events: none;
            cursor: default;
        } */
    </style>



<body class="dark-mode">
	
	<header class="header text-center">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Md Sami</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image" >			
						
						<div class="bio mb-3">Hi, my name is Md Sami and I'm a Tech Lead & Tech Enthusiast ,Welcome to my personal website!</div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="http://github.com/mdsami"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-docker fa-fw"></i></a></li>
							
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-left">
						<li class="nav-item active">
							<a class="nav-link" href="index.html"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.html"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw mr-2"></i>Services &amp; Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resume.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="project.html"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Project Page</a>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-cogs fa-fw mr-2"></i>More Pages
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="project.html">Project Page</a>
								<a class="dropdown-item" href="blog-home.html">Blog Home 1</a>
								<a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a>
								<a class="dropdown-item" href="blog-post.html">Blog Post</a>
							</div>
						</li> -->
					</ul>
					
					<div class="my-2">
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Say Hello</a>
					</div>
					
	
		
					
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>
	
	<div class="main-wrapper">
		
		<section class="about-me-section p-3 p-lg-5 theme-bg-light">
			<div class="container">
				<div class="profile-teaser media flex-column flex-lg-row">
					
					<div class="media-body">
						<h2 class="name font-weight-bold mb-1">Md Sami</h2>
						<div class="tagline mb-3">Tech Enthusiast & Tech Entrepreneur </div>
						<div class="bio mb-4">I'm a software engineer specialised in backend development for complex scalable web apps. I write about software development on <a class="link-on-bg" href="blog-home.html">my blog</a>. Want to know how I may help your project? Check out my project <a class="link-on-bg" href="projects.html">portfolio</a> and <a class="link-on-bg" href="resume.html">online resume</a>.
						</div><!--//bio-->
						<div class="mb-4">
							<a class="btn btn-primary mr-2 mb-3" href="portfolio.html"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
							<a class="btn btn-secondary mb-3" href="resume.html"><i class="fas fa-file-alt mr-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
						</div>
					</div><!--//media-body-->
					<img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="assets/images/profile-lg.jpg" alt="">
				</div>
			</div>
		</section><!--//about-me-section-->
		
		<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">What I do</h2>
				<div class="section-intro mb-5">I have more than 10 years' experience building software for clients all over the world. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a href="resume.html">online resume</a> and <a href="portfolio.html">project portfolio</a>.</div>
				<div class="row">
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-js-square"></i></div>
							<h3 class="item-title">Vanilla JavaScript</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-angular mr-2"></i><i class="fab fa-react mr-2"></i><i class="fab fa-vuejs"></i></div>
							<h3 class="item-title">Angular, React &amp;  Vue</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-node-js"></i></div>
							<h3 class="item-title">Node.js</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-python"></i></div>
							<h3 class="item-title">Python &amp; Django</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-php"></i></div>
							<h3 class="item-title">PHP</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-npm mr-2"></i><i class="fab fa-gulp mr-2"></i><i class="fab fa-grunt"></i></div>
							<h3 class="item-title">npm, Gulp &amp; Grunt</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-html5 mr-2"></i><i class="fab fa-css3-alt"></i></div>
							<h3 class="item-title">AWS &amp; DevOPS</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-sass mr-2"></i><i class="fab fa-less"></i></div>
							<h3 class="item-title">Sass &amp; LESS</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="services.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>Services &amp; Pricing
					
				</a></div>
				
			</div><!--//container-->
		</section>
		
		<div class="container"><hr></div>
		
		<section class="testimonials-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
				<div class="testimonial-carousel owl-carousel owl-theme">

					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-1.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">Brandon James</div>
								<div class="info">Project Manager, Google</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-2.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">Kate Sanders</div>
								<div class="info">Project Manager, Uber</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-3.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">James Lee</div>
								<div class="info">Product Manager, Amazon</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-4.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">James Lee</div>
								<div class="info">Product Manager, Amazon</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-5.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">Olivia White</div>
								<div class="info">Product Manager, Dropbox</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="source-profile">
								<img src="assets/images/clients/profile-6.png" alt="image"/>
							</div>
							<div class="meta">
								<div class="name">Samuel Reyes</div>
								<div class="info">CTO, StartupHub</div>
							</div>
						</div>
					</div>
					
				</div><!--//testimonial-carousel-->	
			</div><!--//container-->
		</section><!--//testimonials-section-->
		
		<div class="container"><hr></div>
		
		<section class="featured-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">	
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-2.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-3.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-4.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Uber</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="portfolio.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio</a></div>
				
			</div><!--//container-->
		</section><!--//featured-section-->
		
		<div class="container"><hr></div>
		
		<section class="latest-blog-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
								
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 2 days ago</small>
							</div>
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-2.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote Working</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published a week ago</small>
								
							</div>
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-3.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 3 weeks ago</small>
							</div>
						</div><!--//card-->
					</div><!--//col-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="blog-home.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Blog</a></div>
			</div><!--//container-->
			
		</section><!--//latest-blog-section-->

		<footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy;2020 <a href="http://mdsami.me/" target="_blank">mdsami</a></small>
		</footer>
		
	</div><!--//main-wrapper-->

    @extends('layouts.frontend.footer')
