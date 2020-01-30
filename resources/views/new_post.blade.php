<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Nuevo post</h2>
    <form action="/newPost" method="post">
      @csrf
      <input type="text" name="text" placeholder="Texto">
      <input type="text" name="imagen" placeholder="Imagen">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
