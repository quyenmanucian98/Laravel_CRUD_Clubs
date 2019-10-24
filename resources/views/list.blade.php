@extends('layouts.app')
@section('content')
    <form>
        @csrf
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">NAME CLUB</th>
                <th scope="col">COACH</th>
                <th scope="col">STADIUM</th>
                <th scope="col"><a class="btn btn-outline-success" href="{{route('clubs.formAdd')}}">ADD CLUB</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($clubs as $key => $club)
                <tr>
                    <td scope="row">{{++$key}}</td>
                    <th>{{$club->name}}</th>
                    <td>{{$club->coach}}</td>
                    <td>{{$club->stadium}}</td>
                    <td><a class="btn btn-outline-danger" href="{{route('clubs.delete',$club->id)}}">DELETE</a>
                        <a class="btn btn-outline-primary" href="{{route('clubs.edit',$club->id)}}">EDIT</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
