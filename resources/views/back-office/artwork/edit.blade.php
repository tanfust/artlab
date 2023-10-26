@include('back-office/Layout.Header')
<section class="nftmax-adashboard nftmax-show">
<div class="container mt-2">
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mb-2">
 <h2>update artwork</h2>
 </div>
 <div class="pull-right">
 <a class="btn btn-primary" href="{{ route('artwork.index') }}"> Back</a>
 </div>
 </div>
 </div>
 
 <form action="{{ route('artwork.update',$Artwork->id) }}" method="POST" enctype="multipart/form-data">
 @csrf
 @method('PUT')
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name</strong>
 <input type="text" value="{{$Artwork->Name}}" name="Name" class="form-control" placeholder="Name">
 
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>artwork description:</strong>
 <input type="text" value="{{$Artwork->Description}}" name="Description" class="form-control" placeholder="description">
 
 </div>
 </div>
 <div class="nftmax__item-form--group">
    <label class="nftmax__item-label" for="photo">Current Photo:</label>
    <img src="{{  asset('public/assets/img/' . $Artwork->imageName) }}" alt="Current Photo">
 <div class="nftmax__item-form--group">
    <label class="nftmax__item-label" for="photo">Photo:</label>
    <input type="file" name="imageName" id="photo" accept="image/*">
</div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Price</strong>
 <input type="number" value="{{$Artwork->Price}}" name="Price" class="form-control" placeholder="Price">
 
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 </div>
 <button type="submit" class="btn btn-primary ml-3">Submit</button>
 </div>
 </form>
 </div>
 </section>
 @include('back-office/Layout.RightSidebar')
 @include('back-office/Layout.Footer')
