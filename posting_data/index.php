<html>
<head>
    <script>
        function insert(){
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById("message").innerHTML = xmlhttp.responseText;
                }
            }

            parameter = "text="+document.getElementById("text").value;

            xmlhttp.open("POST","update.php");
            xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            xmlhttp.send(parameter);
        }
    </script>
</head>
<body>
    Insert : <input type="text" id="text" > <input type="submit" onclick="insert()">
    <div id="message"></div>
</body>
</html>