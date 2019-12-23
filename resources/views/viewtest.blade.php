<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  h4{ 
      word-spacing: 4px;
      letter-spacing: 1px;
      text-decoration: none;
      font-size: 1.2em;
   }

   .right{
    text-align:right;
   }
  </style>
</head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Test Number: {{$a}}</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sect1"><h4>Qualitative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect2"><h4>Analytical Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect3"><h4>Creative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect4"><h4>Comprehension Analysis</h4></a></li>
  </ul>
  <br>
  <div class="tab-content">
    <!-------------------------------------------Qualitative--------------------------------------------->
    <div id="sect1" class="tab-pane fade in active">
        @foreach($qual as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <input type="hidden" name="t_id" value="{{$q->setid}}">
                <input type="hidden" name="quest_id" value="{{$q->qid}}">
                <input type="submit" value="Edit">
                <a href="{{ url("'qedit/ ' . $a . '/' . $q->qid .")}}" class="btn btn-success">Edit</a>
                <a href="{{$a}}/route('qualedit',['sid' => $q->setid,'qid' => $q->qid])" class="btn btn-success">Edit</a>
                <button type="ditbutton" onclick="window.location.href = 'url (/qedit/{{$a}}/{{$q->qid}})'" class="btn btn-primary">Edit</button>
                
                <p class="right">Correct option is: {{$q->correct}}</p>  
            </div>
            <br>
        @endforeach 
        
    </div>

    <!-------------------------------------------Analytical--------------------------------------------->
    <div id="sect2" class="tab-pane fade">
      @foreach($analy as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='{{ url ("/analytical") }}'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: {{$q->correct}}</p>  
            </div>
            <br>
        @endforeach 
        <button type="button" onclick="window.location='{{ url ("/question") }}'" class="btn btn-primary">Back</button>
    </div>
    
    
    <!-------------------------------------------Creative--------------------------------------------->
    <div id="sect3" class="tab-pane fade">
        @foreach($creat as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="5"> {{ $q->option5}} <img src="{{ asset('uploads/option5/'.$q->option5img)}}"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='{{ url ("/creative") }}'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: {{$q->correct}}</p>  
            </div>
            <br>
        @endforeach  
       <button type="button" onclick="window.location='{{ url ("/question") }}'" class="btn btn-primary">Back</button>

    </div>
    
    <!-------------------------------------------Comprehension--------------------------------------------->
    <div id="sect4" class="tab-pane fade">
        @foreach($comp as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->para}}<br>
                    {{$q->question}}
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='{{ url ("/comprehension") }}'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: {{$q->correct}}</p>  
            </div>
            <br>
        @endforeach 
       <button type="button" onclick="window.location='{{ url ("/question") }}'" class="btn btn-primary">Back</button>

    </div>

  </div>
</div>

</body>
</html>

