L.TileLayer.BetterWMS = L.TileLayer.WMS.extend({
  
  onAdd: function (map) {
    // Triggered when the layer is added to a map.
    //   Register a click listener, then do all the upstream WMS things
    L.TileLayer.WMS.prototype.onAdd.call(this, map);
    map.on('click', this.getFeatureInfo, this);
  },
  
  onRemove: function (map) {
    // Triggered when the layer is removed from a map.
    //   Unregister a click listener, then do all the upstream WMS things
    L.TileLayer.WMS.prototype.onRemove.call(this, map);
    map.off('click', this.getFeatureInfo, this);
  },
  
  getFeatureInfo: function (evt) {
    // Make an AJAX request to the server and hope for the best
    var url = this.getFeatureInfoUrl(evt.latlng),
        showResults = L.Util.bind(this.showGetFeatureInfo, this);
    $.ajax({
      url: url,
      success: function (data, status, xhr) {
        var err = typeof data === 'string' ? null : data;
        showResults(err, evt.latlng, data);
      },
      error: function (xhr, status, error) {
        showResults(error);
      }
    });
  },
  
  getFeatureInfoUrl: function (latlng) {
    // Construct a GetFeatureInfo request URL given a point
    var point = this._map.latLngToContainerPoint(latlng, this._map.getZoom()),
        size = this._map.getSize(),
        
        params = {
          request: 'GetFeatureInfo',
          service: 'WMS',
          srs: 'EPSG:4326',
          styles: this.wmsParams.styles,
          transparent: this.wmsParams.transparent,
          version: this.wmsParams.version,      
          format: this.wmsParams.format,
          bbox: this._map.getBounds().toBBoxString(),
          height: size.y,
          width: size.x,
          layers: this.wmsParams.layers,
          query_layers: this.wmsParams.layers,
          info_format: 'text/javascript'
        };
    
    params[params.version === '1.3.0' ? 'i' : 'x'] = point.x;
    params[params.version === '1.3.0' ? 'j' : 'y'] = point.y;
    
    return this._url + L.Util.getParamString(params, this._url, true);
  },
  
  showGetFeatureInfo: function (err, latlng, content) {
    if (err) { console.log(err); return; } // do nothing if there's an error
    
    // Otherwise show the content in a popup, or something.
    /*L.popup({ maxWidth: 800,
		closeOnClick: false,
		keepInView: true})
      .setLatLng(latlng)
      .setContent(content)
      .openOn(this._map);*/
	  function getSafe(fn, defaultVal) {
		  try {
			  return fn();
		  } catch (e) {
			  return defaultVal;
		  }
	  }

	  var cleara = content.replace('parseResponse(','');
	  var clearb = cleara.slice(0, -1);

	  var obj = JSON.parse(clearb);
	  var id = getSafe(() => obj.features[0].id, 'nothing');
	  if (id !== 'nothing') {
		  var tableid = id;
		  var table = tableid.split('.')[0];
		  var id = tableid.split('.')[1];

		  /*var table_alias = '<html> <head> <title>GeoServer GetFeatureInfo output</title> </head> <style> table.featureInfo, table.featureInfo td, table.featureInfo th { border:1px solid #ddd; border-collapse:collapse; margin:0; padding:0; font-size: 90%; padding:.2em .1em; } table.featureInfo th{ padding:.2em .2em; text-transform:uppercase; font-weight:bold; background:#eee; } table.featureInfo td{ background:#fff; } table.featureInfo tr.odd td{ background:#eee; } table.featureInfo caption{ text-align:left; font-size:100%; font-weight:bold; text-transform:uppercase; padding:.2em .2em; } </style> <body>' +
			  '<table class="table table-bordered"><tbody><tr><th>' + table + '</th><td>' + id + '</td></tr></tbody></table>' +
			  '</body></html>';
		  document.getElementById('div-feature').innerHTML = table_alias;*/

		  $(function () {
			  $.get('https://wargi.jabarprov.go.id/peta/alias',
				  {layer:table,fid:id},
				  function (html) {
					  $("#div-feature").html(html);
				  }
			  );
		  });
	  } else {
		  var html = '<html> <head> <title></title> </head> <body></body> </html>';
		  document.getElementById('div-feature').innerHTML = html;
	  }
  }
});


L.tileLayer.betterWms = function (url, options) {
  return new L.TileLayer.BetterWMS(url, options);  
};
