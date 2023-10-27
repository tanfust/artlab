@include('back-office/Layout.Header')
<div class="row">
<div class="col-lg-2">

</div>
<div class="col-lg-10">
<div class="container">
        <h2>Create a New Event</h2>

        <form method="POST" action="{{ route('events.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter event title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Enter event description" rows="4" required>{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
            </div>

            <br/>
            <label for="location_id">location:</label>
            <select name="location_id" class="form_control">
                @foreach ($locations as $item)
                <option value=" {{ $item->id }} ">{{$item->name}}</option>
                @endforeach
            </select>

            <button type="submit" style="float:right" class="btn btn-primary active">Create Event</button>
        </form>
    </div>
</div>
<div class="col-lg-2">

</div>
</div>

