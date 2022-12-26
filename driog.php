<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OG STATEMENT</title>
    <style>
        table{
            margin-top: 100px;
            border: 2px solid black;
            background-color: tan;
        }
    </style>
    
</head>
<body>
    <form action="">
        <table cellspacing="7" cellpadding="20" class="t1">
            <tr>
                <td><label for="aname">ACCOUNT NAME:</label></td>
                <td><input type="text" name="aname" id="aname"></td>
            </tr>
            <tr>
                <td><label for="cash">PAYMENT:</label></td>
                <td><select name="" id="">
                    <option value="cash">cash</option>
                    <option value="debit">debit</option>
                </select></td>
            </tr>
        </table>
    </form>
    <form action="pdf.php" method="POST" >
        
        <table cellpadding="5" cellspacing="5">
            <tr>
                <td align="center">DESCRIPTION</td>
                <td align="center">QTY</td>
                <td align="center">RATE</td>
                <td align="center">AMOUNT</td>
            </tr>
            <tr>
                <td><input type="text" id="name" name="name"></td>
                <td><input type="text" id="number" name="number" ></td>
                <td><input type="text" id="total" name="total" onkeyup="mult(this.value)"></td>
                <td><input type="text" name="amount" id="amount" ><td>
                    
            </tr>
            <tr>
                <td align="right" colspan="4"><input type="submit" value="SAVE and PRINT"></td>
            </tr>
           
        </table>
    </form>
    <script>
function mult(value){
    var x = document.getElementById('number').value; 
    var y = document.getElementById('total').value;
    var z = x*y
    document.getElementById('amount').value = z;
}
</script>
    
</body>
</html>