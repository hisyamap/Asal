<?php
    include "koneksi.php";
    $sql = "select * from Pegawai";
    $query = mysqli_query($conn,$sql);

    if(isset($_POST['submit'])){
        $noka = $_POST['no_ka'];
        $namaka = $_POST['nama_ka'];
        $tujuan = $_POST['tujuan'];
        $jamberangkat = $_POST['jam_berangkat'];
        $insert ="insert into Pegawai(no_ka, nama_ka, tujuan, jam_berangkat)
                values('$noka','$namaka','$tujuan','$jamberangkat')";
        $query = mysqli_query($conn, $insert);
        if ($query){
?>
            <script>alert('Data Berhasil ditambahkan');
            document.location='insert.php';
            </script>
<?php
        }
    }
?>

<?php
date_default_timezone_set("Asia/jakarta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .table-op {
            font-family: arial;
            border-collapse: collapse;
            width: 70%;
        }
        .table-op td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }
        .table-op  select {
            border: 0;
            width: 100%;
            text-align: center;
        }
    </style>
    <title>Layout Peron</title>
</head>
<body>
<center>
    <h1>PT KERETA API INDONESIA</h1>
    <h4>STASIUN PURWOKERTO</h4>
    <p><?php echo date('l, d-m-Y'); ?></p>
    <p><b><span id="jam"></span></b></p>
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
    <form method="post" id="insert_form">
            <table class="table-op">
                <tr>
                    <td width="50px">JALUR</td>
                    <td width="300px">JADWAL KEBERANGKATAN KERETA</td>
                    <td>NO KA-NAMA KA | TUJUAN | JAM BERANGKAT</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <select name="kereta" id="kereta">
                            <option disabled selected> Pilih Kereta </option>
                             <?php 
                            $sql = "select * from Pegawai";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            $noka = $row['no_ka'];
                            $namaka = $row['nama_ka'];
                            $tujuan = $row['tujuan'];
                            $jamberangkat = $row['jam_berangkat'];
                             ?>
                            <option value="<?php echo $noka?>-<?php echo $namaka?> <?php echo $tujuan?> <?php echo $jamberangkat?>"><?php echo $namaka?>-<?php echo $jamberangkat?></option> 
                             <?php
                              }
                             ?>
                        </select>
                    </td>
                    <td>
                        <?php if (isset($_POST['simpan'])){ 
                            echo $_POST['kereta']; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <select name="kereta2" id="kereta2">
                            <option disabled selected> Pilih Kereta </option>
                             <?php 
                            $sql = "select * from Pegawai";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            $noka = $row['no_ka'];
                            $namaka = $row['nama_ka'];
                            $tujuan = $row['tujuan'];
                            $jamberangkat = $row['jam_berangkat'];
                             ?>
                            <option value="<?php echo $noka?>-<?php echo $namaka?> <?php echo $tujuan?> <?php echo $jamberangkat?> "><?php echo $namaka?>-<?php echo $jamberangkat?></option> 
                             <?php
                              }
                             ?>
                        </select>
                    </td>
                    <td>
                        <?php if (isset($_POST['simpan'])){ 
                            echo $_POST['kereta2']; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <select name="kereta3" id="kereta3">
                            <option disabled selected> Pilih Kereta </option>
                             <?php 
                            $sql = "select * from Pegawai";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            $noka = $row['no_ka'];
                            $namaka = $row['nama_ka'];
                            $tujuan = $row['tujuan'];
                            $jamberangkat = $row['jam_berangkat'];
                             ?>
                            <option value="<?php echo $noka?>-<?php echo $namaka?> <?php echo $tujuan?> <?php echo $jamberangkat?> "><?php echo $namaka?>-<?php echo $jamberangkat?></option> 
                             <?php
                              }
                             ?>
                        </select>
                    </td>
                    <td>
                        <?php if (isset($_POST['simpan'])){ 
                            echo $_POST['kereta3']; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <select name="kereta4" id="kereta4">
                            <option disabled selected> Pilih Kereta </option>
                             <?php 
                            $sql = "select * from Pegawai";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            $noka = $row['no_ka'];
                            $namaka = $row['nama_ka'];
                            $tujuan = $row['tujuan'];
                            $jamberangkat = $row['jam_berangkat'];
                             ?>
                            <option value="<?php echo $noka?>-<?php echo $namaka?> <?php echo $tujuan?> <?php echo $jamberangkat?> "><?php echo $namaka?>-<?php echo $jamberangkat?></option> 
                             <?php
                              }
                             ?>
                        </select>
                    </td>
                    <td>
                        <?php if (isset($_POST['simpan'])){ 
                            echo $_POST['kereta4']; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <select name="kereta5" id="kereta5">
                            <option disabled selected> Pilih Kereta </option>
                             <?php 
                            $sql = "select * from Pegawai";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            $noka = $row['no_ka'];
                            $namaka = $row['nama_ka'];
                            $tujuan = $row['tujuan'];
                            $jamberangkat = $row['jam_berangkat'];
                             ?>
                            <option value="<?php echo $noka?>-<?php echo $namaka?> <?php echo $tujuan?> <?php echo $jamberangkat?> "><?php echo $namaka?>-<?php echo $jamberangkat?></option> 
                             <?php
                              }
                             ?>
                        </select>
                    </td>
                    <td>
                        <?php if (isset($_POST['simpan'])){ 
                            echo $_POST['kereta5']; 
                            }
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="simpan" value="Simpan">
        <input type="submit" name='submit' value='SUBMIT'></td>
    </form> 
</center>
</body>
</html>