<script src="jquery-1.11.1.min.js"></script>
<script src="handsontable.full.min.js"></script>
<link rel="stylesheet" media="screen" href="handsontable.full.min.css">
<link rel="stylesheet" media="screen" href="samples.css?20140331">

<style type="text/css">
body {background: white; margin: 20px;}
h2 {margin: 20px 0;}
.pagination {
  padding: 10px 0;
}
.pagination a {
  border: 1px solid grey;
  padding: 2px 5px;
}
</style>

<h2>Pagination</h2>

<div id="example1" class="handsontable"></div>

<div class="pagination">
  <a href="#1">1</a>
  <a href="#2">2</a>
  <a href="#3">3</a>
  <a href="#4">4</a>
  <a href="#5">5</a>
  <a href="#6">6</a>
  <a href="#7">7</a>
</div>

<p>
  <button name="dump" data-dump="#example1" data-instance="hot" title="Prints current data source to Firebug/Chrome Dev Tools">
    Dump
    data to console
  </button>
</p>


<script>
$(document).ready(function () {

  var getData = (function () {
    var data = [
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],
          [0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0]
      ];
  
    return function () {
      var page  = parseInt(window.location.hash.replace('#', ''), 10) || 1,
        limit = 5,
        row   = (page - 1) * limit,
        count = page * limit,
        part  = [];
  
      for (;row < count;row++) {
        part.push(data[row]);
      }
  
      return part;
    }
  })();
  
  var container = document.getElementById('example1'),
    hot;
  
  hot = new Handsontable(container, {
    data: getData(),
    colHeaders: true
  });
  
  Handsontable.Dom.addEvent(window, 'hashchange', function (event) {
    hot.loadData(getData());
  });
  
  function bindDumpButton() {
  
      Handsontable.Dom.addEvent(document.body, 'click', function (e) {
  
        var element = e.target || e.srcElement;
  
        if (element.nodeName == "BUTTON" && element.name == 'dump') {
          var name = element.getAttribute('data-dump');
          var instance = element.getAttribute('data-instance');
          var hott = window[instance];
          console.log('data of ' + name, hot.getData());
        }
      });
    }
  bindDumpButton();

});
</script>