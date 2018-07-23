var galleryFeed = new Instafeed({
  get: "user",
  userId: '6551585062',
  clientId: '6551585062.M2E4MWE5Zg==.NmQ3ZmZiNTA0NTY3.NDgxYWE4NGZjNWZjYjQ3YjFiODM=',
  accessToken: "6551585062.1677ed0.dd461663554d40328843863f25dd414e",
  resolution: 'standard_resolution',
  useHttp: 'true',
  limit: '12',
  template:

  '<div class="art-main-div-instafeed">'+

    '<a href="{{link}}" target="_blank" id="{{id}}"><div class="art-main-div-image">'+
    
      '<img src="{{image}}"/>'+

    '</div>'+

    '<div class="art-overlay-instafeed-content">'+

      '<span class="art-insta-likes">'+

      '<svg class="art-svg-icon art-heart" viewBox="0 0 32 29.6">'+

      '<path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2'+
      'c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z" />'+

      '</svg>'+
      
      '{{likes}}'+
      
      
      '</span>'+ 


      '<span class="art-insta-comments">'+

      '<svg class="art-svg-icon art-coments" viewBox="0 0 24 24">'+

      '<path d="M12 3c5.514 0 10 3.592 10 8.007 0 4.917-5.145 7.961-9.91 7.961-1.937 0-3.383-.397-4.394-.644-1 .613-1.595 1.037-4.272 1.82.535-1.373.723-2.748.602-4.265-.838-1-2.025-2.4-2.025-4.872-.001-4.415 4.485-8.007 9.999-8.007zm0-2c-6.338 0-12 4.226-12 10.007 0 2.05.738 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 1.418.345 2.775.503 4.059.503 7.084 0 11.91-4.837 11.91-9.961-.001-5.811-5.702-10.006-12.001-10.006zm0 14h-5v-1h5v1zm5-3h-10v-1h10v1zm0-3h-10v-1h10v1z"/>'+
      
      '</svg>'+
      
      '{{comments}}'+
      
      '</span>'+
    
    '</div></a>'+

  '</div>',

  sortBy: 'most-recent',
  target: "instafeed-gallery-feed",
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      document.getElementById('art-btn-instafeed-load').style.visibility = 'hidden';
    } else {
      document.getElementById('togglee').style.visibility = 'visible';
    }
  },
});
galleryFeed.run();

var btnInstafeedLoad = document.getElementById("art-btn-instafeed-load");
btnInstafeedLoad.addEventListener("click", function() {
  galleryFeed.next()
});