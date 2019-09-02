<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	
	body {
		background-color: white;
	}
	.button{
		background:#1161ee;
		  border:none;
  padding:15px 20px;
  border-radius:25px;
		}
	.checkbox{
		float:right;
	}
	table{
		border-collapse: collapse;
		width:50%;
	}
	td,th{
	
		text-align: left;
		padding: 8px;
	}
	.nobox{
		-webkit-appearance:none;
		border:none;
	}
</style>
<body>

<center>
<form action="submit.php"  method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(form) {
if (form.Instructorname.value == "") { alert('Instructor name is required.'); form.Instructorname.focus(); return false; }
if (form.Course.value == "") { alert('Course  is required.'); form.Course.focus(); return false; }
if (form.Schedule.value == "") { alert('Schedule  is required.'); form.Schedule.focus(); return false; }
if (form.checkbox.value == "") { alert('Checkbox  is required.'); form.checkbox.focus(); return false; }
return true; }
</script><br>

<h1 style="color:darkgreen; font-size:30px;" ><span style="color:darkorange;">Excel</span> Training Skills and Career Center Inc.<br> Course Evaluation </h1>
<table style="width: 700px; border: 0;" cellpadding="4" cellspacing="0">
<tr> <td colspan="2">
<br /> <!--<b>Evaluator</b>
</td> </tr> <tr> <td style="width:50%">
<label for="EvaluatorName">Evaluator name*:</label><br />
<input name="EvaluatorName" type="text" maxlength="100" style="width: 300px;" />
</td> <td style="width:50%">
<label for="KnewStudentFor">How long have you known this Instructor?</label><br />
<select name="KnewStudentFor">
<option value="0-1 year">1 year or less</option>
<option value="1-3 years">1 - 3 years</option>
<option value="over 3 years">more than 3 years</option>
</select>
</td> </tr> <tr> <td>
<label for="EvaluatorPhoneNumber">Evaluator phone number:</label><br />
<input name="EvaluatorPhoneNumber" type="text" maxlength="50" style="width: 300px;" />
</td> <td>
<label for="EvaluatorEmailAddress">Evaluator email address:</label><br />
<input name="EvaluatorEmailAddress" type="text" maxlength="100" style="width: 300px;" />-->
</td> </tr> <tr> <td colspan="2">
 <h3 style="text-align:center;" >Evaluation Form</h3>
</td> </tr> <tr> <td>
<label for="Instructorname">Instructor Name:</label>
<select class="nobox" name="instructor"  maxlength="100" style="width: 300px;" />
<option></option>
<option value="option">Sir Jonathan Estacio</option>
<option>Ma'am Sharon Cuneta</option>
<option>Ma'am Maliit na Bata</option>
</select>
</td> <td>
	<label for="StudentName">Date:</label>
<input  class="nobox" name="date" type="date" maxlength="100" style="width: 300px;" />
</td> </tr> <tr><td>

<label for="Course">Course Teaching:</label>
<select  class="nobox" name="Course"  maxlength="100" style="width: 300px;" />
<option></option>
<option value="option">Web Development</option>
<option value="Creative Web Design Level 3">Creative Web Design Level 3</option>
</select>
</td><td>

<label for="Schedule">Schedule:</label>
<select  class="nobox" name="Schedule" type="text" maxlength="100" style="width: 300px;" />
<option></option>
<option>Mon-fri / 8am - 5pm</option>
</td></tr>
<br><table>
	<i>Please let us know how we can serve you better, Kindly check your answer for each of the given questions.</i>
<td><br>


	<tr>
		<th>QUESTIONS ABOUT INSTRUCTOR</th>&ensp;
		<th>YES</th>
		<th>NO</th>
	</tr>
<tr>
		
		<td>1. Does s/he start his/her class on time?</td>
		<td><input type="radio" name="checkbox" value="YES"></td>
		<td><input type="radio" name="checkbox" value="NO"></td>
	
</tr>
<tr>
	
		<td>2. Does s/he carry him/her self well? Is s/he groomed and properly attired?</td>
		<td><input type="radio" name="checkbox1" value="YES"></td>
		<td><input type="radio" name="checkbox1" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>3. Does s/he have clear and audible voice?</td>
		<td><input type="radio" class="check" name="checkbox2" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox2" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>4. Does s/he attend classes regulary?</td>
		<td><input type="radio" class="check" name="checkbox3" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox3" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>5. Does s/he move around to assist each student during activities/laboratory?</td>
		<td><input type="radio" class="check" name="checkbox4" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox4" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>6. Does s/he accomodate participant's questions patiently?</td>
		<td><input type="radio" class="check" name="checkbox5" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox5" value="NO"></td>
		
	
