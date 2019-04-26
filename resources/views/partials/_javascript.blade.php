<script type="text/javascript" src="{{ URL::to('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/tether/dist/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ URL::to('bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ URL::to('bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
<!-- classie js -->
<script type="text/javascript" src="{{ URL::to('bower_components/classie/classie.js')}}"></script>
@yield('scripts')

<!-- pnotify js -->
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.desktop.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.buttons.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.confirm.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.callbacks.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.animate.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.history.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.mobile.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/pnotify/dist/pnotify.nonblock.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('assets/pages/pnotify/notify.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ URL::to('bower_components/i18next/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/i18next-browser-langua')}}gedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ URL::to('bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ URL::to('assets/js/script.js')}}"></script>
<script src="{{ URL::to('assets/js/pcoded.min.js')}}"></script>
<script src="{{ URL::to('assets/js/demo-12.js')}}"></script>
<script src="{{ URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ URL::to('assets/js/jquery.mousewheel.min.js')}}"></script>


<script type="text/javascript">
    @if(Session::has('success'))
    	new PNotify({
            title: 'Success notice',
            text: '{{ Session::get("success") }}',
            icon: 'icofont icofont-info-circle',
            type: 'success'
        });
    @endif
</script>

<script type="text/javascript">
    @if(Session::has('info'))
    	new PNotify({
            title: 'Info notice',
            text: '{{ Session::get("info") }}',
            icon: 'icofont icofont-info-circle',
            type: 'info'
        });
    @endif
</script>

 <script type="text/javascript">
    @if(Session::has('danger'))
    	new PNotify({
            title: 'Danger notice',
            text: '{{ Session::get("danger") }}',
            icon: 'icofont icofont-info-circle',
            type: 'error'
        });
    @endif
</script>