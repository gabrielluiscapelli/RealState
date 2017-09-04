<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
        </style>
    </head>
    <body>
        

        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/vue-resource.min.js') }}"></script>
        <script src="{{ asset('/js/axios.js') }}"></script>
        <div id="main" class="container">
            <div class="row">
                <div class="col-sm-4">
                   <h1>Lista</h1>
                   <ul class="list-group">
                      
                       <div class="list-group-item" v-for="item in list">
                            @{{item.title}}
                            <a href="@{{item.guid}}" title="">@{{item.link}}</a>
                        </div>
                       
                   </ul>
                    
                </div>
                <div class="col-sm-8">
                   <h1>json</h1>
                   <pre>
                       @{{$data | json}}
                   </pre>
                    
                </div>
            </div>
          
        </div>
      
        <script>

            var urlUsers = 'https://randomuser.me/api/?results=10';
            //var urlUsers = 'https://api.rss2json.com/v1/api.json?rss_url=http%3A%2F%2Fwww.20minutos.es%2Frss%2F';
            new Vue({
             
            });
            new Vue({
              el: '#main',
              created: function () {
                  this.getUsers();
              },
              data: {
                list: [],
              },
              methods: {
                getUsers: function () {

                    /* con vue-resourse
                    this.$http.get(urlUsers).then(function(response){

                        this.list = response;
                    });*/
                    axios.get(urlUsers).then(response => {
                      this.list = response.data;
                    });
                }
              }
              
            });
        </script>

    </body>
</html>
