<?php 

// error_reporting(0);

class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "calendar";
	var $conn;
	
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db) or die("Koneksi Gagal");
	}
 
	function tampil_data_ruang(){
		$sql = mysqli_query(" SELECT * FROM jadwalkuliah inner join matakuliah on jadwalkuliah.idMtk = matakuliah.idMtk
								inner join ruangan on jadwalkuliah.nomorRuang = ruangan.nomorRuang
								inner join sesi on jadwalkuliah.kodeSesi = sesi.kodeSesi
		 ");
		while($data = mysqli_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function tampil_data_dipinjam(){
		$sql = mysqli_query(" SELECT * FROM peminjaman inner join mahasiswa on peminjaman.nim = mahasiswa.nim
								inner join ruangan on peminjaman.nomorRuang = ruangan.nomorRuang
								inner join sesi on peminjaman.kodeSesi = sesi.kodeSesi
		 ");
		while($data = mysqli_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function profile($username){

		$sql = mysqli_query(" SELECT * FROM admin WHERE username = '$username' ");
		$hasil[] = $data = mysqli_fetch_array($sql);
		
		return $hasil;
	}
	function login($username,$password){
        $sql = mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
		$cek = mysqli_num_rows($sql);
		$data = mysqli_fetch_array($sql);
			
		session_start();
		$_SESSION["nama"] = $data["nama"];
		$_SESSION["username"] = $data["username"];
		$_SESSION["gambar"] = $data["gambar_profile"];
			
		if( $cek ) {
		    echo"
		    <script>
		        alert('Login Berhasil');
		        window.location.href='index.php';
		    </script>
		
		    ";  
		}else{
		    echo"
		    <script>
		        alert('Maaf, Username atau Password yang anda inputkan salah');
		        window.location.href='login.php';
		    </script>
		    ";
		}
	}
	function hapus_pemakaian_ruang($matkul,$tahun,$semester,$grup){
		mysqli_query(" DELETE FROM jadwalkuliah WHERE idMtk = '$matkul' and tahun = '$tahun' and semester = '$semester' and grup = '$grup' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_pemakaian_ruang';
    </script>
    
    ";  
	}
	function hapus_peminjaman_ruang($nim,$ruangan,$sesi){
		mysqli_query(" DELETE FROM peminjaman WHERE nim = '$nim' and nomorRuang = '$ruangan' and kodeSesi = '$sesi' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_ruangan_dipinjam';
    </script>
    
    ";  
	}
	function registrasi($username,$password,$nama,$tanggal_lahir,$gambar_profile){


		$sql = mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$username' ");
		$cek = mysqli_num_rows($sql);
			
			
		if( $cek ) {
		    echo"
		    <script>
		        alert('Maaf, Username Sudah Terdaftar');
		        window.location.href='daftar.html';
		    </script>
		
		    ";  
		}else{
			if (!(empty($gambar_profile))) {
       
        		$ext = strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));
        		$arr = ["jpg","jpeg","png"];

        		if (in_array($ext, $arr)) {
				
        		    if (($_FILES["upload"]["size"]/1024000) <= 10) {
					
        		        $upload_file = "user/".$_FILES["upload"]["name"];

						move_uploaded_file($_FILES["upload"]["tmp_name"],$upload_file);			
        		        mysqli_query($this->conn, "INSERT INTO user(username,password,nama,tanggal_lahir,gambar_profile) VALUES('$username','$password','$nama','$tanggal_lahir','$upload_file')");
						
        		         echo"
		        		<script>
		        		    alert('Pendaftaran Akun Berhasil');
		        		    window.location.href='login.php';
		        		</script>
		        		";
        		    }else {
						echo"
		        		<script>
		        		    alert('Ukuran File tidak boleh lebih dari 10 MB');
		        		    window.location.href='daftar.html';
		        		</script>
		        		";
        		    }
				
        		}else {
					echo"
		        	<script>
		        	    alert('File yang diupload bukan gambar');
		        	    window.location.href='daftar.html';
		        	</script>
		        	";
    	    	}       
    		}else {
    		    mysqli_query($this->conn, "INSERT INTO user(username,password,nama,tanggal_lahir,gambar_profile) VALUES('$username','$password','$nama','$tanggal_lahir','user/guest.png')");
				echo"
		        <script>
		            alert('Pendaftaran Akun Berhasil');
		            window.location.href='login.php';
		        </script>
		        ";
    		}
		
		        
				
		}	
	}

	function input($username,$title,$tanggal_mulai,$tanggal_selesai,$jam_mulai,$jam_selesai,$gambar,$notes,$priority,$comment){

				$awal =  (int)substr($_POST["tanggal_mulai"],8,2);
    			$akhir =  (int)substr($_POST["tanggal_selesai"],8,2)+1;
			if (!(empty($gambar))) {
       
        		$ext = strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));
        		$arr = ["jpg","jpeg","png"];

				

        		if (in_array($ext, $arr)) {
				
        		    if (($_FILES["upload"]["size"]/1024000) <= 10) {
					
        		        $upload_file = "event/".$_FILES["upload"]["name"];

						move_uploaded_file($_FILES["upload"]["tmp_name"],$upload_file);

						if (empty($tanggal_selesai)) {
							if (empty($jam_selesai)) {
								mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
											VALUES('$username','$title','$tanggal_mulai','$tanggal_mulai','$jam_mulai','$jam_mulai','$upload_file','$notes','$priority','$comment','ToDo')");
							}else{
								mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
												VALUES('$username','$title','$tanggal_mulai','$tanggal_mulai','$jam_mulai','$jam_selesai','$upload_file','$notes','$priority','$comment','ToDo')");
							}
						}else{
							for ($i=$awal; $i < $akhir; $i++) { 
								$tampung = str_replace($awal,$i,$_POST["tanggal_mulai"]);
								if (empty($jam_selesai)) {
									mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
											VALUES('$username','$title','$tampung','$tanggal_selesai','$jam_mulai','$jam_mulai','$upload_file','$notes','$priority','$comment','ToDo')");
								}else{
									mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
													VALUES('$username','$title','$tampung','$tanggal_selesai','$jam_mulai','$jam_selesai','$upload_file','$notes','$priority','$comment','ToDo')");
								}
							}
							
						}
       		         echo"
		        		<script>
		        		    alert('Create Event Berhasil');
		        		    window.location.href='index.php';
		        		</script>
		        		";
        		    }else {
						echo"
		        		<script>
		        		    alert('Ukuran File tidak boleh lebih dari 10 MB');
		        		    window.location.href='index.php?page=add_task';
		        		</script>
		        		";
        		    }
				
        		}else {
					echo"
		        	<script>
		        	    alert('File yang diupload bukan gambar');
		        	    window.location.href='index.php?page=add_task';
		        	</script>
		        	";
    	    	}       
    		}else {
				if (empty($tanggal_selesai)) {
							if (empty($jam_selesai)) {
								mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
											VALUES('$username','$title','$tanggal_mulai','$tanggal_mulai','$jam_mulai','$jam_mulai','event/no_picture.png','$notes','$priority','$comment','ToDo')");
							}else{
								mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
												VALUES('$username','$title','$tanggal_mulai','$tanggal_mulai','$jam_mulai','$jam_selesai','event/no_picture.png','$notes','$priority','$comment','ToDo')");
							}
						}else{
							for ($i=$awal; $i < $akhir; $i++) { 
								$tampung = str_replace($awal,$i,$_POST["tanggal_mulai"]);
								if (empty($jam_selesai)) {
									mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
											VALUES('$username','$title','$tampung','$tanggal_selesai','$jam_mulai','$jam_mulai','event/no_picture.png','$notes','$priority','$comment','ToDo')");
								}else{
									mysqli_query($this->conn, "INSERT INTO event(username,title,tanggal_mulai,tanggal_selesai,jam_mulai,jam_selesai,gambar,notes,priority,comment,status) 
													VALUES('$username','$title','$tampung','$tanggal_selesai','$jam_mulai','$jam_selesai','event/no_picture.png','$notes','$priority','$comment','ToDo')");
								}
							}
							
						}
				echo"
		        <script>
		            alert('Create Event Berhasil');
		            window.location.href='index.php';
		        </script>
		        ";
    		}
		
		        				
		
	}
    
}
?>

