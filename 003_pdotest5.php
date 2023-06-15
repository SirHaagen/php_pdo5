<?php
  $host= 'localhost';
  $user= 'root';
  $password= '';
  $dbname= 'pdoposts';

  $dsn= 'mysql:host='. $host. ';dbname='. $dbname;

  //Create new PDO instance
  $pdo= new PDO($dsn, $user, $password);

  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  //INSERT DATA
  /*
  $title= 'Post 4';
  $body= 'This is post 4';
  $author= 'Vato';

  $sql= 'INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)';
  $stmt= $pdo->prepare($sql);
  $stmt->execute(['title'=> $title, 'body'=> $body, 'author'=> $author]);
  echo "Post added<br>";
  */

  //UPDATE DATA
  /*
  $id= 1;
  $is_published= false;

  $sql= 'UPDATE posts SET is_published = :is_published WHERE id = :id';
  $stmt= $pdo->prepare($sql);
  $stmt->execute(['is_published'=> $is_published, 'id'=> $id]);
  echo "Post ".$id." updated";
  */

  //DELETE DATA
  /*
  $id= 4;

  $sql= 'DELETE FROM posts WHERE id = :id';
  $stmt= $pdo->prepare($sql);
  $stmt->execute(['id'=> $id]);
  echo "Post ".$id." deleted";
  */

?>