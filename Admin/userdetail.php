
<script src="jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="css/jquery.alerts.css" media="screen"/>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.alerts.js"></script>
    <script type="text/javascript">

        function deleteuser(id)
        {

            alert(id);
            jConfirm('Do You Really Want To Delete?', 'Confirmation', function (result) {
                if (result) {

                    alert("User Deleted");




                    var data = {
                        "action": "DeleteSelectedUser"
                    };

                    if(id!= null)
                    {

                        var query_data = {
                            "id": id
                        };

                        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data);

                    }else {
                        data = $(this).serialize() + "&" + $.param(data);
                    }

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "UserDetails.php", //Relative or absolute path to response.php file
                        data: data,
                        success: function(data, status) {
                            $("#"+id).hide();
                            //alert("Photo deleted Successfully");
                        },
                        error: function(xhr, desc, err) {
                            alert(xhr);
                            alert("Details: " + desc + "\nError:" + err);
                        }
                    });
                }
                else {
                    //alert("false");
                    //$("#loaderImage").attr("style", 'display:block');

                    //window.location.href = "photos.php?photoId=cancel";

                }

            });

            return false;
        }
        $("document").ready(function(){

            var counter = 0;
            setInterval(function () {
                ++counter;
                var wcount = counter+"%";

                $('#bar').css('width', wcount);
                $('.bar').css('width', wcount);
            }, 1000);

            var data = {
                "action": "getUserId"
            };
            data = $(this).serialize() + "&" + $.param(data);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "UserDetails.php", //Relative or absolute path to response.php file
                data: data,
                success: function(data, status) {

                    data = eval(data);
                    var innerTableHtml ="";

                    for (var i=0;i<data.length;i++) {

                        innerTableHtml += "<tr>";
                        innerTableHtml += "<td class='center'>"+data[i].userid+"</td>";
                        innerTableHtml += "<td>"+data[i].screenname+"</td>";
                      //  innerTableHtml += "<td>"+data[i].NewsLink+"</td>";
                        innerTableHtml += "<td class='center'>"+data[i].datetime+"</td>";
                        innerTableHtml += "<td class='center'>";
                        innerTableHtml += "<a class='btn btn-success' href='#'>";
                        innerTableHtml += "<i class='icon-zoom-in icon-white'></i>";
                        innerTableHtml += "View";
                        innerTableHtml += "</a>";
                        innerTableHtml += '<a class="btn btn-danger"  href="javascript:void(0)" onclick="deleteuser(\''+data[i].id+'\')">';
                        innerTableHtml += '<i class="icon-trash icon-white"></i>';
                        innerTableHtml += "Delete";
                        innerTableHtml += '</a>';
                        innerTableHtml += "</td>";
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
                <a href="#">Users</a>
            </li>
        </ul>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i>User Details</h2>
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
                        <th>User Id</th>
                        <th>Screen Name</th>
                        <th>Date</th>
                        <th>Actions</th>
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

