@extends('vendor.vendor_dashboard')
@section('vendor')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Vendor User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Vendor Profile</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
				 
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
 	<img src="{{ (!empty($vendorData->photo)) ? url('upload/vendor_images/'.$vendorData->photo):url('upload/no_image.jpg') }}" alt="Vendor" class="rounded-circle p-1 bg-primary" width="110">
					<div class="mt-3">
						<h4>{{ $vendorData->name }}</h4>
						<p class="text-secondary mb-1">{{ $vendorData->email }}</p>
						<p class="text-muted font-size-sm">{{ $vendorData->address }}</p>
					 
					</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
												<span class="text-secondary">{{$vendorData->vendor_website}}</span>
											</li> 
											 
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-secondary">{{$vendorData->vendor_facebook}}</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-primary">
													<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
													<circle cx="12" cy="12" r="3"></circle>
													<line x1="16.5" y1="7.5" x2="16.5" y2="7.5"></line>
												  </svg>Instagram</h6>
												<span class="text-secondary">{{$vendorData->vendor_instagram}}</span>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
<div class="col-lg-8">
	<div class="card">
		<div class="card-body">

		<form method="post" action="{{ route('vendor.profile.store') }}" enctype="multipart/form-data" >
			@csrf
		
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">User Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" class="form-control" value="{{ $vendorData->username }}" disabled />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> Shop Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control" value="{{ $vendorData->name }}" disabled/>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Email</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="email" name="email" class="form-control" value="{{ $vendorData->email }}" disabled />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Phone </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="phone" class="form-control" value="{{ $vendorData->phone }}" />
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Address</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="address" class="form-control" value="{{ $vendorData->address }}" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Website</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_website" class="form-control" value="{{ $vendorData->vendor_website }}" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Instagram</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_instagram" class="form-control" value="{{ $vendorData->vendor_instagram }}" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Facebook</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_facebook" class="form-control" value="{{ $vendorData->vendor_facebook }}" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Join Date </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <select name="vendor_join" class="form-select mb-3" aria-label="Default select example">
					<option selected="">Open this select menu</option>
					 
	<option value="2022" {{ $vendorData->vendor_join == 2022  ? 'selected' : '' }} >2022</option>
	<option value="2023" {{ $vendorData->vendor_join == 2023  ? 'selected' : '' }}>2023</option>
	<option value="2024" {{ $vendorData->vendor_join == 2024  ? 'selected' : '' }}>2024</option>
	<option value="2025" {{ $vendorData->vendor_join == 2025  ? 'selected' : '' }}>2025</option>
	<option value="2026" {{ $vendorData->vendor_join == 2026  ? 'selected' : '' }}>2026</option>
					 </select>
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Info</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<textarea name="vendor_short_info" class="form-control" id="inputAddress2" placeholder="Vendor Info " rows="3">
					{{ $vendorData->vendor_short_info }}
				</textarea>
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Photo</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<label for="photo" id="photo-btn" class="btn btn-danger">Change Photo</label>
					<input type="file" name="photo" class="form-control" accept="image/*" id="image"   />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="{{ (!empty($vendorData->photo)) ? url('upload/vendor_images/'.$vendorData->photo):url('upload/no_image.jpg') }}" alt="Vendor" style="width:100px; height: 100px;"  >
				</div>
			</div>
			<div class="row mb-1">
				<div class="col-sm-3">
					<h6 class="mb-0">Video</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<label for="video" id="video-btn" class="btn btn-danger">Upload Introductory Video</label>
					<p>Note: Maximum of 2minute allowed</p>
					<input type="file" name="video" class="form-control"  accept="video/*" id="video-file"  />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<video id="video-preview" src="{{ (!empty($vendorData->vendor_short_video)) ? url('upload/vendor_video/'.$vendorData->vendor_short_video):url('upload/no_image.jpg') }}" alt="Vendor" style="width:200px; height: 200px;" controls onloadedmetadata="checkVideoDuration()"></video>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
				</div>
			</div>
		</div>

		</form>



	</div>
	 



							</div>
						</div>
					</div>
				</div>
			</div>



<script type="text/javascript">
	$(document).ready(function(){
		document.getElementById('photo-btn').addEventListener('click', function () {
			document.getElementById('image').click();
		  });
		document.getElementById('video-btn').addEventListener('click', function () {
			document.getElementById('video-file').click();
		  });

		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		const videoPreview = document.getElementById('video-preview');
		const maxDuration = 120;
		$('#video-file').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
			$('#video-preview').attr('src',e.target.result);
			videoPreview.addEventListener('canplaythrough', function() {
				const duration = videoPreview.duration;
	  
				if (duration > maxDuration) {
				  alert('Video duration exceeds 2 minutes. Please select a shorter video.');
				  // You can clear the selected file or take other actions
				  document.getElementById('video-file').value = '';
				  videoPreview.src = ''; // Clear the video preview
				}
			  });
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

	function checkVideoDuration() {
		const videoPreview = document.getElementById('video-preview');
		const maxDuration = 120; // 2 minutes in seconds
  
		videoPreview.addEventListener('durationchange', function() {
		  const duration = videoPreview.duration;
  
		  if (duration > maxDuration) {
			alert('Video duration exceeds 2 minutes. Please select a shorter video.');
			// You can clear the selected file or take other actions
			document.getElementById('video-file').value = '';
			videoPreview.src = ''; // Clear the video preview
		  }
		});
	  }


</script>



@endsection