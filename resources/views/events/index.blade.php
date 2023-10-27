@include('back-office/Layout.Header')
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="nftmax-dsinner w-full">
                        <div class="welcome-cta mg-top-40">
                            <div class="welcome-cta__heading">
                                <h2 class="welcome-cta__title text-6xl">Events</h2>
                                <p class="welcome-cta__text">Schedule new Events.</p>
                            </div>
                            <div class="welcome-cta__button">
                                <a href="{{ route('events.create') }}" class="nftmax-btn nftmax-btn__bordered bg radius z-20 relative">New Event</a>
                                <a href="{{ route('locations.index') }}" class="nftmax-btn trs-white bl-color">Locations</a>
                            </div>
                        </div>
                            @if(session('success'))
                                <div class="alert alert-success mt-6">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table table-bordered bg-white p-2 mt-6">
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
            </div>
        </div>
    </div>
</section>
