@include('back-office/Layout.Header')


<div class="row">
<div class="col-lg-2">

</div>
<div class="col-lg-10">
<div class="container">
        <h2>Create location</h2>

        <form method="POST" action="{{ route('locations.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name location" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="name" name="address" placeholder="Enter adresse" rows="4" required></textarea>
            </div>

            <br/>
            <button type="submit" style="float:right" class="btn btn-primary active">Create Location</button>
        </form>
    </div>
</div>
<div class="col-lg-2">

</div>
</div>
