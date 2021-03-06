@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Categories</h3>
                       
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    <ul>
                        @foreach ($categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                   
                </div>
            </div> 
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Tags</h3>
                       
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    <ul>
                     
                        @foreach ($tags as $t)
                           <a href="/dps/tags/{{ $t->id }}"> <li>{{ $t->name }}</li></a>
                        @endforeach
                       
                    </ul>
                   
                </div>
            </div> 
            
        </div>    
        <div class="col-sm-8">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Design Patterns (total:{!!  $dps->total() !!})</h3>
                        @include('search',['url'=>'q','link'=>'dps/create'])
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    All Design Patterns 
                    @if ($tag !== 0)
                           <b> <br> tag: {{$tag->name}}</b>
                    @endif
                        
                    @if (count($dps) === 0)
                        <br> <b>No Design Pattern Found</b>
                    @endif
                    
                    <div><br></div>
                    
                    <div class="row">    
                        @foreach ($dps as $dp)
                        <div class="col-sm-6">
                            <a href="/dps/{{ $dp->id }}">
                                <div class="card " >
                                     <img class="card-img-top" src="/thumbnail/{{ $dp->slug }}.jpg" height="190" width="220">                
                                     <div class="card-block">
                                         <h4 class="card-title"> {{ $dp->name }}</h4>
                                         <p class="card-text">by:{{ $dp->user->name }}</p>
                                    </div>
                                </div>   
                            </a>
                        </div>    
                        @endforeach
                    </div> 
                    
                    
                
                {!! $dps->render() !!}
            </div>
        </div>
        
    </div>
</div>
@endsection
