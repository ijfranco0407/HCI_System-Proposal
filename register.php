<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <h1>Registration</h1>
    
    
    <fieldset style="margin-top: 20px">
        <legend>Fill-out this form to Register</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>

            <tr>
                <td>Birthday</td>
                <td>
                    <input type="date" name="birthday" required />
                </td>
            </tr>

            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" required />
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Email Address" required />
                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" placeholder="Enter Address" required />
                </td>
            </tr>

            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" name="contact" placeholder="Enter Contact Number" pattern = "[0-9]{11}" required />
                </td>
            </tr>

            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" name="contact" placeholder="Enter User Name" pattern = "[0-9]{11}" required />
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>