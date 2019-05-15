@extends('includes.layout')

@section('content')
      
       <section id="bio">
            <h1>fady bengoufa</h1>
            <h3>Just another programmer</h3>
       </section>

       <section id="software" class="software">
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
                        <h5>Other Skills</h5>
                        <ul>
                            <li>Git</li>
                            <li>Java</li>
                            <li>C</li>
                            <li>Data Structure</li>
                            <li>Research online</li>
                        </ul>
                    </div>
                </div>
            </div>
       </section>

       <section class="fixed"></section>
       <section id="mywork" class="work">
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
            <br>
            <table class="table table-sm">
                <thead class="thead">
                    <tr>
                        <th>Title</th>
                        <th>Language</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Tetris Game</th>
                        <th>JavaScript</th>
                        <th>
                        <button id="viewProject_1" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#tetrisModal">View</button>
                        </th>
                    </tr>
                    <tr>
                        <th>E-commerce</th>
                        <th>Laravel</th>
                        <th>
                        <button id="viewProject_2" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#simpleModal">View</button>
                        </th>
                    </tr>
                    <tr>
                        <th>Compression File Algorithm</th>
                        <th>C</th>
                        <th>
                        <button id="viewProject_3" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#simpleModal">View</button>
                        </th>
                    </tr>
                    <tr>
                        <th>Chat app</th>
                        <th>NodeJS</th>
                        <th>
                        <button id="viewProject_4" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#simpleModal">View</button>
                        </th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
       </section>
       
        <div id="tetrisModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tetris Game</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="container-fluid">
                           <div class="row">
                               <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6" id="tetris-img">
                                  
                               </div>
                               <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                                  <p>Some Text Here</p>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

