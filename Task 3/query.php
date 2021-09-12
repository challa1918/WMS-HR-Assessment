<html lang="en">
<head>
    <title>Result</title>
</head>
<body>
<h2>SBI BANK</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Content</td>
  </tr>
    <?php
        include "connect.php";
        $pattern=$_GET['pattern'];
        echo "Pattern :- ".$pattern;
        $records = mysqli_query($conn,"select Id,Content,Match(Content) Against( '$pattern' IN natural language mode)As Relevance from post order by Relevance desc;");
        if($records)
        while($data = mysqli_fetch_array($records))
        {   
        ?>
            <tr>
                <td><?php echo $data['Id']; ?></td>
                <td><?php echo $data['Content']; ?></td>
            </tr>	
        <?php
        }
        else echo "false";
        ?>
     <?php mysqli_close($conn);  ?>
    
</body>
</html>
