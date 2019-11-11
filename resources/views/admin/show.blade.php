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
            <h3 class="box-title">Assignment :-</h3>
            </div>
            <div class="col-sm-12 m-auto">
           </div>
                 <!-- @foreach($pay as $p)
                     {{ $p -> p_id }}
                @endforeach            -->
   
            <div class="box-body">    
                @foreach($pay as $a)
                   @if($a->p_id == 0)
                     <ul>
                        <li>
                        {{$a->id}}   {{$a->name}}
                        @foreach($pay as $b)
                          @if($b->p_id == $a->id)
                            <ul>
                             <li>
                                 {{$b->id}} {{$b->name}}
                                @foreach($pay as $c)
                                @if($c->p_id == $b->id)
                                <ul>
                                 <li>
                                    {{$c->id}} {{$c->name}}
                                 </li>
                                </ul>
                                @endif
                                @endforeach
                             </li>
                            </ul>
                          @endif
                        @endforeach
                        </li>
                    </ul>
                    @endif
                  @endforeach
            </div>
            </div>
            </div>
        </div>
    </section>

    </body>
</html>