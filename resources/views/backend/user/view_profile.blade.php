@extends('backend.master')
@section('content')
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		 
		<div class="page-content">
			<div class="container-fluid">
			
			
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-6">
					<div class="card"><br><br>
			<center>
						<img class="rounded-circle avatar-xl" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url(asset('assets/images/users/avatar-1.jpg')) }}" alt="Card image cap">
			</center>
			
						<div class="card-body">
							<h4 class="card-title">Name : {{ $user->name }} </h4>
							<hr>
							<h4 class="card-title">User Email : {{ $user->email }} </h4>
							<hr>
							<h4 class="card-title">User Type : @if ($user->is_admin == 1)
								Supper Admin
								@else
								User
							@endif </h4>
							<hr>
							<a href="{{ route('profile.edit') }}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
							
						</div>
					</div>
				</div> 
										
					
									</div> 
			
			
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection
