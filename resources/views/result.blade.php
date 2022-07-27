<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/a076d05399.js"></script>






<script type="text/javascript"
src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<style type="text/css">
 .col-sm-6{

    font-weight: 900;
    color:white;
    text-shadow: 2px 2px 4px #000000;
  }

.container1{
  border-color:#DCDCDC;border-style:solid;border-width:2px 8px 2px 8px;
margin-left: 5%;
margin-right: 5%;

}

table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th.a { 
  background: #333; 
  color: white; 
  
}
td.b, th{ 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}


 .bordercss{ 

  padding: 10px; 
  border-bottom:1px solid #ccc; 
  text-align: left; 
 }

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

.container1{
  border-color:#DCDCDC;border-style:solid;border-width:0px;
}

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { 
  
    display: block; 
  }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;

  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }
  
  td:before { 
    /* Now like a table header */
   /* position: absolute;*/
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
  }

}
</style>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: "Revenue Chart of Acme Corporation"
  },
  axisY: {
    title: "Revenue (in USD)",
    includeZero: true,
    prefix: "$",
    suffix:  "k"
  },
  data: [{
    type: "bar",
    yValueFormatString: "$#,##0K",
    indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontWeight: "bolder",
    indexLabelFontColor: "white",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>





</head>
<body>

<br>
<br>
<div class="container" style="border-color:#DCDCDC;border-style:solid;border-width:2px 8px 2px 8px;"> 
  <div class="row">
   
    <table  style="width:100%;border-color:red;background: linear-gradient(90deg, #efd5ff 0%, #515ada 100%);" >

  <h3 style="color: green;">Personal Details</h3>
  <tr class="bordercss" >

    @foreach($data as $res2)
    <th ><span style="color: #696969;">Student name: </span> {{$res2->name}}</th>
    <th><span style="color: #696969;">Roll no:</span> {{$res2->roll}}</th>
  </tr>
  <tr class="bordercss">
    <th><span style="color: #696969;">Email: </span>{{$res2->email}}</th>
    <th><span style="color: #696969;">Standard: </span>{{$res2->std}}</th>
  </table>
    @endforeach
  </tr>
  <table  style="width:100%;border-color:red;background: linear-gradient(90deg, #efd5ff 0%, #515ada 100%);" >
  <h3 style="color: green;">Academic Marks</h3>
   @foreach($data3 as $res2)
   <tr class="bordercss">
    <th><span style="color: #696969;">English: </span>{{$res2->eng}}</th>
    <th><span style="color: #696969;">Hindi: </span>{{$res2->hin}}</th>
  </tr>
  <tr class="bordercss">
    <th><span style="color: #696969;">Marathi: </span>{{$res2->mar}}</th>
    <th><span style="color: #696969;">social science: </span>{{$res2->ss}}</th>
  </tr>
  <tr class="bordercss">
    <th><span style="color: #696969;">Total marks: </span>{{$res2->total}}</th>
    <th><span style="color: #696969;">Obtained marks: </span>{{$res2->obtained}}</th>
    @endforeach
  </tr>
  </table>
  <table  style="width:100%;border-color:red;background: linear-gradient(90deg, #efd5ff 0%, #515ada 100%);" >
   @foreach($data2 as $res2)
  <tr class="bordercss">
    <h3 style="color: green;">Cocurricular activity Points</h3>
    <th><span style="color: #696969;">Relay Points</span>{{$res2->relay}}</th>
    <th><span style="color: #696969;">Art Points</span>{{$res2->art}}</th>
  </tr>
   <tr class="bordercss">
    <th><span style="color: #696969;">Chess Points</span>{{$res2->chess}}</th>
    <th><span style="color: #696969;">Cricket Points</span>{{$res2->cricket}}</th>
  </tr>
  <tr class="bordercss">
    <th><span style="color: #696969;">Total Sport Points</span>{{$res2->total}}</th>
    <th><span style="color: #696969;">Points Obtained By Student</span>{{$res2->obtained_points}}</th>
    @endforeach
  </tr>
</table>
</div>
<br>
</body>
</html>







