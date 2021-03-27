@extends('layout/details')
<html>
<head>
@yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
   <title>Delta Trek</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
	<!-- Custom-css-Files -->
	<link rel="stylesheet" href="{{ asset('css/offers_style.css') }}" type="text/css" media="all">
	<!-- //Custom-css-Files -->
	</head>
<body>
<!-------------------------------------------modal1   standard------------------------>
<div id="modal1" class="modal fade bd-example-modal-lg " role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button style="width: 30px;zoom:1.2;" type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h2 class="modal-title" style="font-size: 24px">Standard Subscription</h2>
      </div>
      <div class="modal-body">
      	<h2 class="text-center class" style="font-size: 22px"><span><u>Standard Subscription Details</u></span></h2>
<br><br>
<ol style="font-size: 20px; padding-left: 20px;" >
	<li class="class" type="1">A <span>Personalised Exam Portal</span> will be Designed as per The <span>Theme</span> and <span>logo</span> of Subscriber's Academy.</li><br>
	<li class="class" type="1">A <span>Separate website</span> will be provided as per <span>Academy Name</span> which can be linked further with Any existing website of the Academy. 
		<br><p>The cost for Exam Portal => <span>Rs. - 30,000/- Yearly.</span></p>
	</li>
	<br>
	<li class="class" type="1">No. of Student Registrations allowed will be restricted as per the Subscription. 
		<br><p>The Charges are <span>Rs. - 1,000/- per student</span></p>
	</li>
	<br>
	<li class="class" type="1">
		There are <span>no restrictions</span> on Registration of teachers. 
	</li>
	<br>
	<li class="class" type="1">
		Academy can <span>create , upload</span> and <span>Publish</span> any number of papers on their own.
	</li>
	<br>
	<li class="class" type="1">
		There are <span>no restrictions</span> on <span>numbers of papers</span> to be created by the Subscriber.
	</li>
	<br>
	<li class="class" type="1">
		A <span>Mobile App</span> will be provided for a Subscription <span>above 50 Student user</span> Registration.
	</li>
	<br>
	<li class="class" type="1">
		<span>Unlimited DPP's</span> can be Uploaded by the Subscriber.
	</li>
	<br>
	<li class="class" type="1">
		For More Information & Demo's CONTACT => <span>9696761818 , 8604262373</span> ;
	</li>
	<br>
</ol>

  </div>
      </div>
    </div>
  </div>
</div></div>
    <!------------------------------------------- end modal1   standard------------------------>
    <!-------------------------------------------modal2   Silver------------------------>
<div id="modal2" class="modal fade bd-example-modal-lg " role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button style="width: 30px;zoom:1.2;" type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h2 class="modal-title" style="font-size: 24px">Silver Subscription</h2>
      </div>
      <div class="modal-body">
<h2 class="text-center class" style="font-size: 22px"><span><u>Silver Subscription Details</u></span></h2>
<br><br>
<ol type="1" style="font-size: 20px; padding-left: 20px;" >
	<li class="class" type="1"><span>All the Benifits</span> included in <span>Standard Subscription.</span></li><br>
	<li class="class" type="1">The Charges of <span>NEET/Jee Main</span> Test Series are <span>Rs. - 3,000/-</span> per student.<p><u><span>which included</span></u>:-</p><br>
		<ol style=" padding-left: 30px;">
			<li class="class" type="A">
	      <span>25 Full length(3 hours)</span> Chapter Revision Tests <span>(CRT).</span>
		<br>
		A single CRT includes one-one Chapter of each Subjects as per the exam pattern of NEET/Jee Main.
		</li>
		<br>
		<li class="class" type="A">
		<span>8 Full length(3 hours)</span> Part Tests <span>(PT).</span>
		<br>
		A single PT includes 3-4 Chapter of each Subjects as per the actual exam pattern and covering Whole Syllabus in 8 Tests.
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(3 hours)</span> Full Syllabus Tests <span>(FST).</span>
		<br>
		A single FST includes Questions from full syllabus of each Subjects.
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(3 hours)</span> Full Tests.
		<br>
		Full Test <span>(FT)</span> Based on previous year papers.</li>
	</ol></li><br>
	<li class="class" type="1">The Charges of <span>Jee Advanced</span> Test Series are <span>Rs. - 3,000/-</span> per student.<p><u><span>which included</span></u>:-</p><br>
		<ol style=" padding-left: 30px;">
			<li class="class" type="A">
	      <span>25 Full length(3 hours)</span> Chapter Revision Tests <span>(CRT).</span>
		<br>
		A single CRT includes one-one Chapter of each Subjects.
		</li>
		<br>
		<li class="class" type="A">
		<span>10 Full length(6 hours)</span> Full Syllabus Tests <span>(FST).</span>
		<br>
		with <span>Paper - 1</span> (3 hours) & with <span>Paper - 2</span> (3 hours).
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(6 hours)</span> Full Tests Based on previous year papers.
		<br>
		with <span>Paper - 1</span> (3 hours) & with <span>Paper - 2</span> (3 hours).
		<br></li></ol><br>
	<li class="class" type="1">
		The Charges of <span>Jee Main + Advanced</span> Test Series are <span>Rs. - 5,000/-</span> per student.<br><u><span>which included</span></u>:- <span>All the Papers of Jee Main & Advanced.</span>
	</li><br>
	<li class="class" type="1">
		For More Information & Demo's CONTACT => <span>9696761818 , 8604262373</span> ;
	</li>
	<br>
    </ol>
  </div>
      </div>
    </div>
  </div>
