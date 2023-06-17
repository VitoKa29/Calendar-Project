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
            <th colspan="6">March 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=February" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
                </a>
                <a href="?bulan=April" id="right-icon">
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
              <a href='?bulan=February&tanggal=26' class="date-before">26</a>
              <?php $awal = 26; $bulan = "February"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=February&tanggal=27' class="date-before">27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=February&tanggal=28' class="date-before">28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "March"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=2'>2</a>
              <?php $awal = 2; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=3'>3</a>
              <?php $awal = 3; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=4'>4</a>
              <?php $awal = 4; include "event.php"; ?>
            </td>
          </tr>
          
          <!-- Table row 2 sampai 4 -->

          <?php
            $awal = 5;
            include "ulang_kalender.php";
          ?>

          <!-- Table row 5 -->
          <tr>
            <td>
              <a href='?bulan=March&tanggal=26'>26</a>
              <?php $awal = 26; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=27'>27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=20'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=March&tanggal=31'>31</a>
              <?php $awal = 31; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=April&tanggal=1' class="date-before">1</a>
              <?php $awal = 1; $bulan = "April"; include "event.php"; ?>
            </td>
          </tr>
        </table>


<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 2) {
    $( "td:eq( "+(date.getDate()+2)+" )" ).empty();
    $( "td:eq( "+(date.getDate()+2)+" )" ).append("<span><a style='color: #00b074' href='?bulan=March&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate()+2)+" )" ).append("<?php $awal=$tanggal;$bulan="March"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate()+2)+" )" ).addClass( "date-now" );
  }
  
</script>