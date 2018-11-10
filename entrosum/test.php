<!DOCTYPE html>
<html>
    <head>
        <style>
            table tr td, table tr th{
                border: black 1px solid;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
        # connect to mysql server
        # and select the database, on which
        # we will work.
        $conn = mysql_connect('', 'root', '');
        $db   = mysql_select_db('test');

        # Query the data from database.
        $query  = 'SELECT * FROM agenda ORDER BY topic, spkid';
        $result = mysql_query($query);

        # $arr is array which will be help ful during
        # printing
        $arr = array();

        # Intialize the array, which will
        # store the fetched data.
        $spk = array();
        $top = array();

        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        #     data saving and rowspan calculation        #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#

        # Loop over all the fetched data, and save the
        # data.
        while($row = mysql_fetch_assoc($result)) {
            array_push($top, $row['topic']);
            array_push($spk, $row['spk']);

            if (!isset($arr[$row['topic']])) {
                $arr[$row['topic']]['rowspan'] = 0;
            }
            $arr[$row['topic']]['printed'] = 'no';
            $arr[$row['topic']]['rowspan'] += 1;
        }


        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        #        DATA PRINTING             #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        echo "<table cellspacing='0' cellpadding='0'>
                <tr>
                    <th>Topic</th>
                    <th>Spk</th>
                </tr>";


        for($i=0; $i < sizeof($spk); $i++) {
            $topics = $top[$i];
            echo "<tr>";

            # If this row is not printed then print.
            # and make the printed value to "yes", so that
            # next time it will not printed.
            if ($arr[$topics]['printed'] == 'no') {
                echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$topics."</td>";
                $arr[$empName]['printed'] = 'yes';
            }
            echo "<td>".$spk[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>






<table class="table">
  <?php
  $select="SELECT agenda.topic,agenda.spkid,agenda.stime,agenda.etime,speakers.id,speakers.name,speakers.desig,speakers.company FROM agenda,speakers";
  $res=mysqli_query($db,$select);
  if(mysqli_num_rows($res)>0){
    echo "<tr class='success'>
          <th>Topic</th>
          <th>Speaker Name(s)</th>
          <th>Designation</th>
          <th>Company</th>
          <th>Start time</th>
          <th>End time</th>
          <th>Delete</th>
          <th>Edit</th>
      </tr>";
      while($row=mysqli_fetch_assoc($res)){
        $topicURL=$row['topic'];
        $nameURL = $row['name'];
        $desigURL = $row['desig'];
        $companyURL = $row['company'];
        $startURL = $row['stime'];
        $endURL = $row['etime'];
        echo " <tr class='info'>";?>
            <td><h4 style="text-align:center; overflow:hidden"><?php echo $topicURL;?></h4></td>
  <td><h4 style="text-align:center; overflow:hidden"><?php  $select="SELECT * from agenda where topic in (select topic from agenda group by topic having count(*) > 1)"; $res=mysqli_query($db,$select);
     while($row=mysqli_fetch_array($res)){
       echo $row['spkid'];}?></h4></td>
  <td><h5 style="text-align:center; overflow:hidden"><?php echo $desigURL;?></h5></td>
  <td><h6 style="text-align:center; overflow:hidden"><?php echo $companyURL;?></h6></td>
  <td><h4 style="text-align:center; overflow:hidden"><?php echo $startURL;?></h4></td>
  <td><h4 style="text-align:center; overflow:hidden"><?php echo $endURL;?></h4></td>
  <td><a href="deletespeak.php?id=<?php echo $row['id']?>">Delete File </a></td>
  <td><a href="editspeak.php?edit=<?php echo $row['id']?>">Edit File</a></td>
</tr>
<?php
}
}
?>
</table>


<table>
<tr>
<th>First Name:</th>
<td>Bill Gates</td>
</tr>
<tr>
<th rowspan="2">Telephone:</th>
<td>555 77 854</td>
</tr>
<tr>
<td>555 77 855</td>
</tr>
</table>
