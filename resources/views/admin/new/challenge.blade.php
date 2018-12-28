@extends('admin.layouts.master')

@section('title')
    New Recap
@endsection

@section('content')
    <h1>New Challenge</h1>

    <form id="form" method="post" action="{{ route("admin.new.challenge.publish") }}">

        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <h2>Error!</h2>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="form-group">
                <div class="alert alert-info">
                    You are creating a new <b>challenge</b> for <b>unit {{ $lessonUnit }}</b>. Please select, from the drop down menu below, what lesson you want to associate this challenge with.
                    <input type="hidden" value="{{ $lessonUnit }}" name="unit">
                </div>
            </div>

            <div class="form-group">
                <label>Lesson</label>
                <select class="form-control" id="lesson" name="lesson">

                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">Lesson {{ $lesson->id }}: {{ $lesson->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
              <label>Lesson challenge</label>
              <textarea class="editor form-control" id="summernote" name="challenge" rows="10"></textarea>
            </div>

            <h2>Pre-Exercise Code</h2>
            <p>Pre-exercise code is executed when the R/Python session is initialized. You can use it to pre-load datasets, packages, etc. for students.</p>

            <div id="pre-editor" style="height: 300px; width: 100%"># leave this empty if you don't need to do anything like import or set variable values.</div>

            <hr>

            <h2>Sample Code</h2>
            <p>Sample Code is the code that will be present initially in the code editor</p>

            <div id="sample-editor" style="height: 300px; width: 100%"></div>

            <hr>

            <h2>Solution Code</h2>
            <p>The solution code is, well, the solution!</p>

            <div id="solution-editor" style="height: 300px; width: 100%"></div>

            <hr>

            <h2>Submission Correctness Test (SCT)</h2>
            <p>A Submission Correctness Test is used to check whether the code submitted by the user properly solves the exercise. For detailed information on this you can look at the <a target="_blank" href="https://github.com/datacamp/pythonwhat">documentation for Python.</a></p>
            <div id="sct-editor" style="height: 300px; width: 100%"></div>

            <hr>

            <h2>Hint</h2>
            <p>It is possible for the hint to contain for instance <code>code</code> tags.</p>
            <div id="hint-editor" style="height: 300px; width: 100%"></div>


            <div class="form-group">
                <button class="btn btn-block btn-outline-primary" type="submit">Create challenge!</button>
            </div>
    </form>

    <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var preEditor = ace.edit("pre-editor");
        preEditor.setReadOnly(false);
        preEditor.setTheme("ace/theme/monokai");
        preEditor.session.setMode("ace/mode/python");

        var sampleEditor = ace.edit("sample-editor");
        sampleEditor.setReadOnly(false);
        sampleEditor.setTheme("ace/theme/monokai");
        sampleEditor.session.setMode("ace/mode/python");

        var solutionEditor = ace.edit("solution-editor");
        solutionEditor.setReadOnly(false);
        solutionEditor.setTheme("ace/theme/monokai");
        solutionEditor.session.setMode("ace/mode/python");

        var sctEditor = ace.edit("sct-editor");
        sctEditor.setReadOnly(false);
        sctEditor.setTheme("ace/theme/monokai");
        sctEditor.session.setMode("ace/mode/python");

        var hintEditor = ace.edit("hint-editor");
        hintEditor.setReadOnly(false);
        hintEditor.setTheme("ace/theme/monokai");
        hintEditor.session.setMode("ace/mode/html");

    </script>

    <script>

        function escapeHtml(text) {
            var map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };

            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        $('#form').submit(function(eventObj) {
            $(this).append('<input type="hidden" name="pre_code" value="'+ escapeHtml(ace.edit("pre-editor").getValue()) +'" /> ');
            $(this).append('<input type="hidden" name="sample_code" value="'+ escapeHtml(ace.edit("sample-editor").getValue()) +'" /> ');
            $(this).append('<input type="hidden" name="solution_code" value="'+ escapeHtml(ace.edit("solution-editor").getValue()) +'" /> ');
            $(this).append('<input type="hidden" name="sct_code" value="'+ escapeHtml(ace.edit("sct-editor").getValue()) +'" /> ');
            $(this).append('<input type="hidden" name="hint_code" value="'+ escapeHtml(ace.edit("hint-editor").getValue()) +'" /> ');
            return true;
        });
    </script>
@endsection
