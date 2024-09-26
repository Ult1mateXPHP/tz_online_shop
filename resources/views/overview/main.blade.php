<html>
    <head>
        <title>{{ $page_name }}</title>
        <style>
            body {
                background-color: grey;
            }
            a {
                margin-left: 0.3rem;
                text-decoration: none;
                color: black;
            }
            nav {
                border: 1px solid black;
                display: flex;
                background-color: #505050;
                height: 1.5rem;
            }
            .items {
                border: 1px solid black;
            }
            .item {
                display: flex;
                width: 71rem;
                height: 15rem;
                border: 1px solid black;
            }
            .side {
                display: flex;
                position: absolute;
                width: 8.75rem;
                flex-wrap: wrap;
                height: 100%;
                background-color: #505050;
            }
            .side-item {
                display: flex;
                width: 100%;
                margin-top: 0;
                margin-left: 0;
                padding: 1rem;
                font-size: 1rem;
                height: 0;
            }
            .main {
                margin-left: 9rem;
                background-color: #808080;
            }
            footer {
                margin-left: 9rem;
                background-color: #808080;
            }
            .item-img {
                display: flex;
                position: absolute;
                width: 15rem;
                height: 15rem;
                margin-top: 0;
                border: 1px solid black
            }
            .item-name {
                display: flex;
                position: absolute;
                margin-top: 0;
                margin-left: 15.1rem;
                padding: 0.5rem;
                width: 54.9rem;
                height: 7rem;
                border: 1px solid black
            }
            .item-price {
                display: flex;
                position: absolute;
                width: 54.9rem;
                margin-top: 8rem;
                padding: 0.5rem;
                margin-left: 15.1rem;
                height: 6rem;
                border: 1px solid black
            }
        </style>
    </head>
    <body>
    @include('overview.partials.navbar')
    @include('overview.partials.side')
    <div class="main">
        <h3>Каталог</h3>
    <div class="items">
        @include('overview.partials.item')
    </div>
    </div>
    </body>
    <hr>
    <footer>
        @include('overview.partials.footer')
    </footer>
</html>
