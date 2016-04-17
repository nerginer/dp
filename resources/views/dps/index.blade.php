@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Design Patterns (total:{!!  $dps->total() !!}) </div>
                 
                <div class="panel-body">
                    All Design Patterns 
                    @if ($tag !== 0)
                           <b> <br> tag: {{$tag->name}}</b>
                    @endif
                        
                    
                    
                    <div><br></div>
                    @foreach ($dps as $dp)
                    
                        <a href="/dps/{{ $dp->id }}">
                            <div> <img src="/{{ $dp->thumbnail }}" height="190" width="220"></div>                
                            <div> {{ $dp->name }}</div>
                            <div> by:{{ $dp->user->name }}</div>
                            
                        </a>
                        <br>
                        
                    @endforeach
                    
                    
                    
                </div>
                {!! $dps->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
