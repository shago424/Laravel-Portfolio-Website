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
              <li class="breadcrumb-item active">Home Section</li>
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
          <section class="col-md-12">
           
           <div class="card">
              <div class="card-header" style="background-color: #086A87;color: white">
                <h5>Home Section List
                  @if($counthome<1)
                  <a  href="{{route('sections.home-add')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-plus-circle"> Add Home Section</i></a>
                  @endif
                </h5>
              </div> 
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-sm">
                  <thead>
                   <tr style="background-color: #641e16;color: white">
                   
                    <th width="8%">Name</th>
                    <th width="8%">Contact Tite</th>
                    <th width="8%">Mobile</th> 
                    <th width="8%">Email</th>
                    <th width="10%">Address</th>
                    <th width="10%">FB</th>
                    <th width="10%">TW</th> 
                    <th width="10%">YT</th>
                    <th width="10%">IN</th>
                    <th width="8%">GitHub</th>
                    <th width="10%" style="text-align: center;">Logo</th>
                    <th width="8%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($alldata as $key => $home)
                    <tr>
                      
                      <td width="8%">{{$home->name}}</td>
                      <td width="8%">{{$home->contact_title}}</td>
                      <td width="8%">{{$home->mobile}}</td>
                      <td width="8%">{{$home->email}}</td>
                      <td width="10%">{{$home->address}}</td>
                      <td width="10%">{{$home->facebook}}</td>
                      <td width="10%">{{$home->twitter}}</td>
                      <td width="10%">{{$home->youtube}}</td>
                      <td width="10%">{{$home->linkdin}}</td>
                      <td width="8%">{{$home->github}}</td>
                      <td width="10%" style="text-align: center;"><img style="width: 50px;height: 60px" class="profile-home-img img-fluid img-circle"
                       src="{{(!empty($home->image))?url('backend/image/home/'.$home->image):url('upload/usernoimage.png')}}"
                       alt="home profile picture"></td>
                      <td width="8%">
                    <a title="Edit" href="{{route('sections.home-edit',$home->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" id="delete" href="{{route('sections.home-delete',$home->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
  @endsection