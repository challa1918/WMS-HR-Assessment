<!DOCTYPE html>
<html>

<head>
  <title>Sort Using Pattern</title>
</head>

<body>
  <h2>SBI BANK</h2>

  <h3>Post Table</h3>
  <table border="2">
    <tr>
      <td>ID</td>
      <td>Content</td>
    </tr>

    <?php

    include "connect.php";

    $records = mysqli_query($conn, "select * from post");
    if ($records)
      while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['Id']; ?></td>
        <td><?php echo $data['Content']; ?></td>
      </tr>
    <?php
      }
    ?>
  </table>
  <br>

  <center>
    <h2>Sort By Pattern</h2>
    <form action="query.php" method="get">
      <input type="text" name="pattern"><br><br>
      <input type="submit">
    </form>
  </center>

  <?php mysqli_close($conn); ?>

</body>

</html>