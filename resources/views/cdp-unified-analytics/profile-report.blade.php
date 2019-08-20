@extends('layouts.master')
@section('heading')
<h1>Unified Analytics for Identity Profile</h1>
@stop

@section('content')

<div class="container-fluid">

  <!-- MAIN BODY here -->
  <div class="line"></div>

  <div class="text-center">
    <img src="https://img.icons8.com/carbon-copy/2x/user.png" alt="Profile Avatar" class="profile_avatar">
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="profile_info">
        <h3> Profile Information </h3>
        <div class="profile_data">
          <h4><span class="label label-default">UUID</span> e4b82722-ab4b-4c42-bccc-5d41ba18e5de </h4>

          <h4><span class="label label-default">First Session</span> 2018.07.25 </h4>
          <h4><span class="label label-default">First Session</span> 2019.07.25 </h4>
          <h4><span class="label label-default">Media Hit</span> 102 </h4>
          <h4><span class="label label-default">Avg time on Digital Media </span> 8 hours / day </h4>
          <h4><span class="label label-default">Region</span> Vietnam, Nha Trang </h4>

          <h4><span class="label label-default">Device type</span> Smartphones </h4>
          <h4><span class="label label-default">Device name</span> Nokia 7 plus </h4>
          <h4><span class="label label-default">Browser</span> Chrome 67 </h4>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="profile_info">
        <h3> Personal Information </h3>
        <div class="profile_data">

          <h4><span class="label label-default">Name</span> Trai Nguyen </h4>
          <h4><span class="label label-default">Age </span> 28 </h4>
          <h4><span class="label label-default">Gender </span> Male </h4>

          <h4><span class="label label-default">Email</span> user@example.com </h4>
          <h4><span class="label label-default">Mobile</span> 123456 </h4>
          <h4><span class="label label-default">Address</span> Phu Lam , P.13, Q.6, TP.HCM </h4>
          <h4><span class="label label-default">Education status</span> University </h4>
          <h4><span class="label label-default">Family status</span> Single </h4>

          <h4><span class="label label-default">Facebook Profile ID </span>
            <a target="_blank" href="https://www.facebook.com/100001265810045"> 100001265810045 </a>
          </h4>
          <h4><span class="label label-default">CRM Profile ID </span>
            <a target="_blank" href="#"> 1234578 </a>
          </h4>

        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-6 bar-module">
      <div>
        <h3>Persornal Lifestyle Trends</h3>
      </div>
      <div class="pairs">
        <div class="heading-slider slider-outer  ">
          <div class="name">Wearable Tech</div>
          <div class="slider-container">
            <div class="slider-bar" style="width: 82%;"></div>
          </div>
        </div>
        <div class="heading-slider slider-outer  ">
          <div class="name">Travel</div>
          <div class="slider-container">
            <div class="slider-bar" style="width: 37%;"></div>
          </div>
        </div>
        <div class="heading-slider slider-outer  ">
          <div class="name">Sport</div>
          <div class="slider-container">
            <div class="slider-bar" style="width: 99%;"></div>
          </div>
        </div>
        <div class="heading-slider slider-outer  ">
          <div class="name">Consumption</div>
          <div class="slider-container">
            <div class="slider-bar" style="width: 70%;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 ">
      <div>
        <h3>Predictive Personality Traits(The OCEAN Model) </h3>
      </div>
      <div class="pairs">
          <div id="chart_persornality">
          </div>
      </div>
    </div>

  </div>

  <br>
  <div class="line"></div>

  <div class="row">
    <div class="col-md-6">
      <div id="venn_two" style=float:left>
        <h3 style="text-align: center">Media Touchpoints</h3>
      </div>
    </div>
    <div class="col-md-6">

      <div class=" bar-module">
        <div>
          <h3>Preferred Channels</h3>
        </div>
        <div class="pairs">
          <div class="heading-slider slider-outer  ">
            <div class="name">Traditional Ads</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 62%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Social Media</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 37%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Referral</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 99%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer ">
            <div class="name">Guerrilla Efforts &amp; PR</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 13%;"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="line"></div>

  <div class="row">
    <div class="col-md-6">

      <div class=" bar-module">
        <div>
          <h3>Top Preferred Brands</h3>
        </div>
        <div class="pairs">
          <div class="heading-slider slider-outer  ">
            <div class="name">Apple</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 62%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Nike</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 37%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Coffeehouse</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 99%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer ">
            <div class="name">Trung Nguyen Legends</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 13%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">

      <div class=" bar-module">
        <div>
          <h3>Top Preferred Product's Categories</h3>
        </div>
        <div class="pairs">
          <div class="heading-slider slider-outer  ">
            <div class="name">Tech</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 62%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Books</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 37%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer  ">
            <div class="name">Shoes</div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 99%;"></div>
            </div>
          </div>
          <div class="heading-slider slider-outer ">
            <div class="name">Coffee </div>
            <div class="slider-container">
              <div class="slider-bar" style="width: 13%;"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <br>
  <div class="line"></div>

  <div class="row">
    <h3 style="text-align: center"> Profile Journey Map </h3>
    <img src="https://miro.medium.com/max/2000/1*SEEuVwNhtuUIvNICszXzjA.png" style="width: 100%" />
    <div id="chart">
      <svg></svg>
    </div>
  </div>


