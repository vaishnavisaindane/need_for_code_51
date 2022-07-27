<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


<style>

.heading{
      background: linear-gradient(to bottom, #6699ff 0%, #99ccff 100%);
      padding-top: 18px;
      padding-bottom: 10px;
      width: 100%;
      padding-left: 50px;
      margin-top: 0;
      color: #707070;
      
      margin-bottom: 0;
    }



  table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
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
    padding-left: 2%; 
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
  
  /*
  Label the data
  */
  /*td:nth-of-type(1):before { content: "ID:"; }
  td:nth-of-type(2):before { content: "Date:"; }
  td:nth-of-type(3):before { content: "Examination:"; }
  td:nth-of-type(4):before { content: "Total Marks:"; }*/
  
}
</style>
</head>
<body>
<h4 class="heading"><center> <b>Select Standard to see student record</b></center></h4><br>



<table style=" width: 96%; margin-left:2%; margin-right: 2%; margin-bottom: 30px;">
  <tr>
    <th scope="col">standard</th>
  
      <th>Select</th>
    </tr>
       
    <tbody>
  @foreach($s as $data)
      <tr>
        <td>{{$data->std}}</td>
    
        <td><a href="display_std/{{$data->std}}" title="select"><button class="btn btn-success">Select</button></a></td>
      </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>