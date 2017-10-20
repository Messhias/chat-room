<html>
<head>
<meta charset='UTF-8'>
<meta name='csrf-token' content="{{csrf_token()}}">
<title>Document</title>
<link rel='stylesheet' href="{{ asset('css/app.css') }}">
<style>
  .list-group{
    overflow-y:scroll;
    height:200px;
  }
</style>
</head>
<body>
<div class="container">
  <div class="row" id='app'>
    <div class='col-lg-offset-4 col-lg-4'>
      <li class="list-group-item active">Chat room</li>
      <ul class="list-group  ">
        <message
          v-for='value in chat.message'
        >
          @{{ value }}
        </message>
      </ul>
        <input class="form-control" name='message' v-model='message' 
          type="text" placeholder="Type your message here" @keyup.enter='send'>
    </div>
  </div>
</div><script src='{{ asset('js/app.js') }}'></script>
</body>
</html>