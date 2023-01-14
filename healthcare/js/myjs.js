function namecheck()
{
    var name=document.getElementById("fname").value;
    if(name.length>3)
    {
        document.getElementById("message").innerHTML="your name is correct";
        return true;
    }
    else{
        document.getElementById("message").innerHTML="inccorect name";
        return false;
    }
}