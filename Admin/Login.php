
<script src="jquery-1.11.0.min.js"></script>


<script type="text/javascript">
        $("document").ready(function() {
            //alert("hello");


            $("#login").submit(function () {

                var data = {
                    "action": "login"
                };
                data = $(this).serialize() + "&" + $.param(data);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "UserToken.php", //Relative or absolute path to response.php file
                    data: data,
                    success: function (data, status) {

                        if (data == "Success") {
                            alert("Login Successfully");
                            window.location.href="../index.php";

                        } else {
                            alert("Login Unsuccessfully");
                        }
                        /*$("#loginMsg").show();
                         $("#loginMsg").html(data);*/
                    },
                    error: function (xhr, desc, err) {
                        /*
                         $("#loginMsg").show();
                         $("#loginMsg").html(err);*/
                    }
                });
                return false;
            });
        });
            </script>

<section class="section full-width-bg gray-bg no-margin-top">



    <div class="row">

        <div class="col-lg-9 col-md-9 col-sm-8">



            <div class="col-md-6">


                <h3 class="animate-scroll no-margin-top">Login</h3>

                <form class=login id="login" action="Login.php" method="post" enctype="multipart/form-data" >
                    <table>

                        <tr>

                            <td>Username <input type="text" placeholder="please enter your username" name="Username" required="required" /></td>



                        </tr>

                        <tr>

                            <td>Password <input type="password" placeholder="please enter your password" name="Password" required="required" /> </td>



                        </tr>

                        <tr>

                            <td><div align="center"><input type="submit" class="no-margin-top" value="Login" /> <input type="reset" class="  no-margin-top" value="Reset" /></div></td>



                        </tr>

                    </table>
                </form>

            </div>
