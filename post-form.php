<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> CTEC 4309 Class Working File: Posting a Message </TITLE>
</HEAD>

<BODY>
CTEC 4309 Class Working File 
<hr>

<h2>Post a Message</h2>

<hr size="1">

<h3>Form</h3>
* required fields
 <form action= "post3.php" method="post">
	Author * : <input type="text" name="author"><br/>
	Email : <input type="text" name="email"><br/>
	Title * : <input type="text" name="title"><br/>

	
	Tag: 
	<input type="checkbox" name="tag[]" value="General Interests"> General Interests
	<input type="checkbox" name="tag[]" value="Local Schools"> Local Schools
	<input type="checkbox" name="tag[]" value="Safety"> Safety
	<br/>
		 <!--Cities-->
    <label for="cities">City*:</label>
    <select id="cities" name="city"> 
        <option value="Dallas">Dallas</option>
        <option value="Arlington">Arlington</option>
        <option value="Fort Worth">Fort Worth</option>
    </select>
    <br>

   Background color:
	<input type="radio" name="bgcolor" id="red" value="red"> 
	    <label for"red">Red </label>
	<input type="radio" name="bgcolor" id="blue" value="blue"> 
		<label for"blue">Blue</label>
	<input type="radio" name="bgcolor" id="green" value="green"> 
		<label for"green">Green </label>
	<br/>

	Comment * : <br/><textarea name="comment" rows="5" cols="40"></textarea><br>
	<input type="Submit" name="SubmitThis" value="Preview">
	


  </form>

  

</BODY>
</HTML>
