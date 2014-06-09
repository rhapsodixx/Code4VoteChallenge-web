<!DOCTYPE html>
<html>
<head>
  <title>Code4Vote Challenge API Doc</title>
  <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>
  <link href='swagger/css/hightlight.default.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='swagger/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
  <script type="text/javascript" src="swagger/lib/shred.bundle.js" /></script>  
  <script src='swagger/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
  <script src='swagger/lib/jquery.slideto.min.js' type='text/javascript'></script>
  <script src='swagger/lib/jquery.wiggle.min.js' type='text/javascript'></script>
  <script src='swagger/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
  <script src='swagger/lib/handlebars-1.0.rc.1.js' type='text/javascript'></script>
  <script src='swagger/lib/underscore-min.js' type='text/javascript'></script>
  <script src='swagger/lib/backbone-min.js' type='text/javascript'></script>
  <script src='swagger/lib/swagger.js' type='text/javascript'></script>
  <script src='swagger/swagger-ui.js' type='text/javascript'></script>
  <script src='swagger/lib/highlight.7.3.pack.js' type='text/javascript'></script>
  <script src='swagger/lib/highlight.7.3.pack.js' type='text/javascript'></script>
  <script type="text/javascript">
    $(function () {
      window.swaggerUi = new SwaggerUi({
      url: "http://voter.panjigautama.com/swagger/api-docs",
      dom_id: "swagger-ui-container",
      supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
      onComplete: function(swaggerApi, swaggerUi){
        if(console) {
          console.log("Loaded SwaggerUI")
        }
        $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
      },
      onFailure: function(data) {
        if(console) {
          console.log("Unable to Load SwaggerUI");
          console.log(data);
        }
      },
      docExpansion: "none"
    });

    $('#input_apiKey').change(function() {
      var key = $('#input_apiKey')[0].value;
      console.log("key: " + key);
      if(key && key.trim() != "") {
        console.log("added key " + key);
        window.authorizations.add("key", new ApiKeyAuthorization("api_key", key, "query"));
      }
    })
    window.swaggerUi.load();
  });

  </script>
</head>

<body>
<div id='header'>
  <div class="swagger-ui-wrap">
    <a id="logo" href="http://swagger.wordnik.com">CodeForVote - API Documentation</a>

    <form id='api_selector'>
    </form>
  </div>
</div>

<div id="message-bar" class="swagger-ui-wrap">
  &nbsp;
</div>

<div id="swagger-ui-container" class="swagger-ui-wrap">

</div>

</body>

</html>
