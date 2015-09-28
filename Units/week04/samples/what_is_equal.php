<html>
<head>
</head>
<body>
  <h1>Table: Equality Test with Strings and Numbers</h1>
  <table border="1px solid">
    <tr><th>Statement</th><th>Evaluates to</th></tr>
    <tr><td>"William" == "William"</td><td><?= "William" == "William" ? "true" : "false" ?></td></tr>
    <tr><td>"william" == "William"</td><td><?= "william" == "William" ? "true" : "false" ?></td></tr>
    <tr><td>5 == 5.0</td><td><?= 5 == 5.0 ? "true" : "false"?></td></tr>
    <tr><td>"54" == 54</td><td><?= "54" == 54 ? "true" : "false"?></td></tr>
    <tr><td>"5.4" == 5.4</td><td><?= "5.4" == 5.4 ? "true" : "false"?></td></tr>
    <tr><td>null == null</td><td><?= null == null ? "true" : "false"?></td></tr>
    <tr><td>-0 == +0</td><td><?= -0 == +0 ? "true" : "false"?></td></tr>
    <tr><td>false == 0</td><td><?= false == 0 ? "true" : "false"?></td></tr>
    <tr><td>true == 1</td><td><?= true == 1 ? "true" : "false"?></td></tr>
    <tr><td>null == ""</td><td><?= null == "" ? "true" : "false"?></td></tr>
  </table>
  <h1>Table: Identity Test with Strings and Numbers</h1>
  <table border="1px solid">
    <tr><th>Statement</th><th>Evaluates to</th></tr>
    <tr><td>"William" === "William"</td><td><?= "William" === "William" ? "true" : "false" ?></td></tr>
    <tr><td>"william" === "William"</td><td><?= "william" === "William" ? "true" : "false" ?></td></tr>
    <tr><td>5 === 5.0</td><td><?= 5 === 5.0 ? "true" : "false"?></td></tr>
    <tr><td>"54" === 54</td><td><?= "54" === 54 ? "true" : "false"?></td></tr>
    <tr><td>"5.4" === 5.4</td><td><?= "5.4" === 5.4 ? "true" : "false"?></td></tr>
    <tr><td>null === null</td><td><?= null === null ? "true" : "false"?></td></tr>
    <tr><td>-0 === +0</td><td><?= -0 === +0 ? "true" : "false"?></td></tr>
    <tr><td>false === 0</td><td><?= false === 0 ? "true" : "false"?></td></tr>
    <tr><td>true === 1</td><td><?= true === 1 ? "true" : "false"?></td></tr>
    <tr><td>null === ""</td><td><?= null === "" ? "true" : "false"?></td></tr>
  </table>
</body>
</html>
