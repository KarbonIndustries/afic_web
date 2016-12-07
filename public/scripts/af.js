(function(window)
{
  var AF                  = window.AF || {};

  $(function()
  {
    if(typeof vex != 'undefined')
    {
      AF.modal_theme               = 'vex-theme-default';
      AF.modal_display_cookie      = 'disable_holiday_modal_2017';
      $holiday_activity_btn        = $('.activity','#modal_content').find('.cta');
      vex.defaultOptions.className = AF.modal_theme;

      // hide modal once cta is clicked
      $holiday_activity_btn.click(function(event)
      {
        Cookies.set(AF.modal_display_cookie,true);
      });

      // show modal if modal cookie is not set
      if(!Cookies.getJSON(AF.modal_display_cookie))
      {
        vex.open(
        {
          overlayClosesOnClick:false
          ,contentCSS:
          {
            width:'800px'
          }
          ,closeClassName:'modal_close'
          ,content:$('#modal_content')
          ,afterClose:function()
          {
            Cookies.set(AF.modal_display_cookie,true);
          }
        });
      }
    }
  });

  window.AF = AF;
}(window));
