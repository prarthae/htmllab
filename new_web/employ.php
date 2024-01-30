<html>
    <head>
        <style>
            th,tr,td{
                padding:30px;
                background-color:beige;
            }
            
            input.pay:hover{
                color:burlywood;
                background-color: white;
            }
            </style>
    </head>

<body>
    <center>
        <form method="post" action="slip.php">
            <table>
                <tr>
                    <th>NAME</th>
                    <td><input type="text" name="nam"></td>
                </tr>
                <tr>
                    <th>BASIC PAY</th>
                    <td><input type="text" name="bp"></td>
                </tr>
                <tr>
                    <th>LOAN</th>
                    <td><input type="text" name="loan"></td>
                </tr>
                <tr>
                    <th>INSURANCE</th>
                    <td><input type="text" name="insu"></td>
                </tr>
                <tr>
                    <th>PF</th>
                    <td><input type="text" name="pf"></td>
                </tr>
                <tr><th colspan="2"><input class="pay" type="submit" name="pay" value="GETPAYSLIP"></th></tr>
            </table>
        </form>
    </center>
</body>

</html>

