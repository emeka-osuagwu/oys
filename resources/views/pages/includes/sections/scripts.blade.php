
  <script src="{{URL::asset('global/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/animsition/animsition.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{URL::asset('global/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/intro-js/intro.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/screenfull/screenfull.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>

  <!-- Plugins For This Page -->
  <script src="{{URL::asset('global/vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{URL::asset('global/js/core.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/site.min.js')}}"></script>

  <script src="{{URL::asset('assets/js/sections/menu.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/sections/menubar.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/sections/sidebar.min.js')}}"></script>

  <script src="{{URL::asset('global/js/configs/config-colors.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/configs/config-tour.min.js')}}"></script>

  <script src="{{URL::asset('global/js/components/asscrollable.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/animsition.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/slidepanel.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/switchery.min.js')}}"></script>

  <script src="{{URL::asset('global/js/components/matchheight.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/aspieprogress.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/bootstrap-datepicker.min.js')}}"></script>


  <script src="{{URL::asset('assets/examples/js/dashboard/team.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/bootstrap-select.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/formvalidation/formValidation.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/formvalidation/framework/bootstrap.min.js')}}"></script>

  <script src="{{URL::asset('assets/examples/js/forms/validation.min.js')}}"></script>

  <script src="{{URL::asset('assets/examples/js/forms/advanced.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('global/js/jquery.number.min.js') }}"></script>
  <script type="text/javascript">
  $(document).ready(function($) {
    $('.formatt').number( true, 2 );
  });
  </script>

<script type="text/javascript">
  
$('.link_to_member').click(function () 
{
    var params = $(this).attr('link');

    window.location = "property/" + params
})

</script>