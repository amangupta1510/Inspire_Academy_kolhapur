@extends('home_layout')
@section('head')
<title>Inspire Academy || IIT-JEE, NEET & MHT-CET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Best success rate in all over maharashtra in JEE, NEET, CET & Olympiads.Inspire Academy achieves more than 80% selections from classroom courses and crash courses each year.Branches : Kolhapur,Karad & Satara
Add.: 2nd floor,Tathastu Corner,Shahupuri,Opp.railway Gate-416001 Contact:7972961299">
<meta name="keywords" content="inspire kolhapur, inspire, inspire Academy, inspire portal, inspirekolhapur, inspirekolhapur.in,Best institute for IIT coaching, iitjee Kolhapur, iit scholarship exam, iit top rankers, Aieee coaching, AIPMT, NEET coaching">
<link rel="canonical" href="https://inspirekolhapur.in"/>
@endsection

@section('body')
    <!-- contact -->
    <h2 style="margin-top: 30px; text-align: center;">Enrollment & Enquiry Form</h2>
    <div class="contact py-5" id="contact" style="margin-top: 30px;">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="row">
                <div class="col-lg-6">
                    <img src="website/images/b2.jpg" alt="image" style="width: 360px; height: 500px;" />
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <form autocomplete="off" action="{{ route('ThankYou') }}" method="post" class="login100-form validate-form p-b-33 p-t-5">
                     
                    @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Student Name :
                                        </label>
                                        <br> 
                                        <input class="form-control" type="text" placeholder="Your Name" name="name" required="">
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="row">
                                   <div class="col-md-6">
                                        <label>
                                            Mobile :
                                        </label> <br>
                                        <input class="form-control" type="text" placeholder="xxxxxxxxxx" name="mobile" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">    
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Currently Studing :
                                        </label> <br>
                                     <div class="row" style="margin-left: 8px;">    
                               <input type="radio" name="class" value="11th" required=""> 11th<br>
                               <input type="radio" name="class" value="12th" required=""> 12th
                               <input type="hidden" name="email" value="">
                           </div>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Regular Classroom Course :
                                        </label> <br>
                                     <div class="row" style="margin-left: 8px;">    
                                       <input type="radio" name="course" value="Engineering" required=""> Engineering<br>
                                 <input type="radio" name="course" value="Medical" required=""> Medical
                           </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                           Comments : 
                                        </label> <br>
                                        <textarea placeholder="Add your Description here" name="comments" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block mt-4">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
    

@endsection