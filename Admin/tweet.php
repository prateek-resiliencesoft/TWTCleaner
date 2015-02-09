<?php include('startsession.php'); ?>
<?php include('header.php'); ?>


<script type="text/javascript">
    $("document").ready(function(){

        var counter = 0;


        var data = {
            "action": "getTweets"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../classes/tweetDetails.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data, status) {

                data = eval(data);
                var innerTableHtml ="";

                for (var i=0;i<data.length;i++) {

                    innerTableHtml += "<tr>";
                    innerTableHtml += "<td>"+data[i].Id+"</td>";
                    innerTableHtml += "<td>"+data[i].TweetId+"</td>";
                    innerTableHtml += "<td class='center'>"+data[i].PostedUserId+"</td>";
                    innerTableHtml += "<td class='center'>";
                    if(data[i].Status=="Active") {
                        innerTableHtml += "<span class='label label-success'>" + data[i].Status + "</span>";
                    }else
                    {
                        innerTableHtml += "<span class='label label-important'>" + data[i].Status + "</span>";
                    }
                    innerTableHtml += "</td>";
//                    innerTableHtml += "<td class='center'>";
//                    innerTableHtml += "<a class='btn btn-success' href='#'>";
//                    innerTableHtml += "<i class='icon-zoom-in icon-white'></i>";
//                    //innerTableHtml += "View";
//                    innerTableHtml += "</a>";
//                    innerTableHtml += "<a class='btn btn-danger' href='#'>";
//                    innerTableHtml += "<i class='icon-trash icon-white'></i>";
//                    //innerTableHtml += "Delete";
//                    innerTableHtml += "</a>";
//                    innerTableHtml += "</td>";
                    innerTableHtml += "</tr>";

                }

                $('.tblBody').append(innerTableHtml);

            },
            error: function(xhr, desc, err) {
                alert(xhr);
                alert("Details: " + desc + "\nError:" + err);
            }
        });
        return false;
    });
</script>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Deleted Rts</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Rt Details</h2>
            <div class="box-icon">
                <!--        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <!--        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>-->
                <!--        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>-->
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>TweetId</th>
                    <th>Last Posted User</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody class="tblBody">

                </tbody>
            </table>
            <div id="divStatusBar" class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
                <!--        <div class="bar" style="width: 90%"></div>-->
                <div class="bar"></div>
            </div>
        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
