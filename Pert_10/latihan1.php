<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="Latihan1" method="POST" onsubmit="return checkform(this)">
        <div> Nim 
            <input type="text" name="txNIM">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">laki-laki
            <input type="radio" name="txJK" value="P"> Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
                <option value="DSN">Desain</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="txGAME" value="1"> Game 
            <input type="checkbox" name="txNONTON_ANIME" value="2"> Wibu
            
        </div>
        <div>
            <button type="submit"> kirim data </button>
        </div>
    </form>

        <script type="text/javascript">
            function checkform(frm){
                console.log("feagfae")
                let form = frm.elements;
                let NIM = form.namedItem("txNIM").value;
                let jnskel = form.namedItem("txJK").value;
                let jur = form.namedItem("txJURUSAN").value;
                let hobi = [
                    form.namedItem("txGAME").checked,
                    form.namedItem("txNONTON_ANIME").checked
                ];

                console.log("NIM: "+NIM);
                console.log("Jenis Kelamin: "+jnskel);
                console.log("Jurusan: "+jur);
                console.log("hobi: "+hobi);

                return false;
            }
        </script>
        
</body>
</html>