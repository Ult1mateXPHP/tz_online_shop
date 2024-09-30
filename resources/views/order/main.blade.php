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
                height: 6rem;
                border: 1px solid black
            }
            .item-price {
                display: flex;
                position: absolute;
                width: 54.9rem;
                margin-top: 7rem;
                padding: 0.5rem;
                margin-left: 15.1rem;
                height: 5rem;
                border: 1px solid black
            }
            .item-add {
                display: flex;
                position: absolute;
                width: 54.9rem;
                margin-top: 13rem;
                padding: 0.5rem;
                margin-left: 15.1rem;
                height: 2rem;
                border: 1px solid black;
                background-color: grey;
            }
        </style>
    </head>
    <body>
    @include('order.partials.navbar')
    @include('order.partials.side')
    <div class="main">
        <h3>Каталог</h3>
    <div class="items">
        @include('order.partials.item')
    </div>
    </div>
    </body>
    <hr>
    <footer>
        @include('order.partials.footer')
    </footer>
</html>
