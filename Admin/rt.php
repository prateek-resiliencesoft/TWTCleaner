<?php include('startsession.php'); ?>
<?php include('header.php'); ?>

    <script type="text/javascript">
        $("document").ready(function(e){
            $("#loginMsg").hide();

            $("#AddTweet").submit(function(){

                $("#loginMsg").hide();

                var data = {
                    "action": "AddTweet"
                };

                data = $(this).serialize() + "&" + $.param(data);

                //e.preventDefault();

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "../classes/TwitterRtDetails.php", //Relative or absolute path to response.php file
                    data: data,
                    success: function(data, status) {
                        if(data=="Success")
                        {
                            $("#loginMsg").show();
                            $("#loginMsg").html("Tweet Added Successfully.");
                            //alert("Album Successfully Created.");
                        }else
                        {
                            // alert(data);
                            $("#loginMsg").show();
                            $("#loginMsg").html(data);

                        }
                    },
                    error: function(xhr, desc, err) {

                        //alert(xhr);
                        //alert("Details: " + desc + "\nError:" + err);

                        $("loginMsg").show();
                        $("loginMsg").html(err);

                    }
                });
                return false;
            });
        });
    </script>

    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Tweet</a>
            </li>
        </ul>
    </div>


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i>Add Tweet For Retweet</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">

                <form id="AddTweet" class="form-horizontal" action="TwitterRtDetails.php"
                      method="post" enctype="multipart/form-data">


                    <fieldset>
                        <div id="loginMsg" class="alert alert-danger"></div>


                        <div class="control-group">
                            <label class="control-label">Tweet Id</label>
                            <div class="controls">
                                <input type="text" id="tweetId" name="tweetId" required="required">

                            </div>
                        </div>



                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn">Reset</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

<?php include('footer.php'); ?>

<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 02/05/2015
 * Time: 6:20 PM
 */

//echo "Hello";

//require_once('../twitteroauth/twitteroauth.php');
//require_once('../config-sample.php');
//require_once('../simple_html_dom.php');

//echo "Tweet Id : ". $_POST['tweetId'];

//MySQLi Procedural
//$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");
//
//if (mysqli_connect_errno())
//{
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//else{
//    mysqli_query($conn,"INSERT INTO TwitterRT (TweetId,Status,PostedUserId) VALUES ('537733742165377024','true','0')");
//    echo "Record Added";
//
//}