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
            <th colspan="6">April 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=March" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
                </a>
                <a href="?bulan=May" id="right-icon">
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
              <a href='?bulan=March&tanggal=26' class="date-before">26</a>
              <?php $awal = 26; $bulan = "March"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=March&tanggal=27' class="date-before">27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=March&tanggal=28' class="date-before">28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=March&tanggal=29' class="date-before">29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=March&tanggal=30' class="date-before">30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=March&tanggal=31' class="date-before">31</a>
              <?php $awal = 31; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "April"; include "event.php"; ?>
            </td>
          </tr>
          
          <!-- Table row 2 sampai 4 -->

          <?php
            $awal = 2;
            include "ulang_kalender.php";
          ?>

          <!-- Table row 5 -->
          <tr>
            <td>
              <a href='?bulan=April&tanggal=23'>23</a>
              <?php $awal = 23; $bulan = "April"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=24'>24</a>
              <?php $awal = 24; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=25'>25</a>
              <?php $awal = 25; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=26'>26</a>
              <?php $awal = 26; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=27'>27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=April&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
          </tr>

          <!-- Table row 6 -->
          <tr>
            <td>
              <a href='?bulan=April&tanggal=30'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=1' class="date-before">1</a>
              <?php $awal = 1; $bulan = "May"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=2' class="date-before">2</a>
              <?php $awal = 2; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=3' class="date-before">3</a>
              <?php $awal = 3; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=4' class="date-before">4</a>
              <?php $awal = 4; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=5' class="date-before">5</a>
              <?php $awal = 5; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=May&tanggal=6' class="date-before">6</a>
              <?php $awal = 6; include "event.php"; ?>
            </td>
          </tr>
        </table>

<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 3) {
    $( "td:eq( "+(date.getDate()+5)+" )" ).empty();
    $( "td:eq( "+(date.getDate()+5)+" )" ).append("<span><a style='color: #00b074' href='?bulan=April&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate()+5)+" )" ).append("<?php $awal=$tanggal;$bulan="April"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate()+5)+" )" ).addClass( "date-now" );
  }
  
</script>