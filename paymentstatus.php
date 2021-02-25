<?php
include('./mainInclude/header.php');
?>

<!-- end including Header -->

<!-- start course page -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./images/Python.jpg" alt="courses"
            style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
        </div>
    </div>
<!-- end course page -->


<!-- start Order -->

<div class="container">

    <h2 class="text-center my-4">Payment Status</h2>
        <form method="post" action="">
            <div class="form-group row">
                <label class="offset-sm-3 col-form-label">Order ID:</label>
                <div>
                    <input type="text" class="form-control mx-3">
                </div>
                <div>
                    <input type="submit" class="btb btn-primary mx-4" value="View">
                </div>
            </div>
        </form>
</div>

<!-- start contact us -->

<?php
include('./contact.php');
?>


<!-- end contact us -->

<!-- End Order -->

<!-- start video Background -->
    <!-- <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted Loop>
            <source src="videos/notebook.mp4"/>
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to iSchool</h1>
            <small class="my-content">Learn and Implement</small><br/>
            <!-- <a href="#" class="btn btn-danger" data-toggle="modal"></a> -->
        </div>
    </div> -->
<!-- ENd video background -->

<!-- start Including Footer -->
<?php
include('./mainInclude/footer.php');
?>

<!-- end including Footer -->