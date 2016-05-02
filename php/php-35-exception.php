<!DOCTYPE html>
<html>
<body>

<h1>Set Exception Handler</h1>
<?php
function myException(Exception $exception)
{
    echo "<br>Exception: </b> " . $exception->getMessage();
}
set_exception_handler("myException");
//throw new Exception("Uncaught Exception occurred");
?>

<h1>Custom Exception</h1>
<?php
class CustomException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = "Error on line " . $this->getLine() . " in " . $this->getFile() .
            ": <b>" . $this->getMessage() . "</b> is not a valid E-Mail address";
        return $errorMsg;
    }
}

$email = "someone@example...com";
$email = "someone@example.com";

try
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        throw new CustomException($email);
    if(strpos($email, "example"))
        throw new Exception("$email is an example e-mail");
}
catch(CustomException $e)
{
    echo $e->errorMessage();
}
catch(Exception $e)
{
    echo $e->getMessage();
}

try
{
    try
    {
        if(strpos($email, "example") !== false)
            throw new Exception($email);
    }
    catch(Exception $e)
    {
        throw new CustomException($email);
    }
}
catch(CustomException $e)
{
    echo $e->errorMessage();
}
?>

<h1>Try Throw Catch Exception</h1>
<?php
function checkNum($number)
{
    if($number > 1)
    {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

try
{
    checkNum(2);
}
catch(Exception $e)
{
    echo "Message: " . $e->getMessage();
}
?>

</body>
</html>