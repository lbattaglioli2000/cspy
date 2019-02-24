@extends("layouts.master")

@section("title")
    Home
@endsection

@section("content")
    <main>

        <section class="section-rotate">
            <div class="section-inner bg-gradient-primary"></div>
            <!--Illustation -->
            <div class="pt-5 position-absolute middle right-0 col-lg-7 col-xl-7 d-none d-lg-block">
                <img alt="" src="/assets/img/svg/hello.svg" class="img-fluid">
            </div>
            <!-- SVG shapes background -->
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <!-- Hero container -->
            <div class="container pt-lg pb-xl-md position-relative zindex-100">
                <div class="row">
                    <div class="col-lg-5 text-center text-lg-left">
                        <a href="#" class="alert alert-news" data-toggle="tooltip" data-original-title="In this unit, we'll explore functions in depth.">
                            <span class="badge badge-pill badge-info">New</span>
                            <span class="alert-content">Unit 3 is on the way!</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <div class="">
                            <h2 class="text-white my-4">
                                <span class="display-4 font-weight-light">Welcome to CSPY.</span>
                                <span class="d-block">An introductory computer science course.</span>
                            </h2>
                            <p class="lead text-white">This course will teach you the fundamental ideas of computer programming. It will also teach you how to apply what you’ve learned to solve real world problems using code. Our course is designed to deliver the content to you in a way that is easy to understand and allows for you to easily comprehend the content.</p>
                            <div class="mt-5">
                                <a href="{{ route('login') }}" class="btn btn-dark btn-circle btn-translate--hover btn-icon mr-sm-4 scroll-me">
                                    <span class="btn-inner--text">Login</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-outline-white btn-circle btn-translate--hover btn-icon d-none d-xl-inline-block scroll-me">
                                    <span class="btn-inner--text">Register</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice bg-gradient-secondary overflow-hidden" id="sct_features">
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <div class="container position-relative zindex-100">
                <div class="mb-md text-center">
                    <span class="badge badge-lg badge-success badge-pill">Platform tools and features</span>
                    <h3 class="mt-4">Full of <strong class="font-weight-700">awesomeness</strong></h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">
                            We use the latest technologies and tools in order to create a better learning experience that not only works great, but it is easy easy to work with too.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-green rounded-circle">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Created with the latest technologies</h5>
                                    </div>
                                </div>
                                <p class="mt-4">We use the latest technologies and tools in order to create a powerful web based classroom where you can learn how to code!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-orange rounded-circle">
                                        <i class="far fa-comments"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Community oriented learning</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Our course is supported by both teachers and students. We encourage you to reach out to the course community to chat and solve problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-teal rounded-circle">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Everyone is welcome!<br><br></h5>
                                    </div>
                                </div>
                                <p class="mt-4">We want everyone to be able to learn to code, so we made our course assume the student has no prior knowledge of how to code!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-red rounded-circle">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Free office hours and course help</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Office hours will be held on Google Meet, and we'll use this as a way to discuss what we're having a hard time with and to get extra help.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-purple rounded-circle">
                                        <i class="fab fa-creative-commons-remix"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Open sourced, free course!</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Our course totally free, and the teaching materials we use are totally free and open sourced as well. <br><br></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-pink rounded-circle">
                                        <i class="fas fa-magic"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Autograded challenges with feedback</h5>
                                    </div>
                                </div>
                                <p class="mt-4">It's important to have feedback when learning code, this helps you better understand what you're doing right, and what you're doing wrong.<br></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="slice slice-xl bg-gradient-primary has-floating-items" id="sct_call_to_action">
            <a href="#sct_call_to_action" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white strong-600">Course Objectives</h1>
                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-8">
                                <p class="lead text-white">
                                    We want you to learn the key fundamentals of programming so you can apply them to learn higher level languages such as Java or C#. You will learn to use code to solve real problems. We will learn things such as functions, classes and objects, file input and output, and many more interesting topics. As discussed above, we’ll have final projects to help enforce the skills we've learned and actually get you to apply them, and create something that is actually pretty cool, and useful.
                                </p>
                                <div class="btn-container mt-5">
                                    <a href="https://docs.google.com/document/d/1pMg04gNbXQQy9islPiR7XdTskhx7jNXtvvfpR32N9L0/edit?usp=sharing" class="btn btn-white btn-circle btn-translate--hover px-4 mr-lg-4" target="_blank">See the syllabus</a>
                                    <a href="{{ route('register') }}" class="btn btn-warning btn-circle btn-translate--hover px-4">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-dark shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="text-white h4">10 in-depth units</h3>
                                        <p class="text-white mb-0">We mapped out 10 different units that go really in depth with various computer science topics. Topics range from functions, to object-oriented programming, to data structures, and much more!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-secondary shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon text-primary">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h4">Send us feedback</h3>
                                        <p class="mb-0">We're working hard on CSPY, and we want to hear what you think about it. We are here to help and to take any feedback you have. Drop us a line anytime!<br><strong class="text-dark">hi@codegeek.org</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
