<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{ width:900px; margin:0 auto}
        form{ width:800px; margin:20px auto}
        p{ color:#D9534F;}
    </style>
    <body>
        <h1>Create a Customer</h1>
            <form class="form-horizontal" action="insert.php" method="post">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="inputName" class="form-control"  placeholder="Name" name="user_name" >
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-6">
                        <input id="inputEmail" type="email" class="form-control"  placeholder="Email Address" name="user_email" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-6">
                        <input id="inputPhone" type="tel" class="form-control"  placeholder="Mobile Number" name="user_number">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="index.php" class="btn btn-default">Back</a>
                    </div>
                </div>
            </form>
        <script src="jquery.js"></script>
    </body>
</html>
<script>
   $("button").on('click' , function(event){
        $(".col-sm-4").remove()
        if( $("#inputName").val()==""){
            $("#inputName").css("border-color","#D9534F")
            .parent().parent().append('<div class="col-sm-4"><p>Please Enter Name</p></div>')
            event.preventDefault()
        }
        if( $("#inputEmail").val()==""){
            $("#inputEmail").css("border-color","#D9534F")
            .parent().parent().append('<div class="col-sm-4"><p>Please enter Email Address</p></div>')
            event.preventDefault()
        }
       
         if( $("#inputPhone").val()==""){
            $("#inputPhone").css("border-color","#D9534F")
            .parent().parent().append('<div class="col-sm-4"><p>Please Enter Mobile Number</p></div>')
            event.preventDefault()
        }
    })
</script>