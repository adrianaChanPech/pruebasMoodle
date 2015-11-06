<html>
<head>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.js"></script> mod_assignment-->
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript">
function myFuncion(){
    console.log("entro");
    var domainname = 'http://localhost/moodle/';
    var token = '98c2833a3c01483037ba40d5774b0bbe';
    var functionname = 'core_files_upload';
    var serverurl = domainname + '/webservice/rest/server.php' ;



    var archivo = document.getElementById('archiUpload').value;
       console.log(archivo);                 
    var data = {
                wstoken: token,
                wsfunction: functionname,
                moodlewsrestformat: 'json',
                contextid: 24,//24 83
                component: 'user',
                filearea: 'private',
                itemid: 0,//0 784637451
                filepath:'/',
                filename:'House.jpg',
                filecontent: archivo
                //C:/Users/Public/ictures/Sample Pictures
                //C:/fakepath/Lighthouse.jpg
                //contextlevel:"",
               // instanceid:""

                }
    var response = $.ajax(
                            {   type: 'POST',
                                data: data,
                                url: serverurl
                            }
                         );
    console.info(response);

}



</script>
</head>
<body>
    <input type="file" id="archiUpload"></input>
    Check your Javascript console for the "responseText" value.<br>
    <hr>
                contextid: 24,//24 83<br>
                component: 'user',<br>
                filearea: 'draft',<br>
                itemid: 0,//0 784637451<br>
                filepath:'/',<br>
                filename:'Lighthouse.jpg',<br>
                filecontent: '/fakepath/Lighthouse.jpg'<br>
    <hr>
    responseJSON: Object <br>
        component: "user"<br>
        contextid: 24<br>
        filearea: "draft"<br>
        filename: "Lighthouse.jpg"<br>
        filepath: "/"<br>
        itemid: 997039794<br>
        url: "http://localhost/moodle/draftfile.php/24/user/draft/997039794/Lighthouse.jpg"<br>
        <hr>
    <input type ="submit" value="subir" onclick="myFuncion()">
    <hr>
    "exception":"moodle_exception","errorcode":"nofile","message":"El archivo no ha sido especificad
    Determina si una variable está definida y no es NULL.
</body>
</html>

