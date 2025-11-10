@foreach($JobList as $UserRegistration)
    <p>
        {{$UserRegistration->fullname}} : {{$UserRegistration->email}} : {{$UserRegistration->password}} : {{$UserRegistration->role}} : {{$UserRegistration->phone}}
        : {{$UserRegistration->city}} : {{$UserRegistration->qualification}} : {{$UserRegistration->experience}} : {{$UserRegistration->languages}}
    </p>
@endforeach