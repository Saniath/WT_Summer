<html>
    <head>
        <title>
            my page
    </title>
    </head>

    <body>
        <h1>Registration Form</h1>
            <form action="../control/registerValidation.php" method="post">
   <table>
    <tr>
    <td>Name:</td><td><input type="text" name="Fname"></td>
    </tr>
   
    <tr>
    <td>Last Name:</td><td><input type="text" name="Lname"></td>
    </tr>
   
    <tr>
    <td>Age:</td><td><input type="text" name="age"></td>
    </tr>
   
   
   
       <tr>
        <td>Designation:</td>
    <td><input type = "radio" name="designation" value="Junior Programmer">Junior Programmer
    <input type = "radio"name="designation"value="Senior Programmer">Senior Programmer
    <input type = "radio"name="designation"value="Project Lead">Project Lead
    </td>
</tr>
 
   
<tr>
    <td>Preferred language
    <td><input type="checkbox" name= "java"> java
    <input type="checkbox" name= "php"> php
    <input type="checkbox" name= "c++"> c++</td>
    </td>

    <tr>
    <td>E-mail:</td><td><input type="text"name="email"></td>
    </tr>

    <tr>
    <td>Password:</td><td><input type="text"name="password"></td>
    </tr>

    <tr>
        <td>choose your file
    <td><input type="button" name="file" value="Choose File"></td>
</td>
<td>No file chosen</td>
</tr>
   
    <tr>
   
    <tr>
</tr>
   
    <tr>
    <td><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset"></td>
</tr>


                    </table>
                </form>

            </body>




</html>