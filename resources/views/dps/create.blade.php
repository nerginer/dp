@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Create New Design Pattern</h3>
                      
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    Thank you for reaching this <b>Add New Deign Pattern Page</b>. We need your help in order to
                    make this librarry rich and unique. We like to control the quality of the design patterns so we
                    do not publish them before our editors control. Please read below rules before sending us a design pattern.
                    <br>
                    <b>Rules:</b>
                    <ul>
                        
                        <li>
                            Your desgin pattern must contain one base component. 
                        </li>
                        <li>
                            Your desgin pattern must have a single function.
                        </li>
                        <li>
                            Please clearly define the input and output connections  and the voltage needs
                        </li>
                        <li>
                            Please keep in mind that this pice of electronic module must be reusable
                        </li>
                        <li>
                            If you grap this pattern from an open source project please indicate in the below form.
                        </li>
                        <li>
                            If this desgin pattern belogs to you please select a Licence for protection.
                        </li>
                        
                    </ul>
                    
                    <form action="/dps/sendForm" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                        <!-- Name form input -->
                        <div class="form-group">
                            Name: <input class ='form-control' type="text" name="name"><br>
                        </div>
                    
                        <!-- Description form input -->
                        <div class="form-group">
                            Description: <textarea class ='form-control' name="description"></textarea><br>
                        </div>
                         <!-- Base Component form input -->
                        <div class="form-group">
                            Base Component: <input class ='form-control' type="text" name="baseComponent"><br>
                        </div>
                         <!-- Base Component pdf form input -->
                        <div class="form-group">
                             Base Component Pdf Link: <input class ='form-control' type="text" name="pdf"><br>
                        </div>
                         <!-- Base Component pdf form input -->
                        <div class="form-group">
                            <input type="radio" value="open" name="val"> From Open Source Project:  Enter link below <input class ='form-control' type="text" name="opensourceproject"><br>
                            <input type="radio" value="mydesgin" name="val"> It is my design Licance Type: 
                        </div>
                        <div class="form-group">
                                <select name="licenceType">
                                  <option value="CC BY">CC BY</option>
                                  <option value="SHAREALIKE/CC BY-SA">SHAREALIKE/CC BY-SA</option>
                                  <option value="NODERIVS/CC BY-ND">NODERIVS/CC BY-ND</option>
                                  <option value="NONCOMMERCIAL/CC BY-NC">NONCOMMERCIAL/CC BY-NC</option>
                                  <option value="NONCOMMERCIAL-SHAREALIKE/CC BY-NC-SA">NONCOMMERCIAL-SHAREALIKE/CC BY-NC-SA</option>
                                  <option value="NONCOMMERCIAL-NODERIVS/CC BY-NC-ND">NONCOMMERCIAL-NODERIVS/CC BY-NC-ND</option>
                                </select>
                            <a href="/licence">More info on Licence</a> 
                            
                        </div>
                        
                        <!-- Tags input -->
                        <div class="form-group">
                            Tags: <input class ='form-control' type="text" name="tags"><br>
                        </div>
                         <!-- File input -->
                        <div class="form-group">
                            Eagle File: <input type="file" name="eaglefile" accept=".sch">
                        </div>
                          <br/>
                          <!-- submit buttons -->
                          {{ Form::submit('Save') }}
                          
                          <!-- reset buttons -->
                          {{ Form::reset('Reset') }}
                        
                       
                    
                    {!! Form::close() !!}
               
                </div>
        </div>
    </div>
</div>
@endsection