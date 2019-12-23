<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
  <title>Add Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Test Number: {{$c}}</h3>
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
       <form action = "{{ route('qualitative.add',['count'=>$c]) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="count" value="{{$c}}">
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" placeholder="enter question number">
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id" value="{{$c}}" readonly>
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o1_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option2 Content</label>
                <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o2_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option3 Content</label>
                <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o3_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option4 Content</label>
                <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o4_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Correct option</label>
                <input type="text" name="correct" class="form-control" placeholder="enter correct option">
            </div>
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>
            <button type="button" onclick="window.location='{{ url ("/viewq") }}'" class="btn btn-primary">View</button>
        </div>
    </div>
    </form>
        
    </div>

    <!-------------------------------------------Analytical--------------------------------------------->
    <div id="sect2" class="tab-pane fade">
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" placeholder="enter question number">
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id">
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o1_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option2 Content</label>
                <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o2_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option3 Content</label>
                <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o3_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option4 Content</label>
                <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o4_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Correct option</label>
                <input type="text" name="correct" class="form-control" placeholder="enter correct option">
            </div>
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>
            <button type="button" onclick="window.location='{{ url ("/viewa") }}'" class="btn btn-primary">View</button>
        </div>
    </div>
    </form>
    </div>
    
    
    <!-------------------------------------------Creative--------------------------------------------->
    <div id="sect3" class="tab-pane fade">
        <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" placeholder="enter question number">
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id">
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o1_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option2 Content</label>
                <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o2_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option3 Content</label>
                <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o3_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option4 Content</label>
                <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o4_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option5 Content</label>
                <input type="text" name="o5_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o5_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Correct option</label>
                <input type="text" name="correct" class="form-control" placeholder="enter correct option">
            </div>
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>
            <button type="button" onclick="window.location='{{ url ("/viewc") }}'" class="btn btn-primary">View</button>
        </div>
    </div>
    </form>

    </div>
    
    <!-------------------------------------------Comprehension--------------------------------------------->
    <div id="sect4" class="tab-pane fade">
        <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Paragraph</label>
                <input type="text" name="para" class="form-control" placeholder="enter the paragraph">
            </div>

            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" placeholder="enter question number">
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id">
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o1_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option2 Content</label>
                <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o2_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option3 Content</label>
                <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o3_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option4 Content</label>
                <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o4_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Correct option</label>
                <input type="text" name="correct" class="form-control" placeholder="enter correct option">
            </div>
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>
            <button type="button" onclick="window.location='{{ url ("/viewco") }}'" class="btn btn-primary">View</button>
        </div>
    </div>
    </form>
    </div>

  </div>
</div>

</body>
</html>

