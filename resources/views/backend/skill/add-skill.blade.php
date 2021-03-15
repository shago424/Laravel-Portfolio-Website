@extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Skill Sectiion</li>
            </ol>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-8 offset-md-2">
           
           <div class="card">
              <div class="card-header" style="background-color: #086A87;color: white">
                <h5>Add Skill Sectiion
                  <a  href="{{route('sections.skill-view')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-list"> Skill Section List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
              <form method="post" action="{{route('sections.skill-store')}}" id="myform"enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="title">Skill Title</label>
                    <textarea type="text" rows="4" name="title" id="title" class="form-control" placeholder="Enter Skill Title">{{-- value="{{$editdata->title}}" --}}</textarea>
                    <font style="color:red">{{($errors)->has('title')?($errors->first('title')):''}}</font>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="description">Skill Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter Skill Description" rows="6">{{-- value="{{$editdata->description}}" --}}</textarea>
                    <font style="color:red">{{($errors)->has('description')?($errors->first('description')):''}}</font>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="item">Skill Item  Name</label>
                    <input type="text" name="item" id="item" class="form-control" placeholder="Skill Item  Name" {{-- value="{{$editdata->item}}" --}}>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="parcent">Skill Item Parcentange </label>
                    <input type="text" name="parcent" id="parcent" class="form-control" placeholder="Skill Item Parcentange" {{-- value="{{$editdata->parcent}}" --}}>
                  </div>
             

                    <div class="form-group col-md-12" style="padding-top: 30px">
                    
                <input type="submit" value=" Add Skill Section" name="submit" class="btn btn-primary btn-block float-right" style="font-weight: bold;font-size: 18px">
                  </div>
                </div> 
              </form>

                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT --> 
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<script>
$(function () {
  
  $('#myform').validate({
    rules: {

    
      parcent: {
        required: true,
        
      },
     
      item: {
        required: true,
        
      },
       
      address: {
      required: true,
        
      },
    datepicker: {
      required: true,
        
      },

      email: {
        required: true,
        email: true
       
      },
      password: {
        required: true, 
        minlength: 6
      },
      cpassword: {
      required: true,
      equalTo:'#password'
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please enter Name",
        
      },
      
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      cpassword: {
        
        equalTo:"Confirm password Does Not Match",
        }
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'yyyy-mm-dd'
        });
    </script>
  @endsection