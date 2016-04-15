@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Design Patterns</div>
                 
                <div class="panel-body">
                    All Design Patterns
                    <div><br></div>
                    @foreach ($dps as $dp)
                    
                    
                        <div> <img src="{{ $dp->thumbnail }}" height="190" width="220"></div>                
                        <div> {{ $dp->name }}</div>
                        <div> {{ $dp->description }}</div>
                        <div> {{ $dp->eagleFile}}</div>
                        <div> {{ $dp->productUsedIn }}</div>
                        <br>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
