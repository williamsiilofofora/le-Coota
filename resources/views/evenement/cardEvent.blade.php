<div class="container">
    <div class="title">
        <h2>Les concerts</h2>
    </div>

<div class="card-deck container " style="display: -webkit-inline-box;">

    @foreach ($event as $events)
        <div class="card col-xl-4">
            <div class="card-img"><img class="card-img-top" src="{{asset('images/thumb') }}/{{$events->image}}" alt="Card image cap"></div>
        
            <div class="card-body">
                <h5 class="card-title">{{$events->title}}</h5>
                <h4 class="">{{$events->style}}</h4>
                <p>{{$events->date}}</p>
                <p class="card-text">{{$events->description}}</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    @endforeach
    
        
        {{-- <div class="card">
            <img class="card-img-top" src="{{asset('images/coota (25).jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('images/coota (25).jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>

    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{asset('images/coota (25).jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('images/coota (25).jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('images/coota (25).jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div> --}}
    </div>
</div>