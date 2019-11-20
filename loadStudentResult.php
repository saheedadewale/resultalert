<?php
include_once 'db.php';
//function that return student point
function Point($score){
  if($score < 40){
    $pt = 0;
  }elseif ($score >=40 && $score < 45) {
    $pt = 1;
  }
  elseif ($score >=45 && $score < 50) {
    $pt = 1.5;
  }
  elseif ($score >=50 && $score < 55) {
    $pt = 2.0;
  }
  elseif ($score >=55 && $score < 60) {
    $pt = 2.5;
  }
  elseif ($score >=60 && $score < 65) {
    $pt = 3.0;
  }
  elseif ($score >=65 && $score < 70) {
    $pt = 3.5;
  }
  elseif ($score >=70 && $score < 75) {
    $pt = 3.75;
  }
  elseif ($score >=75 && $score < 100) {
    $pt = 4;
  }else{
    $pt = 0;
  }
  return $pt;
}
$matricNumber = $_REQUEST['matricNumber'];
 $myClass = $_REQUEST['myClass'];
 $semester = $_REQUEST['semester'];

 switch ($myClass) {
      case 'ND1':
        $table = "nd1result";
        break;
      case 'ND2':
        $table = "nd2result";
        break;
      case 'HND1':
        $table = "hnd1result";
        break;
      case 'HND2':
        $table = "hnd2result";
        break;
      default:
        echo '<script> alert("Please Select Level of Study") </script>';
        break;
    }
;
 $output = '';  
   
 $sql = "SELECT * FROM $table WHERE matricno='$matricNumber' and semester='$semester'";
 $result = mysqli_query($connect, $sql);
 $rows = mysqli_num_rows($result);
 if($rows > 0){
 $output .= '  
 <table class="table table-bordered">
<tr><th>Course Code</th><th>Course Unit</th><th>Score</th><th>Point</th></tr>
 ';  
 if(mysqli_num_rows($result) > 0)  
 {  
  $sumUnit = 0;
  $sumPoint = 0;
      while($row = mysqli_fetch_array($result))  
      {  
      $sumUnit +=$row['unit'];
      $sumPoint +=Point($row['score'])*$row['unit'];
      $output .= '  
                  <tr><td>'.$row['ccode'].'</td><td>'.$row['unit'].'</td><td>'.$row['score'].'</td><td>'.Point($row['score'])*$row['unit'].'</td> </tr>
               ';
}
$output .='<tr style="background:rgba(60,169,100,.4); color:white; font-weight:bold; font-size:15px;"><td><strong>TOTALS: </strong></td><td>'.$sumUnit.'</td><td></td><td>'.$sumPoint.'</td> </tr>
          <tr style="background:rgba(60,169,100,.7); color:white; font-weight:bold; font-size:18px;"><td><strong>GPA: </strong></td><td id="gpa">'.$sumPoint / $sumUnit.'</td><td></td><td></td> </tr>';
              $output .='</table><li class="list-group-item myList"><button class="btn btn-success" id="saveGPA"><i class="icon-save"></i> Save Result</button></li> 
                
           ';    
 }  
  
 $output .= '</ul>  
      </div>';  
  }else{
     $output .= '  
      <table class="table table-bordered">
      <tr><th>Course Code</th><th>Course Unit</th><th>Score</th><th>Point</th></tr>
      <tr style="color:red;"><td colspan="4"><i class="icon-times"></i> No Record Found for this semester </td></tr>
 '; 
  } 
 //echo json_encode($output);  
      echo $output;



?>