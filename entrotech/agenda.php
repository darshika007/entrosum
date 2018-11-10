<?php
 include('connect.php');
//$query="select agenda.aid, agenda.stime, agenda.etime, agenda.adate, agenda.topic, agenda.mc, agenda.venue, agenda.spkid, speakers.id, speakers.name, speakers.desig, speakers.comp
  //      from speakers
    //    left join on agenda.spkid=speakers.id";
$query="select agenda.aid, agenda.stime, agenda.etime, agenda.topic, agenda.mc, agenda.vid, agenda.spkid, venue.audi
        from agenda
        left join venue on agenda.spkid=venue.vid";
$result=mysqli_query($db,$query)or die(mysqli_error($db));

 ?>
<html>
<head>
    <title>
        Entrotech summit Agenda
    </title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
        <div class="Content">
                <h2 style="text-align: center">Event Schedule</h2>

                <!-- <p style="line-height: 150%; margin-bottom: 4px; text-align: center"> <b>
                    <font color="black" style="font-size: 16pt">Entrotech Summit<br> Event Schedule</font>
                  </b></p> -->

                <div style="box-sizing: border-box;">
                  <div class="table-users">
                    <table cellspacing="0">
                      <tbody>
                        <tr>
                          <th style="font-weight: bold;" width="100">
                            <p> Date</p>
                          </th>
                          <th style="font-weight: bold;" width="120">
                            <p> Time</p>
                          </th>
                          <th class="eventcont" style="font-weight: bold;">
                            <p> Program</p>
                          </th>
                          <th style="font-weight: bold;" width="150">
                            <p> Organizer</p>
                          </th>
                          <th style="font-weight: bold;" width="200">
                            <p> Venue</p>
                          </th>
                        </tr>
                        <tr>
                          <td>
                            <p> Oct.4<br> Thurs.</p>
                          </td>
                          <td>
                            <p> 10:30-12:00</p>
                          </td>
                          <td class="eventcont"> Inauguration&nbsp;&amp; VIP Showground Tour</td>
                          <td> TWTC (TAITRA)</td>
                          <td> Hall Gulmohar, BIEC</td>
                        </tr>
                        <?php
                        $topic="";
                         while ($row=mysqli_fetch_array($result)) {
                          if ($row['topic']==$topic) {
                            continue;
                          }
                          $topic=$row['topic'];
                         ?>
                        <tr>
                          <td>
                            <p> <?php// echo $row['adate']; ?>12.12-12.12</p>
                          </td>
                          <td>
                            <p><?php echo $row['stime']." - ".$row['etime']; ?></p>
                          </td>
                          <td class="eventcont">
                            <p> <?php echo $row['topic']; ?></p>
                          </td>
                          <td>
                            <p> <?php $query="select speakers.name,speakers.desig,speakers.company
                                              from agenda
                                              inner join speakers on agenda.spkid=speakers.id
                                              where topic='".$row['topic']."'";
                                      $res=mysqli_query($db,$query);
                                      while ($res1=mysqli_fetch_array($res)) {
                                        echo $res1['name'].", ";
                                        echo $res1['desig'].", ";
                                        echo $res1['company']."<br>";
                                      }
                                ?>
                            </p>
                          </td>
                          <td>
                            <p> <?php echo $row['audi'] ?></p>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <p> &nbsp;</p>
                <p></p>
              </div>
</body>
</html>
