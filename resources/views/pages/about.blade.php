@extends('layouts/app',['title'=>'about'])


@section('content')
    <div class="container">
        
        <h2>What is laracast</h2>

        <p>Laracast is a clone app of<a href="http://laramap.com">Laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"> This app hs been build by <a href="">@micronet </a></i> for learning purposes</strong>
                </p>
            
            </div>
        </div>
        
        <p> Feel free to help to improve the <a href="https://github.com/sthanial2002/Laracarte-demo">source code.</a></p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="laramap.com">here.</a></p>

        <hr>

        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>amazon S3</li>
            <li>Mandrill</li>
            <li>Google maps</li>
            <li>Gravater</li>
            <li>Antony Martin's Geolocalisation Package</li>
            <li>Michel Fortin's Markdown parser Package</li>
            <li>Heroku</li>
        </ul>
        
    </div>
        

        


    
@stop