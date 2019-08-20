<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Suma</h2>
	<form action="site.php" method="get">
		<input type="number" name="num1" required>
		<br>
		<input type="number" name="num2" required>
		<br>

		<input type="submit">
	</form>
	<br>

<?php 
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
echo $num1 + $num2; ?>

<hr>
	<h2> Madlibs</h2>
	<form action="site.php" method="get">
		Color: <input type="text" name="color"> <br>
		Plurar noun: <input type="text" name="pluralNoun"> <br>
		Celebrity: <input type="text" name="celebrity"> <br>
		<input type="submit">
	</form>

	<?php 


	$color = $_GET["color"];
	$pluralNoun = $_GET["pluralNoun"];
	$celebrity = $_GET["celebrity"];
	echo "Roses are $color <br>";
	echo "$pluralNoun are blue <br>";
	echo "I love $celebrity";
?>
<hr>

<h2> echo "password and POST"</h2>

<form action="site.php" method="post">
	Name: <input type="password" name="password">
	<input type="submit">
</form>

<?php
//it's a secure way to retrieve information and it can get more information

echo $_POST["password"];
//most of the time developers will prefer to use post instead of get when  you fill a form.
?>
<hr>
<h2>Arrays</h2>
<?php 

$friends = array("Kevin", "Karen","Oscar", "Jim");
$friends[2]= "Johnathan";
$friends[5]= "Juliette";

echo $friends[2];
echo $friends[5];
echo count($friends);//array lenght

?>
<h2>checkboxes</h2>
<form action="site.php" method="post">
	Apples:<input type="checkbox" name="fruits[]" value="apples">
	<br>
	Bananas:<input type="checkbox" name="fruits[]" value="Bananas">
	<br>
	Oranges:<input type="checkbox" name="fruits[]" value="Oranges">
	<br>
	Pears:<input type="checkbox" name="fruits[]" value="Pears">
	<br>
<input type="submit">
</form>
<?php 

$fruits = $_POST["fruits"];
echo $fruits[0];

?>

<hr>
<h2> Asosociative Arrays </h2>
<!--key value pairs-->

<form action="site.php" method="post">
	<input type="text" name="student">
	<input type="submit">
</form>


<?php 
//store key value pares with "=>" between the values
	$grades = array("Jim"=>"A+", "Pam" =>"B-", "Oscar"=>"C+");
	echo $grades[$_POST["student"]];//searchs for the input value and accesint inside the associative array



?>
<hr>
<h2> Functions </h2>

<?php 
	function sayHi($newName, $age){
		echo"Hello $newName you're $age";
	};
	sayHi("Tom", 2);
	echo "<br>";
	sayHi("OScar",13);
?>

<hr>
<h2>Return Statements </h2>



<?php 
  function cube($base) {
  	return $base*$base*$base;
  }

$cubeResult = cube(4);//resuleve y regresa la base. We colud do cube(4) too
echo $cubeResult;

?>
<hr>
<h2> If statements </h2>
<?php 
$isMale= false;
$isTall= true;
if($isMale && $isTall){
	echo "He's male and tall!";
}elseif($isMale && !$isTall){
	echo "he's male and short";	 //elseif se escribe todo jnto en php
}elseif (!$isMale && $isTall){
	echo "You're not a male but you're tall";
} else {
	echo " You're female and short";
}


?>
 <hl>
 	<h2>If statements 2</h2>
 	<?php
 	echo max(3,6);
 	function getMax($num1,$num2){
 		if($num1 > $num2){
 			return $num1;
 		} else{
 		 return $num2;
 		}

 	}
 	echo "<br>";
 	echo "the biggest number out of two is ";
 	echo getMax(300,90);

 	 	function getMaxOf3($num1,$num2,$num3){
 		if($num1 >= $num2 && $num1>= $num3){
 			return $num1;
 		} elseif ($num2 >= $num1 && $num2>= $num3){
 		 return $num2;
 		} else {
 			return $num3;
 		}

 	}

 	echo "<br>the biggest number out of three is ";
 	echo getMaxOf3(3, 4,5);

 	 ?>
<hl>

 	 <h1>More complex Calculator</h1>
 	 <form action="site.php" method="post">
 	 	First Num:<input type="number" name=number1>
 	 	Operator:<input type="text" name="operator">
 	 	Second Num<input type="number" name="number2">
 	 	<input type="submit">
