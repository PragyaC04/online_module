<!DOCTYPE html>
<html lang="en">
<head>
  <title>Qualitative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <h3>Qualitative Analysis Section</h3>
    
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <?php
        
    ?>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" value="{{$qual->qid}}" placeholder="enter question number" >
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" value="{{$qual->question}}" placeholder="enter content of question" >
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input" value="{{$qual->questionimg}}">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks" value="{{$qual->marks}}">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id" value="{{$qual->setid}}">
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                <input type="text" name="o1_content" class="form-control" placeholder="enter content of option" value="{{$qual->option1}}">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o1_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option2 Content</label>
                <input type="text" name="o2_content" class="form-control" placeholder="enter content of option" value="{{$qual->option2}}">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o2_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option3 Content</label>
                <input type="text" name="o3_content" class="form-control" placeholder="enter content of option" value="{{$qual->option3}}">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o3_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Option4 Content</label>
                <input type="text" name="o4_content" class="form-control" placeholder="enter content of option" value="{{$qual->option4}}">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="o4_image" class="custom-file-input">
                    <label class="custom-file-label">Upload option image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Correct option</label>
                <input type="text" name="correct" class="form-control" placeholder="enter correct option" value="{{$qual->correct}}">
            </div>
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>
