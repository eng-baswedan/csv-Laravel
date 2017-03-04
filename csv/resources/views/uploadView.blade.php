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
    <div class="col-md-6">

           <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover">
                <thead>
                  <tr>
                  <?php
          if($Exie==1){
            $numT=count($AllData2);
          }else{
            foreach ($AllData2 as $Data) 
            { 
              $Datas = explode(";", $Data); 
              $numT=count($Datas);
              if($numT==1){
                $Datas = explode(",", $Data); 
              }
              $numT=count($Datas);
            }
          }
                
  for ($x = 0; $x < $numT; $x++) {
    echo '<th style="">';
    echo '<div class="th-inner sortable">Columns['.($x+1).']</div>';
    echo '<div class="fht-cell"></div>';
    echo '</th>';
  }//loop exit
?>
  
          </tr>
         </thead>
            <tbody>
    <?php
            if($Exie==1){

              for ($xx = 0; $xx < $row; $xx++) {
                $row2=($row-2);
                if($xx<=($row2)){
                  echo '<tr data-index="'.$xx.'">';
                  for ($x = 0; $x < $numT; $x++) {
                  echo '<td style="">'.$AllData[$xx][$x].'</td>';
                  }
                  echo "</tr>";
                  }
              }
          }else{
            $Xi=0;
                for ($xx = 0; $xx < $row; $xx++) {
              $AllData2=$AllData[$xx];
                foreach ($AllData2 as $Data) {
              $Datas = explode(";", $Data); 
              $numT=count($Datas);
              if($numT==1){
                $Datas = explode(",", $Data); 
              }

              echo '<tr data-index="'.$Xi.'">';
            foreach ($Datas as $Data) 
            { 

              $Data=preg_replace('/"/','',$Data);
              echo '<td style="">'.$Data.'</td>';
             }
            echo "</tr>";
                    $Xi=$Xi+1;
     
                    $xx++; 
                }
            }
            }
?>
            </tbody>
        </table>

 </div>

</body>
</html>
