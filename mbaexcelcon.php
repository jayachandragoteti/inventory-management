<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "MBA_DEPARTMENT_data_" . date('d-m-Y') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  include 'connect.php';
  $result = "SELECT * FROM `branch` WHERE  `department`='MBA' AND `status`='ACCEPTED'  ORDER BY `sno` DESC";
  $sql = mysqli_query($conn, $result);
  while($row = mysqli_fetch_array($sql)) {
    if(!$flag) {
      // display field/column names as first row
      echo "sno"."\t"."Infrastructure"."\t"."Model Name"."\t"."Serial Number"."\t"."Type"."\t"."Purpose"."\t"."T/P"."\t"."date"."\t"."\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo $row['sno']."\t".$row['infra']."\t".$row['modelname']."\t".$row['serialno']."\t".$row['type']."\t".$row['purpose']."\t".$row['temper']."\t".$row['date']."\t"."\n";
  }
  exit;
?>