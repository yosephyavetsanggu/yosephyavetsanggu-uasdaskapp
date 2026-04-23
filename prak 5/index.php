<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="post" action="index.php" id="form">
                <h2>DATA IDENTITAS</h2>
                <br/>
                <label>Nama :</label>
                <input type="text" name="fnama" id="fnama"/>
                <br/>
                <label>Alamat :</label>
                <input type="text" name="lalamat" id="lalamat"/>
                <br/>
                <label>Nohp :</label>
                <input type="text" name="nohp" id="nohp"/>
                <br/>
                <label>Tgllahir :</label>
                <input type="text" name="tgllahir" id="tgllahir"/>
                <br/>
                <input type="submit" name="submit" id="submit" value="Submit"/>
            </form>
            <?php include "proses.php"; ?>
        </div>
    </div>
</body>
</html>

