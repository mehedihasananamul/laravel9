{{-- @foreach ($users as $user )
    <h4>{{ $user->id }}. {{ $user->name }}</h4>
    <p>{{ $user->address->country }}</p>
@endforeach --}}

{{-- @foreach ($addresses as $address )
<p>{{ $address->country }}</p>
<p>{{ $address->user->name }}</p>
    
@endforeach --}}

@foreach ($users as $user)
    <h2>{{ $user->name }}</h2>
    {{-- @foreach ($user->addresses as $address)
        <p>{{ $address->country }}</p>        
    @endforeach --}}
    @foreach ($user->posts as $post)
        <p>{{ $post->title }}</p>    
    @endforeach
    
@endforeach