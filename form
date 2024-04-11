<?php
//--------------------------
// Form Processing Script
//		This script is written to work with the form in post_form_3.php.
//--------------------------


//option 1: pass js var by echoing script tag in php file
/*echo '<script>
        var backgroundc= {"red":"red","green":"green","blue":"blue"}
        
        window.onload=function()
        {
            var bgcolor=document.getElementsByName("bgcolor");
           // document.cookie="backgroundc";
            for(var i=0;i<bgcolor.length;i++)
            {
                bgcolor[i].onclick=function(){
                    document.body.style.backgroundColor=backgroundc[this.value];
                }
            }
        }
    </script>';
*/


 


//==========================
// Data validation
//==========================

// check to see if there is a form submission or not
if (array_key_exists("SubmitThis", $_POST)) {


	// data validation
	//  - check required fields

	//== Modify the required and expected arrays below to fit your form ========
	$required = array('title', 'author','comment', 'city');
	$expected = array('title', 'author','comment','tag', 'email', 'city');
	$missing = array();
	

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable ($thisUserInput) to store user input for this field
        // check if the user input is available first
        //when first starting, $thisField will carry 'title'
         if (isset($_POST[$thisField])){
             $thisUserInput = $_POST[$thisField];
         } else {
             $thisUserInput = "";
         }
         
             
        // if the input is NOT an array, use trim() to remove the leading and trailing spaces
        //me: if input isn't valid/has many spaces before or after input
        if (!is_array($thisUserInput)) { 
            $thisUserInput = trim($thisUserInput);
        } 
		

		// check if this field is a required field
		if (in_array($thisField, $required)) {
			// check if user input of this field is empty, if yes, add this field to the missing array
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				// set up a variable to store the user input for this field
				/*
					Say $thisField contains "title", then this line
						${$thisField} = $thisUserInput;
					will effectively turn to
						$title = $thisUserInput;
					In this example, after the foreach loop, we will then have the following variables: $title, $author, $comment, and $tag, all set up and that's why we can use them to compose the $output below (line 66).
					
					Also note that the names of these new variables match the form field names recorded in the $expected array.
					
					
				*/
				// not sure about next line
				//$thisField = 'title';
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}
	
	$author = $_POST['author'];
	$comment = $_POST['comment'];
	$city =  $_POST['city'];
	$title = $_POST['title'];
	$tag = $_POST['tag'];
	$email = $_POST['email'];

	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
	if (empty($missing)){
		// empty($missing) is true --> no missing field, proceed with business processes (in this example, display all user input.)

		// deal with array input, ex. $tag
		$tagStr = implode(", ", $tag);
		
		// print_r ($tag); // enable this line will print the $tag array, so you can see what's been stored in the $tag array.  It may help you to debug.

		// process author name and email
		if (!empty($email)) {
			$author = "<a href='mailto:$email'>$author</a>";
		}

		$output = " ";
	
	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}


} else {
	$output = "Please post your message use <a href='post_form_3.php'>this form</a>.";
}


?>




<!DOCTYPE HTML>
<HTML>
<HEAD>
<style>
table {
    background-color: <?php echo $_POST['bgcolor'] ?>;
    color: lightgrey;
    
}
    
</style>
<TITLE> CTEC 4309 Class Working File: Message Form Processing </TITLE>
</HEAD>

<BODY>
CTEC 4309 Class Working File 
<hr>

<h2>Preview Your Message</h2>

<hr size="1">
<p>
	<?php echo $output ?>
</p>

<table align = "left" border = "1" cellpadding = "3" cellspacing = "0" >  

<?php    

$x = 0;  


while($x  < count($expected)) {  
    $thisUserInput = $_POST[$thisField];
    echo "<tr>";  
  echo "<td> $expected[$x] </td>";  
  $values = $_POST[$expected[$x]];
  echo "<td>";
    if(is_array($values)) {
           foreach ($tag as $value) {
              echo $value;
           }
        }
        else{
             echo  $values;
        }
    echo "</td>";
    echo "</tr>";  
  $x++;  
}   

?>    
</table> 
	

<script>
        var backgroundc= {"red":"red","green":"green","blue":"blue"}
        
        window.onload=function()
        {
         
                bgcolor[i].onclick=function(){
                    document.body.style.backgroundColor=<?php ehco [this.value]?>;
                }
            }//add php element into script for changing table's background color
        }// also use a server side language to check for a post or get variable and if it exists include the table in the html
    </script>;
    
    

</BODY>
</HTML>
