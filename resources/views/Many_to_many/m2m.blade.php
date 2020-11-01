<!Doctype html>
<html>
<head></head>
<body>

<center>
<form action="{{'/test'}}" method="get">
<table border="2", Bordercolor="green", width="20%", height="20%", BGColor="pink">
    @csrf
        <tr>
        <td>name</td>
        <td><input type="text" name="name"></td>
        </tr>
        <tr>
       
        <tr>
          <td> </td><td> 
             <input type="submit" name="Submit" value="Submit"> 
            </td>
        </tr>
       
        
</table>
</form>
</center>
</body>
</html>