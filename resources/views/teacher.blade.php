<!DOCTYPE html>
<html>
<head>
  <title>
    Teacher Login
    </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@500&display=swap" rel="stylesheet">

<style type="text/css">
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      
    }

       .Login{
       color: rgb(238, 234, 234);
       font-size: x-large;
       font-family: 'Times New Roman', Times, serif ;


       }
    .abc{
            
 width: 80%;
  padding: 12px 20px;
  margin-top: 8px;
  /margin-bottom: 8px;/
  margin-left: 0px;
  /display: inline-block;/
  border: 1px solid #ccc;
  border-radius: 4px;
  /box-sizing: border-box;/
           }

    .container{
      margin-top: 28px;
    }
        body{
          background-color:rgb(219,226,226);
        }
       
        .imgcol{
          border-top-left-radius:30px;
          border-bottom-left-radius:30px;
            max-width:100%;
            height:65.5vh;
            opacity:0.7;
            
           }

        .imgcol:hover {
           opacity: 1.0;
          }
        .btn1{
          border:none;
          outline: none;
          height:50px;
          width:80%;
          background-color:black;
          color:white;
          border-radius:4px;
          font-weight:bold;
        }
        .btn1:hover
        {
           background-color:#2ECC71 ;
           border:1px solid;
           color:black; 
        }
        .himg{
          height:90px;
          width: 90px;
          margin-left: 20px;
        }
        h4{
          margin-left:8%;
          margin-top:2%;
          margin-bottom:2%;
          font-family:'Sofia';
          color: #2ECC71;
          font-weight: 900;

        }

      

        @media (max-width: 650px){
            .imgcol{
          
           display: none;
            
            
           }

           .abc{
            margin-left: 0%;
            width: 80%;
  padding: 12px 20px;
  /margin: 8px 0;/
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
           }

      h4{
          margin-left:16%;
          /margin-top:1%;/
          /margin-bottom:1%;/
          font-family:'Sofia';
          color: #2ECC71;
          font-weight: 900;

        }
        .container{
      margin-top: 50px;

        }
        .hiddennn{
          display: none;
        }



        
        }

</style>

</head>
<body >
<section class="Form my-4 mx 5">
<div class="container">
  
  <div class="row no-gutters" style=" background-color: white;border-radius:30px;box-shadow: 12px 12px 22px grey;">
    <div class="col-lg-3">
      <center> <img  class="imgcol" src="school.jpg" class="img" alt="" sizes="">
    </div></center>
    <div class="col-lg-9" style="height: 65.5vh; "><!-- px-5 pt-5 --><!-- col-lg-7 -->
   
    
   <table >
    <tr>
    <th></th>
    <th>
     <h5 style="color: lightseagreen;margin:0; margin-left: 100px ;font-family: 'Cormorant SC', serif;font-size: 55px;">ANCV School </h5> 
    </th>
   </tr>
   </table>
  <h4 style="margin-left: 115px; color: rgb(58, 58, 172);">Teacher Login</h4> 
      

      <form action="admin_login" class="database_operation" >
      {{ csrf_field() }}


        <div class="form-row ml-5">
          <div class="col-lg-7">
            <input type="text" placeholder="email" name="email" class=" abc"><br>
              @error('email')
              <span style="color:red;" >{{$message}}</span>
              @enderror
           </div>
        </div>
        

        <div class="form-row ml-5">
          <div class="col-lg-7">
            <input type="password" placeholder="Password" name="password" class=" abc"><br>
            
              @error('password')
              <span style="color:red;" >{{$message}}</span>
              @enderror
            </div>
         </div>     
        

        <div class="form-row ml-5">
          <div class="col-lg-7">
            <button type="submit" class="btn1 mt-3 mb-2 ">Login</button>
          </div>
        </div>  
        
        
            </div>
      </form>
    
    </div>
  

  </div>
 
</section>
</body>
</html>