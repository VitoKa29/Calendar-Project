<?php

include "koneksi.php";

include 'proses.php';
$db = new database();

$data = $db->view_detail($_GET["id"]);


?>

<!-- awal detail task -->
<div class="detail-task">
        <!-- awal header -->
        <form action="crud.php?aksi=update_event" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $data["id_event"]; ?>">
        <div id="task-head">
          <h1>
            <input
              type="text"
              id="text-input"
              name="title"
              value = "<?php echo $data["title"]; ?>"
              required
            />
          </h1>
        </div>
        <!-- akhir header -->

        <!-- awal detail content -->
        <div class="content-tambah" style="height: 620px">
          <div class="component-tambah">
            <p><i class="i" data-feather="calendar"></i><span>Dates</span></p>
            <p><i class="i" data-feather="clock"></i><span>Time</span></p>
            <p style="margin-top:75px"><i class="i" data-feather="file"></i><span>File/Media</span></p>
            <p style="margin-top:120px">
              <i class="i" data-feather="align-justify"></i><span>Notes</span>
            </p>
            <p><i class="i" data-feather="tag"></i><span>Priority</span></p>

            <div class="comment-tambah">
              <img src="<?php echo $gambar; ?>" alt="logo-profile" />
                <textarea
                  id="comment"
                  name="comment"
                  placeholder="Add a comment..."
                  cols="50"
                  rows="3"
                  style="margin-left: 18px"
                ><?php echo $data["comment"]; ?></textarea
                ><br />
            </div>
          </div>
          
          <button id="update" class="createbutton"  type="update" value="Create" style="float: right;margin-top: 535px;margin-right: 20px;font-size: larger;font-weight: 600;"><i class="i" data-feather="edit"></i></button>
          <a href = 'crud.php?aksi=hapus_event&id=<?php echo $data["id_event"]; ?>' onclick = 'return hapus()' id="delete" class="createbutton" style="float: right;margin-top: 535px;margin-right: 20px;font-size: larger;font-weight: 600;"><i class="i" data-feather="trash-2"></i></a>
          <a href = 'crud.php?aksi=arsip_event&id=<?php echo $data["id_event"]; ?>' onclick = 'return arsip()' id="archive" class="createbutton" style="float: right;margin-top: 535px;margin-right: 20px;font-size: larger;font-weight: 600;"><i class="i" data-feather="folder"></i></a>

          <div class="user-ans-tambah">
            <div class="dates-tambah">
              <div id="from-tambah">
                  <label for="from"></label>
                  <input
                    type="date"
                    id="from"
                    name="tanggal_mulai"
                    value = "<?php echo $data['tanggal_mulai']; ?>"
                    required
                  /><br /><br />
              </div>

              <span>--></span>

              <div id="until-tambah">
                  <label for="until"></label>
                  <input
                    type="date"
                    id="until"
                    name="tanggal_selesai"
                    value = "<?php echo $data["tanggal_selesai"]; ?>"
                    placeholder="Until"
                  /><br /><br />
              </div>
            </div>

            <div class="time-tambah">
              <div class="time-from-tambah">
                  <label for="time"></label>
                  <input type="time" id="jam" name="jam_mulai" value = "<?php echo $data["jam_mulai"]; ?>" required/>
              </div>

              <span>--></span>

              <div class="time-until-tambah">
                  <label for="time"></label>
                  <input type="time" id="jam" name="jam_selesai" value = "<?php echo $data["jam_selesai"]; ?>"/>
              </div>
              <span>WIB</span>
            </div>

            <div class="file-media-tambah">
              <img src="<?php echo $data["gambar"] ?>" alt="aktifitas_kelas" width="auto" height="200"/><br>
              <label for="myFile">Pilih file:</label>
              <input type="file" id="myFile" name="upload" />
            </div>

            <div class="notes-tambah">
                <label for="notes"></label>
                <input
                  type="text"
                  id="comment"
                  name="notes"
                  placeholder="Add a notes.."
                  value = "<?php echo $data["notes"]; ?>"
                /><br /><br />
            </div>

            <div class="type-tambah" style=" margin-top: 3px">
              <select name="priority" required>
                <option value="<?php echo $data["priority"]; ?>"><?php echo ucfirst($data["priority"]); ?></option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      </div>


<script type = "text/javascript">
function hapus(){
    var pesan = confirm("Apakah Anda Yakin Mau Menghapus ??");
        if( pesan == true ){
            return true;
        }else{
            return false;
        }
}
function arsip(){
    var pesan = confirm("Apakah Anda Yakin Mau Mengarsip ??");
        if( pesan == true ){
            return true;
        }else{
            return false;
        }
}
</script>