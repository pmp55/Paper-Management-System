<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bootstrap Elements - SB Admin</title>
    <link rel="stylesheet" type="text/css" href="/paper/Public/Student/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/paper/Public/Student/css/htmleaf-demo.css">
    <link rel="stylesheet" type="text/css" href="/paper/Public/Student/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/paper/Public/Student/css/basictable.css" />
    <!-- Bootstrap core CSS -->
    <link href="/paper/Public/Student/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/paper/Public/Student/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/paper/Public/Student/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/paper/index.php/Student/Student/index">学生信息管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/paper/index.php/Student/Student/index"><i class="fa fa-dashboard"></i> 学生信息</a></li>
            <li><a href="/paper/index.php/Student/Student/page_select_title"><i class="fa fa-font"></i> 选择或自拟答辩题目</a></li>
            <li><a href="/paper/index.php/Student/Student/page_upload_paper"><i class="fa fa-desktop"></i> 上传答辩PPT和答辩论文</a></li>
            <li><a href="/paper/index.php/Student/Student/page_change_password"><i class="fa fa-wrench"></i>修改密码</a></li>
            <li><a href="/paper/index.php/Student/Student/page_upload_report"><i class="fa fa-file"></i> 上传开题PPT以及开题报告</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h2 class="title"><center>  上传答辩PPT和答辩论文</center> </h2>
          </div>
          <div class="alert alert-info alert-dismissable">
              当前的选题状态为：<?php echo ($state); ?> 
              <?php if($state == '已提交开题报告和开题PPT'): ?>选题通过可以上传的答辩PPT和答辩论文
              <?php else: ?> 
              当前状态不可上传<?php endif; ?>
          </div>
        </div><!-- /.row -->

        <div class="row">
         <form action="/paper/index.php/Student/Student/do_upload?kind=2" method="post" enctype="multipart/form-data">
             请选择您要上传的答辩PPT：<input  class="form-control" type="file" name='dbppt'/>
             请选择您要上传的答辩论文：<input  class="form-control" type="file" name='dblw' />
            <input type="submit" value="上传文件" />
          </form>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->



  </body>
</html>