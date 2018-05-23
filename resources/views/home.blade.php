@extends("layouts.master")

@section("title")
    Home
@endsection

@section("content")
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Welcome to CSPY.</h1>
        <p>This course will teach you the fundamental ideas of computer programming. It will also teach you how to apply what you’ve learned to solve real world problems using code. Our course is designed to deliver the content to you in a way that is easy to understand and allows for you to easily comprehend the content.</p>
        <p><a class="btn btn-primary btn-lg" href="{{ url('overview') }}" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Course Objectives</h2>
            <p>We want you to learn the key fundamentals of programming so you can apply them to learn higher level languages such as Java or C#. You will learn to use code to solve real problems. We will learn things such as functions, classes and objects, file input and output, and many more interesting topics. As discussed above, we’ll have final projects to help enforce the skills we've learned and actually get you to apply them, and create something that is actually pretty cool, and useful.</p>
        </div>
        <div class="col-md-4">
            <h2>Prerequisites</h2>
            <ul>
                <li>Algebra: understanding of functions and basic math skills.</li>
                <li>Basic computer skills like typing and navigating your computer's operating system and file system.</li>
                <li>Basic command line understanding (prior knowledge will help you, however we’ll learn it as we go so it’s alright if you have none) such as:</li>
                <ul>
                    <li><code>cd</code></li>
                    <li><code>ls</code></li>
                    <li><code>mkdir</code></li>
                    <li>Various other commands</li>
                </ul>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Office Hours</h2>
            <p>Office hours will be held on Google Meet, an online meeting application. The date and time of office hours will be determined at a later date, once the course is completely released. In the meantime, please reach out to us, or the community if you have any issues with your code or need help.</p>
        </div>
    </div>

    <hr>

</div> <!-- /container -->
@endsection