<?php include "includes/innerheader.php"; ?>         <?php if(isset($_POST['submit'])) {  extract($_REQUEST);                            $insert_user_query = "INSERT INTO `users` (`user_account_name`, `user_account_lname`, `user_account_sname`,`user_account_email`)        VALUES ('$name', '$contact_cell', '$contact_cell', '$contact_email')";	$insert_user_result=mysql_query($insert_user_query) ;                if($insert_user_result) {                                    echo 'Success';                    }               }		?>            <div id="inner_container" class="col-lg-12">      <div class="inner_contant">            <h1 id="club">Quick Club Notice Board</h1>             <p>  <?php echo $page_long_description; ?> </p>                      <form role="form" method="post" action="" name="form">               <div id="small_container" class="row">                  <div class="form-group col-lg-12">                      <label id="#" for="input1">Enter Your Name</label>                         <input id="inner_form_field" type="text" name="name" class="form-control">                   </div>                                       <div class="form-group col-lg-12">                         <label id="#" for="input1">Enter Cell No.</label>                                                        <input id="inner_form_field" type="text" name="contact_cell" class="form-control">                   </div>                                      <div class="form-group col-lg-12">                                       <label id="#" for="input1">Your Email Addres</label>                                       <input id="inner_form_field" type="text" name="contact_email" class="form-control">                        </div>                                                     <div class="form-group col-lg-12">                                   <input type="hidden" name="submit" value="contact">                        <button id="submit_btn8" type="submit" name="submit" class="btn btn-primary">Please Join Us!</button>                                          </div></div>                                   </form>                                                              </div>                         </div>             </div>                        </div>    <?php  include "includes/footer.php"; ?>