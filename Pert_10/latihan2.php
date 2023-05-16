<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js 1</title>
</head>
<body>
    

    <form name="latihan2" id="latihan2" method="POST" onsubmit="return checkform()">
        <div> <h3>NIM: </h3><br>
            <input type="text" name="txNIM" id="txNIM">
        </div>
        <div> <h3>Jenis Kelamin: </h3><br>
            <input type="radio" name="txJK" id="txJK" value="L">Laki Laki<br>
            <input type="radio" name="txJK" id="txJK" value="P">Perempuan
        </div>
        <div> <h3>Jurusan</h3><br>
            <select name="txJURUSAN" id="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
            </select>
        </div>
        <div> <h3>Hobi: </h3><br>
            <input type="checkbox" name="txHOBI"  id="txHOBI" value="1"> Game<br>
            <input type="checkbox" name="txHOBI" id="txHOBI" value="2"> Membaca<br>
            <input type="checkbox" name="txHOBI" id="txHOBI" value="3"> Memasak
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script type="text/javascript">
        function checkform(){
            let frm = document.getElementById("latihan2").elements
            let NIM = frm.txHOBI.value
            let jk = frm.txJK.value
            let jurusan = frm.txJURUSAN.value
            let hobi =[
                frm.txHOBI[0].checked,
                frm.txHOBI[1].checked,
                frm.txHOBI[2].checked
            ];
            console.log("NIM: "+NIM);
            console.log("Jenis Kelamin: "+jk);
            console.log("jurusan: "+jurusan);
            console.log("Hobi: "+hobi);

            return false;
        }
    </script>

</body>
</html>