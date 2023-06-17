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
	function profile($username){

		$sql = mysqli_query(" SELECT * FROM admin WHERE username = '$username' ");
		$hasil[] = $data = mysqli_fetch_assoc($sql);
		
		return $hasil;
	}
	function view_detail($id){

		$sql = mysqli_query($this->conn," SELECT * FROM event WHERE id_event = '$id' ");
		$hasil = mysqli_fetch_assoc($sql);
		
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
	function hapus_event($id){
		$sql = mysqli_query($this->conn," SELECT * FROM event WHERE id_event = '$id' ");
		$data = mysqli_fetch_assoc($sql);

		if ($data["tanggal_mulai"] < date("Y-m-d")) {
			echo"
    <script>
        alert('Tidak bisa menghapus data, karena tanggal sudah terlewat');
        window.location.href='index.php?page=detail&id=$id';
    </script>
    
    ";  
		}else{
			mysqli_query($this->conn," DELETE FROM event WHERE id_event = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php';
    </script>
    
    ";  
		}

		
	}
	function hapus_arsip($id){
		
		mysqli_query($this->conn," DELETE FROM event WHERE id_event = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=task_view';
    </script>
    
    ";  
		
		
	}
	function arsip_event($id){
		
			mysqli_query($this->conn," UPDATE event SET status = 'Archived' WHERE id_event = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diarsip');
        window.location.href='index.php';
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
	function update_event($id,$title,$tanggal_mulai,$tanggal_selesai,$jam_mulai,$jam_selesai,$gambar,$notes,$priority,$comment){
		if ($gambar) {
			$ext = strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));
        		$arr = ["jpg","jpeg","png"];

				

        		if (in_array($ext, $arr)) {
				
        		    if (($_FILES["upload"]["size"]/1024000) <= 10) {
					
        		        $upload_file = "event/".$_FILES["upload"]["name"];

						move_uploaded_file($_FILES["upload"]["tmp_name"],$upload_file);

						mysqli_query($this->conn, "UPDATE event SET title='$title',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',
			jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',gambar='event/$gambar',notes='$notes',priority='$priority',comment='$comment' WHERE id_event = '$id'
			");
				echo"
		        <script>
		            alert('Data Berhasil Diupdate');
		            window.location.href='index.php?page=detail&id=$id';
		        </script>
		        ";
        		    }else {
						echo"
		        		<script>
		        		    alert('Ukuran File tidak boleh lebih dari 10 MB');
		        		    window.location.href='index.php?page=detail&id=$id';
		        		</script>
		        		";
        		    }
				
        		}else {
					echo"
		        	<script>
		        	    alert('File yang diupload bukan jpg/jpeg/png');
		        	    window.location.href='index.php?page=detail&id=$id';
		        	</script>
		        	";
    	    	}  


		}else{
			mysqli_query($this->conn, "UPDATE event SET title='$title',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',
			jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',notes='$notes',priority='$priority',comment='$comment' WHERE id_event = '$id'
			");
				echo"
		        <script>
		            alert('Data Berhasil Diupdate');
		            window.location.href='index.php?page=detail&id=$id';
		        </script>
		        ";
		}
	}

	function input($username,$title,$tanggal_mulai,$tanggal_selesai,$jam_mulai,$jam_selesai,$gambar,$notes,$priority,$comment){

			if ($tanggal_mulai >= $tanggal_selesai && !empty($tanggal_selesai)) {
				echo"
		        		<script>
		        		    alert('Jam mulai tidak boleh sama dengan jam selesai');
		        		    window.location.href='index.php?page=add_task';
		        		</script>
		        		";
			}else{
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
		        	    alert('File yang diupload bukan jpg/jpeg/png');
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
    
}
?>

