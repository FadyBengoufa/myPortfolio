@extends('includes.layout')

@section('content')
      
<div id="intro">
        <div class="text-intro">
            <h1>FADY BENGOUFA</h1>
            <h3>Welcome to my official web site.</h3>
        </div>
       </div>

       <div class="software">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>SOFTWARE</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>Front-end Web Development</h5>
                        <ul>
                            <li>HTML 5</li>
                            <li>CSS 3</li>
                            <li>JAVASCRIPT</li>
                            <li>BOOTSTRAP</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>Back-end Web Development</h5>
                       <ul>
                           <li>PHP</li>
                           <li>MySQL</li>
                           <li>LARAVEL</li>
                       </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>Others Languages</h5>
                        <ul>
                            <li>JAVA</li>
                            <li>C</li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>

       <div class="fixed"></div>
       <div class="work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>MY WORK</h1>
                    <p>I was never interested in coding, and now coding is the only thing in my mind. for now I'm covering the web development 
                        but I'm a very curious person so I'm planning to learn on making mobile apps,and maybe some mobile games
                        with unity ...
                    </p>
                </div>
            </div>
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Language</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>project1</th>
                        <th>Not Yet</th>
                        <th>...</th>
                    </tr>
                    <tr>
                        <th>project2</th>
                        <th>Not Yet</th>
                        <th>...</th>
                    </tr>
                    <tr>
                        <th>project3</th>
                        <th>Not Yet</th>
                        <th>...</th>
                    </tr>
                     <tr>
                        <th>project4</th>
                        <th>Not Yet</th>
                        <th>...</th>
                    </tr>
                     <tr>
                        <th>project5</th>
                        <th>Not Yet</th>
                        <th>...</th>
                    </tr>
                </tbody>
            </table>
        </div>
       </div>
@endsection