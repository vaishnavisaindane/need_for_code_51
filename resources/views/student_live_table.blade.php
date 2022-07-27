<!DOCTYPE html>
<html>
 <head>
  <title>Student's Details</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

<style type="text/css">
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
  
  /*
  Label the data
  */
  td:nth-of-type(1):before { content: "stu_id:"; }
  td:nth-of-type(2):before { content: "Name:"; }
  td:nth-of-type(3):before { content: "std:"; }
  td:nth-of-type(4):before { content: "email:"; }
  td:nth-of-type(5):before { content: "roll:"; }
  td:nth-of-type(6):before { content: "login_pass:"; }


  
}
</style>

 <body> 
  <div class="">
   <h3 class="heading"><center> <b>Student's Details</b></center></h3><br>
   <!-- update button -->
<button href="#"  class="btn btn-primary" role="button" id="btninfo" style="float: right; "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><div id="myDIV" style="font-size:20px; display: inline-block;" >Update (Double Click)</div></button><br><br><br>
<!------------------------------------->
<div class="row">

      <div class="col-sm-3 col-md-3 col-lg-3 box" style="margin-left: 0px; " >
<div class="panel panel-default">
    <div class="panel-heading" style="height: 90px;">
          <form action="{{ route('file-import-stu') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto; display: inline-block;">
                <div class="custom-file" style="padding-top: 2px;">
                    <input type="file" name="file" class="custom-file-label" id="customFile" required  accept=".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" title="file types allowed: .csv .xlsx .xls" >
                    <div style=" display: inline-block;"><br>
            <button class="btn btn-primary"> Import data</button>
            </div>

                </div>
            </div>
</div></div>
      </div>



      <div class="col-sm-3 col-md-3 col-lg-3 box" >

        <div class="panel panel-default">
    <div class="panel-heading" style="height: 90px;">
    <div class="panel-heading">To export student to excel</div>
        
        
       <a class="btn btn-primary" href="{{ route('file-export-stu') }}">Export students</a>
      </div>
</div></div>
</form>

      <div class="col-sm-3 col-md-3 col-lg-3 box" >
        
</div>  
</div>




    
@if(session('status_que'))
<div class="alert alert-success" role="alert">
    {{session('status_que')}}
</div>
@endif




@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<!-- error for excel file type required -->
@if(session('dangers'))
    @foreach($dangers as $error)
      <li>{{$error}}</li>
    @endforeach
@endif

<!------------------------------------->

   <div class="panel panel-default">
    <div class="panel-heading">
      <!-- Search btn--> 

    </div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">




    <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Student id</th>
         <th>name</th>
         <th>std</th>
         <th>email</th>
         <th>roll</th>
         <th>login_pass</th>

        </tr>
       </thead>
       <tbody></tbody>
      
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
</div>
 </body>
</html>

<script>
 // update button fuction 
$('document').ready(function(){
  var x = document.getElementById("myDIV");
  $('.glyphicon-pencil').closest('button').click(function () {
    if ($('td').attr('contenteditable') === 'false') {
        $('td').attr('contenteditable', true);
         x.innerHTML = "You can update table values now!";
    } else {
        $('td').attr('contenteditable', false);
        x.innerHTML = "click to update table.";
    }
  });
});

  //ajax crud of Department table
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"/stu_livetable/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
   html += '<td  contenteditable="true" id="stu_id"></td>';
     html += '<td contenteditable="true" id="name"></td>';
      html += '<td ><select id="std" style="height:41px;width:80px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="1">first</option><option  value="2">second</option><option  value="3">third</option><option  value="4">fourth</option><option  value="5">fifth</option></select></td>';
     html += '<td contenteditable="true" id="email"></td>';
     html += '<td contenteditable="true" id="roll"></td>';
     html += '<td contenteditable="true" id="login_pass"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';

    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';

    html +='<td contenteditable="false"  class="column_name" data-column_name="stu_id" data-stu_id="'+data[count].stu_id+'">'+data[count].stu_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="name" data-stu_id="'+data[count].stu_id+'">'+data[count].name+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="std" data-stu_id="'+data[count].stu_id+'">'+data[count].std+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="email" data-stu_id="'+data[count].stu_id+'">'+data[count].email+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="roll" data-stu_id="'+data[count].stu_id+'">'+data[count].roll+'</td>';
    html += '<td contenteditable="false" class="column_name" data-column_name="login_pass" data-stu_id="'+data[count].stu_id+'">'+data[count].login_pass+'</td>';
     

  
     html += '<td><button type="button" class="btn btn-danger btn-xs delete" stu_id="'+data[count].stu_id+'">Delete</button></td></tr>';

    } 
    $('tbody').html(html);
   }
  });
 }

 var _token = $('input[name="_token"]').val();


 $(document).on('click', '#add', function(){
  var stu_id=$('#stu_id').text();
  var name = $('#name').text();
  var std = $('#std').val();
  var email = $('#email').text();
  var roll = $('#roll').text();
  var login_pass = $('#login_pass').text();
  if(stu_id !=''&& name != ''&& std != ''&& email != ''&& roll != ''&& login_pass != '')
  {
   $.ajax({
    url:"{{ route('stu_livetable.add_data') }}",
    method:"POST",
    data:{stu_id:stu_id,name:name,std:std,email:email,roll:roll,login_pass:login_pass,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>All Fields are required</div>");
  }
 });

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var stu_id = $(this).data("stu_id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('stu_livetable.update_data') }}",
    method:"POST",
data:{column_name:column_name, column_value:column_value,stu_id:stu_id,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   })
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
  }
 });

 $(document).on('click', '.delete', function(){
  var stu_id = $(this).attr("stu_id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('stu_livetable.delete_data') }}",
    method:"POST",
    data:{stu_id:stu_id,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
 });
});
</script>
