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
            }
            .order {
                display: flex;
                width: 71rem;
                height: auto;
                border: 3px solid black;
                flex-wrap: wrap;
                margin-top: 2rem;
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
            .order-id {
                display: flex;
                margin-top: 0;
                padding: 0.5rem;
                width: 100%;
                height: 1rem;
                border: 1px solid black
            }
            .order-items {
                border: 1px solid black;
                height: auto;
                margin-top: 2rem;
                width: 100%;
            }
            .order-item-name {
                display: flex;
                border: 1px solid black;
                margin-top: 3.5rem;
                margin-left: 0;
                margin-bottom: 0;
                height: auto;

            }
            .order-item-count {
                display: flex;
                border: 1px solid black;
                margin-left: 0;
                margin-top: 0;
                margin-bottom: 0;
                height: auto;

            }
            .order-item-price {
                display: flex;
                border: 1px solid black;
                margin-left: 0;
                margin-top: 0;
                height: auto;

            }
            .order-total {
                display: flex;
                width: 100%;
                padding: 0.5rem;
                margin-left: 0;
                height: 1rem;
                border: 1px solid black
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
