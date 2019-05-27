 <html>

 <head>
     <title>Login Administrator</title>
     <!-- Tell the browser to be responsive to screen width -->
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap 3.3.7 -->
     <link rel="stylesheet" href="{{('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{('bower_components/font-awesome/css/font-awesome.min.css')}}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="{{('bower_components/Ionicons/css/ionicons.min.css')}}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{('dist/css/AdminLTE.min.css')}}">
     <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="{{('dist/css/skins/_all-skins.min.css')}}">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

     <!-- Google Font -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <!-- Horizontal Form -->
 <body>
     

 <div class="col-md-3"></div>
 <div class="container">
     <div class="col-md-6 well">
         <div class="box box-info">
             <div class="box-header with-border">
                 <h3 class="box-title">Login Administrator</h3>
             </div>
             <!-- /.box-header -->
             <!-- form start -->
             <form class="form-horizontal">
                 <div class="box-body">
                     <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                         <div class="col-sm-10">
                             <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                         <div class="col-sm-10">
                             <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                             <div class="checkbox">
                                 <label>
                                     <input type="checkbox"> Remember me
                                 </label>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /.box-body -->
                 <div class="box-footer">
                     <button type="submit" class="btn btn-default">Cancel</button>
                     <button type="submit" class="btn btn-info pull-right">Sign in</button>
                 </div>
                 <!-- /.box-footer -->
         </div>
     </div>
 </div>
 </body>
 <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="{{('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
 <!-- FastClick -->
 <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="../../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../../dist/js/demo.js"></script>

 </html>
