<!-- START CONTENT -->
<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?php echo $lang['Add Admin']; ?></h5>
                    <ol class="breadcrumb">
                        <li><a href="dashboard.php"><?php echo $lang['StatusBar']; ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <form method="post" class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <?php echo isset($error['update_user']) ? $error['update_user'] : '';?>

                                        <!--//start of username-->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="username" id="username" value=""   />
                                                <label for="username"><?php echo $lang['Username']; ?></label>
                                            </div>
                                        </div>
                                        <!--//end  of username-->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="email" id="email" value="" />
                                                <label for="email"><?php echo $lang['Email']; ?></label><?php echo isset($error['email']) ? $error['email'] : '';?>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="password" name="new_password" id="new_password" value="" />
                                                <label for="new_password"><?php echo $lang['NewPassword']; ?></label><?php echo isset($error['new_password']) ? $error['new_password'] : '';?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="password" name="confirm_password" id="confirm_password" value="" />
                                                <label for="confirm_password"><?php echo $lang['ReenterPassword']; ?></label><?php echo isset($error['confirm_password']) ? $error['confirm_password'] : '';?>
                                            </div>
                                        </div>


                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="btnChange"><?php echo $lang['Add']; ?>
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>