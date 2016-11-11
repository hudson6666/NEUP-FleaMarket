@include('includes.head')
    <title>先锋市场</title>
</head>
<body>
@include('layout.header')
<div class="page-content">
    @foreach($informations as $information)
    {{$information->title}}<br/>
    {{$information->content}}<br/>
    {{$information->created_at}}<br/>
    {{$information->sender_id}}<br/>
    @endforeach
</div>
@include('layout.footer')
@include('includes.foot')