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
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Age</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Match Played</th>
        <th scope="col">Goals</th>
        <th scope="col">Yellow Cards</th>
        <th scope="col">Red Cards</th>
        <th scope="col">Minute</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <tr>
        
        <td>
            {{$playerData['player_name']}}
        </td>
        <td>
            {{$playerData['player_number']}}
        </td>  
        <td>
            {{$playerData['player_age']}}
        </td>    
        <td>
            {{$playerData['player_birthdate']}}
        </td> 
        <td>
            {{$playerData['player_match_played']}}
        </td>
        <td>
            {{$playerData['player_goals']}}
        </td>
        <td>
            {{$playerData['player_yellow_cards']}}
        </td>
        <td>
            {{$playerData['player_red_cards']}}
        </td>
        <td>
            {{$playerData['player_minutes']}}
        </td>
        <td>
        <a class="btn btn-primary" href="/player">Back</a>
        </td>
        </tr>
    </tbody>

            </table>
        </div>
        </div>
    </div>
    </div>

@endsection

  