<!DOCTYPE html>
<html>
<head>
    <title>Laravel Menu Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/css/treeview.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-md-6">
        <ul>
            @foreach($categories as $category)
                <li>
                    {{ $category->menu_name }}
                        @include('menu.child_menu',['childs' => $category->childs])

                </li>
            @endforeach
        </ul>
    </div>
</div>