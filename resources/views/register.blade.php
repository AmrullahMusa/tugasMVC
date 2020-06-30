<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign up Form </h2>
    <form method="POST"> 
    

    <label for="nama_awal">First Name: </label>
    <br><br>
    <input type="text" id="nama_awal" name="nama_awal">
    <br><br>

    <label for="nama_akhir">Last Name: </label>
    <br><br>
    <input type="text" id="nama_akhir" name="nama_akhir">
    <br><br>

    <label for="">Gender: </label>
    <br><br>
    <input type="radio" name="gender" value="0"> Male <br>
    <input type="radio" name="gender" value="1"> Female <br>
    <input type="radio" name="gender" value="2"> Other <br><br>
    
    <label for="">Nationality: </label>
    <br><br>
    <select> 
        <option value "0">Indonesian</option>
        <option value "1">Singapore</option>
        <option value "2">Malaysian</option>
        <option value "3">Australian</option>
        <option value "4">Arabian</option>
        <option value "5">Japan</option>
        <option value "6">Isekai</option>
    </select>
    <br><br>

    <label for="">Language Spoken: </label>
    <br><br>
    <input type="checkbox" name="bahasa" value="0">Bahasa Indonesia <br>
    <input type="checkbox" name="bahasa" value="1">English <br>
    <input type="checkbox" name="bahasa" value="2">Daerah <br>
    <input type="checkbox" name="bahasa" value="3">Other <br><br>

    <label for="">Bio: </label>
    <br><br>
    <textarea cols="50" rows="10"></textarea>
    <br><br>
    @csrf
    <input type="submit" value="Sign Up" formaction="/welcome">
    
    </form>
</body>
</html>