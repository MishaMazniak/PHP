   <?php
    $title = "Page about as";
     require "blocks/header.php";
    ?>
    <div class="container">
    <h1>Page about me</h1>
    <form action="check_post.php" method="post">
      <input type="text" name="username" placeholder="Enter your name" class="form_control"><br>
      <input type="text" name="email" placeholder="Enter your email" class="form_control"><br>
      <input type="text" name="password" placeholder="Enter your password" class="form_control"><br>
      <textarea name="message" class="form_control" placeholder="Enter your message"></textarea><br>
      <input type="submit" value="Send" class="btn btn-success">
    </form>
    </div>
    <?php
  require "blocks/footer.php";
    ?>
  