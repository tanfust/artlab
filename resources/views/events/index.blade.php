@include('Layout.Header')
<div class="row">
<div class="col-lg-2">

</div>
<div class="col-lg-10">
<br/>
<div class="mb-3">
            <a href="{{ route('events.create') }}" class="btn btn-primary" style="float:right">New Event</a>
            <a href="{{ route('locations.index') }}" class="btn btn-primary btn-sm">location</a>

        </div>
        <br/>
       
<div class="container">
        <h2>Event List</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->location->name }}</td>
                        <td>
                            <a href="{{ route('events.edit', $event) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm active" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                            </form>
                        </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</div>
<div class="col-lg-2">

</div>
</div>