

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ishan Verma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ishan Verma a University of vermont computer science student ishan-verma.com digital portfolio combining years of projects and experience work into one convenient location.">
  <link rel="icon" type="image/jpeg" href="iv.jpeg" />
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
  .mapcenter{
    
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

  }
  #map {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
}
  .social {
    margin: 0;
    padding: 0;
}

.social ul {
    margin: 0;
    padding: 5px;
}

.social ul li {
    margin: 5px;
    list-style: none outside none;
    display: inline-block;
}

.social i {
    width: 40px;
    height: 40px;
    color: #FFF;
    background-color: #909AA0;
    font-size: 22px;
    text-align:center;
    padding-top: 12px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
}

.social i:hover {
    color: #FFF;
    text-decoration: none;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
}

.social .fa-facebook:hover {
    background: #4060A5;
}

.social .fa-twitter:hover {
    background: #00ABE3;
}

.social .fa-google-plus:hover {
    background: #e64522;
}

.social .fa-github:hover {
    background: #343434;
}

.social .fa-pinterest:hover {
    background: #cb2027;
}

.social .fa-linkedin:hover {
    background: #0094BC;
}

.social .fa-flickr:hover {
    background: #FF57AE;
}

.social .fa-instagram:hover {
    background: #375989;
}

.social .fa-vimeo-square:hover {
    background: #83DAEB;
}

.social .fa-stack-overflow:hover {
    background: #FEA501;
}

.social .fa-dropbox:hover {
    background: #017FE5;
}

.social .fa-tumblr:hover {
    background: #3a5876;
}

.social .fa-dribbble:hover {
    background: #F46899;
}

.social .fa-skype:hover {
    background: #00C6FF;
}

.social .fa-stack-exchange:hover {
    background: #4D86C9;
}

.social .fa-youtube:hover {
    background: #FF1F25;
}

.social .fa-xing:hover {
    background: #005C5E;
}

.social .fa-rss:hover {
    background: #e88845;
}

.social .fa-foursquare:hover {
    background: #09B9E0;
}

.social .fa-youtube-play:hover {
    background: #DF192A;
}
  @media (min-width: 768px) {
  .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
  }
}
  .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}