</div>
<br><br><br><br>

@stop

@push('scripts')
<script type="text/javascript">
  ///Js code
 console.log('profileId ' + {{$profileId}} );
 jQuery(document).ready(function(){
    loadMediaTouchpoints()
    profilePathDiagram()
    personalityDiagram();
 });

 function loadMediaTouchpoints() {
  var sets = [
    {
      sets: ["Email"],
      figure: 27.92,
      label: "Email",
      size: 27.92
    },
    {
      sets: ["Direct Traffic"],
      figure: 55.28,
      label: "Direct Traffic",
      size: 55.28
    },
    {
      sets: ["Search Engine"],
      figure: 7.62,
      label: "Search Engine",
      size: 7.62
    },
    {
      sets: ["Email", "Direct Traffic"],
      figure: 3.03,
      label: "Email and Direct Traffic",
      size: 3.03
    },
    {
      sets: ["Email", "Search Engine"],
      figure: 1.66,
      label: "Email and Search Engine",
      size: 1.66
    },
    {
      sets: ["Direct Traffic", "Search Engine"],
      figure: 2.4,
      label: "Direct Traffic and Search Engine",
      size: 2.4
    },
    {
      sets: ["Email", "Direct Traffic", "Search Engine"],
      figure: 1.08,
      label: "Email, Direct Traffic, and Search Engine",
      size: 1.08
    }
  ];

  var chart = venn
    .VennDiagram()
    .width(500)
    .height(400);

  var div2 = d3
    .select("#venn_two")
    .datum(sets)
    .call(chart);
  div2.selectAll("text").style("fill", "white");
  div2
    .selectAll(".venn-circle path")
    .style("fill-opacity", 0.8)
    .style("stroke-width", 1)
    .style("stroke-opacity", 1)
    .style("stroke", "fff");

  var tooltip = d3
    .select("body")
    .append("div")
    .attr("class", "venntooltip");

  div2
    .selectAll("g")
    .on("mouseover", function(d, i) {
      // sort all the areas relative to the current item
      venn.sortAreas(div2, d);

      // Display a tooltip with the current size
      tooltip
        .transition()
        .duration(40)
        .style("opacity", 1);
      tooltip.text(d.size + "% media touchpoint " + d.label);

      // highlight the current path
      var selection = d3
        .select(this)
        .transition("tooltip")
        .duration(400);
      selection
        .select("path")
        .style("stroke-width", 3)
        .style("fill-opacity", d.sets.length == 1 ? 0.8 : 0)
        .style("stroke-opacity", 1);
    })

    .on("mousemove", function() {
      tooltip
        .style("left", d3.event.pageX + "px")
        .style("top", d3.event.pageY - 28 + "px");
    })

    .on("mouseout", function(d, i) {
      tooltip
        .transition()
        .duration(2500)
        .style("opacity", 0);
      var selection = d3
        .select(this)
        .transition("tooltip")
        .duration(400);
      selection
        .select("path")
        .style("stroke-width", 3)
        .style("fill-opacity", d.sets.length == 1 ? 0.8 : 0)
        .style("stroke-opacity", 1);
    });
}

function personalityDiagram(){
  var width = 300,
    height = 300;

  // Config for the Radar chart
  var config = {
      w: width,
      h: height,  
      maxValue: 100,
      levels: 5,
      ExtraWidthX: 300
  }

  var data = [
    [
      {"area": "Openness", "value": 80},
      {"area": "Conscientiousness", "value": 40},
      {"area": "Extraversion ", "value": 40},
      {"area": "Agreeableness ", "value": 90},
      {"area": "Neuroticism ", "value": 60}
  	]
  ]

  //Call function to draw the Radar chart

  
  
  var svg = d3.select('chart_persornality')
    .append('svg')
    .attr("width", width)
    .attr("height", height);

    RadarChart.draw("#chart_persornality", data, config);
}

function profilePathDiagram(){
    
}
    
</script>
@endpush