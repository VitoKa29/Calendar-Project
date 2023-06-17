<head>
    <link rel="stylesheet" href="css/profile.css">
</head>
    <div class="box">
      <img src="user/sova-dp.jpeg" alt="Profile Picture" class="Profile-pic">
      <form
        action="crud.php?aksi=registrasi"
        method="POST"
        enctype="multipart/form-data"
      >
        <input type="text" placeholder="Username" name="username" />
        <input type="text" placeholder="Name" name="nama" />
        <input type="date" placeholder="Date Birth" name="tanggal_lahir" />
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

