<?php
    //header.php
    include('header.php');
?>

    <!--registration area-->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-4">
               <div class="text-center pb-5">
                   <h1 class="login-title text-dark">Register</h1>
                   <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                   <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a> </span>
               </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="assets/images/camera.svg" alt="camera">
                        </div>
                        <img src="assets/images/img_avatar.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--#registration area-->

<?php
    //footer.php
    include('footer.php')
?>