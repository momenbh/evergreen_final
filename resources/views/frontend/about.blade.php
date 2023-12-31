@extends('frontend.layouts.main')

@section('main-container')


<div class="about_banner banner" style="background-image:url({{url('/uploads/aboutimage/'.$aboutimg->a_image)}})">
    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <h1>About Us</h1>
        </div>
      </div>
    </main>
</div>

  

    <div class="content">
      
      <div class="page-inner">
        <section class="section about-video">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <div class="embed-responsive embed-responsive-16by9 ">
                    <span>
                    

                      <iframe width="722" height="350" src=" {{$aboutimg->Video_one_url}} " frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          allowfullscreen></iframe>
                  </span>
                  </div>
              </div>
             
              <div class="col-md-6">
                  <div class="embed-responsive embed-responsive-16by9 video_div">
                    <span>
                      <iframe width="722" height="350" src=" {{$aboutimg->Video_two_url}} " frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          allowfullscreen></iframe>
                  </span>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section about-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Brief About Us.</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1">
                  <p><strong class="text-dark" style="color: green;">Evergreen’92</strong>
                   {{$aboutimg->brief_about_us}}
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Mission Statement:</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1"><p>{{$aboutimg->mission_statement}}</p>

                  
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section about-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Vision Statement: </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1">{{$aboutimg->vision_statement}}

                  
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Core Values:</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1">
                  <p><i class="fa fa-arrow-right"></i> Customer Centric</p>
                  <p><i class="fa fa-arrow-right"></i> Drive for Result</p>
                  <p><i class="fa fa-arrow-right"></i> Teamwork</p>
                  <p><i class="fa fa-arrow-right"></i> Commitment to quality</p>
                  <p><i class="fa fa-arrow-right"></i> Respect for all stakeholders</p>

                  
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Goals:</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1">
                  <p><i class="fa fa-cube"></i> To be a leader in the development sector</p>
                  <p><i class="fa fa-cube"></i> To build a lasting relationship with our clients and partners</p>
                  <p><i class="fa fa-cube"></i> To build affordable living for our people</p>
                  <p><i class="fa fa-cube"></i> To promote sustainable development</p>

                  
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="section bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Code of Conduct:</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1">
                  <p><i class="fa fa-check"></i> We will comply with the all applicable laws and regulations</p>
                  <p><i class="fa fa-check"></i> We will respect the rights of our employees, contractors and partners.</p>
                  <p><i class="fa fa-check"></i> We will conduct our business with honesty</p>
                  <p><i class="fa fa-check"></i> We will strive for the highest standards of safety and environmental responsibility.</p>
                  <p><i class="fa fa-check"></i> We will strive for excellence in everything we do.</p>
                  <p><i class="fa fa-check"></i> We will treat everyone with respect and dignity.</p>
                  <p><i class="fa fa-check"></i> We will promote diversity and inclusion</p>
                  <p><i class="fa fa-check"></i> We will be open and transparent in our communication with all stakeholders.</p>

                  
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="section bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Our Leaders:</div>
                </div>
              </div>
              <div class="col-md-9">
                
              </div>
            </div>

            <div class="row leader">
              <div class="col-md-5">
                    <img src="{{url('/frontend/images/leader/image003.png')}}">
                </div>
                <div class="col-md-1"></div>
              <div class="col-md-6">
                  <h3>ARCHITECT MIZANUR RAHMAN</h3>
                  <h4 class="sub_title">CHAIRMAN</h4>

                  <p>One of the Leading Architect in the development sector of Bangladesh. He is a visionary leader who has 19 years of experience in development sector. He has completed his graduation from Khulna University.</p>

                  <div class="">
                    <p><i class="fa fa-check"></i> Ex. Deputy Director of RAJUK. </p>
                    <p><i class="fa fa-check"></i> Principle Architect of SKELETON Architects Ltd.</p>
                    <p><i class="fa fa-check"></i> Advisor FnF Properties Ltd. & Chuti resort.</p>
                    <p><i class="fa fa-check"></i> Coordinator EverGreen’92 Club Ltd.</p>
                    <p><i class="fa fa-check"></i> Coordinator EverGreen’92 Club Ltd.</p>
                  </div>
              </div>
            </div>

            <div class="row leader">
              <div class="col-md-6">
                  <h3>FARHAD MOSTOFA CHOWDHURY</h3>
                  <h4 class="sub_title">MANAGING DIRECTOR</h4>

                  <p>Native of Lakshmipur, born and brought up in Dhaka. Earned his Master Degree in Management from National University of Bangladesh. Shopping he loves and travelling is in his heart. Father of two sons.</p>

                  <div class="">
                    <p><i class="fa fa-check"></i> Proprietor of Casa Di Design (Architect N Interior Consultant). </p>
                    <p><i class="fa fa-check"></i> Managing Director of Dahmashi Trading Company Ltd.</p>
                    <p><i class="fa fa-check"></i> Managing Director of Natural Air Technology (BD) Ltd.</p>
                    <p><i class="fa fa-check"></i> Executive Director, Dahmashi Group.</p>
                    <p><i class="fa fa-check"></i> Founder member and President of EverGreen92 Club Ltd.</p>
                  </div>
              </div>
                <div class="col-md-1"></div>
              <div class="col-md-5">
                  <img src="{{url('/frontend/images/leader/image004.png')}}" class="">
              </div>
            </div>

            <div class="row leader">
              <div class="col-md-5">
                    <img src="{{url('/frontend/images/leader/image005.png')}}">
                </div>
                <div class="col-md-1"></div>
              <div class="col-md-6">
                  <h3>MD. MOSTOFA MONWAR BHUIYAN</h3>
                  <h4 class="sub_title">DIRECTOR, FINANCE & PROCUREMENT</h4>

                  <p>Born & brought up in colorful & historical food loving part of Old Dhaka, Wari. Earned his bachelor degree in Business Administration from University of Madras. His loves basketball and enjoys playing table tennis.</p>

                  <div class="">
                    <p><i class="fa fa-check"></i> Managing Director of Bhuiyan Fabrics Ltd. (100% export oriented knit RMG industry) </p>
                    <p><i class="fa fa-check"></i> Chairperson Little Scholars Tutorial.</p>
                    <p><i class="fa fa-check"></i> Director: BKMEA, RTISC (Bangladesh Knitwear Manufacturers and Exporters Association).</p>
                    <p><i class="fa fa-check"></i> Member of Dhaka Club Ltd.</p>
                  </div>
              </div>
            </div>

            <div class="row leader">
              <div class="col-md-6">
                  <h3>MD. NASIM HAIDER</h3>
                  <h4 class="sub_title">DIRECTOR, PLANNING & DEVELOPMENT</h4>

                  <p>After getting his Bachelor and Master degree from Bangladesh University of Engineering and Technology (BUET) in Urban and Regional Planning, he joined Development Design Consultant in 2005 and since then has been extensively involved in various government projects. Due to work travelling has become his hobby. He is a native of Jhenaidah.</p>

                  <div class="">
                    <p><i class="fa fa-check"></i> Chairman of Rose Garden Residence & Resorts. </p>
                    <p><i class="fa fa-check"></i> Director of Innova Securities Ltd.</p>
                    <p><i class="fa fa-check"></i> Director of Innova Properties Lid.</p>
                    <p><i class="fa fa-check"></i> Deputy Town Planner Of Development Design Consultants Ltd.</p>
                  </div>
              </div>
                <div class="col-md-1"></div>
              <div class="col-md-5">
                  <img src="{{url('/frontend/images/leader/image006.png')}}" class="">
              </div>
            </div>

            <div class="row leader">
              <div class="col-md-5">
                    <img src="{{url('/frontend/images/leader/image007.png')}}">
                </div>
                <div class="col-md-1"></div>
              <div class="col-md-6">
                  <h3>Mahidul Munsur khan</h3>
                  <h4 class="sub_title">Director</h4>

                  <p>Mr. Khan born in a reputed Muslim family from the Historical place Bikrampur. He born and brought up in Dhaka City. He is son of Lion Munsur Habib Khan who is a renowned businessperson of Bangladesh (founder of M H Khan Construction Ltd which is the 1st Enlisted Construction Company of RAJUK, established in 1969). Following his father’s footsteps Mr. Khan is operating business in construction, housing and real estate sector for last 21 years.</p>

                  <div class="">
                    <p><i class="fa fa-check"></i> Managing Director of Future Base Ltd. (Real Estate and Land Development Company)  </p>
                    <p><i class="fa fa-check"></i> Director at M H Khan Construction Ltd.</p>
                    <p><i class="fa fa-check"></i> Director of Innovative Chemical Industries Ltd. (ICIL)</p>
                    <p><i class="fa fa-check"></i> Member of Army Golf Club.</p>
                    <p><i class="fa fa-check"></i> Member of Baridhara Society.</p>
                    <p><i class="fa fa-check"></i> Member of Dhaka Boat Club.</p>
                    <p><i class="fa fa-check"></i> Founder at Royal Unity Co-operative Society.</p>
                  </div>
              </div>
            </div>
          </div>
        </section>


        <section class="section team">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Our Team: </div>
                </div>
              </div>
              <div class="col-md-10 images_col">
                  <div class="row">
                         @foreach ( $aboutimage as $imge)
                           
                         
                    <div class="col-md-4">
                        <img src="{{url('uploads/teamimage/'.$imge->filename)}}" class="img-fluid">
                      </div>
                      @endforeach

                  </div>
              </div>
            </div>
          </div>
        </section>


        
      </div>
    </div>  
    
@endsection
