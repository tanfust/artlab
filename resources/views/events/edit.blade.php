@include('back-office/Layout.Header')
<div class="row">
<div class="col-lg-2">

</div>
<div class="col-lg-10">

<div class="container">
        <h2>Edit Event</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('events.update', $event) }}">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $event->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>

</div>

</div>

<div class="col-lg-2">

</div>



</div>

