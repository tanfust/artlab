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
                                <a href="{{ route('locations.create') }}"  class="nftmax-btn nftmax-btn__bordered bg radius z-20 relative">New Location</a>
                                <a href="{{ route('events.index') }}" class="nftmax-btn trs-white bl-color">Return to Events</a>
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
                </div>
            </div>
        </div>
    </div>
</section>
