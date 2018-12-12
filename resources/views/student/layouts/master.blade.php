<!doctype html>
<html lang="en">
<head>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6185605131625070",
            enable_page_level_ads: true
        });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/dashboard/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/dashboard/assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="/dashboard/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
        var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'light';
    </script>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/@pusher/chatkit-client@1/dist/web/chatkit.js"></script>

    <script>

        function send(){

        }

        const tokenProvider = new Chatkit.TokenProvider({
            url: "https://us1.pusherplatform.io/services/chatkit_token_provider/v1/5904d1c7-f33d-48b1-a5c5-d80a3f2ede36/token"
        });

        const chatManager = new Chatkit.ChatManager({
            instanceLocator: "v1:us1:5904d1c7-f33d-48b1-a5c5-d80a3f2ede36",
            userId: '{{ Auth::user()->email }}',
            tokenProvider: tokenProvider
        });

        chatManager
            .connect()
            .then(currentUser => {
                currentUser.subscribeToRoom({
                    roomId: "19392120",
                    hooks: {
                        onMessage: message => {

                            $("#messages").append("<div class=\"comment mb-3\">\n" +
                                "                  <div class=\"row\">\n" +
                                "                    <div class=\"col ml--2\">\n" +
                                "                      \n" +
                                "                      <!-- Body -->\n" +
                                "                      <div class=\"comment-body\">\n" +
                                "\n" +
                                "                        <div class=\"row\">\n" +
                                "                          <div class=\"col\">\n" +
                                "\n" +
                                "                            <!-- Title -->\n" +
                                "                            <h5 class=\"comment-title\">\n" +
                                "                              "+ message.senderId +"\n" +
                                "                            </h5>\n" +
                                "\n" +
                                "                          </div>\n" +
                                "                          <div class=\"col-auto\">\n" +
                                "\n" +
                                "                            <!-- Time -->\n" +
                                "                            <time class=\"comment-time\">\n" +
                                "                              11:12\n" +
                                "                            </time>\n" +
                                "\n" +
                                "                          </div>\n" +
                                "                        </div> <!-- / .row -->\n" +
                                "\n" +
                                "                        <!-- Text -->\n" +
                                "                        <p class=\"comment-text\">\n" +
                                "                          "+ message.text +"\n" +
                                "                        </p>\n" +
                                "\n" +
                                "                      </div>\n" +
                                "\n" +
                                "                    </div>\n" +
                                "                  </div> <!-- / .row -->\n" +
                                "                </div>");

                        }
                    }
                });

                const form = document.getElementById("message-form");
                form.addEventListener("submit", e => {
                    e.preventDefault();
                    const input = document.getElementById("newMessage");
                    currentUser.sendMessage({
                        text: input.value,
                        roomId: currentUser.rooms[0].id
                    });
                    input.value = "";
                });
            })
            .catch(error => {
                console.error("error:", error);
            });

    </script>


    <title>@yield('title')</title>
</head>
<body>

<!-- NAVIGATION
================================================== -->

@include('student.layouts.nav')


<!-- MAIN CONTENT
================================================== -->

@yield('content')


<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard/assets/libs/chart.js/dist/Chart.min.js"></script>
<script src="/dashboard/assets/libs/chart.js/Chart.extension.min.js"></script>
<script src="/dashboard/assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="/dashboard/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="/dashboard/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="/dashboard/assets/libs/list.js/dist/list.min.js"></script>
<script src="/dashboard/assets/libs/quill/dist/quill.min.js"></script>
<script src="/dashboard/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="/dashboard/assets/libs/select2/dist/js/select2.min.js"></script>

<!-- Theme JS -->
<script src="/dashboard/assets/js/theme.min.js"></script>

<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/ace-builds/src-noconflict/ext-language_tools.js"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/python");
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
</script>

</body>
</html>
