<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
        <body>
        <br>

<section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
            <h3 class="box-title">All Reports</h3>
            </div>
            <div class="col-sm-12 m-auto">
            <a class="btn btn-primary " href="create"><b> Add </b></a>
            <a class="btn btn-success pull-right" href="show"><b> Show </b></a>

           </div>
     
<br>
<br>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover text-center h3">
                        <thead>
                            <tr class="b h2">
                                <th class="text-center">Id</th>
                                <th class="text-center">p_id</th>
                                <th class="text-center">Name</th>
                            </tr>    
                        </thead>
                        @foreach($pay as $re)
                        <tbody> 
                            <tr>
                                <td>{{$re->id}}</td>
                                <td>{{$re->p_id}}</td>
                                <td>{{$re->name}}</td>    
                            </tr>
                        </tbody>
                        @endforeach
                </table>
               
            </div>
            </div>
            </div>
        </div>
    </section>

    </body>
</html>