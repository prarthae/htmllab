<?php
if (isset($_POST['pay'])) {
    $nam = $_POST['nam'];
    $bp = $_POST['bp'];
    $loan = $_POST['loan'];
    $insu = $_POST['insu'];
    $pf = $_POST['pf'];
    $d = $loan + $pf + $insu;
    if ($bp <= 20000) {
        $da = (38 / 100 )* $bp;
        $hra = 300;
    } 
    elseif ($bp>20000 and $bp<=30000) {
        $da = (30 / 100) * $bp;
        $hra = 250;
    } else {
        $da = (38 / 100) * $bp;
        $hra = 300;
    }
    $gp = $bp + $da + $hra;
    $np = $gp - $d;
    
}
?>
<html>
    <center>
        <head>
            <style>
                table{
                    border-collapse:collapse;
                   
                }
                th,tr,td{
                    padding:10%;
                    width:25%;
                  
                   
                }
                th.bla{
                    background-color: black;
                    color:white;
                    padding:3%;
                }
                input.hov:hover{
                        color:white;
                        background-color: black;
                }
                th.fon{
                    font-size:200%;
                    letter-spacing: 6px;
                }
                </style>

                
        </head>
        <form>
            <table border="1" cellpadding="10%">
                <tr><th class="fon" colspan="2">PAY SLIP</th></tr>
                <tr><th>NAME</th><td><?php echo $nam; ?></td></tr>
                <tr><th>BASIC PAY</th><td><?php echo $bp; ?></td></tr>
                <tr><th>GROSS PAY</th><td><?php echo $gp; ?></td></tr>
                <tr><th>NET PAY</th><td><?php echo $np; ?></td></tr>
                <tr><th class="bla" colspan="2"><input type="button" class="hov" onclick="window.print()" value="PRINT"></th></tr>
            </table>
        </form>
    </center>
</html>