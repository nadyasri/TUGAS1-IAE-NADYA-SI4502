@extends('layout.main')

@section('Title','IAE')

@section('section')
<div class="container">
    <div class="justify-content-center" id="margin">
        <div class="row">
        <div class="col-12"></div>
            <table class='table table-striped'> 
            <thead>
        <tr>
        <th scope="col">Place</th>
        <th scope="col">Name</th>
        <th scope="col">Team</th>
        <th scope="col">Goals</th>
        <th scope="col">Assists</th>
        <th scope="col">Penalty Goals</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($playerData as $data)
        <tr>
        <td>
            {{$data['player_place']}}
        </td>
        <td>
            {{$data['player_name']}}
        </td>
        <td>
            {{$data['team_name']}}
        </td>  
        <td>
            {{$data['goals']}}
        </td>    
        <td>
            {{$data['assists']}}
        </td> 
        <td>
            {{$data['penalty_goals']}}
        </td>
        <td>
            <a href="dataPlayer/{{$data['player_name']}}" class="btn btn-primary">Detail Player</a>
        </td>
        </tr>
    </tbody>
    @endforeach

            </table>
        </div>
        </div>
    </div>
    </div>

@endsection

  