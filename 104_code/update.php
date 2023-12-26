<?php
// Include database connection file
require_once "db.php";
include("auth_session.php");


    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE library_db set  Book Title='" . $_POST['booktitle'] . "', callnumber='" . $_POST['callnumber'] . "' ,author='" . $_POST['author'] . "' ,published='" . $_POST['author'] . "' ,published='" . $_POST['lccn'] . "' ,lccn='" . $_POST['isbn'] . "' ,isbn='" . $_POST['subject'] . "' ,subject='" . $_POST['location'] . "' ,location='" . "' WHERE id='" . $_POST['id'] . "'");
     
     header("location: 3-database.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM library_db WHERE booktitle='" . $_GET['booktitle'] . "'");
    $row= mysqli_fetch_array($result);
  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "head.php"; ?>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header mt-2">
                    <a href="3-database.php" class="btn btn-info float-right mt-2">Back</a>
                        <h2>Update Record</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Book Title</label>
                            <input type="text" name="Book Title" class="form-control" value="<?php echo $row["booktitle"]; ?>" maxlength="90" required="">
                            
                        </div>
                        <div class="form-group ">
                            <label>Call no.</label>
                            <input type="text" name="Call number." class="form-control" value="<?php echo $row["callnumber"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="Author" class="form-control" value="<?php echo $row["author"]; ?>" maxlength="60"required="">
                        </div>
                        <div class="form-group">
                            <label>Published</label>
                            <input type="text" name="Published" class="form-control" value="<?php echo $row["published"]; ?>" maxlength="90"required="">
                        </div>
                        <div class="form-group">
                            <label>LCCN</label>
                            <input type="text" name="LCCN" class="form-control" value="<?php echo $row["lccn"]; ?>" maxlength="60"required="">
                        </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="ISBN" class="form-control" value="<?php echo $row["isbn"]; ?>" maxlength="60"required="">
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="Subject" class="form-control" value="<?php echo $row["subject"]; ?>" maxlength="90"required="">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="Status" class="form-control" value="<?php echo $row["status"]; ?>" maxlength="60"required="">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="Location" class="form-control" value="<?php echo $row["location"]; ?>" maxlength="60"required="">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="3-database.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
        <?php include "js.php"; ?>
</body>
</html>