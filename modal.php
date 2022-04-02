<!--login -->
<div class=" modal fade" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div>
                    <div>
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p class="item-intro text-muted"></p>
                            <br>
                            <p>
                                <div id="output">
                                    <div id="messageBoxId"></div>
                                    fg
                                </div>
                            </p>

                            <br>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--end login-->

<!--register -->
<div class=" modal fade" id="reg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div>
                    <div>
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p class="item-intro text-muted"></p>
                            <br>
                            <p>
                                <div id="output">
                                    <div id="messageBoxId"></div>
                                    <form action="" method="post" id="frmLogin">
                                        <div class="field-group">
                                            <div><label for="login">Username</label></div>
                                            <div><input name="userName" id="userName" type="text">
                                            </div>
                                            <div class="field-group">
                                                <div><label for="password">Password</label></div>
                                                <div><input name="password" id="password" type="password">
                                                </div>
                                                <div class="field-group">
                                                    <div><input type="button" name="login" value="Login"
                                                            onClick="callLogin();"></span></div>
                                                </div>
                                    </form>
                                </div>
                            </p>

                            <br>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end register -->