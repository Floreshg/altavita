var loginClient = new JSONRpcClient({
  'url': '//user-api.simplybook.me/login',
  'onerror': function (error) {
    alert(error);
  }
});

var token = loginClient.getToken('georgespa', '62878b876ebfca5563922cbb629b063942334ef8529aa83be1daa4d4fd27282f');
var loginClient = new JSONRpcClient({
  'url': '//user-api.simplybook.me/login',
  'onerror': function (error) {
    alert(error);
  }
});

var token = loginClient.getToken('georgespa', '62878b876ebfca5563922cbb629b063942334ef8529aa83be1daa4d4fd27282f');

var client = new JSONRpcClient({
  'url': 'https://user-api.simplybook.me/',
  'headers': {
    'X-Company-Login': 'georgespa',
    'X-Token': token
  },
  'onerror': function (error) {
    alert(error);
  }
});

var services = client.getEventList();
var performers = client.getUnitList();
var serviceId;
var performerId;
jQuery('#select_event_id').empty();
jQuery('#select_unit_id').empty();
jQuery('#select_event_id').append('<option value=""></option>');
jQuery('#select_unit_id').append('<option value=""></option>');
for (var id in services) {
  jQuery('#select_event_id').append('<option value="' + id + '">' +
                                    services[id].name + '</option>');
}
for (var id in performers) {
  jQuery('#select_unit_id').append('<option value="' + id + '">' +
                                   performers[id].name + '</option>');
}
jQuery('#select_event_id').change(function () {

  // service id
  serviceId = jQuery(this).val();
  var selectedService = services[serviceId];
  // filter available performers
  if (selectedService) {
    if (typeof(selectedService.unit_map) != 'undefined' &&
        selectedService.unit_map.length) {
      jQuery('#select_unit_id option').attr('disabled', true);
      jQuery('#select_unit_id option[value=""]').attr('disabled', false);
      for (var i = 0; i < selectedService.unit_map.length; i++) {
        jQuery('#select_unit_id option[value="' +
               selectedService.unit_map[i] + '"]').attr('disabled', false);
      }
    } else {
      jQuery('#select_unit_id option').attr('disabled', false);
    }
  }
  jQuery('#eventId').val(serviceId).change();
});
jQuery('#select_unit_id').change(function () {
  performerId = jQuery(this).val();
});