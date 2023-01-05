<?php
session_start();
//echo session_id();
//echo "<br><br>";
?>

<html>
<body>


<table>
 <tr>
     <td colspan="2">   
        <b>Sign in:</b>
    </td>    
<form action="1member.php" method="post">
<tr>
<td>Username:</td>
<td><input type="text" name="nickname" ></td>
</tr>
<tr>
<td>Password:</td> 
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td cols="2"><input type="submit"></td>
</tr>
</form>
</table>

<br><br>

<table>
 <tr>
     <td colspan="2">   
        <b>Sign up:</b>
    </td>    
<form action="1member.php" method="post">
<tr>
<td>Username:</td>
<td><input type="text" name="nickname" ></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" ></td>
</tr>
<tr>
<td>Password:</td> 
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td cols="2"><input type="submit"></td>
</tr>
</form>
</table>


</body>
</html>