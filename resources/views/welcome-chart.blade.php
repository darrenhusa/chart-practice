<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chart.js Practice</title>
  <style>
    ul.0-legend span {
      width: 10px;
      height: 10px;
      display: inline-block;
      margin-right: 10px;
      color: 'red';
      background-color: 'green';
    }
  </style>
</head>
<body>
  <h1>Chart.js with axios Practice</h1>
  <div id="root">
    {{-- <example-component></example-component> --}}
    <graph url="/api/revenue" color="green"></graph>

    {{-- <graph url="http://chart-practice.test/api/revenue"
          color="green"></graph> --}}

    {{-- <line-graph v-bind:labels="{{ $labels }}"
               v-bind:chartdata="{{ $chartdata }}"
               color="green"
    ></line-graph>
    {{-- <bar-graph v-bind:legend="['01', '02', '03']" --}}
               {{-- v-bind:chartdata="[100, 50, 25]"
    ></bar-graph> --}}

    {{-- <bar-graph></bar-graph> --}}
  </div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> --}}
  <script src="/js/app.js"></script>
</body>
</html>
