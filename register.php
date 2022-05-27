<!DOCTYPE html>
<html>
<head>
<h1> Company Registration Form</h1>
</head>
<body>
<form action="user_data.php" method="POST">
	<table>


    <td>
				Name:
			</td>

			<td>
				<input type="text"  placeholder="Your Name" name="name">
			</td>
		</tr>
		<tr>
			<td>
				Email Address:
			</td>

			<td>
				<input type=”email”  placeholder="Your Email" name="email">
			</td>
		</tr>

        <td>
                 Date of Birth:
			</td>

			<td>
				<input type="date"  placeholder="Your date of birth" name="date_of_birth">
			</td>

		</tr>

        <td>
                  Gender:
			</td>

			<td>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female

			</td>
            
		</tr>
<tr>
<td>
				Country:
			</td>

			<td>
            
            <input type="text"  placeholder="Type in your Country" name="country">
			</td>
		</tr>

        

			<td>
				<input type="submit"  value="submit" name="submit">
			</td>

		</tr>

	</table>
</form> 
</body>
</html>