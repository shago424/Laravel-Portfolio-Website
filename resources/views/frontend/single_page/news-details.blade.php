
@extends('frontend.layouts.master')
	@section('content')
	<section class="banner_part">
		<img src="{{asset('public/upload/bannerimage/'.$banner->image)}}" style="width: 100%">
	</section>

	<!-- About us Section -->
	<section class="about_us"> 
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">News And Events</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="{{asset('public/upload/news_eventimage/'.$news->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;width: 265px;height: 265px">
					<h5 style="text-align: justify;"><strong>Title : {{$news->short_title}} 
					</strong> <br> <br> <strong> Publish Date : {{date('d-M-Y',strtotime($news->date))}} </strong>   <hr/>  <strong>Details</strong> :  {{$news->long_title}}</h5>
				</div>
			</div>
		</div>
	</section>

	@endsection