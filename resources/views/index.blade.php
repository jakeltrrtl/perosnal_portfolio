@extends('layouts.app')
@section('content')
<!-- header section --> 
<header>
    <h1>JAKE RICHARDSON</h1>
</header>
<!-- end of header --> 
<!-- scrolling section --> 
<div id="scroll" class="scroll">
    <p id="scroll_text" class="animated">SCROLL</p>
    <i class="fas fa-long-arrow-alt-down"></i>
</div>
<!-- end of scroll section -->
<!-- about section -->
<section id="about" class="grey">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 padded">
            <h2>ABOUT</h2>
            <p>An enthusistic and motivated PHP software developer seeking further career progression. Two years commercial development at LGH and General Electric. Currently re-developing two CMS systems which will be transitioned from raw PHP to Laravel. Previous vast experience with BigCommerce and Shopify custom theme development as well as ample knowledge of Wordpress. Strong passion and understanding of front end design with a embedded knowledge of user interaction. Successfully developed and managed a male online clothing company, JMR Clothing, from 2015 to 2018. Avid rugby league enthusiast and Wigan Warriors supporter. </p>
            <a href="{{asset('images/jake_richardson.pdf')}}">
                <button class="btn btn-primary">Resume 
                    <span>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </span>
                </button>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="{{asset('images/myself.png')}}">  
        </div>
    </div>
</section>
<!-- end of about section --> 
<!-- resume section --> 
<section id="resume" class="orange">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Resume</h2>
            <p>View or download my resume</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 margin">
            <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{asset('images/jake_richardson.pdf')}}">
                        <button class="btn btn-alt-second">View Resume</button>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!-- end of resume section --> 
<!-- portfolio section --> 
<section id="portfolio" class="grey">
    <div class="row">
        <div class="col-lg-6 col-md-6 padded col-sm-12">
            <h2>Portfolio</h2>
            <p style="margin: 10px 0 !important;">View all my current and past projects</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div id="indicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#indicators" data-slide-to="0" class="active"></li>
                <li data-target="#indicators" data-slide-to="1"></li>
                <li data-target="#indicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img href="javascript:void(0)" id="caskaid" class="d-block w-100" src="{{asset('images/caskaid.png')}}" alt="Caskaid">
                </div>
                <div class="carousel-item">
                  <img id="creditknight" id="creditknight" class="d-block w-100" src="{{asset('images/creditknight.png')}}" alt="Creditknight">
                </div>
                <div class="carousel-item">
                  <img id="ge" class="d-block w-100" src="{{asset('images/ge.png')}}" alt="GE">
                </div>
              </div>
              <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</section>
<!-- end of portfolio section -->
<!-- contact section --> 
<section id="contact_section" class="orange">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Contact Me</h2>
            <p>Get in touch about job opportunities</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 margin">
            <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3">
                            <a href="https://www.linkedin.com/in/jake-richardson/">
                                <i class="contact_icons fab fa-linkedin"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="mailto:jakerichardson13@googlemail.com">
                                <i class="contact_icons far fa-envelope"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="https://github.com/jakeltrrtl">
                                <i class="contact_icons fab fa-github"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="javascript:void(0)" id="mobile">
                                <i class="contact_icons fas fa-phone-square-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!-- end of contact section --> 
<div class="modal fade" id="contact_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="contact_url" id="contact_url" url="{{ route('index.contact_send')}}">
                <form id="contact_form" name="contact_form" class="form-horizontal">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea type="text" name="comments" rows="10" id="comments" class="form-control"></textarea>
                    </div>
                    <button id="contact_submit" type="submit" class="btn btn-primary" style="margin: 20px auto !important; display: block !important; float: none !important; text-align: center !important;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mobile_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="mobile_text" style="text-align: center;color: #212529;font-size: 15px;font-family: 'Fjalla One', sans-serif; margin: 40px 0;">Mobile Number: 07894042760</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="portfolio_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img id="image" src="" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 id="title"></h2>
                        <p id="content"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/dashboard/index.js') }}" defer></script>
@endsection