</div></div>
    <!------------------------------------------- end modal2   Silver------------------------>
    <!-------------------------------------------modal3  Gold------------------------>
<div id="modal3" class="modal fade bd-example-modal-lg " role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button style="width: 30px;zoom:1.2;" type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h2 class="modal-title" style="font-size: 24px">Gold Subscription</h2>
      </div>
      <div class="modal-body" >
<h2 class="text-center class" style="font-size: 22px"><span><u>Gold Subscription Details</u></span></h2>
<br><br>
<ol type="1" style="font-size: 20px; padding-left: 20px;" >
	<li class="class" type="1"><span>All the Benifits</span> included in <span>Standard Subscription.</span></li><br>
	<li class="class" type="1">The Charges of <span>NEET/Jee Main</span> Test Series are <span>Rs. - 2,000/-</span> per student.<p><u><span>which included</span></u>:-</p><br>
		<ol style=" padding-left: 30px;">
			<li class="class" type="A">
	      <span>25 Full length(3 hours)</span> Chapter Revision Tests <span>(CRT).</span>
		<br>
		A single CRT includes one-one Chapter of each Subjects as per the exam pattern of NEET/Jee Main.
		</li>
		<br>
		<li class="class" type="A">
		<span>8 Full length(3 hours)</span> Part Tests <span>(PT).</span>
		<br>
		A single PT includes 3-4 Chapter of each Subjects as per the actual exam pattern and covering Whole Syllabus in 8 Tests.
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(3 hours)</span> Full Syllabus Tests <span>(FST).</span>
		<br>
		A single FST includes Questions from full syllabus of each Subjects.
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(3 hours)</span> Full Tests.
		<br>
		Full Test <span>(FT)</span> Based on previous year papers.</li>
	</ol></li><br>
	<li class="class" type="1">The Charges of <span>Jee Advanced</span> Test Series are <span>Rs. - 2,500/-</span> per student.<p><u><span>which included</span></u>:-</p><br>
		<ol style=" padding-left: 30px;">
			<li class="class" type="A">
	      <span>25 Full length(3 hours)</span> Chapter Revision Tests <span>(CRT).</span>
		<br>
		A single CRT includes one-one Chapter of each Subjects.
		</li>
		<br>
		<li class="class" type="A">
		<span>10 Full length(6 hours)</span> Full Syllabus Tests <span>(FST).</span>
		<br>
		with <span>Paper - 1</span> (3 hours) & with <span>Paper - 2</span> (3 hours).
		</li>
		<br>
		<li class="class" type="A">
			<span>10 Full length(6 hours)</span> Full Tests Based on previous year papers.
		<br>
		with <span>Paper - 1</span> (3 hours) & with <span>Paper - 2</span> (3 hours).
		<br></li></ol><br>
	<li class="class" type="1">
		The Charges of <span>Jee Main + Advanced</span> Test Series are <span>Rs. - 4,000/-</span> per student.<br><u><span>which included</span></u>:- <span>All the Papers of Jee Main & Advanced.</span>
	</li><br>
	<li class="class" type="1">
		For More Information & Demo's CONTACT => <span>9696761818 , 8604262373</span> ;
	</li>
	<br>
    </ol>

  </div>
      </div>
    </div>
  </div>
