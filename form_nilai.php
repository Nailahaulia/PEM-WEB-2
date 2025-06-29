<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <h3>Form Nilai Mahasiswa</h3>
    <hr>
<?php
      $ar_matkul =[
        "DDP"=>"Dasar - Dasar Pemprograman"
        "WEB1"=>"Pemprograman Web 1"
        "WEB2"=>"Pemprograman Web 2"
        "SB"=>"Statistika dan Probabilitas"
        "BD"=>"Basis Data"
        "AI"=>"Kecerdasan Buatan"
        "JK"=>"Jaringan Komputer"
        "UI/UX"=>"UI/UX"
      ]
?>
<form>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="matkul" name="matkul" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" placeholder="Dasar - Dasar Pemprograman" type="text" class="form-control">
        <option value="DDP">Dasar-Dasar Pemprograman</option>
        <option value="WEB1">Pemprograman 1</option>
        <option value="WEB2">Pemprograman 2</option>
        <option value="SB">Statistika dan Probabilitas</option>
        <option value="BD">Basis Data</option>
        <option value="AI">Kecerdasan</option>
        <option value="JK">Jaringan Komputer</option>
        <option value="UI/UX">UI/UX</option>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];
?>
Nama Mahasiswa: <?php echo $_nama; ?><br>
Mata Kuliah: <?php echo $_matkul; ?><br>
Nilai UTS: <?php echo $_nilai_uts; ?><br>
Nilai UAS: <?php echo $_nilai_uas; ?><br>
Nilai Tugas/Praktikum: <?php echo $_nilai_tugas; ?>

</body>
</html>