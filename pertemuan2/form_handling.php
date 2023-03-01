 <!DOCTYPE html>
 <html lang="en">
 <head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Praktikum2 - form handling</title>
 </head>
 <body>
    <h2>Belajar handling</h2>
    <form action="Belajar_post.php" method="POST">
        <!-- type text -->
        <label for="">Nama Mahasiswa </label> <br>
        <input type="text" name="nama"> <br> <br>

        <!-- type radio -->
        <label for="Jenis_Kelamin">Jenis Kelamin </label> <br>
        <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> <label>Laki-laki</label>
        <input type="radio" name="Jenis_Kelamin" value="Perempuan"> <label>Perempuan</label> <br> <br>

        <!-- type checkbox -->
        <label for="Hobi">Hobi </label> <br>
        <input type="checkbox" name="Hobi[]" value="Sepak Bola"> <label>Sepak Bola<label> <br>
        <input type="checkbox" name="Hobi[]" value="Badminton"> <label>Badminton<label> <br>
        <input type="checkbox" name="Hobi[]" value="Tilawah"> <label>Tilawah<label> <br>
        <input type="checkbox" name="Hobi[]" value="volly Ball"> <label>Voly Ball<label> <br> <br>

        <!-- type  number -->
        <label for="umur">Umur</label><br>
        <input type="number" name="Umur">  <br> <br>

        <!-- type date -->
        <label for="Tanggal Lahir">Tanggal Lahir</label><br> 
        <input type="date" name="Tanggal_Lahir"> <br> <br>

        <!-- dropdown select -->
        <label for="">Prodi</label> <br>
        <select name="Prodi" >
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select> <br> <br>

        <!-- button -->
        <button type="submit">Simpan !</button>
        <button type="reset">Reset</button>
    </form>
 </body>
 </html>