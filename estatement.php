
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>og</title>
    <style>
        body{
            background-image: url(bg2.jpg);
            background-repeat: no-repeat;
            background-size:auto;
        }
        .td1{
            border: none;
        }
       
        .bt{
           border: none;
        }
        .tb3{
            border: none;
        }
        .td2{
            border: none;
        }
    </style>
</head>
<body >
    <header>
        <h1 align="center">Ajaybhai Estimate</h1>
    </header>
   <form action="pdf2.php" method="POST">
     <table border="3" cellpadding="8">
        <tr>
            <td class="td1">Goods shipped to:</td>
            <td class="td1"><input type="text" name="tn" id=""></td>
        </tr>
        <tr> <td class="td1">Invoice no:</td>
            <td class="td1"><input type="text" name="in"></td>
        </tr>
        <tr>
            <td class="td1">Date:</td>
            <td class="td1"><input type="date" name="d" id=""></td>
        </tr>
        <tr>
            <td class="td1">Parcel bag:</td>
            <td class="td1"><input type="number" name="pb" id=""></td>
        </tr>
    </table><br><br>
    <table border="3" cellpadding="15" class="bt">
        <header class="th">
            <tr>
                <td>Sr.</td>
                <td>Description of goods</td>
                <td>Marks</td>
                <td>Quantity</td>
                <td>Unit</td>
                <td>Rate</td>
                <td>Amount</td>
            </tr>
        </header>
            <tr>
                <td class="td2">1</td>
                <td class="td2"><input type="text" class="it" id="name" name="name"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number" name="number"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total" name="total" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount" name="amount" onkeyup="sum(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">2</td>
                <td class="td2"><input type="text" class="it" id="name1" name="name1"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number1" name="number1"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total1" onkeyup="mult(this.value)" name="total1"></td>
                <td class="td2"><input type="text" class="it" id="amount1" onkeyup="sum1(this.value)" name="amount1"></td>
            </tr>
            <tr>
                <td class="td2">3</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number2"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total2" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount2" onkeyup="sum2(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">4</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number3"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total3" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount3" onkeyup="sum3(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">5</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number4"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total4" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount4" onkeyup="sum4(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">6</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number5"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total5" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount5" onkeyup="sum5(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">7</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number6"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total6" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount6" onkeyup="sum6(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">8</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number7"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total7" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount7" onkeyup="sum7(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">9</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number8"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total8" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount8" onkeyup="sum8(this.value)"></td>
            </tr>
            <tr>
                <td class="td2">10</td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="number9"></td>
                <td class="td2"><input type="text" class="it"></td>
                <td class="td2"><input type="text" class="it" id="total9" onkeyup="mult(this.value)"></td>
                <td class="td2"><input type="text" class="it" id="amount9" onkeyup="sum9(this.value)"></td>
            </tr>
                       
    </table><br><br>
    <table border="3" cellpadding="15" >
        <tr>
            <td class="tb3">Total Amount:</td>
            <td class="tb3"><input type="text" id="tA" style="border: none;"></td>
        </tr>
        <tr>
            <td class="tb3">Bill Amount:</td>
            <td class="tb3"><input type="text"  id="ba" style="border: none;"  onkeyup="ts(this.value)"></td>
        </tr>
        <tr>
            <td class="tb3">Cash Amount:</td>
            <td class="tb3"><input type="text" id="ca" style="border: none;" ></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><input type="submit" value="SAVE"></td>
        </tr>
    </table>
   </form>
   <script>
    function mult(value){
        var x = document.getElementById('number').value; 
        var y = document.getElementById('total').value;
        var z = x*y
        document.getElementById('amount').value = z;

        var x = document.getElementById('number1').value; 
        var y = document.getElementById('total1').value;
        var z = x*y
        document.getElementById('amount1').value = z;

        var x = document.getElementById('number2').value; 
        var y = document.getElementById('total2').value;
        var z = x*y
        document.getElementById('amount2').value = z;

        var x = document.getElementById('number3').value; 
        var y = document.getElementById('total3').value;
        var z = x*y
        document.getElementById('amount3').value = z;
        
        var x = document.getElementById('number4').value; 
        var y = document.getElementById('total4').value;
        var z = x*y
        document.getElementById('amount4').value = z;

        var x = document.getElementById('number6').value; 
        var y = document.getElementById('total6').value;
        var z = x*y
        document.getElementById('amount6').value = z;

        var x = document.getElementById('number5').value; 
        var y = document.getElementById('total5').value;
        var z = x*y
        document.getElementById('amount5').value = z;

        var x = document.getElementById('number7').value; 
        var y = document.getElementById('total7').value;
        var z = x*y
        document.getElementById('amount7').value = z;

        var x = document.getElementById('number8').value; 
        var y = document.getElementById('total8').value;
        var z = x*y
        document.getElementById('amount8').value = z;

        var x = document.getElementById('number9').value; 
        var y = document.getElementById('total9').value;
        var z = x*y
        document.getElementById('amount9').value = z;     
    }
    function sum(){
        var a = document.getElementById('amount').value;
        var k =a;
        document.getElementById('tA').value = k;
    }
    function sum1(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var k = a  + b;
        document.getElementById('tA').value = k;
    }
    function sum2(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c);
        document.getElementById('tA').value = k;
    }
    function sum3(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d);
        document.getElementById('tA').value = k;
    }
    function sum4(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e);
        document.getElementById('tA').value = k;
    }
    function sum5(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var f = document.getElementById('amount5').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e)+ parseInt(f);
        document.getElementById('tA').value = k;
    }
    function sum6(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var f = document.getElementById('amount5').value;
        var g = document.getElementById('amount6').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e)+ parseInt(f)+ parseInt(g);
        document.getElementById('tA').value = k;
    }
    function sum7(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var f = document.getElementById('amount5').value;
        var g = document.getElementById('amount6').value;
        var h = document.getElementById('amount7').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e)+ parseInt(f)+ parseInt(g)+parseInt(h);
        document.getElementById('tA').value = k;
    }
    function sum8(){
        var a = document.getElementById('amount').value;
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var f = document.getElementById('amount5').value;
        var g = document.getElementById('amount6').value;
        var h = document.getElementById('amount7').value;
        var i = document.getElementById('amount8').value;
        var k =parseInt(a)  + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e)+ parseInt(f)+ parseInt(g)+parseInt(h)+parseInt(i);
        document.getElementById('tA').value = k;
    }
    

    function sum9(){
        
        var a = document.getElementById('amount').value; 
        var b = document.getElementById('amount1').value;
        var c = document.getElementById('amount2').value;
        var d = document.getElementById('amount3').value;
        var e = document.getElementById('amount4').value;
        var f = document.getElementById('amount5').value;
        var g = document.getElementById('amount6').value;
        var h = document.getElementById('amount7').value;
        var i = document.getElementById('amount8').value;
        var j = document.getElementById('amount9').value;
        var k =parseInt(a) + parseInt(b) + parseInt(c) +parseInt(d) + parseInt(e) + parseInt(f) + parseInt(g) + parseInt(h) + parseInt(i) + parseInt(j) ;
        document.getElementById('tA').value = k;
    }
    function ts(){
        var a = document.getElementById('tA').value;
        var b = document.getElementById('ba').value;
        var c = a - parseInt(b);
        document.getElementById('ca').value=c;
    }
   
    </script>
</body>
</html>