    function OnLoad() {
      // Create a search control
      var searchControl = new GSearchControl();

      // Add in a full set of searchers
      searchControl.addSearcher(new GwebSearch());

      // Tell the searcher to draw itself and tell it where to attach
      searchControl.draw(document.getElementById("searchcontrol"));

      // Execute an inital search
      searchControl.execute("site:www.showcaves.com");
    }

