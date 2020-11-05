
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <br>
    <br>
    <div class="container">
        <center><h3>ขบวนรถไฟ</h3></center>
        <br>
        <div class="col-md-5">
            
        </div>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ขบวน</th>
      <th scope="col">สถานีต้นทาง</th>
      <th scope="col">เวลาออก</th>
      <th scope="col">ถึง</th>
      <th scope="col">ออก</th>
      <th scope="col">สถานีปลายทาง</th>
      <th scope="col">เวลาออก</th>
      <th scope="col">หมายเหตุ</th>
    </tr>
  </thead>
  <?php foreach($shows ->result_array() as $show){ ?>
 <tbody>
    <tr>
        <th scope="row"><?php echo $show['train_id']?></th>
        <th scope="row"><?php echo $show['Departure_station']?></th>
        <th scope="row"><?php echo $show['Time_out']?></th>
        <th scope="row"><?php echo $show['to_station1']?></th>
        <th scope="row"><?php echo $show['out_station1']?></th>
        <th scope="row"><?php echo $show['station_terminal']?></th> 
        <th scope="row"><?php echo $show['to_station2']?></th>
        <th scope="row"><?php echo $show['note']?></th>
                </tr>
            </tbody>
                  <?php } ?>
    </div>

    </div>

</body>

</html>


