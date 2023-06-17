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
            <th colspan="6">June 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=May" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
                </a>
                <a href="?bulan=July" id="right-icon">
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
              <a href='?bulan=May&tanggal=28' class="date-before">28</a>
              <?php $awal = 28; $bulan = "May"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=29' class="date-before">29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=30' class="date-before">30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=31' class="date-before">31</a>
              <?php $awal = 31; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "June"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=2'>2</a>
              <?php $awal = 2; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=3'>3</a>
              <?php $awal = 3; include "event.php"; ?>
            </td>
          </tr>
          
          <!-- Table row 2 sampai 4 -->

          <?php
            $awal = 4;
            include "ulang_kalender.php";
          ?>

          <!-- Table row 5 -->
          <tr>
            <td>
              <a href='?bulan=June&tanggal=25'>25</a>
              <?php $awal = 25; $bulan = "June"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=26'>26</a>
              <?php $awal = 26; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=27'>27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=June&tanggal=30'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=July&tanggal=1' class="date-before">1</a>
              <?php $awal = 1; $bulan = "July"; include "event.php"; ?>
            </td>
          </tr>
        </table>

<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 5) {
    $( "td:eq( "+(date.getDate()+3)+" )" ).empty();
    $( "td:eq( "+(date.getDate()+3)+" )" ).append("<span><a style='color: #00b074' href='?bulan=June&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate()+3)+" )" ).append("<?php $awal=$tanggal;$bulan="June"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate()+3)+" )" ).addClass( "date-now" );
  }
  
</script>