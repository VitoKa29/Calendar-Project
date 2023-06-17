<?php

include "koneksi.php";

$sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$data = mysqli_fetch_assoc($sql);


?>

<head>
    <link rel="stylesheet" href="css/profile.css">
</head>
    <div class="box">
      <img src="<?php echo $data["gambar_profile"]; ?>" alt="Profile Picture" class="Profile-pic">
      <form
        action="crud.php?aksi=update_profile"
        method="POST"
        enctype="multipart/form-data"
      >
        <input type="text" placeholder="Username" value="<?php echo $data["username"]; ?>" disabled/>
        <input type="hidden" name="username" value="<?php echo $data["username"]; ?>"/>
        <input type="text" placeholder="Name" name="nama" value="<?php echo $data["nama"]; ?>"/>
        <input type="date" placeholder="Date Birth" name="tanggal_lahir" value="<?php echo $data["tanggal_lahir"]; ?>"/>
        <input
          class="customFileInput"
          type="file"
          placeholder="Profile Picture"
          accept="image/*"
          name="upload"
          onchange="loadFile(event)"
        />
        <img class="pictureProfile" id="output" />
        <script>
          var loadFile = function (event) {
            var output = document.getElementById("output");
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
              URL.revokeObjectURL(output.src);
              output.setAttribute(
                "style",
                "visibility: visible;margin-top: 10px;width: 65px;height: 65px; border-radius: 50%;"
              );
            };
          };
        </script>
        <button type="submit">Edit</button>
      </form>
    </div>
    </div>

