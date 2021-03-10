@if (count($users))
    @foreach ($users as $user)
        <p>{{ $user->id . '-' . $user->name }}</p>
    @endforeach
@endif