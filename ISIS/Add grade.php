<?php 
        include_once'include/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Add Grade</title>
</head>
<body>
	<div class="container">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-mt-4">
                            <div class="card-header">
                            	<div class=body>
                            		<form action="include/grade.inc.php" method="POST">
		                                <h3>Add Grade</h3>
		                                <label>ID</label>
		                                <input type="text" name="ID" placeholder="Input ID">
		                                <label>Capstone</label>
		                                <input type="text" name="capstone">
		                                <label>Math</label>
		                                <input type="text" name="math">
		                                <label>Science</label>
		                                <input type="text" name="science"><br>
                                        <button type="submit" name="submit">Submit</button>
	                                </form>
	                            </div>
	                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>