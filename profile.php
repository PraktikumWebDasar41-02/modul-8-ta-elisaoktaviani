<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'modul8');
	$nim = $_SESSION["nim"];
	$query = "SELECT * FROM t_profile WHERE NIM = $nim";
 	$view = mysqli_query($db,$query);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $data['Nama'];?></td>
				</tr>
				<?php 	while ($data = mysqli_fetch_array($view)) { ?>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><?php echo $data['NIM'];?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><?php echo $data['kelas']; ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td><?php echo $data['hobi'];; ?></td>
				</tr>
				<tr>
					<td>Genre Film</td>
					<td>:</td>
					<td><?php echo $data['genre'];; ?></td>
				</tr>
				<tr>
					<td>Tempat Wisata</td>
					<td>:</td>
					<td><?php echo $data['wisata'];; ?></td>
				</tr>
				<?php }
				if (isset($_POST['submit'])) {
					session_destroy();
					header("Location: Register.php");
					}
				?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>