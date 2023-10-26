@include('back-office/Layout.Header')
 <div class="container mt-2">
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2>My Artworks </h2>
 </div>
 <div class="pull-right mb-2">
 <a class="btn btn-success" href="{{ route('artwork.create') }}"> Create artworks</a>
 </div>
 </div>
 </div>


 <table class="table table-bordered">
 <thead>
 <tr>
 <th>the photo</th>
 <th>Artwor N°</th>
 <th>Description</th>
 <th>Arwtork Price</th>
 
 <th width="280px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($artworks as $artworks)
 <tr>
 <td><div class="nftmax-collection__author-head"> <img src="{{ asset('public/assets/img/' . $artworks->imageName) }}" alt="#"></div></td>
 <td>{{ $artworks->id }}</td>
 <td>{{ $artworks->Description }}</td>
 <td>{{ $artworks->Price }}</td>
 
 <td>
 <form action="{{ route('artwork.destroy',$artworks->id) }}" method="Post">
 
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 <a class="btn btn-primary" href="{{ route('artwork.edit', $artworks->id) }}" }}">Edit</
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 
 </div>
@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')