@extends('layouts.frontend.app')
@section('title') - {{ __('My Resume') }} @endsection

@section('content')


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
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-left">
						<li class="nav-item active">
							<a class="nav-link" href="index-2.html"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
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
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
					</div>
					
	
		
					
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>
	
	<div class="main-wrapper">
		<section class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading mb-3">My Resume</h2>
				<a class="btn btn-primary" href="https://mdsami.xyz/resume.pdf" target="_blank"><i class="fas fa-file-pdf mr-2"></i>Download PDF Version</a>
				
				
			</div><!--//container-->
		</section>
		<div class="container px-3 px-lg-5">
			<article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">
				
				<div class="resume-header">
					<div class="row align-items-center">
						<div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
							<h2 class="resume-name mb-0 text-uppercase">Md Sami</h2>
							<div class="resume-tagline mb-3 mb-md-0">Tech Enthusiast & Tech Entrepreneur</div>
						</div><!--//resume-title-->
						<div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
							<ul class="list-unstyled mb-0">
								<li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg mr-2 "></i><a class="resume-link" href="tel:#">01924126131</a></li>
								<li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg mr-2"></i><a class="resume-link" href="mailto:#">hello@mdsami.xyz</a></li>
								<li class="mb-2"><i class="fas fa-globe fa-fw fa-lg mr-2"></i><a class="resume-link" href="http://mdsami.me">mdsami.xyz</a></li>
								<li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg mr-2"></i>Dhaka, BanglaDesh</li>
							</ul>
						</div><!--//resume-contact-->
					</div><!--//row-->
					
				</div><!--//resume-header-->
				<hr>
				<div class="resume-intro py-3">
					<div class="media flex-column flex-md-row align-items-center">
						<img class="resume-profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="assets/images/resume-profile.png" alt="image">
						<div class="media-body text-left">
							<p class="mb-0">My name is Md Sami and I am a Tech Lead & Tech Enthusiast, <a class="theme-link" >. currently living in Dhaka, BD.</a> I have a B.Sc In Computer Science and Engineering form Daffodil International University and my primary focus and inspiration for my studies is Software Development. I am both driven and self-motivated, and I am constantly experimenting with new technologies and techniques. I am very passionate about Software and Mobile Apps Development, and strive to better myself as a developer, and the development community for a while </p>
						</div><!--//media-body-->
					</div>
				</div><!--//resume-intro-->
				<hr>
				<div class="resume-body">
					<div class="row">
						<div class="resume-main col-12 col-lg-8 col-xl-9 pr-0 pr-lg-5">
							<section class="work-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
								<div class="item mb-3">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Tech Lead</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">HSHL | 2021 - Present</div>
										
									</div>
									<div class="item-content">
										<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
										<ul class="resume-list">
											<li>Lorem ipsum dolor sit amet, consectetuer.</li>
											<li>Aenean commodo ligula eget dolor.</li>
											<li>Etiam ultricies nisi vel augue.</li>
										</ul>
									</div>
								</div><!--//item-->
								<div class="item mb-3">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Senior Software Engineer</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Analyzen | 2018 - 2020</div>
										
									</div>
									<div class="item-content">
										<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										<ul class="resume-list">
											<li>Lorem ipsum dolor sit amet, consectetuer.</li>
											<li>Aenean commodo ligula eget dolor.</li>
										</ul>
									</div>
								</div><!--//item-->
								<div class="item mb-3">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Senior Software Engineer</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Save The Children | 2017 - 2018</div>
										
									</div>
									<div class="item-content">
										<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									</div>
								</div><!--//item-->
								<div class="item">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Senior Engineer</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Atom AP Ltd | 2015 - 2017</div>
										
									</div>
									<div class="item-content">
										<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. </p>
									</div>
								</div><!--//item-->
								<div class="item">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Senior Developer</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Webnit24 | 2014 - 2015</div>
										
									</div>
									<div class="item-content">
										<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									</div>
								</div><!--//item-->
				
								
							</section><!--//work-section-->

							
							<section class="project-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Projects</h3>
								<div class="item mb-3">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Project Lorem Ipsum</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Open Source</div>
										
									</div>
									<div class="item-content">
										<p>You can use this section for your side projects. You can <a href="#" class="theme-link">provide a project link here</a> as well. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
										
										
									</div>
								</div><!--//item-->
								<div class="item">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Project Sed Fringilla</h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Open Source</div>
										
									</div>
									<div class="item-content">
										<p>You can use this section for your side projects. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
										
									</div>
								</div><!--//item-->
								<div class="item">
									<div class="item-heading row align-items-center mb-2">
										<h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Project Praesent </h4>
										<div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">Open Source</div>
										
									</div>
									<div class="item-content">
										<p>You can use this section for your side projects. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
										
									</div>
								</div><!--//item-->
							</section><!--//project-section-->	
						</div><!--//resume-main-->
						<aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
							<section class="skills-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
								<div class="item">
									<h4 class="item-title">Technical</h4>
									<ul class="list-unstyled resume-skills-list">
										<li class="mb-2">JavaScript/Angular/React/Vue</li>
										<li class="mb-2">Python/Ruby/PHP<li>
											<li class="mb-2">Java/ReactNative/Flutter</li>
											<li class="mb-2">Laravel/Wordpress</li>
											<li class="mb-2">Node.js/ReactJS</li>
											<li class="mb-2">PostgreSQL/MySQL/MongoDB</li>
											<li class="mb-2">Object-oriented design</li>
											<li class="mb-2">Design and implement database structures</li>
											<li>Lead and deliver complex software systems</li>
										</ul>
									</div><!--//item-->
									<div class="item">
										<h4 class="item-title">Professional</h4>
										<ul class="list-unstyled resume-skills-list">
											<li class="mb-2">Effective communication</li>
											<li class="mb-2">Team player<li>
												<li class="mb-2">Strong problem solver</li>
												<li>Good time management</li>
											</ul>
										</div><!--//item-->
									</section><!--//skills-section-->
									<section class="education-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
										<ul class="list-unstyled resume-education-list">
											<li class="mb-3">
												<div class="resume-degree font-weight-bold">MSc in Computer Science</div>
												<div class="resume-degree-org text-muted">University of /div>
												<div class="resume-degree-time text-muted">2016 - 2018</div>
											</li>
											<li>
												<div class="resume-degree font-weight-bold">BSc in Computer Science</div>
												<div class="resume-degree-org text-muted">Daffodil International University</div>
												<div class="resume-degree-time text-muted">2012 - 2015</div>
											</li>
										</ul>
									</section><!--//education-section-->
									<section class="education-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Awards</h3>
										<ul class="list-unstyled resume-awards-list">
											<li class="mb-3">
												<div class="font-weight-bold">Award Lorem Ipsum</div>
												<div class="text-muted">Microsoft lorem ipsum (2019)</div>
											</li>
											<li>
												<div class="font-weight-bold">Award Donec Sodales</div>
												<div class="text-muted">Oracle Aenean (2017)</div>
											</li>
										</ul>
									</section><!--//education-section-->
									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
										<ul class="list-unstyled resume-lang-list">
											<li class="mb-2">Bangla <span class="text-muted">(Native)</span></li>
											<li>English <span class="text-muted">(Professional)</span></li>
											<li>Hindi <span class="text-muted">(Professional)</span></li>
										</ul>
									</section><!--//certificates-section-->
									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Interests</h3>
										<ul class="list-unstyled resume-interests-list mb-0">
											<li class="mb-2">Climbing</li>
											<li class="mb-2">Snowboarding</li>
											<li class="mb-2">Photography</li>
											<li>Travelling</li>
										</ul>
									</section><!--//certificates-section-->
									
								</aside><!--//resume-aside-->
							</div><!--//row-->
						</div><!--//resume-body-->
						<hr>
						<div class="resume-footer text-center">
							<ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
								<li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="http://github.com/mdsami/"><i class="fab fa-github-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">mdsami</span></a></li>
								<li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="http://linkedin.com/in/mdsami55"><i class="fab fa-linkedin fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">mdsami55</span></a></li>
								<li class="list-inline-item mb-lg-0 mr-lg-3"><a class="resume-link" href="http://twitter.com/mdsami5/"><i class="fab fa-twitter-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">@mdsami5</span></a></li>
							</ul>
						</div><!--//resume-footer-->
					</article>
					
				</div><!--//container-->
				

			@extends('layouts.frontend.footer')