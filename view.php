<?php
    require 'config.php';
    session_start();
    
?>



<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
</style>
<body>
  <table>
    <caption>WE GOT THESE RELATED TO YOU</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">District</th>
        <th scope="col">Town</th>
        <th scope="col">Phone</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        
        
      </tr>
    </thead>
    <tbody>
        <?php
            $crop= $_SESSION['item'];

            $res=mysqli_query($con,"select * from farmercrops where crop='$crop'")

            while($row=mysqli_fetch_array($res)){
              ?>

              <tr>
                <td> <?php  echo $row['name'] ?> </td>
                <td> <?php  echo $row['disctrict'] ?> </td>
                <td> <?php  echo $row['town'] ?> </td>
                <td> <?php  echo $row['phone'] ?> </td>
                <td> <?php  echo $row['price'] ?> </td>
            </tr>

<?php
            }

         ?>

         <a href='nav2.php'> Nav Bar </a>
             
       

</body>
</html>
