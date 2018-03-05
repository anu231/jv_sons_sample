<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Welcome</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style4.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
        <script>
            var options = {
                valueNames: [ 'name', 'born' ]
            };

            var userList = new List('users', options);
        </script>
        <style>
            /* ---------------------------------------------------
                Table
            ----------------------------------------------------- */

            .list {
              font-family:sans-serif;
            }
            td {
              padding:10px; 
              border:solid 1px #eee;
            }

            input {
              border:solid 1px #ccc;
              border-radius: 5px;
              padding:7px 14px;
              margin-bottom:10px
            }
            input:focus {
              outline:none;
              border-color:#aaa;
            }
            .sort {
              padding:8px 30px;
              border-radius: 6px;
              border:none;
              display:inline-block;
              color:#fff;
              text-decoration: none;
              background-color: #28a8e0;
              height:30px;
            }
            .sort:hover {
              text-decoration: none;
              background-color:#1b8aba;
            }
            .sort:focus {
              outline:none;
            }
            .sort:after {
              display:inline-block;
              width: 0;
              height: 0;
              border-left: 5px solid transparent;
              border-right: 5px solid transparent;
              border-bottom: 5px solid transparent;
              content:"";
              position: relative;
              top:-10px;
              right:-5px;
            }
            .sort.asc:after {
              width: 0;
              height: 0;
              border-left: 5px solid transparent;
              border-right: 5px solid transparent;
              border-top: 5px solid #fff;
              content:"";
              position: relative;
              top:4px;
              right:-5px;
            }
            .sort.desc:after {
              width: 0;
              height: 0;
              border-left: 5px solid transparent;
              border-right: 5px solid transparent;
              border-bottom: 5px solid #fff;
              content:"";
              position: relative;
              top:-4px;
              right:-5px;
            }
            table.responsive-table {
                display: table;
                /* required for table-layout to be used (not normally necessary; included for completeness) */
                table-layout: fixed;
                /* this keeps your columns with fixed with exactly the right width */
                width: auto;
                /* table must have width set for fixed layout to work as expected */
                height: auto;
              }
        </style>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Quick IT Solutions</h3>
                    <strong>Q</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <!--<a href="index.php" data-toggle="collapse" aria-expanded="false">-->
                        <a href="index.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Dashboard
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="table.php">Table Sample</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="table.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Sample Table
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Pages
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                
            




