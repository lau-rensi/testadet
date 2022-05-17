<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Add Student</title>
</head>
<body>
	<div class="container">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-mt-4">
                            <div class="card-header">
                            	<div class=body>
                            		<form action="include/student.inc.php" method="POST">
		                                <h3>Add information</h3>
		                                <label>ID</label>
		                                <input type="text" name="ID" placeholder="Input ID">
		                                <label>Name</label>
		                                <input type="text" name="Name" placeholder="Input Name">
		                                <label>Gender</label>
		                                <input type="text" name="Gender" placeholder="Gender">
		                                <label>Age</label>
		                                <input type="number" name="Age" placeholder="Input Age" min="1">
		                                <label>Nationality</label>
		                                <input type="text" name="Nationality" placeholder="Nationality">
		                                <label>Contact</label>
		                                <input type="text" name="Contact" placeholder="Contact">
		                                <label>College</label>
		                                <select name="college" id="college">
		                                	<option value="COLLEGE OF INFORMATION TECHNOLOGY AND COMPUTING">COLLEGE OF INFORMATION TECHNOLOGY AND COMPUTING</option>
		                                	<option value="COLLEGE OF ENGENIRING AND ARCHITECTURE">COLLEGE OF ENGENIRING AND ARCHITECTURE</option>
		                                	<option value="COLLEGE OF SCIENCE AND MATHEMATICS">COLLEGE OF SCIENCE AND MATHEMATICS</option>
		                                </select>
		                                <label>Program</label>
		                                <select name="programs" id="programs">
		                                	<option value="B.S. in Information Technology">B.S. in Information Technology</option>
		                                	<option value="B.S. in Computer Enginering">B.S. in Computer Enginering</option>
		                                	<option value="B.S. in Data Science">B.S. in Data Science</option>
		                                </select>
		                                <label>Year level</label>
		                                <select name="yearlevel" id="year level">
		                                	<option value="1st Year">1st Year</option>
		                                	<option value="2nd Year">2nd Year</option>
		                                	<option value="3rd Year">3rd Year</option>
		                                	<option value="4th Year">4th Year</option>
		                                </select>
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