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
            <th colspan="6">December 2023</th>
            <th>
              <div class="next-page">
                <a href="?bulan=November" id="left-icon">
                  <i class="i" data-feather="chevron-left"></i>
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
              <a href='?bulan=November&tanggal=26' class="date-before">26</a>
              <?php $awal = 26; $bulan = "November"; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=November&tanggal=27' class="date-before">27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=November&tanggal=28' class="date-before">28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=November&tanggal=29' class="date-before">29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td class="date-before">
              <a href='?bulan=November&tanggal=30' class="date-before">30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=1'>1</a>
              <?php $awal = 1; $bulan = "December"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=2'>2</a>
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
              <a href='?bulan=December&tanggal=24'>24</a>
              <?php $awal = 24; $bulan = "December"; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=25'>25</a>
              <?php $awal = 25; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=26'>26</a>
              <?php $awal = 26; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=27'>27</a>
              <?php $awal = 27; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=28'>28</a>
              <?php $awal = 28; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=29'>29</a>
              <?php $awal = 29; include "event.php"; ?>
            </td>
            <td>
              <a href='?bulan=December&tanggal=30'>30</a>
              <?php $awal = 30; include "event.php"; ?>
            </td>
          </tr>

          <!-- Table row 6 -->
          <tr>
            <td>
              <a href='?bulan=December&tanggal=31'>31</a>
              <?php $awal = 31 ; include "event.php"; ?>
            </td>
            <td class="date-before">1</td>
            <td class="date-before">2</td>
            <td class="date-before">3</td>
            <td class="date-before">4</td>
            <td class="date-before">5</td>
            <td class="date-before">6</td>
          </tr>
        </table>

<!-- Jquery -->
<script>
  const date = new Date();
  if (date.getMonth() == 11) {
    $( "td:eq( "+(date.getDate()+4)+" )" ).empty();
    $( "td:eq( "+(date.getDate()+4)+" )" ).append("<span><a style='color: #00b074' href='?bulan=December&tanggal=<?php echo $tanggal; ?>'>"+date.getDate()+"</a></span>");
    $( "td:eq( "+(date.getDate()+4)+" )" ).append("<?php $awal=$tanggal;$bulan="December"; include "event.php"; ?>");
    $( "td:eq( "+(date.getDate()+4)+" )" ).addClass( "date-now" );
  }
  
</script>