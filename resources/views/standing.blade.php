@extends('layout.main')

@section('Title','IAE')

@section('section')
<div class="container">
  <div class="justify-content-center" id="margin">
    <div class="row">
      <div class="col-12"></div>
        <table class='table table-striped text-center'> 
        <thead>
    <tr>
      <th scope="col">Position</th>
      
      <th scope="col"  class="text-start">Team</th>
      <th scope="col">Payed</th>
      <th scope="col">W</th>
      <th scope="col">D</th>
      <th scope="col">L</th>
      <th scope="col">GF</th>
      <th scope="col">GA</th>
      <th scope="col">PTS</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Rdata as $data)
    <tr>
        
      <td >
        {{$data['overall_league_position']}}
      </td>
      <td class="text-start">
        <img src="{{$data['team_badge']}}" alt="" width="25px" height="25px">   {{$data['team_name']}}
      </td>
      <td> 
        {{$data['overall_league_payed']}}
      </td>
      <td>
        {{$data['overall_league_W']}}
      </td>
      <td>
        {{$data['overall_league_D']}}
      </td>
      <td>
        {{$data['overall_league_L']}} 
      </td>
      <td>
        {{$data['overall_league_GF']}}
      </td>
      <td>
        {{$data['overall_league_GA']}}
      </td>
      <td>
        {{$data['overall_league_PTS']}}
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
