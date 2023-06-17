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
            <th colspan="6">September 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=August" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
                </a>
                <a href="?bulan=October" id="right-icon">
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
              <a href='?bulan=August&tanggal=27' class="date-before">27</a>
              <?php $awal = 27; $bulan = "August"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=August&tanggal=28' class="date-before">28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=August&tanggal=29' class="date-before">29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=August&tanggal=30' class="date-before">30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=August&tanggal=31' class="date-before">31</a>
              <?php $awal = 31; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "September"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=2'>2</a>
              <?php $awal = 2; include "event.php"; ?>
            </td>
          </tr>
          
          <!-- Table row 2 sampai 4 -->

          <?php
            $awal = 3;
            include "ulang_kalender.php";
          ?>

          <!-- Table row 5 -->
          <tr>
            <td>
              <a href='?bulan=September&tanggal=24'>24</a>
              <?php $awal = 24; $bulan = "September"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=25'>25</a>
              <?php $awal = 25; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=26'>26</a>
              <?php $awal = 26; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=27'>27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=September&tanggal=30'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
          </tr>
        </table>

<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 8) {
    $( "td:eq( "+(date.getDate()+4)+" )" ).empty();
    $( "td:eq( "+(date.getDate()+4)+" )" ).append("<span><a style='color: #00b074' href='?bulan=September&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate()+4)+" )" ).append("<?php $awal=$tanggal;$bulan="September"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate()+4)+" )" ).addClass( "date-now" );
  }
  
</script>