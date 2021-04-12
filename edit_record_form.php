<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

<div class="container">
       <?php
       include('includes/header.php');
       ?>
       <h1 id="editrecord-heading">Edit Product</h1>
       <form action="edit_record.php" method="post" enctype="multipart/form-data" id="add_record_form">
              <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" />
              <input type="hidden" name="record_id" value="<?php echo $records['recordID']; ?>">

              <label id="CountryofOriginid">CategoryID:</label>
              <input type="category_id" id="CountryofOriginid" size="50" name="category_id" value="<?php echo $records['categoryID']; ?>">
              <br>

              <label id="CountryofOriginid">Country:</label>
              <input type="input" id="CountryofOriginid" size="50" name="CountryofOrigin" placeholder="Name of Country" value="<?php echo $records['CountryofOrigin']; ?>">
              <br>

              <label id="name">Name:</label>
              <input type="input" id="name" name="name" placeholder="English Name (coffee)" id="name" size="50" onBlur="name_validation();" value="<?php echo $records['name']; ?>" /><span id="name_err"></span>
              <br>

              <label id="price">List Price:</label>
              <input type="input" id="price" name="price" size="50" placeholder="Decimals with 2 places" value="<?php echo $records['price']; ?>">
              <br>

              <label id="Description">Description:</label>
              <input type="input" id="Description" name="Description" size="50" placeholder="atleast 2 words" value="<?php echo $records['Description']; ?>">
              <br>

              <label id="name">Image:</label>
              <input type="file" id="name" name="image" accept="image/*" />
              <br>
              <?php if ($records['image'] != "") { ?>
                     <p><img src="image_uploads/<?php echo $records['image']; ?>" height="150" /></p>
              <?php } ?>

              <label>&nbsp;</label>
              <input type="submit" id ="savechangesbutton"value="Save Changes">
              <br>
       </form>
       <p><a href="index.php">View Homepage</a></p>
       <?php
       include('includes/footer.php');
       ?>