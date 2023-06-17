<?php


if (isset($_GET["bulan"]) && isset($_GET["tanggal"])) {
    $bulan = $_GET["bulan"];
    $tanggal = $_GET["tanggal"];
}else{
    $bulan = date("F");
    $tanggal = date("j");
}

?>

<div class="top-taskpage">
  <h5 class="today-task"><?php echo "$bulan $tanggal"; ?>, 2023</h5>
  <h2>My Task</h2>
  <div class="add-newtask">
    <a href="?page=add_task" id="newtask">
      <i class="i" data-feather="plus"></i>
    </a>
  </div>
</div>

<?php  


$sql = mysqli_query($conn, "SELECT * FROM event WHERE DAY(tanggal_mulai) = '$tanggal' AND MONTHNAME(tanggal_mulai) = '$bulan' AND username = '$username'
                    ORDER BY CASE 
                    WHEN priority = 'high' THEN 1 
                    WHEN priority = 'medium' THEN 2 
                    WHEN priority = 'low' THEN 3 END
                    ASC
                    ");
$cek = mysqli_num_rows($sql);

if ($cek) {
    while($data = mysqli_fetch_array($sql)){
        $lower = strtolower($data["priority"]);
        echo"
          <div class='task'>
            <div class='importance-indicator $lower'></div>
            <div class='task-info'>
              <p class='time'>$data[jam_mulai]</p>
              <p class='description'>$data[title]</p>
            </div>
            <div class='detail-icon'>
              <a href='index.php?page=detail' id='detail-icon'>
                <i class='i' data-feather='info'></i>
              </a>
            </div>
          </div>
        ";
    }
}else{
    echo "<h4 class='notask'><span>NO TASK TODAY</span></h4>";
}


?>