</div></div>
    <!------------------------------------------- end modal3   Gold------------------------>
    <div id="page" class="page">
        
    <div class="main bg bg1">
			<div class="main-heading w3ls">
				<h1 class="editContent">Our Subscription Charges</h1>
			</div>
			<div class="pricing-table">
				<div class="pricing editContent">
					<div class="price-top clr1 editContent w3ls" style="outline: none; cursor: inherit;">
						<h3>Standard</h3>
					</div>
					<div class="price-bottom editContent">
						
						<div class="price2 ">
					<ul>
							<li class="editContent">Exam Portal | Rs. 30,000/-</li>
							<li class="editContent">Teacher Registration | Rs. Nill</li>
							<li><b style="color: #fff">Per user Charges</b><hr style="margin: 5px;"></li>
							<li class="editContent">Student Registration | Rs. 1,000/-</li>
							<li class="editContent">NEET/JEE Main Test Series<p> Not Available</p>JEE Advanced Test Series<p>Not Available</p>
								JEE Main + Advanced Test Series<p>Not Available</p></li>
							
						</ul>
								<button class="clr1 btn button" data-toggle="modal" data-target="#modal1">View Details</button>
						</div>
					</div>
				</div>
			<div class="pricing pri2 editContent">
					<div class="price-top clr2 editContent" style="">
						<h3 class="editContent">SILVER</h3>
					</div>
				<div class="price-bottom editContent" style="outline: none; cursor: inherit;">
					
					<div class="price2 w3ls">
						<ul>
							<li class="editContent">Exam Portal | Rs. 30,000/-</li>
							<li class="editContent">Teacher Registration | Rs. Nill</li>
							<li><b style="color: #fff">upto 100 users, per user Charges</b><hr style="margin: 5px;"></li>
							<li class="editContent">Student Registration | Rs. 1,000/-</li>
							
							<li class="editContent">NEET/JEE Main Test Series<p> Rs. 3,000/-</p>JEE Advanced Test Series<p> Rs. 3,000/-</p>
								JEE Main + Advanced Test Series<p> Rs. 5,000/-</p></li>

						</ul>
						<button class="clr2 btn button" style="outline: none; cursor: inherit;" data-toggle="modal" data-target="#modal2">View Details</button>
					</div>
				</div>
			</div>
				
				<div class="pricing pri3 w3ls editContent" style="outline: none; cursor: inherit;">
					<div class="price-top clr3 editContent" style="outline: none; cursor: inherit;">
						<h3 class="editContent" style="outline: none; cursor: inherit;">GOLD</h3>
					</div>
					<div class="price-bottom editContent" style="outline: none; cursor: inherit;">
					
						<div class="price2">
						<ul>
							<li class="editContent">Exam Portal | Rs. 30,000/-</li>
							<li class="editContent">Teacher Registration | Rs. Nill</li>
							<li><b style="color: #fff">For 100+ users, per user Charges</b><hr style="margin: 5px;"></li>
							<li class="editContent">Student Registration | Rs. 1,000/-</li>
							
							<li class="editContent">NEET/JEE Main Test Series<p> Rs. 2,000/-</p>JEE Advanced Test Series<p> Rs. 2,500/-</p>
								JEE Main + Advanced Test Series<p> Rs. 4,000/-</p></li>
						</ul>
							<button class="clr3 btn button" style="outline: none; cursor: inherit;" data-toggle="modal" data-target="#modal3">View Details</button>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			
			
		</div>	
					<div class="clear"></div>
		
		<div class="copyright">
			<p>© 2019 Delta Trek All rights reserved | Design by Delta Trek</p>
		</div>
</div></div><!-- /#page -->
  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
body {
 background-image: url("{{ asset('img/offers.jpg') }}");
 zoom:0.8;
}
.price-bottom ul li {
	line-height: 1.5em;
	font-size: 17px !important;
}
.price2 ul{
	padding-left: 20px;
	padding-right: 20px;
}
.clr2{
	background: #11a9f1;
}
.clr1{
	background: #fe6147;
}
.class span{
	font-weight: bold;
}
</style>
</body></html>