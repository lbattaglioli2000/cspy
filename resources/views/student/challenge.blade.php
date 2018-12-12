@extends('student.layouts.master')

@section('title')
    {{ $lesson->title }}
@endsection

@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col col-lg-2 col-xl-4">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Challenge for
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        {{ $lesson->title }}
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            {!! $lesson->challenge->challenge !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Write your code here
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        IDE
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>

                    <br>

                    <div id="editor" style="height: 500px; width: 100%">print("Hey! Write your code here!")</div>

                    <br>
                    <button onclick="getCode()" class="btn btn-success"><i class="fas fa-play"></i> Run your code</button>  <b>Please note, for now, this code will not be saved. We're working on this...</b>
                    <br>

                </div>

            </div>
            <hr>

            <a href="{{ route('student.unit', $lesson->unit->id) }}" class="btn btn-lg btn-outline-primary btn-block">Finish this lesson</a>

            <br>

        </div>
    </div>

    <!-- Output Modal -->
    <div class="modal fade" id="output-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Here's your code's output</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="code-output">

                </div>
                <div class="modal-footer">
                    <button type="button" onclick="clearCode()" class="btn btn-danger">Clear output</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        function clearCode(){

            $('#code-output').empty();
        }

        function getCode() {
            var editor = ace.edit("editor");
            var myCode = editor.getValue();
            var result;

            $.post("/api/python/run", {code: myCode}, function(d){
                displayOutput(d.result);
            });
        }

        function displayOutput(output) {
            $(document).ready(function () {

                $('#code-output').append("<pre><code>" + output + "</code></pre>");

                $('#output-modal').modal('show');

            });
        }


    </script>

@endsection