</tr>
</tr>





	<tr>

		<th>TRAINING QUESTIONS</th>&ensp;
		<th>YES</th>
		<th>NO</th>
	</tr>
<tr>
		
		<td>1. Are the materials and equipment available befores/he starts the class?</td>
		<td><input type="radio" name="checkbox6" value="YES"></td>
		<td><input type="radio" name="checkbox6" value="NO"></td>
	
</tr>
<tr>
	
		<td>2. Are the printed learning materials clear, up-to-date and well organized?</td>
		<td><input type="radio" name="checkbox7" value="YES"></td>
		<td><input type="radio" name="checkbox7" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>3. Do you feel adequately prepared to complete the exercises based on the lecture?</td>
		<td><input type="radio" class="check" name="checkbox8" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox8" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>4. Do you have enough time to complete each activity without feeling rushed?</td>
		<td><input type="radio" class="check" name="checkbox9" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox9" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>5. Do the exercises help you to illustrate the lecture topics?</td>
		<td><input type="radio" class="check" name="checkbox10" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox10" value="NO"></td>
		
	
</tr>
<tr>
	
		<td>6. Are you satisfied with the training?</td>
		<td><input type="radio" class="check" name="checkbox11" value="YES"></td>
		<td><input type="radio" class="check" name="checkbox11" value="NO"></td>
		
	
</tr>
</tr>
</div>
<script>
	
</script>
<br>
</table><br>
<!--
<tr><td>
<label for="YearInSchool">Years in Excel:</label><br />
<select name="Rank">
<option value="">- Rank -</option>
<option value="Freshman">Freshman</option>
<option value="Sophomore">Sophomore</option>
<option value="Junior">Junior</option>
<option value="Senior">Senior</option>
</select>
OR
<select name="Grade">
<option value="">- Grade -</option>
<option value="1st grade">1st grade</option>
<option value="2nd grade">2nd grade</option>
<option value="3rd grade">3rd grade</option>
<option value="4th grade">4th grade</option>
<option value="4th grade">4th grade</option>
<option value="5th grade">5th grade</option>
<option value="6th grade">6th grade</option>
<option value="7th grade">7th grade</option>
<option value="8th grade">8th grade</option>
<option value="9th grade">9th grade</option>
<option value="10th grade">10th grade</option>
<option value="11th grade">11th grade</option>
<option value="12th grade">12th grade</option>
</select>
OR
<select name="YearsInSchool">
<option value="">- Years -</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td> </tr> <tr> <td colspan="2">
<br /> <b>Instructor's performance</b>
</td> </tr> <tr> <td>
<select name="AcademicProgress" style="width:155px;">
<option value="">- Academic progress -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="ClassParticipation" style="width:155px;">
<option value="">- Class participation -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> <td>
<select name="Creativity" style="width:155px;">
<option value="">- Creativity -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="Dependability" style="width:155px;">
<option value="">- Dependability -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> </tr> <tr> <td>
<select name="Initiative" style="width:155px;">
<option value="">- Initiative -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="Teamwork" style="width:155px;">
<option value="">- Teamwork -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> <td>
<select name="OrganizationalSkills" style="width:155px;">
<option value="">- Organizational skills -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="ProblemSolving" style="width:155px;">
<option value="">- Problem solving -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> </tr> <tr> <td colspan="2">
<br />
<label for="WhatDistinguishes">What distinguishes this Instructor from others?</label>
<textarea name="WhatDistinguishes" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td colspan="2">
<label for="Describe">How would you describe this Instructor to others?</label>
<textarea name="Describe" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td colspan="2">
<label for="Comments">Other relevant comments:</label>
<textarea name="Comments" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td>
<br />
</td> <td>
<br />
</td> </tr>
</table>-->
<label><span  style="position: left;">Additional commnents on the lab exercises: </span></label>
<textarea style="margin-right:5%;" name="WhatDistinguishes" rows="7" cols="40" style="width: 200px; height:30px;"></textarea><br>
<label><span  style="position: left; margin-left:23%;">Other suggestions: </span></label>
<input style="margin-right:31.9%;" name="WhatDistinguishes" rows="7" cols="40" style="width: 500px; height:50px;"></input><br><br>
<input class="button" name="submit" type="submit" value="Evaluate" />
<a style="text-decoration: none;" href="home.php" class="button" name="submit" type="submit" />BACK</a>


</form>
</center>

</body>
</html>