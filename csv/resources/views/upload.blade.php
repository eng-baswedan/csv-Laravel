<html>
<head>
  <title>Upload Content CSV</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
       <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>Upload Content CSV </div>
        <div class="panel-body panel-body-add">
            <div class="col-md-6">
                  <form class="form-horizontal" method="POST" action="{{url('/upload')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="upload-csv" class="control-label">Upload CSV or Excel: </label>
                      <input name="upload-csv" type="file" class="btn btn-success pull-right">
                    </div>
                    <input name="submit" type="submit" value="Upload" class="btn btn-success pull-right">
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>

</body>
</html>
