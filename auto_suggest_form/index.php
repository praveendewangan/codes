<html>
    <head>
        <script type="text/javascript">
            function findmatch(){
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }else{
                        document.getElementById("result").innerHTML = xmlhttp.responseError;
                    }
                }
                xmlhttp.open('GET','search.php?search_text='+document.search.search_text.value);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <form id="search" name="search">
            Type a name:
            <input type="text" name="search_text" onkeyup="findmatch();">
        </form>
        <div id="result"></div>
    </body>
</html>