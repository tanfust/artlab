@include('back-office/Layout.Header')
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="welcome-cta mg-top-40">
                        <div class="welcome-cta__heading">
                            <h2 class="welcome-cta__title text-6xl">Artworks</h2>
                            <p class="welcome-cta__text">View Gallery Artwork</p>
                        </div>
                        <div class="welcome-cta__button">
                            <a href="{{ route('artwork.create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius">Create A new Artwork</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-bordered mt-6 p-2 bg-white">
                            <thead>
                            <tr>
                            <th>Photo</th>
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
                </div>
            </div>
        </div>
    </div>
</section>
