@yield('scripts')
<script src="{{ asset('js/review.js') }}"></script>
<script>
    function showSnackBar(messege) {
        var snackBar = $('#snackbar');
        snackBar.addClass('show');
        snackBar.text(messege);
        setTimeout(function(){ 
            snackBar.removeClass('show'); 
        }, 3000);
    }
</script>
@if (Session::has('message'))
<script>
    showSnackBar("{{Session::get('message')}}");
</script>
@endif