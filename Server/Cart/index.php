<!DOCTYPE html>
<html>
<head>
	<title>Multiple Checkbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4>Add to cart Checkbox</h4>
<hr>

<form method="post" action="checkbox-db.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>Product Name</th>
			<th>Quantity</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Bread"></td>
			<td>Bread
				<input type="hidden" name="prodname[]" value="Bread">
			</td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Sugar"></td>
			<td>Sugar
				<input type="hidden" name="prodname[]" value="Sugar">
			</td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Milk"></td>
			<td>Milk
				<input type="hidden" name="prodname[]" value="Milk">
			</td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Tutti frutti"></td>
			<td>Tutti frutti
				<input type="hidden" name="prodname[]" value="Tutti frutti">
			</td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Ghee"></td>
			<td>Ghee
				<input type="hidden" name="prodname[]" value="Ghee">
			</td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
	</tbody>
</table>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>


<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
</body>
</html>
