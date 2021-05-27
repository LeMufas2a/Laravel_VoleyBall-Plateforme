@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <div class="container">
        <div class="row">
           
            <div class="col-4">
                <div class="profile-card-6"><img
                        src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg"
                        class="img img-responsive">
                    <div class="profile-name">JOHN
                        <br>DOE</div>
                    <div class="profile-position">Lorem Ipsum Donor</div>
                    <div class="profile-overview">
                        <div class="profile-overview">
                            <div class="row text-center">
                                <div class="col-xs-4">
                                    <h3>1</h3>
                                    <p>Rank</p>
                                </div>
                                <div class="col-xs-4">
                                    <h3>50</h3>
                                    <p>Matches</p>
                                </div>
                                <div class="col-xs-4">
                                    <h3>35</h3>
                                    <p>Goals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

        </div>

    </div>
    </div>
</main>
@endsection