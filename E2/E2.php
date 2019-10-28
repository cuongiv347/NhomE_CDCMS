<!DOCTYPE html>
<html lang="en">

<head>
    <title>Module E2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/E2.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' id='bistro-parent-style-css'
        href='css/style.css' />
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/scripts'></script>
    <script type='text/javascript' src='js/main.min.js'></script>
    <script type='text/javascript' src='js/map.js'></script>
    <script type='text/javascript' src='js/google-maps.min.js'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var WPGMZA_localized_data = {
        "adminurl": "https:\/\/demo.athemes.com\/bistro\/wp-admin\/",
        "ajaxurl": "https:\/\/demo.athemes.com\/bistro\/wp-admin\/admin-ajax.php",
        "ajaxnonce": "1dad7a9ac3",
        "html": {
            "googleMapsAPIErrorDialog": "<div>\r\n\r\n\t<h2>Maps API Error<\/h2>\r\n\t\r\n\t<div>\r\n\t\r\n\t\t<p>\r\n\t\t\tOne or more error(s) have occured attempting to initialize the Maps API:\t\t<\/p>\r\n\t\r\n\t\t<ul class=\"wpgmza-google-api-error-list\">\n<li class=\"template notice notice-error\">\r\n\t\t\t\t<span class=\"wpgmza-message\"><\/span>\r\n\t\t\t\t<span class=\"wpgmza-documentation-buttons\">\r\n\t\t\t\t\t<a target=\"_blank\">\r\n\t\t\t\t\t\t<i class=\"fa\" aria-hidden=\"true\"><\/i>\r\n\t\t\t\t\t<\/a>\r\n\t\t\t\t<\/span>\r\n\t\t\t<\/li>\r\n\t\t<\/ul>\n<\/div>\r\n\t\r\n\t<p>\r\n\t\tSee our documentation for solutions to common Google API issues:\t<\/p>\r\n\t\r\n\t<ul>\n<li>\r\n\t\t\t<a href=\"https:\/\/www.wpgmaps.com\/documentation\/you-have-exceeded-your-request-quota-for-this-api\/\">\r\n\t\t\t\t\u201cYou have exceeded your request quota for this API\u201d\t\t\t<\/a>\r\n\t\t<\/li>\r\n\t\t<li>\r\n\t\t\t<a href=\"https:\/\/www.wpgmaps.com\/documentation\/troubleshooting\/this-page-cant-load-google-maps-correctly\/\">\r\n\t\t\t\t\u201cThis page can\u2019t load Google Maps correctly\u201d\t\t\t<\/a>\r\n\t\t<\/li>\r\n\t\t<li>\r\n\t\t\t<a href=\"https:\/\/www.wpgmaps.com\/documentation\/troubleshooting\/this-api-project-is-not-authorized-to-use-this-api\/\">\r\n\t\t\t\t\u201cThis API project is not authorized to use this API\u201d\t\t\t<\/a>\r\n\t\t<\/li>\r\n\t\t<li>\r\n\t\t\t<a href=\"https:\/\/www.wpgmaps.com\/documentation\/troubleshooting\/api-not-activated-map-error\/\">\r\n\t\t\t\t\u201cAPI Not Activated Map Error\u201d\t\t\t<\/a>\r\n\t\t<\/li>\r\n\t<\/ul>\n<p>\r\n\t\tPlease see the <a href=\"https:\/\/www.wpgmaps.com\/documentation\/creating-a-google-maps-api-key\/\">WP Google Maps Documentation<\/a> for a step by step guide on setting up your Google Maps API key.\t<\/p>\r\n\t\r\n\t<p>\r\n\t\tPlease open your Developer Tools (F12 for most browsers) and see your JavaScript console for the full error message.\t<\/p>\r\n\t\r\n\t<p class=\"wpgmza-front-end-only\">\r\n\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"><\/i>\r\n\t\tThis dialog is only visible to administrators\t<\/p>\r\n\t\r\n\t<!--<button data-remodal-action=\"confirm\" class=\"remodal-confirm\">\r\n\t\tDismiss\t<\/button>-->\r\n\r\n<\/div>"
        },
        "resturl": "https:\/\/demo.athemes.com\/bistro\/wp-json\/wpgmza\/v1",
        "restnonce": "c8acd107b9",
        "settings": {
            "wpgmza_settings_marker_pull": "0",
            "wpgmza_google_maps_api_key": false
        },
        "currentPage": null,
        "userCanAdministrator": "0",
        "serverCanInflate": "1",
        "localized_strings": {
            "unsecure_geolocation": "Many browsers are no longer allowing geolocation from unsecured origins. You will need to secure your site with an SSL certificate (HTTPS) or this feature may not work for your visitors",
            "use_my_location": "Use my location",
            "google_api_not_loaded": "The map cannot be initialized because the Maps API has not been loaded. Please check your settings.",
            "no_google_maps_api_key": "You have not entered a Google Maps API Key. Please see our documentation on obtaining an API key.",
            "documentation": "Documentation",
            "api_dashboard": "API Dashboard",
            "verify_project": "Verify Project",
            "failed_to_get_address": "Failed to get address",
            "failed_to_create_marker": "Failed to create marker %d - this marker cannot be placed on the map.",
            "my_location": "My Location",
            "kilometers_away": "km away",
            "miles_away": "miles away",
            "import_completed": "Import completed.",
            "importing_please_wait": "Importing, this may take a moment...",
            "no_address_specified": "No address specified",
            "add_marker": "Add Marker",
            "save_marker": "Save Marker",
            "please_wait": "Please Wait...",
            "zero_results": "Zero results found",
            "geocode_fail": "Geocode failed due to technical reasons",
            "you_must_check_gdpr_consent": "You must check the GDPR consent box to continue"
        },
        "api_consent_html": "<div class=\"wpgmza-gdpr-compliance\"><p>\r\n\tI agree for my personal data to be processed by <span name=\"wpgmza_gdpr_company_name\">Bistro<\/span>, for the purpose(s) of <span name=\"wpgmza_gdpr_retention_purpose\">displaying map tiles, geocoding addresses and calculating and display directions.<\/span>.\r\n<\/p>\r\n\r\n<p>\t\r\n\tI agree for my personal data, provided via map API calls, to be processed by the API provider, for the purposes of geocoding (converting addresses to coordinates), reverse geocoding and\tgenerating directions.\r\n<\/p>\r\n<p>\r\n\tSome visual components of WP Google Maps use 3rd party libraries which are loaded over the network. At present the libraries are Google Maps, Open Street Map, jQuery DataTables and FontAwesome. When loading resources over a network, the 3rd party server will receive your IP address and User Agent string amongst other details. Please refer to the Privacy Policy of the respective libraries for details on how they use data and the process to exercise your rights under the GDPR regulations.\r\n<\/p>\r\n<p>\r\n\tWP Google Maps uses jQuery DataTables to display sortable, searchable tables, such as that seen in the Advanced Marker Listing and on the Map Edit Page. jQuery DataTables in certain circumstances uses a cookie to save and later recall the \"state\" of a given table - that is, the search term, sort column and order and current page. This data is held in local storage and retained until this is cleared manually. No libraries used by WP Google Maps transmit this information.\r\n<\/p>\r\n<p>\r\n\tPlease <a href=\"https:\/\/developers.google.com\/maps\/terms\">see here<\/a> and <a href=\"https:\/\/maps.google.com\/help\/terms_maps.html\">here<\/a> for Google's terms. Please also see <a href=\"https:\/\/policies.google.com\/privacy?hl=en-GB&gl=uk\">Google's Privacy Policy<\/a>. We do not send the API provider any personally identifying information, or information that could uniquely identify your device.\r\n<\/p>\r\n<p>\r\n\tWhere this notice is displayed in place of a map, agreeing to this notice will store a cookie recording your agreement so you are not prompted again.\r\n<\/p><p class='wpgmza-centered'><button class='wpgmza-api-consent'>I agree<\/button><\/div><\/p>",
        "basic_version": "7.11.39",
        "_isProVersion": "",
        "defaultMarkerIcon": "\/\/maps.gstatic.com\/mapfiles\/api-3\/images\/spotlight-poi2.png",
        "is_admin": "0",
        "locale": "en_US"
    };
    /* ]]> */
     

    
    /* <![CDATA[ */
    var wpgmza_circle_data_array = [];
    var wpgmza_rectangle_data_array = [];
    var wpgmaps_mapid = {
        "wpgmza_legacy_current_map_id": "1"
    };
    var wpgmaps_localize = {
        "1": {
            "id": "1",
            "map_title": "My first map",
            "map_width": "100",
            "map_height": "200",
            "map_start_lat": "51.500493",
            "map_start_lng": "-0.124260",
            "map_start_location": "51.50049307502388,-0.12425963038688259",
            "map_start_zoom": "16",
            "default_marker": "0",
            "type": "1",
            "alignment": "1",
            "directions_enabled": "1",
            "styling_enabled": "0",
            "styling_json": "",
            "active": "0",
            "kml": "",
            "bicycle": "2",
            "traffic": "2",
            "dbox": "1",
            "dbox_width": "250",
            "listmarkers": "0",
            "listmarkers_advanced": "0",
            "filterbycat": "0",
            "ugm_enabled": "0",
            "ugm_category_enabled": "0",
            "fusion": "",
            "map_width_type": "%",
            "map_height_type": "px",
            "mass_marker_support": "1",
            "ugm_access": "0",
            "order_markers_by": "1",
            "order_markers_choice": "2",
            "show_user_location": "0",
            "default_to": "",
            "other_settings": {
                "store_locator_enabled": 2,
                "store_locator_distance": 2,
                "store_locator_bounce": 1,
                "store_locator_query_string": "ZIP \/ Address:",
                "wpgmza_store_locator_restrict": "",
                "map_max_zoom": "3",
                "weather_layer": 2,
                "weather_layer_temp_type": 1,
                "cloud_layer": 2,
                "transport_layer": 2
            }
        }
    };
    var wpgmaps_localize_polygon_settings = [];
    var wpgmaps_localize_polyline_settings = [];
    var wpgmaps_markerurl =
        "\/\/demo.athemes.com\/bistro\/wp-content\/uploads\/sites\/38\/wp-google-maps\/38-1markers.xml";
    var wpgmaps_localize_marker_data = {
        "2": {
            "map_id": "1",
            "marker_id": "2",
            "title": "",
            "address": "Big Ben, london",
            "desc": "",
            "pic": "",
            "icon": "",
            "linkd": "",
            "lat": "51.5007292",
            "lng": "-0.1246254",
            "anim": "0",
            "retina": "0",
            "category": "",
            "infoopen": "0",
            "other_data": ""
        }
    };
    var wpgmaps_localize_global_settings = {
        "wpgmza_settings_marker_pull": "0",
        "wpgmza_google_maps_api_key": ""
    };
    var wpgmaps_lang_km_away = "km away";
    var wpgmaps_lang_m_away = "miles away";
    /* ]]> */
    </script>
    <script src="js/wpgmaps.js"></script>

<body>
    

    <?php include '../E2/E2-content.php'; ?>
    </body>
</html>