.timeline > li {
  margin-bottom: 20px;
  position: relative;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li > .timeline-panel {
  width: 46%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}

.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

.timeline-badge.primary {
  background-color: #2e6da4 !important;
}

.timeline-badge.success {
  background-color: #3f903f !important;
}

.timeline-badge.warning {
  background-color: #f0ad4e !important;
}

.timeline-badge.danger {
  background-color: #d9534f !important;
}

.timeline-badge.info {
  background-color: #5bc0de !important;
}

.timeline-title {
  margin-top: 0;
  color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}

.timeline-body > p + p {
  margin-top: 5px;
}
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <img src="cinqueterre.jpg" class="img-circle" alt="Cinque Terre" width="304" height="304">
  <br>
  <h1>Ishan Verma</h1>
  <br>
  <p>Computer Science Student at The Univeristy of Vermont</p>
  <br>
  <br>
  <br>
</div>

<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ishan Verma</a>
    </div>
    <ul class="nav navbar-nav navbar-center">
        <li><a href="#1">Education</a></li>
        <li><a href="#2">Experience</a></li>
      <li><a href="#3">Contact</a></li>
    </ul>
    
  </div>
</nav>



<!---Education---->


<div id="1" class="container">
  <div class="page-header text-center">
    <h1 id="timeline">Education</h1>
  </div>
  <ul class="timeline">
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">The University of Vermont</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">2015-2018</p>
          <p class="text-muted">Bachelors of Science in Computer Science</p>
          <p>Relevant Coursework: <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=120&action=Search">C++</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=020&action=Search">Python</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=110&action=Search">Java</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=064&action=Search">Discrete Structures</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=124&action=Search">Data Structures</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=121&action=Search">Computer Organization</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=008&action=Search">PHP,
      MySQL, HTML, JavaScript, CSS</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=148&action=Search">Database Design for Web</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=224&action=Search">Algorithm Design & Analysis</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=205&action=Search">Software Engineering</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=204&action=Search">Database Design</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=275&action=Search">Mobile App Development</a>, <a href="http://www.uvm.edu/academics/courses/?subject=CS&number=201&action=Search">Operating System</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Humboldt-Universität zu Berlin</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Summer 2016</p>
          <p class="text-muted">Summer Abroad</p>
          <p>Immersed in German language and culture and travelled across Germany and Europe</p>
        </div>
      </div>
    </li>
    
  </ul>
</div>

<!---end - Education---->

<!---Experience---->

<div id="2" class="container">
  <div class="page-header text-center">
    <h1 id="timeline">Experience</h1>
  </div>
  <ul class="timeline">
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Internship</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">June 2018 - August 2018</p>
          
          <p>Actively Looking for an Internship (Sage Corps Program)</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Job Shadow, Chief Technology Officer - Embark Corporation</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">January 2017</p>
          
          <p >
                Explored CTO’s daily schedule and duties at a tech company in New York City
              </p>
              <p >
                Interacted with Company’s employees and learned about their contribution
              </p>
              <p >
        Learned about Company’s History and their mission
              </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">International Student Orientation Leader, University of Vermont</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">August 2016</p>
          <p >
                Helped Office of International Education organizing orientation for new international students
              </p>
              <p >
                Supported entering students and their parents acclimate to new environment
              </p>
              <p >
                Moved international students into residence halls
              </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Resident Advisor, University of Vermont Department of ResLife</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Fall 2016</p>
          <p >
                Advised and mentored 50 resident
              </p>
              <p >
                Enforced hall policy and performed conflict and crisis management
              </p>
              <p >
                Created monthly informational boards that promotes diversity, engagement, and health
              </p>
              <p >
                Planned, implemented and conducted activities and programs to build community and help meet resident’s social,
academic, and developmental need
              </p>
        </div>
      </div>
    </li>
  </ul>
</div>


<!---end - Experience---->



<!---Projects---->
<div class="container">
  <div class="page-header text-center">
    <h1 id="timeline">Projects</h1>
  </div>
  <ul class="timeline">
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Catamount Food Service</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Fall 2017</p>
          Developed website using PHP and MySQL database that will allow only UVM students to order cafeteria food online using their UVM mail idSage Corps Program</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">UVM Marketplace - Annual Agile CodeFest by IBM & State Street(3rd Place Overall)</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Spring 2017</p>
          
          <p >
                Worked in a team of 10 people for 12 hours to develop a website using HTML, CSS, PHP, and MySQL to improve lives of UVM students
          </p>
             
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Snake Game</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Spring 2017</p>
          <p >
                Developed snake game using C++ and OpenGL in a team of 3 people
              </p>
              
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="glyphicon glyphicon-building"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Graph Draw</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">Fall 2016</p>
          <p >
                Developed a basic paint application from scratch using Java and JavaFx
              </p>
              
        </div>
      </div>
    </li>
  </ul>
</div>


<!---end - Projects---->

<!---contact--->
<div id="3" class="container">
  <div class="page-header text-center">
    <h1 id="timeline">Contact Details</h1>
  </div>
<div class="container text-center">
              <ul class="list-unstyled">
                <li><span>Redstone Apartments, South Prospect St</span></li>
                <li><span>Burlington, VT</span></li>
                <li><span>+1(802)-343-5883</span></li>
                <li><span>iverma@uvm.edu</span></li>
              </ul>
</div>
<div id="map" class="mapcenter">

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDvi1-UGUvgaPQu5hnwkgLf-czgbKBw6f4'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.org/'>google map widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=40534055a33df0faa89fd3a4ed2dfe193a3194d6'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(44.4664477,-73.20029299999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.4664477,-73.20029299999999)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br>redstone apartments, south prospect<br>05401 Burlington<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<br>
<div class="social container text-center">
            
          <a href="https://www.facebook.com/profile.php?id=100004430535781"><i class="fa fa-lg fa-facebook"></i></a>
          <a href="https://www.linkedin.com/in/ishan-v-15bb64111/"><i class="fa fa-lg fa-linkedin"></i></a>
          <a href="https://www.instagram.com/herrishan/"><i class="fa fa-lg fa-instagram"></i></a>
          <a href="https://github.com/ishanverma1"><i class="fa fa-lg fa-github"></i></a>
        
</div>    
    <br>
  </div>

<!--end-contact--->



<div class="jumbotron text-center" style="margin-bottom:0">
  <p class="text-muted">@2018 Ishan Verma. All rights reserved.</p>
</div>

</body>
</html>
