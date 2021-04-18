<div style="background-color:antiquewhite; border: 2px solid red; padding: 10px;">
    <center>
              <form class="form-signin form1" action="index.php" method="POST">

                  <h3 class="form-signin-heading">
                      Login Panel</h2>
                      <br>
                      <input type="text" name="username" class="input" placeholder="Enter  Your  ID  Code"><br><br>
                      <input type="password" name="password" class="input" placeholder="Enter  Password"><br><br>
                      <input type="submit" name="btn" class="btn" value="Login"><br>
											                  <p class="form-indent1">
                      <font size="2" face="verdana" color="red">
                          No Account Yet?<br />
                          <a href="reg_form.php"><u>Create an account</u></a>
                      </font>
                  </p>
                      <font size="1" face="verdana" color="red">
                          <?php
                          extract($_POST);
                          if (isset($btn)) {
                          if (empty($username)&&empty($password)) {
                          echo "All field are required";
                          }
                          elseif (empty($username)) {
                          echo "Please provide Username";
                          }
                          elseif (empty($password)) {
                          echo "Please provide Password";
                          }
                          else
                          {
                          require 'connect.php';
                          $query=mysql_query("SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
                          $row=mysql_num_rows($query);
                          if ($row==1) {
                          $a=mysql_fetch_array($query);
                          $type=$a['usertype'];
                          if ($type=="admin") {
                          session_start();
                          $_SESSION['usertypea']=$type;
                          header("Location: ./admin");
                          }
                          elseif ($type=="user") {
                          session_start();
                          $_SESSION['usertypeu']=$type;
                          header("Location: ./user");
                          }
                          }
                          elseif ($row==0) {
                          echo "Wrong Username/Password Combination";
                          }
                          else
                          {
                          echo "mysql ERROR";
                          mysql_error();
                          }
                          }
                          }
                          ?>
											<br><br>
                      </font></p>

              </form>

          </center>
      </div>      