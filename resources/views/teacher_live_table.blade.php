<!DOCTYPE html>
<html>
 <head>
  <title>Teachers</title>
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
  
  
}
</style>

 <body> 
  <div class="">
   <h3 class="heading"><center> <b>Teachers</b></center></h3><br>
   <!-- update button -->
<button href="#"  class="btn btn-primary" role="button" id="btninfo" style="float: right; "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><div id="myDIV" style="font-size:20px; display: inline-block;" >Update (Double Click)</div></button><br><br><br>

   <div class="panel panel-default">
    <div class="panel-heading">
      <!-- Search btn -->
<div style="float: right;"><input style="padding: 5px 30px;" type="text" placeholder="Search" class="form-controller" id="search" name="search"></input></div>
          <div id="result"></div><br><br>



    </div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">




    <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>id</th> 
          <th>u_name</th>
           <th>email</th>
         <th>password</th>
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
   url:"/teacher_livetable/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable="true" id="id"></td>';
    html += '<td contenteditable="true" id="u_name"></td>';
    html += '<td contenteditable="true" id="email"></td>';
    html += '<td contenteditable="true" id="password"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';

     html +='<td contenteditable="false" class="column_name" data-column_name="id"  data-id="'+data[count].id+'">'+data[count].id+'</td>';

     html +='<td contenteditable="false"  class="column_name" data-column_name="u_name" data-id="'+data[count].id+'">'+data[count].u_name+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="email" data-id="'+data[count].id+'">'+data[count].email+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="password" data-id="'+data[count].id+'">'+data[count].password+'</td>';


     html += '<td><button type="button" class="btn btn-danger btn-xs delete" dept_id="'+data[count].id+'">Delete</button></td></tr>';

    }
    $('tbody').html(html);
   }
  });
 }
//search function


 var _token = $('input[name="_token"]').val();


 $(document).on('click', '#add', function(){
  var id = $('#id').text();
  var u_name = $('#u_name').text();
  var email = $('#email').text();
  var password = $('#password').text();

  if(id != '' && u_name != ''&& email != ''&& password != '')
  {
   $.ajax({
    url:"{{ route('teacher_livetable.add_data') }}",
    method:"POST",
    data:{id:id,u_name:u_name,email:email,password:password,_token:_token},
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
  var id = $(this).data("id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('teacher_livetable.update_data') }}",
    method:"POST",
data:{column_name:column_name, column_value:column_value,id:id,_token:_token},
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
  var id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('teacher_livetable.delete_data') }}",
    method:"POST",
    data:{id:id,_token:_token},
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
