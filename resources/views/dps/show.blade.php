@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Design Patterns</div>
                 
                <div class="panel-body">
                    Design Patterns
                    <div><br></div>
                   
                       
                    
                        
                        <div><embed src="/sch_pdf/{{ $dp->slug }}.pdf" width="800" height="600" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>  
                       
                        <div> {{ $dp->name }}</div>
                       
                        <br>
                        <p><b>Description:</b> {{ $dp->description }}</p>
                        <p><b>Licance:</b> {{ $dp->license }}</p>
                        <p><b>Product Used in:</b><a href="{{ $dp->productUsedIn }}"> {{ $dp->productUsedIn }}</a></p>
                         
                        Tags:
                        <ul>
                        
                             @foreach ($dp->tags as $tag)
                                  
                                <a href="tags/{{ $tag->id }}"> <li> {{ $tag->name }}</li></a>
                             
                            @endforeach
                        
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
