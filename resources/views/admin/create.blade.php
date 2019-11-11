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


        <form method="POST" action="/">
                        @csrf

                        <div class="form-group row">
                            <label for="p_id" class="col-md-4 col-form-label text-md-right">{{ __('Parent ID Number (For refrence)') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="name">
                          @foreach($pay as $us)
                           <option value="{{$us->p_id}}">{{$us->id}} {{$us->name}}</option>
                          @endforeach
                            </select>
                            
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="p_id" class="col-md-4 col-form-label text-md-right">{{ __('Parent ID') }}</label>

                            <div class="col-md-6">
                                <input id="p_id" type="number" class="form-control " name="p_id" value="{{ old('p_id') }}" required>

                            
                            </div>
                        </div>
                     
                      

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
</body>
</html>
