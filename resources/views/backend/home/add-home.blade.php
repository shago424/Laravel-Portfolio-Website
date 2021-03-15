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
              <li class="breadcrumb-item active">Add Home Sectiion</li>
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
                <h5>Add Home Sectiion
                  <a  href="{{route('sections.home-view')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-list"> Home Section List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
              <form method="post" action="{{route('sections.home-store')}}" id="myform"enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="name">Home Section Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Home Section Name" {{-- value="{{$editdata->name}}" --}}>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"{{-- value="{{$editdata->email}}" --}}>
                    <font style="color:red">{{($errors)->has('email')?($errors->first('email')):''}}</font>
                  </div>

                   <div class="form-group col-md-6">
                    <label for="contact_title">Contact Title</label>
                    <input type="text" name="contact_title" id="contact_title" class="form-control" placeholder="Enter Contact Title "{{-- value="{{$editdata->contact_title}}" --}}>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"{{-- value="{{$editdata->mobile}}" --}}>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"{{-- value="{{$editdata->address}}" --}}>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="facebook">Facebook Link</label>
                    <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook Link" {{-- value="{{$editdata->name}}" --}}>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="twitter">Twitter Link</label>
                    <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter Twitter Link"{{-- value="{{$editdata->twitter}}" --}}>
                    <font style="color:red">{{($errors)->has('twitter')?($errors->first('twitter')):''}}</font>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="youtube">Youtube Link</label>
                    <input type="text" name="youtube" id="youtube" class="form-control" placeholder="Enter Youtube Link"{{-- value="{{$editdata->youtube}}" --}}>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="linkdin">Linkd in</label>
                    <input type="text" name="linkdin" id="linkdin" class="form-control" placeholder="Enter linkd In"{{-- value="{{$editdata->linkdin}}" --}}>
                  </div>

                   <div class="form-group col-md-6">
                    <label for="github">GitHub</label>
                    <input type="text" name="github" id="github" class="form-control" placeholder="Enter Github Link"{{-- value="{{$editdata->github}}" --}}>
                  </div>



                 

                  <div class="form-group col-md-6">
                    <img id="showimage" src="{{url('upload/usernoimage.png')}}"
                       alt="User Logo picture" style="width: 120px;height: 140px;border:1px solid #000;">
                    <label for="image">Navbar Logo</label>
                    <input type="file" name="image" id="image" class="form-control" >
                  </div>

                <!--  <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control" placeholder="Not Applicable"readonly>
                  </div> -->

                    <div class="form-group col-md-12" style="padding-top: 30px">
                    
                <input type="submit" value=" Add Home Section" name="submit" class="btn btn-primary btn-block float-right" style="font-weight: bold;font-size: 18px">
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

      usertype: {
      required: true,
        
      },
      name: {
        required: true,
        
      },
      mobile: {
        required: true,
        
      },
      contact_title: {
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