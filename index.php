<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 flex justify-center">

<pre>


<?php


print_r($_POST);
?>
</pre>
 
<div class="login w-[450px] p-10 shadow-lg bg-white mt-10">



<form action="" method="POST" class="flex flex-col gap-3">

<div class="field">

<label for="">Name</label><br>
<input type="text" class="p-2 border w-full" name="name">

</div>

<div class="field">

<label for="">Email</label><br>
<input type="text" class="p-2 border w-full" name="email">

</div>

<div class="field">

<label for="">Phone</label><br>
<input type="number" class="p-2 border w-full" name="phone">

</div>

<div class="field">

<button class="py-3 px-4 w-20 text-white rounded-sm bg-green-500">Login</button>

</div>


</form>



</div>









 
</body>
</html>