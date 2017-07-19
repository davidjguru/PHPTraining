function getXMLHttp()
{
    var xmlHttp;
    try
    {
        xmlHttp = new XMLHttpRequest();
    }
    catch(e)
    {
    //Looking for Internet Explorer
    try
    {
        xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
        try
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
            catch(e)
{
    alert("Seems that you are using an very old browser :-/ so you can't use AJAX Update? :-)")
    return false;
}
}
}
    return xmlHttp;
}


    function AjaxRequest()
{
    var xmlHttp = getXMLHttp();
    xmlHttp.onreadystatechange = function()
{
if(xmlHttp.readyState == 4)
{
HandleResponse(xmlHttp.responseText);
}
}
xmlHttp.open("GET", "helloWorld_PHP7.php", true);

xmlHttp.send(null);
}
function HandleResponse(response)
{
document.getElementById('AjaxResponse').innerHTML = response;
}
