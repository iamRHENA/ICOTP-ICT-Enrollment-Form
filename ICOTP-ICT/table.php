<?php
include("admin.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-10">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
    <br>
      <h1>STUDENTS IMPORTANT INFORMATION </h1>
      <p>(These are the list of students who are successfully enrolled)</p><br>
       <thead><tr><th>No. Of Students</th>
         <th>Full Name</th>
         <th>Gender</th>
         <th>Contact</th>
         <th>Email</th>
         <th>Address</th>
         <th>yr_level</th>
         <th>LRN</th>
        
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['fname']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['contact']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['full_address']??''; ?></td>
      <td><?php echo $data['yr_level']??''; ?></td>
      <td><?php echo $data['lrn']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="10">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>