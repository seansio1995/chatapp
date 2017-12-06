<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">

    </script>

    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  </head>
  <body>
<h1>My Chat App</h1>

<div id="wrapper">


<div class="chat_wrapper">
  <div id="chat_app"></div>
    <form method="post">
        <textarea name="message" rows="10" cols="60" class="textarea"></textarea>
    </form>

</div>
</div>
<script type="text/javascript">
$('.textarea').keyup(function(e){
  // alert(e.which);
  if(e.which==13){
    $('form').submit();

  }
});



$('form').submit(function(){
    // alert("form submit");
    var message=$(.textarea).val();
    $.post('handlers/message.php?action=sendMessage&message='+message,function(response){
      alert(response);
    });
    return false;
});
</script>



  </body>
</html>
