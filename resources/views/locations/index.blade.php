@include('Layout.Header')

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
        <br>
        <div class="mb-3">
            <a href="{{ route('locations.create') }}" class="btn btn-primary" style="float:right">New Location</a>
        </div>
        <br>

        <div class="container">
            <h2>Location List</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->address }}</td>
                            <td>
                                <a href="{{ route('locations.edit', $location) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('locations.destroy', $location) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm active" onclick="return confirm('Are you sure you want to delete this location?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
</div>
