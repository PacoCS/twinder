<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style media="screen">
  table{
  border: 1px;
  }
</style>
<body>
  <h1>Post List</h1>
  <table class="table table-hover">
    <tr>
      <th>Post ID</th>
      <th>Text</th>
      <th>Imagen</th>
      <th>User ID</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->text}}</td>
      <td>{{$post->img}}</td>
      <td>{{$post->user_id}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
    </tr>
    @endforeach
  </table>

</body>
</html>
