<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/empfrm.css')}}">
</head>
<body>
    
<form action="{{route('store')}}" method="post">
@csrf
<div class="container register">
                <div class="row">
                    
                    </div>
                    <div class="col-md-9 ">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Data Table</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First_Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname"  placeholder="Last_Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="position" placeholder="Position" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="Integer" class="form-control"name="age"  placeholder="Age" value="" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="Integer" class="form-control" name="salary"placeholder="Salary" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="department" class="form-control" placeholder="Department" value="" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Submit"/>

                                    </div>
                                </div>
                            </div>
                               </div>
</form>

</body>
</html>