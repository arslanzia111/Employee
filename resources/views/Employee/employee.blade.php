<!Doctype html>
<html>
<head></head>
<body>
{{$name}}
<center>
<form action="/store" method="post">
<table border="2", Bordercolor="green", width="20%", height="20%", BGColor="pink">
    @csrf
        <tr>
        <td>name</td>
        <td><input type="text" name="name"></td>
        </tr>
        <tr>
        <td>address</td>
        <td><input type="text" name="address"></td>
        </tr>
        <tr>
        <td>phone</td>
        <td><input type="Integer" name="phone"></td>
        </tr>
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