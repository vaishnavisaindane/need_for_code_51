<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV to Database in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">

        <a href="/sel_stu_exam"><button class="btn btn-success" style="float: right; padding-left: 50px; padding-right: 50px;">Back</button></a><br><br>

        
        <h2 class="mb-4">
         Import and Export CSV & Excel to Database 
        </h2>

        <form action="{{ route('file-import-stu') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Choose file & Import data</button><br>
            <br>
            <a class="btn btn-success" href="{{ route('file-export-stu') }}">Export data of Student table</a><br>
            <br>
        </form>
    </div>
</body>


</html>