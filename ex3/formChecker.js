function validInput() 
{
    return (
     (  (document.getElementById("mojito").value >= 0)
        &&
        (document.getElementById("GinFizz").value >=0)
        &&
        (document.getElementById("oldFashioned").value >=0)
     )
     &&
     (
        document.getElementById("password").value != ""
     )
     &&
     (
        document.getElementById("speed1").checked
        ||
        document.getElementById("speed2").checked
        ||
        document.getElementById("speed3").checked
     )
    )
}

function validForm()
{
    if (!validInput())
    {

        

        alert("yo your inputs are wack bro, recheck everything..");
    }
    else
    {
        return (true);
    }
}