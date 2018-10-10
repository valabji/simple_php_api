# simple php api
PHP Api to connect your android , ios or .net project to mysql DB / Maria DB

first you have to download the api then edit it with your params,
then you have to upload it to your webserver via FTP or SSH
or if you are using a localhost you can simply copy/move it to www folder (htdocs) or any folder inside it
but if you copy it to e.g.: www/abc you have to access it through http://localhost/abc/api.php

on the application side you have to format your query then send it via HTTP_POST* Method in param called 'sql'
e.g : 
put('sql','select * from table')

--------------------
* you can change the method within the api if you want 

Best Regards

A.Rahman S. Valabji
