@extends('frontend.layouts.master')
	@section('content')
	<section class="banner_part">
		<img src="{{asset('public/upload/bannerimage/'.$banner->image)}}" style="width: 100%">
	</section>

	<!-- About us Section -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 30%;">Mission</h3>
				</div>
			</div>
			<div class="row">
				 
				<div class="col-md-12">
					<img src="{{asset('public/upload/missionimage/'.$mission->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;width: 265px;height: 265px">
					<p style="text-align: justify;"><strong>Mision :</strong>  {{$mission->title}}</p>
				</div>
				
				
			</div>
		</div>
	</section>

	@endsection