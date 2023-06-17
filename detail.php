<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calender</title>

    <!-- CSS -->
    <link rel="stylesheet" href="calendar.css" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo-header">
        <img src="p-img.png" alt="Profile Picture" />
        <span class="header-text"><a href="index.html">Calendar</a></span>
      </a>
    </header>
    <nav>
      <ul>
        <div class="icon">
          <li>
            <a href="#" class="logo" id="icon">
              <img src="p-img.png" alt="Profile Picture" />
              <span class="nav-item">Vito_KA</span>
            </a>
          </li>
          <li>
            <a href="index.html" id="icon">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Task</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a>
          </li>
          <li>
            <a href="#" class="logout" id="icon">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log Out</span>
            </a>
          </li>
        </div>
      </ul>
    </nav>

    <!-- awal detail task -->
    <div class="detail-task">
      
      <!-- awal header -->
      <div id="task-head">
        <h1>
          <span>Aktifitas Kelas</span>
        </h1>
      </div>
      <!-- akhir header -->

      <!-- awal detail content -->
      <div class="content">
        <div class="component">
          <p><i class="i" data-feather="calendar"></i><span>Dates</span></p>
          <p><i class="i" data-feather="clock"></i><span>Time</span></p>
          <p><i class="i" data-feather="file"></i><span>File/Media</span></p>
          <p><i class="i" data-feather="align-justify"></i><span>Notes</span></p>
          <p><i class="i" data-feather="pocket"></i><span>Status</span></p>
          <p><i class="i" data-feather="tag"></i><span>Type</span></p>
          
          <div class="comment">
            <img src="p-img.png" alt="logo-profile" />
              <span id="commnet">Harus Semangat dan pantang menyerah</span>
          </div>
        </div>

        <div class="user_ans">

          <div class="dates">
            <div id="from">
                <span id="tgl">20/02/2023</span>
            </div>

            <span id="strip">--></span>

            <div id="until">
              <span id="tgl">20/02/2023</span>
            </div>
          </div>

          <div class="time">
            <div class="time-from">
              <span >20.00</span>
            </div>

            <span >--></span>

            <div class="time-until">
              <span>22.00</span>
            </div>

            <span>WIB</span>
          </div>



          <div class="file-media">
            <img src="image/aktifitas_kelas1.png" alt="aktifitas_kelas" />
          </div>

          <div class="notes">
            <span>Tugas ini perlu dikerjakan !!</span>
          </div>

          <div class="status">
            <span id="span_status">To Do</span>
          </div>

          <div class="type">
            <span>Penting</span>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="table-detail-content">
        <table>
          <tr>
            <td><i class="i" data-feather="calendar"></i>Dates</td>
            <td>23 Maret 2023 -- 04 April 2023</td>
          </tr>
          <tr>
            <td><i class="i" data-feather="check-square"></i>Archive</td>
            <td><input type="checkbox" name="myCheckbox" value="1" /></td>
          </tr>
          <tr>
            <td><i class="i" data-feather="file"></i>File/Media</td>
            <td>
              <form>
                <label for="myFile">Pilih file:</label>
                <input type="file" id="myFile" name="myFile" />
              </form>
            </td>
          </tr>
          <tr>
            <td><i class="i" data-feather="align-justify"></i>Notes</td>
            <td>
              <form>
                <label for="notes"></label>
                <input type="text" id="comment" name="comment" placeholder="Add a notes.." /><br /><br />
              </form>
            </td>
          </tr>
          <tr>
            <td><i class="i" data-feather="pocket"></i>Status</td>
            <td></td>
          </tr>
          <tr>
            <td><i class="i" data-feather="tag"></i>Type</td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2">
              <form>
                <label for="comment"></label>
                <input type="text" id="comment" name="comment" placeholder="Add a comment..." /><br /><br />
              </form>
            </td>
          </tr>
        </table>
      </div>
    </div> -->

    <footer>
      <div class="footer-content">
        <ul class="socials">
          <li>
            <a href="#"><i class="social fb" data-feather="facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="social twt" data-feather="twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="social ig" data-feather="instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="social yt" data-feather="youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="social gh" data-feather="github"></i></a>
          </li>
        </ul>
        <p class="footer-bottom">&copy; 2023 The Big Three. All rights reserved</p>
      </div>
    </footer>
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>