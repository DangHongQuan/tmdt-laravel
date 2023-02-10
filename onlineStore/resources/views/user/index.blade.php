@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
<table class="table border-1">
    <thead>
    <th>Tên user</th>
    <th>password</th>
    <th>Email</th>
    </thead>
@foreach ($viewData['users'] as $user)



   
    <tbody>
        <tr>
            <td ><a href="{{ route('user.show',  ['id' => $user->getId()]) }}" class="">{{ $user -> getName() }}</a></td>
            <td>{{$user->getPassword()}}</td>
            <td>{{$user->getEmail()}}</td>
        </tr>

    </tbody>

@endforeach
</table>

</div>

@endsection