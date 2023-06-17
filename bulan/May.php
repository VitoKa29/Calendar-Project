<?php

if (isset($bulan)) {
    $bulan = $_GET["bulan"];
}else{
    $bulan = date("F");

}
$tanggal = date("j");
?>
<style>
  a{
    color:black;
  }
</style>
<table>
          <tr class="icon">
            <th colspan="6">May 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=April" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
                </a>
                <a href="?bulan=June" id="right-icon">
                  <i class="i" data-feather="chevron-right"></i>
                </a>
              </div>
            </th>
          </tr>
          <!-- Table Header -->
          <tr class="day">
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
          </tr>

          <!-- Table row 1 -->
          <tr>
            <td class="date-before">
              <a href='?bulan=April&tanggal=30' class="date-before">30</a>
              <?php $awal = 30; $bulan = "April"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "May"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=2'>2</a>
              <?php $awal = 2; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=3'>3</a>
              <?php $awal = 3; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=4'>4</a>
              <?php $awal = 4; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=5'>5</a>
              <?php $awal = 5; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=6'>6</a>
              <?php $awal = 6; include "event.php"; ?>
            </td>
          </tr>
          
          <!-- Table row 2 sampai 4 -->

          <?php
            $awal = 7;
            include "ulang_kalender.php";
          ?>

          <!-- Table row 5 -->
          <tr>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=30'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=<?php echo $bulan; ?>&tanggal=31'>31</a>
              <?php $awal = 31; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=June&tanggal=1' class="date-before">1</a>
              <?php $awal = 1; $bulan = "June"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=June&tanggal=2' class="date-before">2</a>
              <?php $awal = 2;  include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=June&tanggal=3' class="date-before">3</a>
              <?php $awal = 3; include "event.php"; ?>
            </td>
          </tr>
        </table>

<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 4) {
    $( "td:eq( "+(date.getDate())+" )" ).empty();
    $( "td:eq( "+(date.getDate())+" )" ).append("<span><a style='color: #00b074' href='?bulan=May&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate())+" )" ).append("<?php $awal=$tanggal; $bulan="May"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate())+" )" ).addClass( "date-now" );
    
  }
  
</script>