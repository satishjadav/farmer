 <!DOCTYPE html>
<html>
<head>
<title>update records</title>
</head>
 
<body>
    

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>product_name</th>
    <th>brand</th>
    <th>cost_of_product</th>
    <th>dose_used</th>
    <th>purchased</th>
    <th>diseases</th>
    <th>insect</th>
    <th>deficiences</th>
    <th>type</th>
    <th>seed_type</th>
    <th>impact</th>
    <th>labour_wages</th>
    <th>self_labour</th>
    <th>pump_irrigation</th>
    <th>tractor_vehicle</th>
    <th>transport</th>
    <th>other_cost</th>
    <th>total_area</th>
    <th>total_earn</th>
    <th>sold_price</th>
    <th>transport_cost</th>
    <th>place_details</th>
   <th>Update</th>
  </tr>
  <?php
  $i=1;
  
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";

  echo "<td>".$row->product_name."</>";
  echo "<td>".$row->brand."</>";
  echo "<td>".$row->cost_of_product."</>";
  echo "<td>".$row->dose_used."</>";
  echo "<td>".$row->purchased."</>";
  echo "<td>".$row->diseases."</>";
  echo "<td>".$row->insect."</td>";
  echo "<td>".$row->deficiences."</td>";
  echo "<td>".$row->type."</td>";
  echo "<td>".$row->seed_type."</td>";
  echo "<td>".$row->impact."</td>";
  echo "<td>".$row->labour_wages."</td>";
  echo "<td>".$row->self_labour."</td>";
  echo "<td>".$row->pump_irrigation."</td>";
  echo "<td>".$row->tractor_vehicle."</td>";
  echo "<td>".$row->transport."</td>";
  echo "<td>".$row->other_cost."</td>";
  echo "<td>".$row->total_area."</td>";
  echo "<td>".$row->total_earn."</td>";
  echo "<td>".$row->sold_price."</td>";
  echo "<td>".$row->transport_cost."</td>";
  echo "<td>".$row->place_details."</td>";
  echo'<input type="hidden" name="id" value="'.$row->kisan_enquiry_id.'">';
   echo "<td><a id='updateform' href='updatedata/$row->kisan_enquiry_id.'>Update</a></td>";
  
  echo "</tr>";
  $i++;
  
  $i++;
   }
   ?>
</table>
 
</body>
</html>