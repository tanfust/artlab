
@include('back-office/Layout.Header')

<div class="row">
<div class="col-lg-2">

</div>
<div class="col-lg-10">
    <div class="container">
        <h2>Edit Location</h2>

        @if(session('success'))
            <div class="alert alert-success mt-6">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('locations.update', $location) }}">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4" required>{{ $location->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Location</button>
        </form>
        </div>

</div>