</form>

 	 	<?php 
 	 	$num1 = $_POST["number1"];
 	 	$num2 = $_POST["number2"];
 	 	$operator= $_POST["operator"];

 	 	if($operator == "+"){
 	 		echo $num1 + $num2;
 	 	} 	 	elseif($operator == "-"){
 	 		echo $num1 - $num2;
 	 	} 	 	elseif($operator == "*"){
 	 		echo $num1 * $num2;
 	 	}  	 	elseif($operator == "/"){
 	 		echo $num1 / $num2;
 	 	} else {
 	 		echo "Invalid operator. Use  +, -, *, /";
 	 	 }

 	 	 ?>
 	 	
 	 	<hr>
 	 	<h2>Switch statements </h2>
 	 	<form action="site.php" method="post">
 	 		What was your grade?
 	 		<input type="text" name="grade">
 	 		<input type="submit" >
 	 	</form>

 	 	<?php 
 	 	$grade = $_POST["grade"];
 	 	echo $grade;
 	 	echo "<br>";


 	 	switch($grade){

 	 		case"A":
 	 		echo"You did amazing!";
 	 		break;
 	 		case"B":
 	 		echo"You did well!";
 	 		break;
 	 		case"C":
 	 		echo"You did Terrible!";
 	 		break;
 	 		default:
 	 		echo "Invalid Grade";
 	 		break;
 	 	}
 	 	?>


 	 	<hl>
 	 		<h1>While And Do While</h1>
 	 	<?php 
 	 	$index= 1;
 	 	while($index <= 5) {
 	 		echo "$index<br>";
 	 		$index++;
 	 	}
 	 	?>
 	 	<h3> Do while</h3>
 	 	<?php 
 	 	

 	 	$index2 = 3;
 	 	 do{
 	 	 	echo "$index2 <br>";
 	 	 	$index2++;
 	 	 	}while($index2 <= 5);
 	 	?>


 	 	<hl>
 	 		<h2>For Loop</h2>

 	 	<?php 
 	 	$indice = 1;
 	 	for($i = 1; $i < 5; $i++ ){
 	 		echo "$i<br>";

 	 	}

 	 	?>
 	 	<hl>
 	 		<h1>For loop in arrays</h1>
 	 		<?php
 	 		$luckyNumbers = array(4,8,14,16,23,42);

 	 		for ($i = 0; $i < count($luckyNumbers); $i++){//count es el length de arrays en PHP
 	 			echo "$luckyNumbers[$i] <br>";
 	 		}
 	 		?>

 	 		<hr>
 	 		<h2> Including HTML</h2>
 
 	 		<?php
 	 		//allows us to include another file into our PHP flie
 	 		  include "header.html"; ?>
 	 		  <?php
 	 		   	 		  include "footer.html";
 	 		?>


<hr>
<h2> include PHP<h2>
	<?php
	$title = "My First Post";
	$author = "Rodri";
	$wordCount = 400;
	include "article-header.php";

	?>
 
<hl>

 <?php
 include "useful-tools.php";
 sayHiToMe("rodri");
 echo "<br>";
 echo "you're $feetInMile away";
 ?>

<hl>
	<h2>Classes & Objects </h2>
	<?php 
	class Book{ //with atritbutes you can define the properties of the object to be created
		var $title;
		var $author;
		var $pages;
				function __construct($name){
	echo "New Book Created by $name <br>"; 
}
	};


	$book1 = new Book("mike");
	$book1 ->title = "Harry Potter";//this is how you set the propoerties of the object
	$book1 ->author = "JK Rowling";
	$book1 ->pages = 400;

	$book2 = new Book("jerry");
	$book2->title = "Harry Potter";
	$book2->author = "Tolkien";
	$book2->pages = 700;

	echo $book1 -> author;
	echo "<br>";


	$bookTwoAuth = $book2 -> author;
	echo $bookTwoAuth;


	?>
<hl>
	<h2> Constructor</h2>

	<?php 
	//use construct NOT  constructor
	class Magazine {
		var $title;
		var $author;
		var $pages;
		function __construct($aTitle, $aAuthor, $aPages) {
			$this->title = $aTitle;
			$this->author = $aAuthor;
			$this->pages = $aPages;
		}
	};
$magazine1 = new Magazine("Manly Man Sports Extreme","Axe", 23);
$magazine2 = new Magazine("Womanly Emotions","Cosmopolitan", 45);

  echo $magazine1->author;
?>

<hl>
<h2> Obeject Functions </h2>
<?php

class Student {
	var $name;
	var $major;
	var $gpa;
	function __construct($name, $major, $gpa){
		$this->$name =$name;
		$this->major = $major;
		$this->gpa = $gpa;
	}
	function hasHonors(){

		if($this->$gpa <= 3.5){ //THIS LLEVA $ ==>> $this
			echo "this student is honorable";
		} else {
			echo "this student isn't honorable";
		}
	}
}

$student1= new Student("Jim", "business", 2.8);
$student2= new Student("Pam", "Art", 3.6);


echo $student1->hasHonors();


?>

<hl>
	<h1>Getters and Setters  and visibility modifiers</h1>


<?php
 class Movie {
 	public $title;
 	private $rating;
 
 function __constructor($title, $rating){
 	$this->title = $title;
 	$this->setRating();//es mejor usar el metodo del objeto asi no puede darle un valor que no deseamos.

 }
 function getRating(){
 	return $this->rating;
 }

 function setRating($rating){
 	if($rating == "G" ||$$rating == "PG" ||$rating == "PG-13" ||$rating == "R"){
 		$this->rating = $rating;
 	} else {
 		$this->rating = "NR";
 	}
  }
}
 $avengers = new Movie("avengers", "PG-13");

echo $avengers ->SetRating("R");
echo $avengers->getRating();
?>
<hr>
<h2> inheritance</h2>
<!-- it's wen a class can inherit all the attributes from another classs-->

<?php
class Chef {
	function makeChicken()
 {
 	echo "The chef makes chicken <br>";
 }
 	function makeSalad(){
 		echo "The chef makes salad <br>";
 	}
 	function makeSpecialDish(){
 		echo "The chef makes milanesas<br>"; 
 	}

} 


class ItalianChef extends Chef{
	function makePasta(){
		echo "The chef makes pasta";

	}
	function makeSpecialDish(){
		echo "The chef makes Scargot";
	}

}


//Regular Chef
$chef = new Chef();
$chef->makeChicken();

//italian chef
$ItalianChef = new ItalianChef();
$ItalianChef->makeChicken();
$ItalianChef->makePasta();

//overwriting
$chef->makeSpecialDish();
$ItalianChef->makeSpecialDish();
?>

</body>
</html>