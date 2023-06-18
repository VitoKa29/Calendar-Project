<head>
    <link rel="stylesheet" href="css/table_view.css">
</head>

<?php

include "koneksi.php";

if (isset($_GET["bulan"])) {
    $bulan = $_GET["bulan"];
}else{
    $bulan = date("F");
}

$sql = mysqli_query($conn,"SELECT * FROM event WHERE MONTHNAME(tanggal_mulai) = '$bulan' AND status = 'Archived' AND username = '$username' ORDER BY tanggal_mulai ASC");
$count = mysqli_num_rows($sql);
$no = 1;
?>

<div>
  <h1>Archived Task</h1>
        <select name="" id="select_box" class="dropdown_calendar">
          <option selected disabled>Select Month</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
      </div>
      <table class="table_taskview">
        <thead>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Notes</th>
          <th>Priority</th>
          <th>Action</th>
        </thead>
        <tbody>
            <?php 
              if ($count) {
                while ($data = mysqli_fetch_assoc($sql)) {
              
                
             ?>
          <tr>
            <td><?php echo $no; ?>.</td>
            <td><?php echo $data["title"]; ?></td>
            <td><?php echo $data["tanggal_mulai"]; ?></td>
            <td><?php echo $data["jam_mulai"]; ?></td>
            <td><?php echo $data["notes"]; ?></td>
            <td><i class="<?php echo $data["priority"]; ?>" data-feather="circle"></i></td>
            <td>
              <a title='Info' href="index.php?page=detail_task_view&id=<?php echo $data["id_event"]; ?>" id="detail-icon"><i data-feather="info"></i></a>
            </td>
          </tr>
          <?php 
            $no++;
            } }else{
              ?>
              <tr>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>
              --
            </td>
          </tr>
            <?php }?>
        </tbody>
      </table>



<script>
     let dropdownList = document.getElementById('select_box');
    dropdownList.onchange = (ev) =>{
        window.location = "index.php?page=task_view&bulan="+dropdownList.value;
      let selecetedIndex = dropdownList.selectedIndex;
      let selectedOption = dropdownList.options[selecetedIndex];
      
      
    }
     $('#select_box').on('change', function() {
    localStorage.setItem("select_box", $(this).val());
    
 });
 $(document).ready(function() {
    if ($('#select_box').length) {
        $('#select_box').val(localStorage.getItem("select_box"));
     }
     
});

</script>

