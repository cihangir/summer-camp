<?php

//Every php file starts with '<?php' and this is a comment line

/**
 * Every line ends with a semicolon ”;”
 * Also this seems to be a block comment
 */
echo "Hello World";

/**
 * Variables in PHP starts with a $ sign, followed by the name of the variable
 */
$sampleVariable = 'sampleVariable';

/**
 * The variable name must begin with a letter or the underscore character
 */
/**
 * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 */
/**
 * Variable names are case sensitive (c and C are two different variables) 
 */
$validVariables = array($crazyBoy_99, $CrazyBoy99, $_crazyBoy99, $Crazy_Boy_99_);
//$invalidVariables = array($.crazyBoy, $crazy-Boy99, $Crazy?Boy, $99CrazyBoy);

/**
 * A variable name should not contain spaces
 */
//$company Model <> $companyModel


/**
 * PHP is a Loosely Typed Language 
 */
$looselyTypedVariable = 'Hello World';
//now it is string
$looselyTypedVariable = 12341;
//now it is integer
$looselyTypedVariable = 3.4;
//now it is float



/**
 * Now we will start with scopes 
 * besides this also focus on methods
 */


/**
 *  PHP has four different variable scopes:
 *  -local
 *  -global
 *  -static
 *  -parameter
 */

/**
 * Local Scope 
 */
$a = 5; // global scope
function demonstrateLocalScope() {
    echo $a; // local scope
}
demonstrateLocalScope();
//output undefined



/**
 * Global Scope 
 */
$a = 5;
$b = 10;
function demonstrateGlobalScope() {
    global $a, $b;
    $b = $a + $b;
}
demonstrateGlobalScope();
echo $b;
//output 15

/**
 * Static Scope 
 */
static $rememberMe;
//static variables allways visible to that function
//with same value even going in and out of scope
//namely still local to the function



/**
 * Parameter Scope 
 */
function demonstrateParameterScope($param1, &$param2, $param3 = NULL) {
// function code
}
demonstrateParameterScope($param1, $param2);
demonstrateParameterScope($param1, $param2, $param3);


/**
 * String
 */

//Concatenation
$txt1="Hello";
$txt2="World!";
echo $txt1 . " " . $txt2;
// output Hello World!


//Length of a string
echo strlen("Hello world!");
//output 12


//index of a character or a sub string
echo strpos("Hello world!","world");
//output 6 (first character index is 0)


//dividing strings into array
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));


//combining array into a string
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);


//lowering a string
echo strtolower("Hello WORLD.");
//output "hello world."



//uppercasing a string
echo strtoupper("Hello WORLD!");
//output: HELLO WORLD!


//substring
echo substr("Hello world!",6);
//output: world!

echo substr("Hello world!", 6, 2);
//output: wo



//trimming words
$str = " Hello World! ";
echo trim($str);


//uppercase first letters
echo ucwords("hello world");
//Output: Hello World

echo ucfirst("hello world");
//output : Hello world





/**
 * Assignment Operators 
 */

//x = y         x = y           Assigning
//x += y	x = x + y	Addition
//x -= y	x = x - y	Subtraction
//x *= y	x = x * y	Multiplication
//x /= y	x = x / y	Division
//x %= y	x = x % y	Modulus
//a .= b	a = a . b	Concatenation


/**
 * Incrementing/Decrementing Operators
 */
// ++x	Pre-increment
// x++	Post-increment
// --x	Pre-decrement
// x--	Post-decrement


/**
 * Comparison Operators
 */
// x ==  y	Equal
// x === y	Identical
// x !=  y	Not equal
// x <>  y	Not equal
// x !== y	Not identical
// x >   y	Greater than
// x <   y	Less than
// x >=  y	Greater than or equal to
// x <=  y	Less than or equal to


/**
 * Logical Operators
 */
// x and y	
// x or y	
// x xor y	
// x && y	
// x || y
// !x



/**
 * IF Conditions
 */
if ($e->getCode() == '30') {
    throw new \User_Exception_UserActivationWaitingException();
} elseif ($e->getCode() == '50') {
    throw new \User_Exception_UserActivationCanceledException();
} else {
    throw new \User_Exception_UserLoginFailedException();
}



/**
 *Switch Conditions 
 */
switch ($serviceType) {
    case (AsynchronousSearchServiceTypeEnum::MQ):
        return new Asynchronous\MessageQueueService($config);
    case (AsynchronousSearchServiceTypeEnum::MAIL):
        return new Asynchronous\MailQueueService($config);
    default:
        throw new Exception\AsynchronousSearchServiceTypeException();
}



/**
 * Array 
 */
$_requiredFields = array("OrderObjectId", "MPAY", "PaymentCategoryId");
echo $_requiredFields[0];
//output "OrderObjectId"



$_paymentStatus = array(
    "inprogress" => "paymentInProgress",
    "cancelled" => "paymentCancelled"
);
echo $_paymentStatus["inprogress"];
//output "paymentInProgress"



$_paymentStatus = array(
    "inprogress" => array("inarrayKey" => "inArrayValue"),
    "cancelled" => "paymentCancelled"
);
echo $_paymentStatus["inprogress"]["inarrayKey"];
//output "inArrayValue"


$a1 = array(0 => "Cat", 1 => "Dog", 2 => "Horse");
$a2 = array(3 => "Horse", 4 => "Dog", 5 => "Fish");
array_diff($a1, $a2);
//output: Array ( [0] => Cat );



array_key_exists("a", $a = array("a" => "Dog", "b" => "Cat"));
//true


$a1=array("a"=>"Horse","b"=>"Dog");
$a2=array("c"=>"Cow","b"=>"Cat");
array_merge($a1,$a2);
//$a2 overrides $a1
//Array ( [a] => Horse [b] => Cat [c] => Cow )


$a = array("Dog", "Cat");
array_push($a, "Horse", "Bird");
//Array ( [0] => Dog [1] => Cat [2] => Horse [3] => Bird )



$a = array("Dog", "Cat", "Horse");
$b = array_pop($a);
//$a = > Array ( [0] => Dog [1] => Cat )
//$b = > Array ( [0] => Horse )