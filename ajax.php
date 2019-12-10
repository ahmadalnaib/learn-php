


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Serarch Users</title>

    <script>
        function showSuggestion(str) {
         if(str.length == 0){
             document.querySelector("#output").innerHTML='';

         } else  {

             const xmlhttp=new XMLHttpRequest();
             xmlhttp.onreadystatechange=function () {
             if(this.readyState==4 && this.status==200){

                 document.querySelector("#output").innerHTML=this.responseText;

             }
             };
             xmlhttp.open("GET","ajax2.php?q="+str,true);
             xmlhttp.send();

         }
        }
    </script>
</head>
<body>
<div class="container">
  <h1>Search Users</h1>
  <form action="">
      Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
  </form>
   <p>Suggestions <span id="output" style="font-weight: bold"></span></p>
</div>
</body>
</html>

