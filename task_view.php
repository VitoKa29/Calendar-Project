<style>
    .dropdown_calendar {
  position: relative;
  font-size: 30px;
  font-weight: bolder;
  margin: auto;
  margin-top: 80px;
  margin-left: 340px;
  background-color: #e3e4e9;
  text-overflow: ellipsis;
  z-index: 1;
}

.table_taskview {
  margin: auto;
  margin-top: 150px;
  margin-left: -165px;
  text-align: center;
  border: 1px;
  border-spacing: 0;
  border-radius: 5px;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  background-color: whitesmoke;
  transform: scale(1.05);
  z-index: 0;
}
#detail-icon {
  color: black;
  transition: all 0.4s;
  transform: scale3d(1, 1, 1);
}

#detail-icon:hover {
  color: #00b074;
}

.table_taskview th,
tr {
  padding: 10px 50px;
}

thead th {
  background-color: whitesmoke;
  border-radius: 5px 5px 0 0;
}

tbody tr td {
  padding: 10px 50px;
}

tr:nth-child(odd) {
  background-color: #c6c7cc;
}

.high {
  color: #f44336; /* Merah */
}

.medium {
  color: #ff9800; /* Oranye */
}

.low {
  color: #00b074; /* Hijau */
}

</style>

<?php

include "koneksi.php";

if (isset($_GET["bulan"])) {
    $bulan = $_GET["bulan"];
}else{
    $bulan = date("F");
}

$sql = mysqli_query($conn,"SELECT * FROM event WHERE MONTHNAME(tanggal_mulai) = '$bulan' AND status = 'Archived' AND username = '$username'");
$no = 1;
?>

<div>
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
            <?php while ($data = mysqli_fetch_assoc($sql)) {
                
             ?>
          <tr>
            <td><?php echo $no; ?>.</td>
            <td><?php echo $data["title"]; ?></td>
            <td><?php echo $data["tanggal_mulai"]; ?></td>
            <td><?php echo $data["jam_mulai"]; ?></td>
            <td><?php echo $data["notes"]; ?></td>
            <td><i class="<?php echo $data["priority"]; ?>" data-feather="circle"></i></td>
            <td>
              <a href="index.php?page=detail_task_view&id=<?php echo $data["id_event"]; ?>" id="detail-icon"><i data-feather="info"></i></a>
            </td>
          </tr>
          <?php 
            $no++;
            } ?>
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

