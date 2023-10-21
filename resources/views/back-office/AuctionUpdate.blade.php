@include('back-office/Layout.Header')
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <div class="container">
                        <h1>Edit Auction</h1>

                        <!-- Display validation errors if any -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Edit Auction Form -->
                        <form method="POST" action="{{ route('auctions.update', $auction->id) }}">
                            @csrf
                            @method('PUT') <!-- Use PUT method for updating -->

                            <!-- Starting Price -->
                            <div class="form-group">
                                <label for="startingPrice">Starting Price:</label>
                                <input type="number" class="form-control" id="startingPrice" name="startingPrice"
                                    value="{{ old('startingPrice', $auction->startingPrice) }}" required>
                            </div>

                            <!-- Start Date -->
                            <div class="form-group">
                                <label for="startDate">Start Date:</label>
                                <input type="date" class="form-control" id="startDate" name="startDate"
                                    value="{{ old('startDate', $auction->startDate) }}" required>
                            </div>

                            <!-- End Date -->
                            <div class="form-group">
                                <label for="endDate">End Date:</label>
                                <input type="date" class="form-control" id="endDate" name="endDate"
                                    value="{{ old('endDate', $auction->endDate) }}" required>
                            </div>

                            <!-- Artwork ID (Required) -->
                            <div class="form-group">
                                <label for="artwork_id">Artwork ID:</label>
                                <input type="number" class="form-control" id="artwork_id" name="artwork_id"
                                    value="{{ old('artwork_id', $auction->artwork_id) }}" required>
                            </div>

                            <!-- Description (Required) -->
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $auction->description) }}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')
