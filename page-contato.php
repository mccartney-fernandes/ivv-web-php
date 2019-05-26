<?php get_header(); ?>
<img class="img-fluid generate-template-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">

  <main>
    <?php 
        if(have_posts()):
          while(have_posts()): the_post(); 
      ?>
        <div class="container-fluid generate-template-container-fluid">
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="container-fluid contato-container">
        <div class="row">
          <div class="col-12 col-lg-6 map">
            <div class="col-lg-6 offset-lg-3 contato-form">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 map">
            <div id="map"></div>
            <div id="content" class="text-center">
             <?php echo get_theme_mod('set_map_address'); ?>
            </div>
          </div>
        </div>
      </div>
      <?php 
          endwhile; 
        else:
      ?>
        <p>nao ha postagem</p>
    <?php endif; ?> 


  </main>
  
  <?php 
  $key = get_theme_mod('set_map_apikey');
  $lat = get_theme_mod('set_map_lat');
  $lng = get_theme_mod('set_map_lng');

  ?>
<script>
  var lat = "<?php echo $lat; ?>";
  var lng = "<?php echo $lng; ?>";
  var map, popup, Popup;

/** Initializes the map and the custom popup. */
function initMap() {
  positioMap = {lat: parseFloat(lat), lng: parseFloat(lng)}
  map = new google.maps.Map(document.getElementById('map'), {
    center: positioMap,
    zoom: 17,
    mapTypeId: 'satellite'
  });

  Popup = createPopupClass();
  popup = new Popup(
      new google.maps.LatLng(positioMap.lat, positioMap.lng),
      document.getElementById('content'));
  popup.setMap(map);
}

/**
 * Returns the Popup class.
 *
 * Unfortunately, the Popup class can only be defined after
 * google.maps.OverlayView is defined, when the Maps API is loaded.
 * This function should be called by initMap.
 */
function createPopupClass() {
  /**
   * A customized popup on the map.
   * @param {!google.maps.LatLng} position
   * @param {!Element} content The bubble div.
   * @constructor
   * @extends {google.maps.OverlayView}
   */
  function Popup(position, content) {
    this.position = position;

    content.classList.add('popup-bubble');

    // This zero-height div is positioned at the bottom of the bubble.
    var bubbleAnchor = document.createElement('div');
    bubbleAnchor.classList.add('popup-bubble-anchor');
    bubbleAnchor.appendChild(content);

    // This zero-height div is positioned at the bottom of the tip.
    this.containerDiv = document.createElement('div');
    this.containerDiv.classList.add('popup-container');
    this.containerDiv.appendChild(bubbleAnchor);

    // Optionally stop clicks, etc., from bubbling up to the map.
    google.maps.OverlayView.preventMapHitsAndGesturesFrom(this.containerDiv);
  }
  // ES5 magic to extend google.maps.OverlayView.
  Popup.prototype = Object.create(google.maps.OverlayView.prototype);

  /** Called when the popup is added to the map. */
  Popup.prototype.onAdd = function() {
    this.getPanes().floatPane.appendChild(this.containerDiv);
  };

  /** Called when the popup is removed from the map. */
  Popup.prototype.onRemove = function() {
    if (this.containerDiv.parentElement) {
      this.containerDiv.parentElement.removeChild(this.containerDiv);
    }
  };

  /** Called each frame when the popup needs to draw itself. */
  Popup.prototype.draw = function() {
    var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);

    // Hide the popup when it is far out of view.
    var display =
        Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
        'block' :
        'none';

    if (display === 'block') {
      this.containerDiv.style.left = divPosition.x + 'px';
      this.containerDiv.style.top = divPosition.y + 'px';
    }
    if (this.containerDiv.style.display !== display) {
      this.containerDiv.style.display = display;
    }
  };

  return Popup;
}
</script>
    
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key; ?>&callback=initMap">
</script>

<?php get_footer(); ?>  
    
     
