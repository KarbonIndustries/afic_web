(function(window)
{
  var AF                  = window.AF || {};

  $(function()
  {
    if(vex)
    {
      AF.modal_theme               = 'vex-theme-default';
      AF.modal_display_cookie      = 'disable_winter_modal';
      $holiday_activity_btn        = $('.activity','#modal_content').find('.cta');
      vex.defaultOptions.className = AF.modal_theme;

      $holiday_activity_btn.click(function(event)
      {
        Cookies.set(AF.modal_display_cookie,true);
      });

      if(!Cookies.getJSON(AF.modal_display_cookie))
      {
        vex.open(
        {
          overlayClosesOnClick:false
          ,contentCSS:
          {
            width:'800px'
          }
          ,closeClassName:'winter_modal_close'
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
