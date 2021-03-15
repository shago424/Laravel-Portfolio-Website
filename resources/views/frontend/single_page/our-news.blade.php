@extends('frontend.layouts.master')
	@section('content')
<section class="banner_part">
		<img src="{{asset('public/upload/bannerimage/'.$banner->image)}}" style="width: 100%">
	</section>

<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($news_events as $key => $news)
							<tr style="background-color: lightblue">
								<td>{{$key+1}}</td>
								<td style="width: 15%">{{date('d-M-Y',strtotime($news->date))}}</td>
								<td style="text-align: center;"><img style="width: 200px;height: 120px;" src="{{asset('public/upload/news_eventimage/'.$news->image)}}"></td>
								<td style="width: 30%">{{$news->short_title}}</td>
								<td><a href="{{route('news.event.details',$news->id)}}" class="btn btn-warning">Details</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	@endsection