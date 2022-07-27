<!DOCTYPE html>
<html>
 <head>
  <title>Subjects</title>
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
  td:nth-of-type(1):before { content: "ID:"; }
  td:nth-of-type(2):before { content: "Name:"; }
  td:nth-of-type(3):before { content: "Status:"; }
  td:nth-of-type(4):before { content: "Action:"; }
  
}
</style>

 <body> 
  <div class="">
   <h3 class="heading"><center> <b>Subjects</b></center></h3><br>
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
         <th>sub_id</th> 
          <th>Student id</th>
           <th>Standard</th>
         <th>English</th>
         <th>Hindi</th>
         <th>Marathi</th>
         <th>Social Science</th>
         <th>Total</th>
         <th>Obtained</th>
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
   url:"/subject_livetable/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable="true" id="sub_id"></td>';
    html += '<td contenteditable="true" id="stu_id"></td>';
    //html += '<td ><select id="dept_status" style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="active">active</option><option  value="inactive">inactive</option></select></td>';
     //html += '<td contenteditable="true" id="std"></td>';
     html += '<td ><select id="std" style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="1">first</option><option  value="2">second</option><option  value="3">third</option><option  value="4">fourth</option><option  value="5">fifth</option></select></td>';

   // html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
      html += '<td contenteditable="true" id="eng"></td>';
       html += '<td contenteditable="true" id="hin"></td>';
        html += '<td contenteditable="true" id="mar"></td>';
         html += '<td contenteditable="true" id="ss"></td>';
          html += '<td contenteditable="true" id="total"></td>';
           html += '<td contenteditable="true" id="obtained"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';

     html +='<td class="column_name" data-column_name="sub_id"  data-sub_id="'+data[count].sub_id+'">'+data[count].sub_id+'</td>';

     html +='<td contenteditable="false"  class="column_name" data-column_name="stu_id" data-sub_id="'+data[count].sub_id+'">'+data[count].stu_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="std" data-sub_id="'+data[count].sub_id+'">'+data[count].std+'</td>';
     //html += '<td contenteditable="false" class="column_name" data-column_name="std" data-sub_id="'+data[count].sub_id+'">'+data[count].dept_status+'</td>';


     html += '<td contenteditable="false" class="column_name" data-column_name="eng" data-sub_id="'+data[count].sub_id+'">'+data[count].eng+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="hin" data-sub_id="'+data[count].sub_id+'">'+data[count].hin+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="mar" data-sub_id="'+data[count].sub_id+'">'+data[count].mar+'</td>';

html += '<td contenteditable="false" class="column_name" data-column_name="ss" data-sub_id="'+data[count].sub_id+'">'+data[count].ss+'</td>';

html += '<td contenteditable="false" class="column_name" data-column_name="total" data-sub_id="'+data[count].sub_id+'">'+data[count].total+'</td>';

html += '<td contenteditable="false" class="column_name" data-column_name="obtained" data-sub_id="'+data[count].sub_id+'">'+data[count].obtained+'</td>';


     html += '<td><button type="button" class="btn btn-danger btn-xs delete" dept_id="'+data[count].sub_id+'">Delete</button></td></tr>';

    }
    $('tbody').html(html);
   }
  });
 }
//search function


 var _token = $('input[name="_token"]').val();


 $(document).on('click', '#add', function(){
  var sub_id = $('#sub_id').text();
  var stu_id = $('#stu_id').text();
  var std = $('#std').val();
  var eng = $('#eng').text();
  var hin = $('#hin').text();
  var mar = $('#mar').text();
  var ss = $('#ss').text();
  var total = $('#total').text();
  var obtained = $('#obtained').text();
  if(stu_id != '' && std != ''&& eng != ''&& hin != ''&& mar != ''&& ss != ''&& total != ''&& obtained != '')
  {
   $.ajax({
    url:"{{ route('subject_livetable.add_data') }}",
    method:"POST",
    data:{sub_id:sub_id,stu_id:stu_id,std:std,eng:eng,hin:hin,mar:mar,ss:ss,total:total,obtained:obtained,_token:_token},
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
  var sub_id = $(this).data("sub_id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('subject_livetable.update_data') }}",
    method:"POST",
data:{column_name:column_name, column_value:column_value,sub_id:sub_id,_token:_token},
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
  var sub_id = $(this).attr("sub_id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('subject_livetable.delete_data') }}",
    method:"POST",
    data:{sub_id:sub_id,_token:_token},
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
