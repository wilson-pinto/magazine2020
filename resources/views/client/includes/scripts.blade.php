<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script>
    $('#body-row .collapse').collapse('hide'); 
        
            $('[data-toggle=sidebar-colapse]').click(function() {
                SidebarCollapse();
            });
        
        function SidebarCollapse () {
            $('.menu-collapsed').toggleClass('d-none');
            $('.brand').toggleClass('brand-collapsed');
            $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
            // $('#sidebar-container').toggleClass('d-none d-block');
            
            var SeparatorTitle = $('.sidebar-separator-title');
            if ( SeparatorTitle.hasClass('d-flex') ) {
                SeparatorTitle.removeClass('d-flex');
            } else {
                SeparatorTitle.addClass('d-flex');
            }
            
        }
</script>

@yield('scripts')