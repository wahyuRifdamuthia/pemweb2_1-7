<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>
<body>
    <h1>Belanja Online</h1>
    <form action="" method="">

        <hr/>
        <!-- tipe text --> 
        <label for="">Customer</label>
        <input type="text" name="customer"><br><br>

        <!-- tipe radio -->
        <label for="">Pilih Produk</label>
        <input type="radio" name="pilih_produk" value="tv">
            <label for="">TV</label>
        <input type="radio" name="pilih_produk" value="kulkas">
            <label for="">kulkas</label>
        <input type="radio" name="pilih_produk" value="mesin_cuci">
            <label for="">Mesin Cuci</label><br><br>

         <!-- tipe number -->
         <label for="">Jumlah beli</label>
            <input type="number" name="jumlah_beli"><br><br>

        <!-- button -->
        <button type="submit">simpan</button>
    </form>

     

</body>
</html>