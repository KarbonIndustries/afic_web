(function(window)
{
  $(function()
  {
    var AF        = window.AF || {}
        ,$content = $('main')
        ,page_id  = $content.data('page-id')
        ;


    AF.camp = function()
    {
      var $toggle_list                               = $('.camp__toggle-list', $content)
          ,$toggle_list_item_set                     = $('.camp__toggle-list-item', $toggle_list)
          ,selected_toggle_list_item_class           = 'camp__toggle-list-item--selected'
          ,$initial_selected_toggle_list_item        = $('[class~="' + selected_toggle_list_item_class + '"]', $toggle_list)
          ,initial_selected_toggle_list_item_camp_id = $initial_selected_toggle_list_item.data('camp-id')
          ,selected_camp_section_class               = 'camp--selected'
          ,$camp_section_container                   = $('.camp__section-container', $content)
          ,$camp_section_set                         = $('section.camp', $camp_section_container)
          ;

      var select_toggle_list_item = function(camp_id)
      {
        var $toggle_list_item = $('[data-camp-id="' + camp_id + '"]', $toggle_list);

        $toggle_list_item_set.removeClass(selected_toggle_list_item_class);
        $toggle_list_item.addClass(selected_toggle_list_item_class);
      };

      var select_camp_section = function(camp_id)
      {
        var $camp_section = $('[data-camp-id="' + camp_id + '"]', $camp_section_container);

        $camp_section_set.removeClass(selected_camp_section_class);
        $camp_section.addClass(selected_camp_section_class);
      };

      $toggle_list_item_set.click(function()
      {
        var $toggle_list_item = $(this)
            ,camp_id = $toggle_list_item.data('camp-id')
            ;

        select_toggle_list_item(camp_id);
        select_camp_section(camp_id);
      });

      select_camp_section(initial_selected_toggle_list_item_camp_id);
    };

    if(AF[page_id]) {
      AF[page_id]();
    }

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
            width:'640px'
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

    window.AF = AF;
  });
}(window));
